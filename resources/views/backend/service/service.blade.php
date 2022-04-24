@extends('backend.layout')
@section('content')
    <!--Start breadcrumb-->
    <div class="hk_breadcrumb" style="max-width: unset; padding: unset">
        <div class="hk_breadcrumb_left">
            <span class="hk_breadcrumb__dot"></span> Service
        </div>
        <div class="hk_breadcrumb_right">
            <ul class="hk_menu" style="font-family: unset;">
                <li>Admin</li>
                <li><i class="fa-solid fa-angle-right"></i>&nbsp;&nbsp;All Service</li>
            </ul>
        </div>
    </div>
    <!--End breadcrumb-->
    <div class="container mb-3">
        <div class="row">
            <div class="">
                <div class="row">
                    @if ($message = Session::get('success'))
                        <div class="col-12">
                            <div class="alert alert-success alert-dismissible fade show mb-3" role="alert"
                                 style="margin: 8px">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                            </div>
                        </div>
                    @endif
                    @if($errors->any())
                        <div class="col-12">
                            <div class="text-capitalize alert alert-danger"
                                 style="border-radius: 0.375rem; box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 12px; margin: 8px">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-12">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop" style="margin: 8px">
                                Thêm Service
                            </button>
                        </div>
                    </div>
                </div>
                <div style="display: flex; flex-wrap: wrap; justify-content: center">
                    @foreach($service as $item)
                        <div class="card admin__service_card">
                            <img src="{{ asset('image/uploads/service/' . $item->image) }}" class="card-img-top"
                                 alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$item->title}}</h5>
                                <p class="card-text">{{$item->short_content}}</p>
                                <a href="/admin/service/detail/{{$item->id}}" class="btn btn-sm btn-info"><i
                                        class="fa-regular fa-eye"></i> Xem</a>
                                <form method="POST" action="{{url('/admin/service/delete/' . $item->id )}}"
                                      accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Xoá"
                                            onclick="return confirm(&quot;Xác nhận xoá Service {{$item->title}}?&quot;)">
                                        <i class="fa-regular fa-trash-can"></i> Xoá
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
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
                                        <form action="{{ url('/admin/service/add') }}" method="post"
                                              enctype="multipart/form-data">
                                            {!! csrf_field() !!}
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label"
                                                       for="basic-default-name">Title</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="basic-default-name"
                                                           placeholder="*" name="title" value="{{old('title')}}"
                                                           required>
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
                                                           placeholder="*" name="short_content"
                                                           value="{{old('short_content')}}" required>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label"
                                                       for="basic-default-name">Content</label>
                                                <div class="col-sm-10">
                                                    <textarea name="content">{{old('content')}}</textarea>
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
    </div>
@endsection
