<!DOCTYPE html>
<html lang="vi">

<head>
    <!-- Include head from heade.blade.php -->
    @include('head')
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/services.css">
</head>

<body>
<div>@include('_header')</div>
<div style="background-color: #f0f4f8;">
    <!--Start breadcrumb-->
    <div class="hk_breadcrumb">
        <div class="hk_breadcrumb_left">
            <span class="hk_breadcrumb__dot"></span> Services
        </div>
        <div class="hk_breadcrumb_right">
            <ul class="hk_menu">
                <li>Home</li>
                <li><i class="fa-solid fa-angle-right"></i>&nbsp;&nbsp;Services</li>
            </ul>
        </div>
    </div>
    <!--End breadcrumb-->
</div>
<div class="container">
    <!--Start main content-->
    <div class="maincontent">
        <!--Title-->
        <div class="topheader">
            <p>WHAT WE SERVE</p>
            <h2>Our Services</h2>
        </div>
        <!--End Title-->
        <div class="servicescard">
            <!--Card-->
            <div class="servicescard_item">
                <!--Card header-->
                <div class="headericon">
                    <img class="headericonfirst" src="image/digital_marketing.png" alt="">
                    <img class="second" src="image/digital_marketing_color.png" alt="">
                </div>
                <!--End card header-->
                <!--Card section-->
                <div class="carddetail">
                    <h4>Digital Marketing</h4>
                    <p>Distinctively communicate areexcellent content and ubiquileApp have become
                        Synergistically with</p>
                </div>
                <!--End card section-->
                <!--Fade background while hover-->
                <img class="fade_background" src="image/digital_marketing.png" alt="">
                <!--Button-->
                <a href="#" class="detailbutton"><i class="fa-solid fa-angle-right"></i></a>
            </div>
            <!--Card-->
            <div class="servicescard_item">
                <div class="headericon">
                    <img class="first" src="image/web_develop.png" alt="">
                    <img class="second" src="image/web_development.png" alt="">
                </div>
                <div class="carddetail">
                    <h4>Web Development</h4>
                    <p>Conveniently predominate sticky ali than low risk high yield methods of emp brand
                        superior techno</p>
                </div>
                <img class="fade_background" src="image/web_develop.png" alt="">
                <a href="#" class="detailbutton"><i class="fa-solid fa-angle-right"></i></a>
            </div>
            <!--Card-->
            <div class="servicescard_item">
                <div class="headericon">
                    <img class="first" src="image/app_design.png" alt="">
                    <img class="second" src="image/app_design_color.png" alt="">
                </div>
                <div class="carddetail">
                    <h4>Apps Design</h4>
                    <p>Energistically target dynamic technolog content and ubiquileApp have become future-proof
                        value</p>
                </div>
                <img class="fade_background" src="image/app_design.png" alt="">
                <a href="#" class="detailbutton"><i class="fa-solid fa-angle-right"></i></a>
            </div>
            <!--Card-->
            <div class="servicescard_item">
                <div class="headericon">
                    <img class="first" src="image/graphic_design.png" alt="">
                    <img class="second" src="image/graphic_design_color.png" alt="">
                </div>
                <div class="carddetail">
                    <h4>Graphic Design</h4>
                    <p>Distinctively communicate areexcellent content and ubiquileApp have become
                        Synergistically with</p>
                </div>
                <img class="fade_background" src="image/graphic_design.png" alt="">
                <a href="#" class="detailbutton"><i class="fa-solid fa-angle-right"></i></a>
            </div>
            <!--Card-->
            <div class="servicescard_item">
                <div class="headericon">
                    <img class="first" src="image/custom_dev.png" alt="">
                    <img class="second" src="image/custom_dev_color.png" alt="">
                </div>
                <div class="carddetail">
                    <h4>Custom Soft Dev</h4>
                    <p>Conveniently predominate sticky ali than low risk high yield methods of emp brand
                        superior techno</p>
                </div>
                <img class="fade_background" src="image/custom_dev.png" alt="">
                <a href="#" class="detailbutton"><i class="fa-solid fa-angle-right"></i></a>
            </div>
            <!--Card-->
            <div class="servicescard_item">
                <div class="headericon">
                    <img class="first" src="image/ecommerce.png" alt="">
                    <img class="second" src="image/ecommerce_color.png" alt="">
                </div>
                <div class="carddetail">
                    <h4>e-Commerce Service</h4>
                    <p>Energistically target dynamic technolog content and ubiquileApp have become future-proof
                        value</p>
                </div>
                <img class="fade_background" src="image/ecommerce.png" alt="">
                <a href="#" class="detailbutton"><i class="fa-solid fa-angle-right"></i></a>
            </div>
            <!--End card-->
        </div>
    </div>
    <!--End Main content-->
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
