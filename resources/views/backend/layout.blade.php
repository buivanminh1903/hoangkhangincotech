<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome 6.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Custom Css -->

    <link rel="stylesheet" href="{{ asset('../css/backend/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/backend/post.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/stylefooter.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/backend/core.css') }}">

    <link rel="stylesheet" href="{{asset('../css/backend/layout.css')}}">
    <link rel="stylesheet" href="{{asset('../css/backend/post.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('../css/stylefooter.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('../css/backend/core.css')}}">


    <title>{{$title}}</title>
</head>
<body style="background-color: #f5f5f9; margin-top: 12px">
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light backend_navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="/backend">Hoangkhang Incotech Backend</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/backend/post">Post</a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link" href="/backend/NewLetter/newletter">New Letter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/backend/Photo/photo">Photo</a>
                    </li>
                    <li>
                        <a class="nav-link" href="/backend/Contactus/contactus">Contact Us</a>
                    </li>
                    <li>

                        <a class="nav-link" href="/backend/ourproject">Project</a>
                    </li>
                   
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="backend__content_wrapper">
        <!-- Content Wrapper -->
        <div>`
        @yield('content')

        <!-- Footer -->
            <div class="container-fluid"
                 style="border-radius: 4px;">
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
        </div>
    </div>
</div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
