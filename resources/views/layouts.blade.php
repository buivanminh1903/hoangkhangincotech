<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    {{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"--}}
    {{--          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

    <!-- Font Awesome 6.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Istok+Web&display=swap" rel="stylesheet">

    <!--Custom css-->
    <link rel="stylesheet" href="css/_header.css"/>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/doitac.css">
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="css/splide.min.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="stylesheet" type="text/css" href="css/blog.css">
    <link rel="stylesheet" href="css/blogdetails.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/top_header.css">
    <link rel="stylesheet" href="css/stylefooter.css">
    <script src="js/splide.min.js"></script>
    <title>{{$title}}</title>
</head>
<body>
<!-- Top header -->
<nav class="navbar navbar-dark" style=" background-color: rgb(48, 49, 50); ">
    <div class="container" style="max-width: 1170px; ">
            <span class="header-top"><img id="icon-header" src="/image/time-header.png"/>Mon-Fri : 09:00 am - 06:00pm
            </span>
        <div class="content">
        </div>
        <div>
                <span class="header-top" style="font-family: Roboto"><img id="icon-header"
                                                                          src="/image/call-header.png"/>Call Us +1556984538</span><span
                class="vline-icon"></span>
            <span class="header-top"><img id="icon-header" src="/image/email-header.png"/>e-mail us</span><span
                class="vline-icon"></span>
            <span class="header-top"><button class="btn btn-dark dropdown-toggle"
                                             style="background-color: rgb(48, 49, 50);" type="button"
                                             data-bs-toggle="dropdown"
                                             aria-expanded="false">
                        <span class="header-top"> <img id="icon-header"
                                                       src="/image/english.png"/>ENGLISH</span></button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                    </ul>
                </span>
        </div>
    </div>

</nav>
<!-- Bottom header -->
<nav class="navbar navbar-expand-lg navbar-light  text-capitalize main-font-family">
    <div id="header-bottom" class="container">
        <a class="navbar-brand" href="/"><img src="/image/thum.png" alt="#"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse show-menu-new" id="show-menu-new" styles="justify-content: center;">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a id="show-menu-new-tab" class="nav-link " href="/" style="  color: rgb(45, 74, 138);">Home +</a>
                </li>
                <li class="nav-item">
                    <a id="show-menu-new-tab" class="nav-link" href="/dich-vu">Services +</a>
                </li>
                <li class="nav-item">
                    <a id="show-menu-new-tab" class="nav-link" href="#room">Pages +</a>
                </li>
                <li class="nav-item">
                    <a id="show-menu-new-tab" class="nav-link" href="#blog">Shop +</a>
                </li>
                <li class="nav-item">
                    <a id="show-menu-new-tab" class="nav-link" href="/bai-viet">News </a>
                </li>
                <li class="nav-item book d-flex align-items-center">
                    <a id="show-menu-new-tab" class="nav-link" href="#">About Us</a>
                </li>
            </ul>
        </div>
        <div class="d-flex" style="align-items: center;">
            <a style="justify-content: center;"><img class="Search-header" src="/image/search2.png" alt="#"/></a>
            <div class="vline"></div>
            <a><img class="Mess-header" src="/image/mess.png" alt="#"/></a>
            <div class="btn-contact-header"><span style="font-size: 14px; font-family: 'Istok Web', sans-serif;">Do you need help?</span><a
                    id="btn-contact-header" class="nav-link" href="/lien-he">
                    CONTACT ME </a></div>
        </div>
    </div>
</nav>
<!-- Content Wrapper -->
<div class="content_wrapper">
    @yield('content')
</div>
<!-- Footer -->
<div class="footer">
    <div class="container" style="width:1170px">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="logo_footer">
                    <img src="Image/logo footer.JPG" alt="">
                </div>

                <div class="footer-box-firts" style="height: 230px;">
                    <p class="text">Our company has been developing high-quality and reliable software for corporate
                        needs since 2008.We are renowed processionals of software developement.</p>
                    <a href="/"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="/"><i class="fa-brands fa-twitter"></i></a>
                    <a href="/"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="/"><i class="fa-brands fa-instagram"></i></a>
                </div>

            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="footer-box-second" style="height: 300px;">
                    <h3>Quick Links</h3>
                    <hr>
                    <ul>
                        <li><i class="fa-solid fa-angles-right"></i><a href="/">About Us</a></li>
                        <li><i class="fa-solid fa-angles-right"></i><a href="/">Our Service</a></li>
                        <li><i class="fa-solid fa-angles-right"></i><a href="/">Pricing Plan</a></li>
                        <li><i class="fa-solid fa-angles-right"></i><a href="/">Blog Classic</a></li>
                        <li><i class="fa-solid fa-angles-right"></i><a href="/">Contact Us</a></li>
                        <li><i class="fa-solid fa-angles-right"></i><a href="/"> Faqs</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">

                <div class="footer-box-second">
                    <h3>Popular Post</h3>
                    <hr>
                </div>
                <div class="footer-box-three">
                    <div class="post">
                        <img src="Image/footer1.png" alt="">
                        <p> Android Application<br>Program-2021 <br> <i style="font-size: small;color: #919192;"> August
                                24 , 2021</i></p>

                    </div>
                    <hr>
                    <div class="post">
                        <img src="Image/footer1.png" alt="">
                        <p> Android Application<br>Program-2021 <br> <i style="font-size: small; color: #919192;">
                                August 24 , 2021</i></p>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="footer-box-second">
                    <h3>Our contacts</h3>
                    <hr>
                </div>
                <div class="footer-text">
                    <img src="Image/address.png" alt=""> <a> Address</a>
                    <p>125,Suitand Street,USA</p>
                    <img src="Image/phone.JPG" alt=""> <a>Phone</a>
                    <p>+0397181527</p>
                    <img src="Image/email.JPG " alt=" "> <a>E-Mail</a>
                    <p>tranquan12a8@gmai.com</p>
                </div>

            </div>
        </div>

    </div>
</div>
<div class="footer-end " style="height: 127px;">
    <div class="container " style="width: 1170px; ">
        <div class="row ">
            <div class="col-md-6 col-6 ">
                <div class="footer-end-text " style="float: left; ">
                    <p>@CoppyRight 2021.All Rights Reserved.Designed by <a href="/ "><i> Dream IT </i></a></p>
                </div>
            </div>
            <div class="col-md-6 col-6 ">
                <div class="footer-end-text ">
                    <p>Powered By
                        <a href=" "> <i> Wordpress </i> </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
