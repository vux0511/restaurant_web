<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="js/main.js">
    <link rel="stylesheet" href="css/TAB.CSS">
    <link rel="stylesheet" type="text/css" href="css/about.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="js/main.js"></script>
    <link rel="shortcut icon" type="image/png" href="/images/crab.png"/>
    <title>Đăng Nhập</title>

</head>
<html>

<!-- header -->

<div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html">
                    <h3 style="font-size: 30px; color: #555;">SEA-FOOD <i class="fas fa-cloud-meatball"></i></h3>
                </a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.html" class="hoverr"><i class="fas fa-home" ></i> Trang Chủ</a></li>
                    <li><a href="sanpham.html" class="hoverr">Sản Phẩm</a></li>
                    <li><a href="datban.html" class="hoverr">Đặt Bàn</a></li>
                    <!-- <li><a href="thongtin.html" class="hoverr">Thông Tin</a></li> -->
                    <li><a href="contact.html" class="hoverr">Liên Hệ</a></li>
                    <li><a href="login.html" class="hoverr"> Tài Khoản</a></li>
                </ul>
            </nav>
            <a href="giohang.html">
                <img src="images/shopping-cart.png" width="25px" height="25px" style="color: #ff523b;">
            </a>
            <img src="images/menu.png" class="menu-icon" onclick="menuthaydoi()">
        </div>
        <hr style="border:.1px solid #dddada;">

        <!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng nhập</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<form action="" method="post">
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
                        <span class="login100-form-title-1">
                            Đăng Nhập
                        </span>
                    </div>

                    <form class="login100-form validate-form">
                        <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                            <span class="label-input100">Tài khoản</span>
                            <input class="input100" type="email" name="username" placeholder="Nhập tài khoản">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                            <span class="label-input100">Mật khẩu</span>
                            <input class="input100" type="password" name="pass" placeholder="Nhập mật khẩu">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="flex-sb-m w-full p-b-30">
                            <div class="contact100-form-checkbox">
                                <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                <label class="label-checkbox100" for="ckb1">
                                    Nhớ tài khoản
                                </label>
                            </div>

                            <div>
                                <a href="#" class="txt1">
                                    Quên mật khẩu ?
                                </a>
                            </div>
                            <div>
                                <a href="#" class="" style="font-size: 14px;margin-right: 15px; ">
                                    Đăng kí
                                </a>
                            </div>
                        </div>

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Đăng Nhập
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>



    </div>
</div>




<!-- Liên Hệ -->

<hr style="width: 80%; margin-left: 150px; margin-top: 50px; background-color: #ff523b; border: 1px solid #ff523b;">
<!-- FOOTER -->

<div class="footer" style="margin-top: 50px;">
    <div class="container ">
        <div class="row ">
            <div class="footer-col-2 ">
                <a href="index.html">
                    <h3 style="font-size: 30px; color: #555;">SEA-FOOD <i class="fas fa-cloud-meatball"></i></h3>
                </a>
                <p class="copyright "><i class="far fa-copyright "></i> Copyright 2021 - Hoàng Văn Vũ</p>
            </div>
            <div class="footer-col-2 " style="line-height: 35px; ">
                <h3>Thông tin liên hệ</h3>
                <ul style="margin-top: -10px;">
                    <li><i class="fas fa-user "></i> Hoàng Văn Vũ</li>
                    <li><i class="fas fa-phone-square-alt "></i> 033.4373.123</li>
                    <li><i class='fas fa-mail-bulk'></i> vux.0511@gmail.com </li>
                    <li><i class='fas fa-map-marker-alt'></i> Hà Tĩnh , Việt Nam </li>
                </ul>
            </div>
            <div class="footer-col-3 " style="color: #fff; ">
                <h3>Các Liên Kết</h3>
                <ul>
                    <li><a href=" "><i class="fas fa-ticket-alt "></i> Mã giảm giá</a></li>
                    <li><a href=" "><i class="far fa-newspaper "></i> Bài viết mới</a> </li>
                    <li><a href=" "><i class="fas fa-shipping-fast "></i> Chính sách giao hàng</a> </li>
                    <li><a href=" "><i class="far fa-handshake "></i> Chính sách hoàn trả</a> </li>
                </ul>
            </div>
            <div class="footer-col-4 ">
                <h3>Theo dõi tại</h3>
                <ul>
                    <li><a href=" "><i class='fab fa-facebook'></i>  Facebook</a></li>
                    <li><a href="https://www.instagram.com/vux_0511/ "><i class='fab fa-instagram'></i>  Instagram</a></li>
                    <li><a href=" "><i class='fab fa-youtube'></i> Youtube</a></li>
                    <li><a href=" "><i class='fab fa-twitter'></i> Twitter</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--  -->




<!-- JS FOR MENU -->


</body>

</html>