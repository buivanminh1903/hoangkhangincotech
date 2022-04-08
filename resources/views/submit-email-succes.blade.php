@extends('layouts')
@section('content')
    <div class="container text-center">
        @if ($message)
            <div
                style="font-size: 48px; font-weight: 800; background: -webkit-linear-gradient(45deg, #09009f, #00ff95 80%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; margin: 100px 0">{{$message}}</div>
        @endif
        <a href="/" style="margin: 50px 0; display: inline-block">Về Trang Chủ</a>
    </div>
@endsection
