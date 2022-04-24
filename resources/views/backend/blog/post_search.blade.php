@extends('backend.layout')
@section('content')
    <!--Start breadcrumb-->
    <div class="hk_breadcrumb" style="max-width: unset; padding: unset">
        <div class="hk_breadcrumb_left">
            <span class="hk_breadcrumb__dot"></span> Post
        </div>
        <div class="hk_breadcrumb_right">
            <ul class="hk_menu" style="font-family: unset;">
                <li>Admin</li>
                <li><i class="fa-solid fa-angle-right"></i>&nbsp;&nbsp;Post</li>
                <li><i class="fa-solid fa-angle-right"></i>&nbsp;&nbsp;Search</li>
            </ul>
        </div>
    </div>
    <!--End breadcrumb-->
    <div class="container mb-3">
        <div class="row" style="border-bottom: 1px solid #ddd">
            <div class="col-md-8">
                @if ($result_total[0]->total == 0)
                    <div class="row">
                        <p class="mt-3"
                           style="font-family: 'Montserrat', sans-serif">Rất tiếc, không tìm thấy kết quả nào phù hợp
                            với từ khóa <span class="fw-bold">"{{$key}}"</span>
                        </p>
                    </div>
                @endif
                @if ($result_total[0]->total >= 1)
                    <div class="row">
                        <p class="mt-3"
                           style="font-family: 'Montserrat', sans-serif">Tìm thấy <span
                                class="fw-bold">{{$result_total[0]->total}}</span> kết quả với từ
                            khoá
                            <span class="fw-bold">"{{$key}}"</span>
                        </p>
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
                                                        href="/admin/post/detail/{{$item->id}}.html">{{$item->title}}</a>
                                                </h5>
                                                <p class="card-text">This is a wider card with supporting text below as
                                                    a
                                                    natural
                                                    lead-in to additional content. This content is a little bit
                                                    longer.</p>
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
                @endif
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
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
