@extends('backend.layout')
@section('content')
    <nav aria-label="breadcrumb" class="fw-bold py-3">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/backend">Home</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="/admin/newletter">NewLetter</a></li>
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


                <form action="{{url ('/admin/newletter/update/' .$dataEdit->id)}}" method="POST">
                    @method("put")
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" placeholder="Nhập Email" value='{{$dataEdit->email}}' name="email">
                            @error('email')
                            <span style="color :red;">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                   
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success">Update</button>
                            <a button type="submit" class="btn btn-warning" href="/admin/newletter">Back</a></button>
                          
                        </div>
                        
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection
