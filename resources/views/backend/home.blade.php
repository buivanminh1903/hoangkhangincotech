@extends('backend.layout')
@section('content')
    <div style="margin: 165px 100px 100px">
        <h2 class="border-bottom">Dashboard</h2>
        <div class="row">
            <div>
                Xin chào User <strong class="text-capitalize text-success">{{ $LoggedUserInfo['name'] }}</strong> |
                {{ $LoggedUserInfo['email'] }}
                <a class="btn btn-sm btn-outline-dark" href="{{ route('auth.logout') }}"><i
                        class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
            </div>
            <h1 class="mt-3"
                style="background: -webkit-linear-gradient(#0093E9, #80D0C7); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                Welcome to Admin Panel</h1>
        </div>
    </div>
@endsection
