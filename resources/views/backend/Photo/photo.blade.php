@extends('backend.layout')
@section('content')
    <nav aria-label="breadcrumb" class="fw-bold py-3">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Photo List</li>
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
                <a class="btn btn-outline-info m-2" href="/admin/photo/create"><i class="bx bx-plus-circle me-1"></i>
                    Add Photo</a>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th> 
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($photolist as $key =>$item)
                            <tr>
                                <td> <strong> {{$key+1}} </strong> </td>
                                <td> {{$item->title}} </td>
                                <td><img src="{{ asset('image/uploads/photo_blog/' . $item->images) }}" Height="100"  class="img img-responsive" /></td>
                               
                                <td>
                                    <a class="btn btn-info btn-sm"
                                       href="{{'/admin/photo/edit/' . $item->id}}"
                                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                    >
                                    <form method="POST" action="{{url ('/admin/photo/delete/' .$item->id)}}"
                                          accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Xoá"
                                                onclick="return confirm(&quot;Xác nhận xoá hình ảnh ?&quot;)">
                                            <i
                                                class="fa fa-trash-o" aria-hidden="true"></i><i
                                                class="bx bx-trash me-1"></i> Delete
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
