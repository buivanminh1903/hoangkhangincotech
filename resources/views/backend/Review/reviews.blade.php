@extends('backend.layout')
@section('content')
    <nav aria-label="breadcrumb" class="fw-bold py-3">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Review</li>
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
                <a class="btn btn-outline-info m-2" href="/admin/reviews/add"><i class="bx bx-plus-circle me-1"></i>
                    Thêm Reivew
                </a>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Names</th>
                                <th>Star</th>
                                <th>Content</th>
                                <th>Position</th>
                                <th>Image</th>
                                <th>Action</th> 
                            </tr>
                            </thead>
                            <tbody>
                                @if (!empty($reviewsList))
                                @foreach ($reviewsList as $key => $item)
                            <tr>
                                <td>
                                    <strong>{{$key+1}}</strong>
                                </td>
                                <td>{{$item->names}}</td>
                                <td>{{$item->star}}</td>
                                <td>{{$item->content}}</td>
                                <td>{{$item->position}}</td>
                                <td><img src="{{ asset('image/uploads/reviews/' . $item->image) }}" Height="100"  class="img img-responsive" /></td>
                                <td>
                                <a class="btn btn-info btn-sm"
                                       href="{{'/admin/reviews/edit/' . $item->id}}">
                                       <i class="bx bx-edit-alt me-1"></i> Sửa</a>

                                    <form method="POST" action="{{url ('admin/reviews/delete/' .$item->id)}}"
                                          accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Xoá"
                                                onclick="return confirm(&quot;Xác nhận xoá Review ?&quot;)">
                                            <i
                                                class="fa fa-trash-o" aria-hidden="true"></i><i
                                                class="bx bx-trash me-1"></i> Xoá
                                        </button>
                                    </form>
                                </td>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="4"> Không có Review nào </td>
                                </tr>
                                @endif
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
