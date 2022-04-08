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
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-success m-2" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                    Thêm Service
                </button>
                <div class="card-body m-2 p-0">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Short Content</th>
                                <th>Content</th>
                                <th>Image</th>
                                <th>Created at</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($service as $item)
                                <tr>
                                    <td>
                                        <strong>{{$item->id}}</strong>
                                    </td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->short_content}}</td>
                                    <td>{{\Illuminate\Support\Str::limit($item->content, $limit = 100, $end = '...')}}</td>
                                    <td style="display: flex; flex-direction: column"><img
                                            src="{{ asset('image/uploads/service/' . $item->image) }}" width="100"
                                            class="rounded m-1"><span class="text-muted">{{ $item->image }}</span></td>
                                    <td>{{date('d-m-Y', strtotime($item->created_at))}}</td>
                                    <td>
                                        <a class="btn btn-info btn-sm"
                                           href="{{'/backend/service/edit/' . $item->id }}"
                                        ><i class="fa-regular fa-pen-to-square"></i> Sửa</a
                                        >
                                        <form method="POST" action="{{url('/backend/service/delete/' . $item->id )}}"
                                              accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Xoá"
                                                    onclick="return confirm(&quot;Xác nhận xoá Service {{$item->title}}?&quot;)">
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
            <!-- Create Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                 aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Thêm Service</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-0">
                            <div class="col-xl">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{ url('/backend/add-service') }}" method="post"
                                              enctype="multipart/form-data">
                                            {!! csrf_field() !!}
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label"
                                                       for="basic-default-name">Title</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="basic-default-name"
                                                           placeholder="*" name="title" required>
                                                    @if($errors->has('title'))
                                                        <p class="text-warning">{{$errors->first('title')}}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label"
                                                       for="basic-default-name">Short Content</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="basic-default-name"
                                                           placeholder="*" name="short_content" required>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label"
                                                       for="basic-default-name">Content</label>
                                                <div class="col-sm-10">
                                                    <textarea name="content" required></textarea>
                                                    @if($errors->has('content'))
                                                        <p class="text-warning">{{$errors->first('content')}}</p>
                                                    @endif
                                                </div>
                                                <script>
                                                    CKEDITOR.replace('content');
                                                </script>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label"
                                                       for="basic-default-name">Image</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" id="basic-default-name"
                                                           name="image" required>
                                                </div>
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
