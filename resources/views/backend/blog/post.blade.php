@extends('backend.layout')
@section('content')
    <nav aria-label="breadcrumb" class="fw-bold py-3">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Post List</li>
        </ol>
    </nav>
    <div class="container mb-3">
        <div class="row" style="border-bottom: 1px solid #ddd">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-12">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success mb-3 w-100" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">
                            Thêm Bài Đăng
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        @foreach($post as $item)
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('image/uploads/post/' . $item->image) }}"
                                             class="img-fluid rounded-start" alt="..."
                                             style="height: 100%; width: 100%; object-fit: cover;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><a
                                                    href="/admin/post/detail/{{$item->id}}">{{$item->title}}</a>
                                            </h5>
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural
                                                lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                    ago</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header">Tìm kiếm</div>
                    <div class="card-body">
                        <form class="input-group" type="get" action="{{url('/admin/post/search')}}">
                            <input class="form-control" type="search" placeholder="Enter search key..." name="key"
                                   autocomplete="off" required/>
                            <button class="btn btn-outline-success" id="button-search" type="submit">Tìm</button>
                        </form>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <ul class="list-unstyled mb-0">
                                    @foreach($categories as $item)
                                        <li><a href="#!">{{$item->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">Archives</div>
                    <div class="card-body">
                        <ol class="list-unstyled mb-0">
                            <li><a href="#">March 2021</a></li>
                            <li><a href="#">February 2021</a></li>
                            <li><a href="#">January 2021</a></li>
                            <li><a href="#">December 2020</a></li>
                            <li><a href="#">November 2020</a></li>
                            <li><a href="#">October 2020</a></li>
                            <li><a href="#">September 2020</a></li>
                            <li><a href="#">August 2020</a></li>
                            <li><a href="#">July 2020</a></li>
                            <li><a href="#">June 2020</a></li>
                            <li><a href="#">May 2020</a></li>
                            <li><a href="#">April 2020</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Create Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                 aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Thêm Bài Đăng</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-0">
                            <div class="col-xl">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{ url('/admin/post/add') }}" method="post"
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
