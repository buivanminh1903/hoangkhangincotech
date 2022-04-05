@extends('backend.layout')
@section('content')
    <nav aria-label="breadcrumb" class="fw-bold py-3">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/backend">Home</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="/backend/photo">Photo</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
    </nav>
    <div class="container mb-3">
        <div class="row">
            <div class="backend__card p-3">
            <div class="m-2">
            @if (session('msg'))
                <div class="alert alert-success">{{session('msg')}}</div>
                @endif

                @if ($errors->any())
                <div class="alert alert-danger"> Vui lòng nhập Email</div>
                @endif
              
                <form action="{{url ('backend/photo-update/' .$dataEdit->id)}}" enctype="multipart/form-data" method="POST">
                @method("put")
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" name="title" value='{{$dataEdit->title}}' placeholder="Title">
                            @error('title')
                            <span style="color :red;">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Image</label>
                        <div class="col-sm-10">
                        <input class="form-control" name="images" type="file" id="photo" value='{{$dataEdit->images}}'>
                        @error('images')
                            <span style="color :red;">{{$message}}</span>
                        @enderror
                        </div>
                    </div>
                   
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success">Update</button>
                            <a button type="submit" class="btn btn-warning" href="/backend/photo">Back</a></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
