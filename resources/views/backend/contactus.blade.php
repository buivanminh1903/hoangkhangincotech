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
                <div class="m-2">
                @if (session('msg'))
                <div class="alert alert-success">{{session('msg')}}</div>
                @endif
                
                </div>
                <a class="btn btn-outline-info m-2" href="/backend/contactus-add"><i class="bx bx-plus-circle me-1"></i>
                    Thêm liên hệ
                </a>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Subject</th>
                                <th>Messages</th>
                                <th>Names</th>
                                <th>email</th>
                                <th>phone</th>
                                <th>Action</th> 
                            </tr>
                            </thead>
                            <tbody>
                                @if (!empty($contactusList))
                                @foreach ($contactusList as $key => $item)
                            <tr>
                                <td>
                                    <strong>{{$key+1}}</strong>
                                </td>
                                <td>{{$item->subject}}</td>
                                <td>{{$item->messages}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>
                                   {{$item->phone}}
                                </td>
                                <td>
                                <a class="btn btn-info btn-sm"
                                       href="{{'/backend/contactus-edit/' . $item->id}}">
                                       <i class="bx bx-edit-alt me-1"></i> Sửa</a>

                                    <form method="POST" action="{{url ('backend/contactus-delete/' .$item->id)}}"
                                          accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Xoá"
                                                onclick="return confirm(&quot;Xác nhận xoá liên hệ ?&quot;)">
                                            <i
                                                class="fa fa-trash-o" aria-hidden="true"></i><i
                                                class="bx bx-trash me-1"></i> Xoá
                                        </button>
                                    </form>
                                </td>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="4"> Không có người liên hệ </td>
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
