@extends('backend.layout')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Category/ </span> Edit</h4>
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
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
