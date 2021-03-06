@extends('backend.layout')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y pt-0">
        <!--Start breadcrumb-->
        <div class="hk_breadcrumb" style="max-width: unset; padding: unset">
            <div class="hk_breadcrumb_left">
                <a href="/admin/service/detail/{{$service->id}}"><i class="fa-regular fa-circle-left"></i> Back</a>
            </div>
            <div class="hk_breadcrumb_right">
                <ul class="hk_menu" style="font-family: unset;">
                    <li>Admin</li>
                    <li><i class="fa-solid fa-angle-right"></i>&nbsp;&nbsp;Post</li>
                    <li><i class="fa-solid fa-angle-right"></i>&nbsp;&nbsp;Edit</li>
                    <li>
                        <i class="fa-solid fa-angle-right"></i>&nbsp;&nbsp;{{ \Illuminate\Support\Str::limit($service->title, $limit = 28, $end = '...')}}
                    </li>
                </ul>
            </div>
        </div>
        <!--End breadcrumb-->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ url('/admin/service/update/' .$service->id) }}" method="post"
                          enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        @method("put")
                        <input type="hidden" value="{{$service->id}}">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label"
                                   for="basic-default-name">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name"
                                       placeholder="*" name="title" value="{{$service->title}}" required>
                                @if($errors->has('title'))
                                    <p class="text-warning">{{$errors->first('title')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label"
                                   for="basic-default-name">Content</label>
                            <div class="col-sm-10">
                                                            <textarea id="basic-default-message"
                                                                      name="content"
                                                                      required>{{$service->content}}</textarea>
                            </div>
                            <script>
                                CKEDITOR.replace('content');
                            </script>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label"
                                   for="basic-default-name">Image</label>
                            <div class="col-sm-10">

                                <img src="{{ asset('image/uploads/service/' . $service->image) }}" Height="200"
                                     class="img img-responsive mb-3 rounded"/>

                                <input type="file" class="form-control" id="basic-default-name"
                                       name="image">
                            </div>
                        </div>
                        <input type="submit" class="btn btn-outline-success" value="C???p Nh???t">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
