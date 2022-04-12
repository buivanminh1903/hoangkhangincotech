@extends('backend.layout')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Service/ </span> Edit</h4>
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ url('/backend/service/update/' .$service->id) }}" method="post" enctype="multipart/form-data">
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

                                    <img src="{{ asset('image/uploads/service/' . $service->image) }}" Height="100"  class="img img-responsive" />

                                <input type="file" class="form-control" id="basic-default-name"
                                       name="image" >
                            </div>
                        </div>
                        <input type="submit" class="btn btn-outline-success" value="Cập Nhật">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
