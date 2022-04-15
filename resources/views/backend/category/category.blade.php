@extends('backend.layout')
@section('content')
    <!--Start breadcrumb-->
    <div class="hk_breadcrumb" style="max-width: unset; padding: unset">
        <div class="hk_breadcrumb_left">
            <span class="hk_breadcrumb__dot"></span> Categories
        </div>
        <div class="hk_breadcrumb_right">
            <ul class="hk_menu" style="font-family: unset;">
                <li>Admin</li>
                <li><i class="fa-solid fa-angle-right"></i>&nbsp;&nbsp;Categories</li>
            </ul>
        </div>
    </div>
    <!--End breadcrumb-->
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
                <div class="m-2">
                    @if($errors->any())
                        <div class="text-capitalize alert alert-danger"
                             style="border-radius: 0.375rem; box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 12px;">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
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
                                           href="{{'/admin/category/edit/' . $item->id}}"
                                        ><i class="fa-regular fa-pen-to-square"></i> Sửa</a
                                        >
                                        <form method="POST" action="{{url('/admin/category/delete/' . $item->id)}}"
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
                                        <form action="{{ url('/admin/category/add') }}" method="post">
                                            {!! csrf_field() !!}
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-default-fullname">Tên danh
                                                    mục</label>
                                                <input type="text" class="form-control" id="basic-default-fullname"
                                                       placeholder="Phần mềm" name="name" required
                                                       value="{{old('name')}}"/>
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
