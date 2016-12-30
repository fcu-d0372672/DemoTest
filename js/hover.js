/*
 * jQuery HoverPulse Plugin by M. Alsup
 * Examples and docs at: http://malsup.com/jquery/hoverpulse/
 * Dual licensed under the MIT and GPL
 * Requires: jQuery v1.2.6 or later
 * @version: 1.01  26-FEB-2009
 */
/*! fly - v1.0.0 - 2015-03-23
 * https://github.com/amibug/fly
 * Copyright (c) 2015 wuyuedong; Licensed MIT */
! function(a) {
    a.fly = function(b, c) {
        var d = {
                version: "1.0.0",
                autoPlay: !0,
                vertex_Rtop: 20,
                speed: 1.2,
                start: {},
                end: {},
                onEnd: a.noop
            },
            e = this,
            f = a(b);
        e.init = function(a) {
            this.setOptions(a), !!this.settings.autoPlay && this.play()
        }, e.setOptions = function(b) {
            this.settings = a.extend(!0, {}, d, b);
            var c = this.settings,
                e = c.start,
                g = c.end;
            f.css({
                marginTop: "0px",
                marginLeft: "0px",
                position: "fixed"
            }).appendTo("body"), null != g.width && null != g.height && a.extend(!0, e, {
                width: f.width(),
                height: f.height()
            });
            var h = Math.min(e.top, g.top) - Math.abs(e.left - g.left) / 3;
            h < c.vertex_Rtop && (h = Math.min(c.vertex_Rtop, Math.min(e.top, g.top)));
            var i = Math.sqrt(Math.pow(e.top - g.top, 2) + Math.pow(e.left - g.left, 2)),
                j = Math.ceil(Math.min(Math.max(Math.log(i) / .05 - 75, 30), 100) / c.speed),
                k = e.top == h ? 0 : -Math.sqrt((g.top - h) / (e.top - h)),
                l = (k * e.left - g.left) / (k - 1),
                m = g.left == l ? 0 : (g.top - h) / Math.pow(g.left - l, 2);
            a.extend(!0, c, {
                count: -1,
                steps: j,
                vertex_left: l,
                vertex_top: h,
                curvature: m
            })
        }, e.play = function() {
            this.move()
        }, e.move = function() {
            var b = this.settings,
                c = b.start,
                d = b.count,
                e = b.steps,
                g = b.end,
                h = c.left + (g.left - c.left) * d / e,
                i = 0 == b.curvature ? c.top + (g.top - c.top) * d / e : b.curvature * Math.pow(h - b.vertex_left, 2) + b.vertex_top;
            if (null != g.width && null != g.height) {
                var j = e / 2,
                    k = g.width - (g.width - c.width) * Math.cos(j > d ? 0 : (d - j) / (e - j) * Math.PI / 2),
                    l = g.height - (g.height - c.height) * Math.cos(j > d ? 0 : (d - j) / (e - j) * Math.PI / 2);
                f.css({
                    width: k + "px",
                    height: l + "px",
                    "font-size": Math.min(k, l) + "px"
                })
            }
            f.css({
                left: h + "px",
                top: i + "px"
            }), b.count++;
            var m = window.requestAnimationFrame(a.proxy(this.move, this));
            d == e && (window.cancelAnimationFrame(m), b.onEnd.apply(this))
        }, e.destroy = function() {
            f.remove()
        }, e.init(c)
    }, a.fn.fly = function(b) {
        return this.each(function() {
            void 0 == a(this).data("fly") && a(this).data("fly", new a.fly(this, b))
        })
    }
}(jQuery);

(function($) {

    $.fn.hoverpulse = function(options) {
        // in 1.3+ we can fix mistakes with the ready state
        if (this.length == 0) {
            if (!$.isReady && this.selector) {
                var s = this.selector,
                    c = this.context;
                $(function() {
                    $(s, c).hoverpulse(options);
                });
            }
            return this;
        }

        var opts = $.extend({}, $.fn.hoverpulse.defaults, options);

        // parent must be relatively positioned
        this.parent().css({
            position: 'relative'
        });
        // pulsing element must be absolutely positioned
        this.css({
            top: 0,
            left: 0
        });

        this.each(function() {
            var $this = $(this);
            var w = $this.width(),
                h = $this.height();
            $this.data('hoverpulse.size', {
                w: parseInt(w),
                h: parseInt(h)
            });
        });

        // bind hover event for behavior
        return this.hover(
            // hover over
            function() {
                var $this = $(this);
                $this.parent().css('z-index', opts.zIndexActive);

                var size = $this.data('hoverpulse.size');
                var w = size.w,
                    h = size.h;
                $this.stop().animate({
                    top: ('-' + opts.size + 'px'),
                    left: ('-' + opts.size + 'px'),
                    height: (h + 2 * opts.size) + 'px',
                    width: (w + 2 * opts.size) + 'px'
                }, opts.speed);
            },
            // hover out
            function() {
                var $this = $(this);
                var size = $this.data('hoverpulse.size');
                var w = size.w,
                    h = size.h;

                $this.stop().animate({
                    top: 0,
                    left: 0,
                    height: (h + 'px'),
                    width: (w + 'px')
                }, opts.speed, function() {
                    $this.parent().css('z-index', opts.zIndexNormal);
                });
            }
        );
    };

    $.fn.hoverpulse.defaults = {
        size: 20,
        speed: 200,
        zIndexActive: 100,
        zIndexNormal: 1
    };

})(jQuery);
