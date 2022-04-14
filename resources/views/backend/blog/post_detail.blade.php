@extends('backend.layout')
@section('content')
    <nav aria-label="breadcrumb" class="fw-bold py-3">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/backend">Home</a></li>
            <li class="breadcrumb-item" aria-current="page">Post List</li>
            <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
        </ol>
    </nav>
    <div class="container mb-3">
        <div class="row">
            <div class="col-md-8">
                <div class="row mb-3">
                    <div class="col-6">
                        <a class="btn btn-info w-100"
                           href="{{'/backend/post/edit/' . $post_detail->post_id}}"
                        ><i class="fa-regular fa-pen-to-square"></i> Sửa</a>
                    </div>
                    <div class="col-6">
                        <form method="POST" action="{{url('/backend/post/delete/' . $post_detail->post_id)}}"
                              accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger w-100" title="Xoá"
                                    onclick="return confirm(&quot;Xác nhận xoá bài đăng {{ $post_detail->post_id }}?&quot;)">
                                <i class="fa-regular fa-trash-can"></i> Xoá
                            </button>
                        </form>
                    </div>
                </div>
                <div class="row" style="border-bottom: 1px solid #ddd">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">{{$post_detail->title}}</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Posted
                                on {{date('d M, Y', strtotime($post_detail->post_created_at))}}
                            </div>
                            <!-- Post categories-->
                            <a class="badge bg-secondary text-decoration-none link-light"
                               href="#!">{{$post_detail->category_name}}</a>
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded"
                                                  src="{{ asset('image/uploads/post/' . $post_detail->image) }}"
                                                  alt="..." style="height: 400px; width: 900px; object-fit: cover;">
                        </figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5">{!!$post_detail->content!!}</p>
                        </section>
                    </article>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header">Tìm kiếm</div>
                    <div class="card-body">
                        <div class="input-group">
                            <form class="input-group" type="get" action="{{url('/backend/post/search')}}">
                                <input class="form-control" type="search" placeholder="Enter search key..." name="key"
                                       autocomplete="off" required/>
                                <button class="btn btn-outline-success" id="button-search" type="submit">Tìm</button>
                            </form>
                        </div>
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
    </div>
@endsection
