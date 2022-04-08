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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
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
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!--Custom css-->
    <link rel="stylesheet" href="{{asset('css/_header.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/doitac.css')}}">
    <link rel="stylesheet" href="{{asset('css/services.css')}}">
    <link rel="stylesheet" href="{{asset('css/splide.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">
    <link rel="stylesheet" href="{{asset('css/blogdetails.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/top_header.css')}}">
    <link rel="stylesheet" href="{{asset('css/stylefooter.css')}}">
    <script src="{{asset('js/splide.min.js')}}"></script>
    <title>{{$title}}</title>
</head>
<body>
<!-- Top header -->
<nav class="navbar navbar-dark"
     style=" background-color: rgb(48, 49, 50); font-family: 'Istok Web', sans-serif;">
    <div class="container" style="max-width: 1170px; ">
            <span class="header-top"><img id="icon-header" src="/image/time-header.png"/>Mon-Fri: 09.00 am-06:00 pm
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
                                             style="background-color: rgb(48, 49, 50); border: none" type="button"
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
<nav class="navbar navbar-expand-lg navbar-light text-capitalize "
     style="box-shadow: 0px 0px 23.75px 1.25px rgba(0, 0, 0, 0.08);">
    <div id="header-bottom" class="container">
        <a class="navbar-brand" href="/"><img src="/image/thum.png" alt="#"/></a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#show-menu-new"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="show-menu-new" styles="justify-content: center;">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a id="show-menu-new-tab" class="nav-link {{'/' == request()->path() ? 'navbar_active' : ''}}"
                       href="/">Home +</a>
                </li>
                <li class="nav-item">
                    <a id="show-menu-new-tab" class="nav-link {{'dich-vu' == request()->path() ? 'navbar_active' : ''}}" href="/dich-vu">Services +</a>
                </li>
                <li class="nav-item">
                    <a id="show-menu-new-tab" class="nav-link" href="#room">Pages +</a>
                </li>
                <li class="nav-item">
                    <a id="show-menu-new-tab" class="nav-link" href="#blog">Shop +</a>
                </li>
                <li class="nav-item">
                    <a id="show-menu-new-tab" class="nav-link {{'bai-viet' == request()->path() ? 'navbar_active' : ''}}" href="/bai-viet">News </a>
                </li>
                <li class="nav-item book d-flex align-items-center">
                    <a id="show-menu-new-tab" class="nav-link {{'doi-tac' == request()->path() ? 'navbar_active' : ''}}" href="/doi-tac">About Us</a>
                </li>
            </ul>
        </div>
        <div class="d-flex" style="align-items: center;">
            <a style="justify-content: center;"><img class="Search-header" src="/image/search2.png" alt="#"/></a>
            <div class="vline"></div>
            <a><img class="Mess-header" src="/image/mess.png" alt="#"/></a>
            <div class="btn-contact-header" style="text-align: left"><span
                    style="font-size: 14px; font-family: 'Istok Web', sans-serif">Do you need help?</span><a
                    id="btn-contact-header" class="nav-link" href="/lien-he" style="padding: 5px 0">
                    CONTACT ME </a></div>
        </div>
    </div>
</nav>
<!-- Content Wrapper -->
<div class="content_wrapper">
    @yield('content')
</div>
<!-- Footer -->
@include('footer')
</body>
</html>
