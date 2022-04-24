<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }

        .card {
            box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 15%);
            border-radius: 7px;
        }

        .text-danger {
            font-size: 13px;
        }

        .card-header {
            border-bottom: none;
            background: transparent;
            padding: 16px 0 0;
        }

        .login-card {
            left: 50%;
            top: 50%;
            position: absolute;
            transform: translateY(-50%) translateX(-50%)
        }

        .form-floating > label {
            transition: opacity .2s ease-in-out, transform .2s ease-in-out;
            color: #b4b5b7;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-5 login-card">
            <div class="card mb-2">
                <div class="card-header">
                    <h4 class="card-heading mb-0 text-center fw-bold">Admin Login</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('auth.check') }}" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <input class="form-control shadow-none" id="floatingInput" type="email"
                                   placeholder="name@example.com"
                                   name="email" value="{{ old ('email') }}">
                            <label for="floatingInput">Email address</label>
                            <span class="text-danger fw-bold">@error('email'){{ $message }} @enderror</span>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control shadow-none" id="floatingPassword" type="password"
                                   placeholder="Password"
                                   name="password">
                            <label for="floatingPassword">Password</label>
                            <span class="text-danger fw-bold">@error('password'){{ $message }} @enderror</span>
                        </div>
                        @if(Session::get('fail'))
                            <div class="text-danger mb-3 fw-bold">{{ Session::get('fail') }}</div>
                        @endif
                        <button class="btn btn-primary w-100 shadow-none" type="submit">Login</button>
                        <div class="mt-3 text-center">
                            I don't have an account, <a href="{{ route ('auth.register') }}">create new </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--        <div class="row" style="margin-top:45px;">--}}
    {{--            <div class="col-md-4 col-md-offset-4">--}}
    {{--                <h3 class="text-center">Login | Backend</h3>--}}
    {{--                <hr>--}}
    {{--                <form action="{{ route('auth.check') }}" method="post">--}}

    {{--                    @if(Session::get('fail'))--}}
    {{--                        <div class="alert alert-danger mb-2 text-center" role="alert">--}}
    {{--                            {{ Session::get('fail') }}--}}
    {{--                        </div>--}}
    {{--                    @endif--}}

    {{--                    @csrf--}}
    {{--                    <div class="form-group">--}}
    {{--                        <label for="">Email</label>--}}
    {{--                        <input type="text" class="form-control" name="email" placehoder="Enter Email address"--}}
    {{--                               value="{{ old ('email') }}">--}}
    {{--                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>--}}
    {{--                    </div>--}}
    {{--                    <div class="form-group">--}}
    {{--                        <label for="">Password</label>--}}
    {{--                        <input type="password" class="form-control" name="password" placehoder="Enter password">--}}
    {{--                        <span class="text-danger">@error('password'){{ $message }} @enderror</span>--}}
    {{--                    </div>--}}
    {{--                    <button type="submit" class="btn btn-block btn-primary">Sign In</button>--}}
    {{--                    <br>--}}
    {{--                    <a href="{{ route ('auth.register') }}">I don't have an account, create new </a>--}}
    {{--                </form>--}}
    {{--            </div>--}}
    {{--        </div>--}}
</div>
</body>
</html>
