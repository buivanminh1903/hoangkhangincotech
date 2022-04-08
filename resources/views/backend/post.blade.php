@extends('backend.layout')
@section('content')
    <nav aria-label="breadcrumb" class="fw-bold py-3">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/backend">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Post List</li>
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
                <a class="btn btn-outline-info m-2" href="/backend/post-create"><i class="bx bx-plus-circle me-1"></i>
                    Thêm dịch
                    vụ</a>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Create At</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <strong>1</strong>
                                </td>
                                <td>Minh</td>
                                <td>Mieu ta</td>
                                <td><img src="../image/back_slider.png" width="50px"
                                         style="border-radius: 4px"></td>
                                <td>29/03/2022</td>
                                <td>
                                    <a class="btn btn-info btn-sm"
                                       href=""
                                    ><i class="bx bx-edit-alt me-1"></i> Sửa</a
                                    >
                                    <form method="POST" action=""
                                          accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Xoá"
                                                onclick="return confirm(&quot;Xác nhận xoá dịch vụ ?&quot;)">
                                            <i
                                                class="fa fa-trash-o" aria-hidden="true"></i><i
                                                class="bx bx-trash me-1"></i> Xoá
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
