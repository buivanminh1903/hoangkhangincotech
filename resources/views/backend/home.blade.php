@extends('backend.layout')
@section('content')
    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="border-bottom">Dashboard</h2>
        <div class="row">
            <div>
                Xin chào {{ $LoggedUserInfo['name'] }}
                {{ $LoggedUserInfo['email'] }}
                <a href="{{ route('auth.logout') }}">Logout</a>
            </div>
            <h1 class="mt-3"
                style="font-size: 72px; background: -webkit-linear-gradient(#0093E9, #80D0C7); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                Welcome to Admin Panel</h1>
        </div>
    </div>
@endsection
