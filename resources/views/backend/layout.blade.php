<!doctype html>
<html lang="vi">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome 6.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('../css/backend/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/backend/service.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/backend/post.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/stylefooter.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/backend/core.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/services.css') }}">

    <!-- CKEditor -->
    <script src="//cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>

    <title>{{$title}}</title>
</head>
<body style="background-color: #f5f5f9;">
<nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top backend_navbar">
    <div class="container-fluid">
        <a class="navbar-brand admin__nav-brand {{'admin' == request()->path() ? 'navbar_backend_active' : ''}}"
           href="/admin">HOANGKHANG INCOTECH</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('admin/service*')) ? 'navbar_backend_active' : '' }}"
                       aria-current="page" href="/admin/service">Service</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ (request()->is('admin/categories*')) ? 'navbar_backend_active' : '' }} {{ (request()->is('admin/category*')) ? 'navbar_backend_active' : '' }} {{ (request()->is('admin/post*')) ? 'navbar_backend_active' : '' }}"
                       href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Post
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/admin/categories">Categories</a></li>
                        <li><a class="dropdown-item" href="/admin/post">All Post</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('admin/newletter*')) ? 'navbar_backend_active' : '' }}"
                       href="/admin/newletter">New Letter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('admin/photo*')) ? 'navbar_backend_active' : '' }}"
                       href="/admin/photo">Photo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('admin/contactus*')) ? 'navbar_backend_active' : '' }}"
                       href="/admin/contactus">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('admin/reviews*')) ? 'navbar_backend_active' : '' }}"
                       href="/admin/reviews">Reviews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('admin/ourproject*')) ? 'navbar_backend_active' : '' }} {{ (request()->is('admin/edit_project*')) ? 'navbar_backend_active' : '' }}"
                       href="/admin/ourproject">Project</a>
                </li>

            </ul>
            <form class="d-flex">
                <li class="nav-item dropdown" style="list-style: none">
                    <a class="nav-link dropdown-toggle"
                       href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Xin chào
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('auth.logout') }}"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
                    </ul>
                </li>
                <label></label>

            </form>
        </div>
    </div>
</nav>
<!--<nav class="navbar navbar-expand-lg navbar-light backend_navbar">
    <div class="container-fluid">
        <a class="navbar-brand {{'admin' == request()->path() ? 'navbar_backend_active' : ''}}" href="/admin">Hoangkhang
            Incotech Backend</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('admin/service*')) ? 'navbar_backend_active' : '' }}"
                       aria-current="page" href="/admin/service">Service</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ (request()->is('admin/categories*')) ? 'navbar_backend_active' : '' }} {{ (request()->is('admin/category*')) ? 'navbar_backend_active' : '' }} {{ (request()->is('admin/post*')) ? 'navbar_backend_active' : '' }}"
                       href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Post
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/admin/categories">Categories</a></li>
                        <li><a class="dropdown-item" href="/admin/post">All Post</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('admin/newletter*')) ? 'navbar_backend_active' : '' }}"
                       href="/admin/newletter">New Letter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('admin/photo*')) ? 'navbar_backend_active' : '' }}"
                       href="/admin/photo">Photo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('admin/contactus*')) ? 'navbar_backend_active' : '' }}"
                       href="/admin/contactus">Contact Us</a>
                </li>
                <li>
                    <a class="nav-link {{ (request()->is('admin/reviews*')) ? 'navbar_backend_active' : '' }}"
                       href="/admin/reviews">Reviews</a>
                </li>
                <li>
                    <a class="nav-link {{ (request()->is('admin/ourproject*')) ? 'navbar_backend_active' : '' }} {{ (request()->is('admin/edit_project*')) ? 'navbar_backend_active' : '' }}"
                       href="/admin/ourproject">Project</a>
                </li>

            </ul>
            <form class="d-flex">
                <li class="nav-item dropdown" style="list-style: none">
                    <a class="nav-link dropdown-toggle"
                       href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Xin chào
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('auth.logout') }}">Logout</a></li>
                    </ul>
                </li>
                <label></label>

            </form>
        </div>
    </div>
</nav>-->
<div class="container-fluid">
    <div class="backend__content_wrapper">
        <!-- Content Wrapper -->
        @yield('content')
    </div>
    <!-- Footer -->
    <div class="row" style="align-items: center; padding: 20px 0;">
        <div class="col-md-6 col-6 ">
            <div class="footer-end-text " style="float: left; ">
                <p class="mb-0">&copy; Copyright 2021. All Rights Reserved.</p>
            </div>
        </div>
        <div class="col-md-6 col-6 ">
            <div class="footer-end-text ">
                <p class="mb-0">Designed by <a href="#"><i>Hoangkhang Incotech </i></a></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
