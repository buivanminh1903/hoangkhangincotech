@extends('backend.layout')
@section('content')

    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="border-bottom">Dashboard</h2>
        <div class="row">
            <div class="table table-hover">
                    <thead>
                        <th>name</th>
                        <th>Email</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $LoggedUserInfo['name'] }}</td>
                            <td>{{ $LoggedUserInfo['email'] }}</td>
                            <td><a href="{{ route('auth.logout') }}">Logout</a></td>
                        </tr>
                    </tbody>
                </div>
            <h1 class="mt-3"
                style="font-size: 72px; background: -webkit-linear-gradient(#0093E9, #80D0C7); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                Welcome to Admin Panel</h1>
        </div>
    </div>
@endsection
