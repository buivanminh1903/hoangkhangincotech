@extends('backend.layout')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y pt-0">
        <!--Start breadcrumb-->
        <div class="hk_breadcrumb" style="max-width: unset; padding: unset">
            <div class="hk_breadcrumb_left">
                <a href="/admin/post/detail/{{$post->id}}"><i class="fa-regular fa-circle-left"></i> Back</a>
            </div>
            <div class="hk_breadcrumb_right">
                <ul class="hk_menu" style="font-family: unset;">
                    <li>Admin</li>
                    <li><i class="fa-solid fa-angle-right"></i>&nbsp;&nbsp;Post</li>
                    <li><i class="fa-solid fa-angle-right"></i>&nbsp;&nbsp;Edit</li>
                    <li>
                        <i class="fa-solid fa-angle-right"></i>&nbsp;&nbsp;{{ \Illuminate\Support\Str::limit($post->title, $limit = 28, $end = '...')}}
                    </li>
                </ul>
            </div>
        </div>
        <!--End breadcrumb-->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ url('/admin/post/update/' .$post->id) }}" method="post"
                          enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        @method("put")
                        <input type="hidden" value="{{$post->id}}">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label"
                                   for="basic-default-name">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name"
                                       placeholder="*" name="title" value="{{$post->title}}" required>
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
                                                                      required>{{$post->content}}</textarea>
                            </div>
                            <script>
                                CKEDITOR.replace('content');
                            </script>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label"
                                   for="basic-default-name">Image</label>
                            <div class="col-sm-10">
                                <img alt="{{$post->image}}" height="200" src="{{asset('image/uploads/post/' . $post->image)}}"
                                     class="mb-3 rounded">
                                <input type="file" class="form-control" id="basic-default-name"
                                       name="image">
                            </div>
                        </div>
                        <div class=" row mb-3">
                            <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Category
                                id</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="exampleFormControlSelect1"
                                        aria-label="Default select example" name="category_id"
                                        required>
                                    @foreach($categories as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-outline-success" value="Cập Nhật">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
