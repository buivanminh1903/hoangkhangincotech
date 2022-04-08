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
                
                @if (session('msg'))
                <div class="alert alert-success">{{session('msg')}}</div>
                @endif
                
                @if ($errors->any())
                    <div class="alert alert-danger">  Dữ liệu nhập không hợp lệ </div>
                @endif

                <form action="{{url ('backend/Review/reviews-update/' .$update->id)}}" method="POST">
                    @method ("put")
                    <div class="mb-3">
                        <label for=""> Subject  </label>
                        <input type="text" class="form-control" name="names" placeholder="names" 
                        value='{{$update->names}}'/>
                        @error('names')
                        <span style="color: red;">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for=""> star  </label>
                        <input type="text" class="form-control" name="star" placeholder="star"
                        value='{{$update->star}}'/>
                        @error('star')
                        <span style="color: red;">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for=""> content </label>
                        <input type="text" class="form-control" name="content" placeholder="content"
                        value='{{$update->content}}'/>
                        @error('name')
                        <span style="color: red;">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for=""> Email </label>
                        <input type="text" class="form-control" name="position" placeholder="position"
                        value='{{$update->position}}'/>
                        @error('position')
                        <span style="color: red;">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3"> 
                        <label for=""> image </label>
                        <input type="text" class="form-control" name="image" placeholder="image"
                        value='{{$update->image}}'/>
                        @error('phone')
                        <span style="color: red;">{{$message}}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-info">  Update Review  </button>
                    <a href="/backend/contactus" class="btn btn-warning"> Back </a>
                @csrf
                </form>
             
            </div>
        </div>
    </div>
@endsection
