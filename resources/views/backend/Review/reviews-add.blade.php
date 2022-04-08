@extends('backend.layout')
@section('content')
    <nav aria-label="breadcrumb" class="fw-bold py-3">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/backend">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact-us</li>
        </ol>
    </nav>
    <div class="container mb-3">
        <div class="row">
            <div class="backend__card p-3">
                <div class="m-2">
                @if (session('msg'))
                <div class="alert alert-success">{{session('msg')}}</div>
                @endif
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">  Dữ liệu nhập không hợp lệ </div>
                @endif

                <form action="" method="POST">
                    <div class="mb-3">
                        <label for=""> names  </label>
                        <input type="text" class="form-control" name="names" placeholder="names" 
                        value="{{old('names')}}"/>
                        @error('subject')
                        <span style="color: red;">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for=""> star  </label>
                        <input type="text" class="form-control" name="star" placeholder="star"
                        value="{{old('star')}}"/>
                        @error('star')
                        <span style="color: red;">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for=""> content </label>
                        <input type="text" class="form-control" name="content" placeholder="content"
                        value="{{old('content')}}"/>
                        @error('content')
                        <span style="color: red;">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for=""> position </label>
                        <input type="text" class="form-control" name="position" placeholder="position"
                        value="{{old('position')}}"/>
                        @error('position')
                        <span style="color: red;">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3"> 
                        <label for=""> image </label>
                        <input type="text" class="form-control" name="image" placeholder="image"
                        value="{{old('image')}}"/>
                        @error('image')
                        <span style="color: red;">{{$message}}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-info">  Add-Reviews  </button>
                    <a href="/backend/Review/reviews" class="btn btn-warning"> Back </a>
                @csrf
                </form>
             
            </div>
        </div>
    </div>
@endsection
