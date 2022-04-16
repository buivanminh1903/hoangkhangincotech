<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row" style="margin-top:45px;">
        <div class="col-md-4 col-md-offset-4">
            <h3 class="text-center">Register | Backend</h3>
            <hr>
            <form action="{{ route('auth.save') }}" method="post">

                @if(Session::get('success'))
                    <div class="alert alert-success mb-2 text-center" role="alert">
                        {{ Session::get('success') }} <a href="{{ route('auth.login') }}"><span
                                style="font-weight: bold">đăng nhập</span></a>
                    </div>
                @endif

                @if(Session::get('fail'))
                    <div class="alert alert-danger mb-2 text-center" role="alert">
                        {{ Session::get('fail') }}
                    </div>
                @endif
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" placehoder="Enter Full Name"
                           value="{{ old('name') }}">
                    <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placehoder="Enter Email address"
                           value="{{ old ('email') }}">
                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" placehoder="Enter password">
                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                </div>
                <button type="submit" class="btn btn-block btn-primary">Register</button>
                <br>
                <a href="{{ route('auth.login') }}">I already have an acount, sign in</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
