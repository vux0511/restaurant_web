<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/TAB.CSS">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="/images/crab.png" />

    <title>Trang Chủ</title>

</head>
<html>

<!-- header -->

<?php
        require_once ('layouts/header.php');
        require_once ('layouts/slider.php');
    ?>


<!-- anh demo mon an -->



<!-- SAN PHAM NOI BAT -->

<div class="small-container" style="margin-top: -20px;">
    <?php
        require_once ('layouts/spnb.php');
        require_once ('layouts/slide2.php');
        require_once ('layouts/main.php');
        require_once ('layouts/contact.php');
        require_once ('layouts/vote.php');
    ?>
</div>

<!-- Lien He Voi Chung Toi -->







<!-- Liên Hệ -->

<!-- <hr class="gach_ngang" style="width: 80%; margin-left: 150px; margin-top: 50px; background-color: #ff523b; border: 1px solid #ff523b;"> -->

<hr style="width: 100%;  margin-top: 50px; background-color: #ff523b; border: 1px solid #ff523b;">
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
            <div class="footer-col-2 an" style="line-height: 35px; ">
                <h3>Thông tin liên hệ</h3>
                <ul style="margin-top: -10px;">
                    <li><i class="fas fa-user "></i> Hoàng Văn Vũ</li>
                    <li><i class="fas fa-phone-square-alt "></i> 033.4373.123</li>
                    <li><i class='fas fa-mail-bulk'></i> vux.0511@gmail.com </li>
                    <li><i class='fas fa-map-marker-alt'></i> Hà Tĩnh , Việt Nam </li>
                </ul>
            </div>
            <div class="footer-col-3 an" style="color: #fff; ">
                <h3>Các Liên Kết</h3>
                <ul>
                    <li><a href=" "><i class="fas fa-ticket-alt "></i> Mã giảm giá</a></li>
                    <li><a href=" "><i class="far fa-newspaper "></i> Bài viết mới</a> </li>
                    <li><a href=" "><i class="fas fa-shipping-fast "></i> Chính sách giao hàng</a> </li>
                    <li><a href=" "><i class="far fa-handshake "></i> Chính sách hoàn trả</a> </li>
                </ul>
            </div>
            <div class="footer-col-4 ">
                <h3 class="an">Theo dõi tại</h3>
                <ul>
                    <li><a href=" "><i class='fab fa-facebook'></i> Facebook</a></li>
                    <li><a href="https://www.instagram.com/vux_0511/ "><i class='fab fa-instagram'></i> Instagram</a>
                    </li>
                    <li><a href=" "><i class='fab fa-youtube'></i> Youtube</a></li>
                    <li><a href=" "><i class='fab fa-twitter'></i> Twitter</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--  -->




<!-- JS FOR MENU -->

<script>
var MenuItems = document.getElementById("MenuItems")

MenuItems.style.maxHeight = "0px";

function menutoggle() {
    if (MenuItems.style.maxHeight == "0px") {
        MenuItems.style.maxHeight = "300px";
    } else {
        MenuItems.style.maxHeight = "0px";
    }
}
</script>

</body>

</html>