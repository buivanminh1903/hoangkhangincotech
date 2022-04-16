@extends('backend.layout')
@section('content')
    <nav aria-label="breadcrumb" class="fw-bold py-3">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Our Project</li>
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
                <div style="float: right; padding-top: 20px" >
                <a   class="btn btn-outline-info m-2" href="/admin/insert_project"><i class="bx bx-plus-circle me-1"></i>
                    Thêm dịch
                    vụ</a>
                </div>
                <div style="padding-top: 80px" class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Functions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($our_project as $item)
                            <tr>
                                <td>
                                    <strong>{{$item->id}}</strong>
                                </td>
                                <td>{{$item ->titles}}</td>
                                <td>{{$item->descriptions}}</td>
                                <td><img src="{{ asset('image/uploads/ourproject/' . $item->images) }}" Height="100"  class="img img-responsive" /></td>


                                <td>{{$item ->categorys}}</td>


<td>
                                    <a class="btn btn-info btn-sm"
                                       href="/admin/edit_project/{{$item->id}}"
                                    ><i class="bx bx-edit-alt me-1"></i> Sửa</a
                                    >
                                    <form method="POST" action="{{url('/delete-project'. '/' . $item -> id)}}"
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
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
