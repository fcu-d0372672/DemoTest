<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <title>訂單資訊確認</title>
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>


    <noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
    <style>
        .cart-wrap {
            font-size: 20px;
        }

        .wrapper_1 {
            padding: 2em 0em 4em;
        }

        .cart_head {
            font-size: 28px;
        }

        td {
            vertical-align: middle;
            text-align: center;
            float: left;
            font-size: 17px;
            border-bottom: 1px dashed #ffffff;
        }

        .first-td {
            width: 150px;
            text-align: right;
            background-color: #e7e7e7;
        }

        #carTable {
          border-style:outset;
        }
        thead {
            background-color: rgb(208, 208, 208);
        }

        input[type=text] {
            font-size: 17px;
            padding: 0 5px;
            box-shadow: inset 1px 1px 3px;
        }

        .row-align {
            display: inline-block;
            vertical-align: middle;
        }

        .speak-align {
            height: 120px;
            width: 425px;
            box-shadow: inset 1px 1px 3px;
        }

        input[type=submit] {
            height: 45px;
            font-size: 16px;
            font-family: Verdana;
            font-weight: bold;
            -moz-border-radius: 12px;
            -webkit-border-radius: 12px;
            border-radius: 12px;
            border: 2px solid #dcdcdc;
            text-decoration: none;
            padding: 0 1em;
            background: -moz-linear-gradient( center top, #ededed 5%, #dfdfdf 100%);
            background: -ms-linear-gradient( top, #ededed 5%, #dfdfdf 100%);
            filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
            background: -webkit-gradient( linear, left top, left bottom, color-stop(5%, #ededed), color-stop(100%, #dfdfdf));
            background-color: #ededed;
            color: #777777 !important;
            display: inline-block;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header id="header">
        <h1><a href="index.html">666拍賣網</a></h1>
        <nav id="nav">
            <ul>
                <li><a href="en/index.html">English</a></li>
                <li><a href="search.html">訪客進入</a></li>
                <li><a href="login.html">會員登入</a></li>
                <li><a href="signup.html" class="button special">註冊</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main -->
    <section id="main" class="wrapper_1">
      <div class="container">
          <header class="major">
              <h3 class="cart_head">訂單最後確認  </h3>
              <p align="left">
                  <img src="cart_img/step4.gif" width="500" height="60">
              </p>
          </header>
      </div>
        <div class="container" style="width:800px;">
            <div class="cart-wrap">
                <form id="message_form" method="POST" action="index.html ">
                    <table id="cartTable" class="cart" >
                        <thead>
                            <tr>
                                <th><label style="margin:1em 0 0.4em 0;font-size: 18px;">訂單明細</label></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="first-td">取貨人姓名：</td>
                                <td><div class="row-align"><?php echo $_POST['username']?></div></td>
                            </tr>
                            <tr>
                                <td class="first-td">手機：</td>
                                <td><div class="row-align"><?php echo $_POST['cellphone']?></div></td>
                            </tr>
                            <tr>
                                <td class="first-td">市話：</td>
                                <td><div class="row-align"><?php echo $_POST['phone']?></div></td>
                            </tr>
                            <tr>
                                <td class="first-td">Email：</td>
                                <td><div class="row-align"><?php echo $_POST['email']?></div></td>
                            </tr>
                            <tr>
                                <td class="first-td">通訊地址：</td>
                                <td><div class="row-align"><?php echo $_POST['address']?></div></td>
                            </tr>
                            <tr>
                                <td class="first-td">付款方式：</td>
                                <td><div class="row-align"><?php echo $_POST['pay']?></div></td>
                            </tr>
                            <tr>
                                <td class="first-td">運送方式：</td>
                                <td><div class="row-align"><?php echo $_POST['transport']?></div></td>
                            </tr>
                            <tr>
                                <td class="first-td">總金額：</td>
                                <td><div class="row-align"><?php echo $_POST['address']?></div></td>
                            </tr>

                        </tbody>
                    </table>
                    <div style="margin-left: 22rem; margin-top: 0.4rem; ">
                        <input id="submit" type="submit" class="css_btn_class" value="完成訂單" />
                    </div>
                </form>
            </div>
        </div>

    </section>

    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <section class="links">
                <div class="row">
                    <section class="3u 6u(medium) 12u$(small)">
                        <h3>關於666拍賣網的二三事</h3>
                        <ul class="unstyled">
                            <li>我們是幾個熱血的大學生</li>


                        </ul>
                    </section>
                    <section class="3u 6u$(medium) 12u$(small)">
                        <h3>客服</h3>
                        <ul class="unstyled">
                            <li>(一~五)8:00-16:00</li>
                            <li>(六、日)放假</li>
                            <li>信箱:1234567@gmail.com</li>


                        </ul>
                    </section>
                    <section class="3u 6u(medium) 12u$(small)">
                        <h3>社群</h3>
                        <ul class="unstyled">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Youtube</a></li>
                            <li><a href="#">Instagram</a></li>

                        </ul>
                    </section>
                    <section class="3u$ 6u$(medium) 12u$(small)">
                        <h3>新聞與資訊</h3>
                        <ul class="unstyled">
                            <li><a href="#">新聞中心</a></li>
                            <li><a href="#">about 666</a></li>

                        </ul>
                    </section>
                </div>
            </section>
            <div class="row">
                <div class="8u 12u$(medium)">
                    <ul class="copyright">
                        <li>&copy; Untitled. All rights reserved.</li>
                        <li>Design: <a href="http://templated.co">TEMPLATED</a></li>
                        <li>Images: <a href="http://unsplash.com">Unsplash</a></li>
                    </ul>
                </div>
                <div class="4u$ 12u$(medium)">
                    <ul class="icons">
                        <li>
                            <a class="icon rounded fa-facebook"><span class="label">Facebook</span></a>
                        </li>
                        <li>
                            <a class="icon rounded fa-twitter"><span class="label">Twitter</span></a>
                        </li>
                        <li>
                            <a class="icon rounded fa-google-plus"><span class="label">Google+</span></a>
                        </li>
                        <li>
                            <a class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
