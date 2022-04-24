@extends('backend.layout')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y pt-0">
        <!--Start breadcrumb-->
        <div class="hk_breadcrumb" style="max-width: unset; padding: unset">
            <div class="hk_breadcrumb_left">
                <a href="/admin/categories"><i class="fa-regular fa-circle-left"></i> Back</a>
            </div>
            <div class="hk_breadcrumb_right">
                <ul class="hk_menu" style="font-family: unset;">
                    <li>Admin</li>
                    <li><i class="fa-solid fa-angle-right"></i>&nbsp;&nbsp;Categories</li>
                    <li><i class="fa-solid fa-angle-right"></i>&nbsp;&nbsp;Edit</li>
                    <li><i class="fa-solid fa-angle-right"></i>&nbsp;&nbsp;{{$categories->name}}</li>
                </ul>
            </div>
        </div>
        <!--End breadcrumb-->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ url('/admin/category/update/' .$categories->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method("put")
                            <input type="hidden" name="id" value="{{$categories->id}}">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Tên danh
                                    mục</label>
                                <input type="text" class="form-control" id="basic-default-fullname"
                                       placeholder="Phần mềm" name="name" value="{{$categories->name}}" required/>
                            </div>
                            <input type="submit" class="btn btn-outline-success" value="Cập Nhật">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
