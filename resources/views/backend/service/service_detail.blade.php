@extends('backend.layout')
@section('content')
    <!--Start breadcrumb-->
    <div class="hk_breadcrumb" style="max-width: unset; padding: unset">
        <div class="hk_breadcrumb_left">
            <a href="/admin/service"><i class="fa-regular fa-circle-left"></i> Back</a>
        </div>
        <div class="hk_breadcrumb_right">
            <ul class="hk_menu" style="font-family: unset;">
                <li>Admin</li>
                <li><i class="fa-solid fa-angle-right"></i>&nbsp;&nbsp;Service</li>
                <li>
                    <i class="fa-solid fa-angle-right"></i>&nbsp;&nbsp;{{ \Illuminate\Support\Str::limit($title, $limit = 28, $end = '...')}}
                </li>
            </ul>
        </div>
    </div>
    <!--End breadcrumb-->
    <div class="container">
        <div class="row">
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
                <div class="row mb-3">
                    <div class="col-6">
                        <a class="btn btn-info w-100"
                           href="{{'/admin/service/edit/' . $service_detail->id}}"
                        ><i class="fa-regular fa-pen-to-square"></i> Sửa</a>
                    </div>
                    <div class="col-6">
                        <form method="POST" action="{{url('/admin/service/delete/' . $service_detail->id)}}"
                              accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger w-100" title="Xoá"
                                    onclick="return confirm(&quot;Xác nhận xoá bài đăng {{ $service_detail->id }}?&quot;)">
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
                            <h1 class="fw-bolder mb-1">{{$service_detail->title}}</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Posted
                                on {{date('d M, Y', strtotime($service_detail->created_at))}}
                            </div>
                            <!-- Post categories-->
                            Tag: <a class="badge bg-secondary text-decoration-none link-light"
                                    href="#!"></a>
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded"
                                                  src="{{ asset('image/uploads/service/' . $service_detail->image) }}"
                                                  alt="..." style="height: 400px; width: 900px; object-fit: cover;">
                        </figure>
                        <!-- Post content-->
                        <section class="mb-1">
                            <p class="fs-5">{!!$service_detail->content!!}</p>
                        </section>
                    </article>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header">Tìm kiếm</div>
                    <div class="card-body">
                        <div class="input-group">
                            <form class="input-group" type="get" action="{{url('/admin/post/search')}}">
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

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-1">
                    <div class="card-header">Archives</div>
                    <div class="card-body">
                        <ol class="list-unstyled mb-0">
                            <li><a href="#">March 2021</a></li>
                            <li><a href="#">February 2021</a></li>
                            <li><a href="#">January 2021</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
