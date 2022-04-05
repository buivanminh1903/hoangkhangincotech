@extends('backend.layout')
@section('content')
    <nav aria-label="breadcrumb" class="fw-bold py-3">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/backend">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Category List</li>
        </ol>
    </nav>
    <div class="container mb-3">
        <div class="row">
            <div class="backend__card p-3">
                <div class="m-2">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                            <strong>{{ $message }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-success m-2" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                    Thêm Danh Mục
                </button>
                <div class="card-body m-2 p-0">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Created at</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $item)
                                <tr>
                                    <td>
                                        <strong>{{ $item->id }}</strong>
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ date('d-m-Y', strtotime($item->created_at)) }}</td>
                                    <td>
                                        <a class="btn btn-info btn-sm"
                                           href="{{'/backend/category/edit/' . $item->id}}"
                                        ><i class="fa-regular fa-pen-to-square"></i> Sửa</a
                                        >
                                        <form method="POST" action="{{url('/backend/category/delete/' . $item->id)}}"
                                              accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Xoá"
                                                    onclick="return confirm(&quot;Xác nhận xoá danh mục {{ $item->name }}?&quot;)">
                                                <i class="fa-regular fa-trash-can"></i> Xoá
                                            </button>
                                        </form>
                                    </td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                 aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Thêm Danh Mục</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-0">
                            <div class="col-xl">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{ url('/backend/add-category') }}" method="post">
                                            {!! csrf_field() !!}
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-default-fullname">Tên danh
                                                    mục</label>
                                                <input type="text" class="form-control" id="basic-default-fullname"
                                                       placeholder="Phần mềm" name="name" required value="{{old('name')}}"/>
                                                @if($errors->has('name'))
                                                    <p class="text-warning">{{$errors->first('name')}}</p>
                                                @endif
                                            </div>
                                            <input type="submit" class="btn btn-outline-success" value="Thêm">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
