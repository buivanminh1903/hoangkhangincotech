@extends('backend.layout')
@section('content')
    <nav aria-label="breadcrumb" class="fw-bold py-3">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/backend">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Reviews</li>
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

                <form action=""  enctype="multipart/form-data" method="POST">
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
                        <select  class="form-control text-select" name="star" id="exampleFormControlSelect1"
                        value="{{old('star')}}">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>        
                        </select>
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
                        <select id="" class="form-control text-select" name="position" id="exampleFormControlSelect1"
                        value="{{old('position')}}">
                            <option>Trưởng phòng</option>
                            <option>Kế toán</option>
                            <option>Quản lý</option>
                            <option>Nhân viên</option>
                            <option>Tiếp tân</option>
                         
                        </select>
                        @error('position')
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
