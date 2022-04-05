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

                <form action="{{url ('backend/Contactus/contactus-update/' .$update->id)}}" method="POST">
                    @method ("put")
                    <div class="mb-3">
                        <label for=""> Subject  </label>
                        <input type="text" class="form-control" name="subject" placeholder="Subject" 
                        value='{{$update->subject}}'/>
                        @error('subject')
                        <span style="color: red;">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for=""> Messages  </label>
                        <input type="text" class="form-control" name="messages" placeholder="Messages"
                        value='{{$update->messages}}'/>
                        @error('messages')
                        <span style="color: red;">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for=""> Name </label>
                        <input type="text" class="form-control" name="names" placeholder="Name"
                        value='{{$update->names}}'/>
                        @error('name')
                        <span style="color: red;">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for=""> Email </label>
                        <input type="text" class="form-control" name="email" placeholder="Email"
                        value='{{$update->email}}'/>
                        @error('email')
                        <span style="color: red;">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3"> 
                        <label for=""> Phone </label>
                        <input type="number" class="form-control" name="phone" placeholder="Phone"
                        value='{{$update->phone}}'/>
                        @error('phone')
                        <span style="color: red;">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3"> 
                        <label for=""> Position </label>
                        
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

                    <button type="submit" class="btn btn-info">  Update Contact  </button>
                    <a href="/backend/Contactus/contactus" class="btn btn-warning"> Back </a>
                @csrf
                </form>
             
            </div>
        </div>
    </div>
@endsection
