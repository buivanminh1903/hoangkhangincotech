@extends('backend.layout')
@section('content')
    <div style="left: 50%; top: 50%; position: absolute; transform: translateX(-50%) translateY(-50%)">
        <h2 class="border-bottom">Dashboard</h2>
        <div class="row">
            <div>
                <img src="image/uploads/user/{{ $LoggedUserInfo['img'] }}"
                     style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%; border: 2px solid #ddd">
                <strong
                    class="text-capitalize text-success">{{ $LoggedUserInfo['name'] }}</strong> |
                {{ $LoggedUserInfo['email'] }}
                <a class="btn btn-sm btn-outline-dark" href="{{ route('auth.logout') }}"><i
                        class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
            </div>
            <h2 class="mt-3"
                style="background: -webkit-linear-gradient(#0093E9, #80D0C7); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                Welcome {{Session::get('user_name')}} {{Session::get('')}} to Admin Panel</h2>
        </div>
    </div>
@endsection
