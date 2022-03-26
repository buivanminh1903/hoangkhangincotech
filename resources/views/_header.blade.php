<!DOCTYPE html>
<html lang="vi">

<head>
    @include('head')
    <!-- link CSS -->
    <link rel="stylesheet" href="css/_header.css" />
</head>

<body>
    <!-- Header -->
    <!-- ---------------------- -->
    <!--Header dòng Trên -->
    <nav class="navbar navbar-dark" style=" background-color: rgb(48, 49, 50); ">
        <div class="container" style="max-width: 1170px; ">
            <span class="header-top"><img id="icon-header" src="/image/time-header.png" />Mon-Fri : 09:00 am - 06:00pm
            </span>
            <div class="content">
            </div>
            <div>
                <span class="header-top" style="font-family: Roboto"><img id="icon-header"
                        src="/image/call-header.png" />Call Us +1556984538</span><span class="vline-icon"></span>
                <span class="header-top"><img id="icon-header" src="/image/email-header.png" />e-mail us</span><span
                    class="vline-icon"></span>
                <span class="header-top"><button class="btn btn-dark dropdown-toggle"
                        style="background-color: rgb(48, 49, 50);" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span class="header-top"> <img id="icon-header"
                                src="/image/english.png" />ENGLISH</span></button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                    </ul>
                </span>
            </div>
        </div>

    </nav>
    <!--Header dòng dưới -->
    <nav class="navbar navbar-expand-lg navbar-light  text-capitalize main-font-family" >
        <div id="header-bottom" class="container">
            <a class="navbar-brand" href="/"><img src="/image/thum.png" alt="#" /></a>
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
                <a style="justify-content: center;"><img class="Search-header" src="/image/search2.png" alt="#" /></a>
                <div class="vline"></div>
                <a><img class="Mess-header" src="/image/mess.png" alt="#" /></a>
                <div class="btn-contact-header"><span style="font-size: 14px; font-family: 'Istok Web', sans-serif;">Do you need help?</span><a id="btn-contact-header" class="nav-link" href="/lien-he">
                        CONTACT ME </a></div>
            </div>
        </div>
    </nav>

  
</body>

</html>