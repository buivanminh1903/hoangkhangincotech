@extends('layouts')
@section('content')


    <div style="background-color: #f0f4f8;">
        <!--Start breadcrumb-->
        <div class="hk_breadcrumb">
            <div class="hk_breadcrumb_left">
                <span class="hk_breadcrumb__dot"></span> News
            </div>
            <div class="hk_breadcrumb_right">
                <ul class="hk_menu">
                    <li><a href="/">Home</a></li>
                    <li><i class="fa-solid fa-angle-right"></i>&nbsp;&nbsp;<a href="/bai-viet">News</a></li>
                    <li>
                        <i class="fa-solid fa-angle-right"></i>&nbsp;&nbsp;{{ \Illuminate\Support\Str::limit($post_detail->title, $limit = 40, $end = '...')}}
                    </li>
                </ul>
            </div>
        </div>
        <!--End breadcrumb-->
    </div>

    <!-- Nội dung New
        ---------------------->
    <div class="container" style="max-width: 1170px;">
        <div id="new-connten" class="row">
            <!-- Nội Dung Bên Phải  -->
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                <!-- chi tiết nội dung bài viết -->
                <div class="detail-news">
                    <img class="banner-new" src="{{asset('image/uploads/post/' . $post_detail->image )}}" alt="#"/>
                    <!-- --------------- -->
                    <div class="detail-connten">
                        <!-- ngày tháng đăng , người đăng -->
                        <div>
                            <span style="color: gray;"><i style=" color: rgb(2, 139, 254);"
                                                          class="fa-solid fa-calendar-check"></i> {{date('d M, Y', strtotime($post_detail->created_at))}} / By<a
                                    class="author"
                                    href="#">John Doe</a></span>
                            <!-- tiêu đề và nội dung -->
                            <h3 id="title-news">{{$post_detail->title}}</h3>
                            <p class="text-new-content">{!!$post_detail->content!!}</p>
                        </div>
                    </div>
                </div>
                <!-- Theo dõi News -->
                <div>

                    <div class="follow-new">
                        <a class="text-follow-news">StartUp Software Development </a>
                        <div class="icon-news">

                            <a href="#" class="follow-icon-news" style="padding-left: 13px; padding-right: 13px;"><i
                                    class="fa-brands fa-facebook-f"></i></a>

                            <a href="#" class="follow-icon-news"><i class="fa-brands fa-twitter"></i></a>

                            <a href="#" class="follow-icon-news"><i class="fa-brands fa-linkedin-in"></i></a>

                            <a href="#" class="follow-icon-news"><i class="fa-brands fa-instagram"></i></a>
                        </div>

                    </div>
                </div>
                <!-- Bài Đăng gần đây -->
                <div class="row" style="margin-top: 50px;">
                    <div class="blogdetailds__recentpost">Recent Post</div>
                    @foreach($recent_post as $item)
                        <div class="col-md-6">
                            <a href="/bai-viet/{{$item->id}}-{{Str::slug($item->title, '-')}}.html"
                               class="recent-post-box">
                                <div class="recent-box-time">
                                    <h2 class="recent-box-day">{{date('d', strtotime($item->created_at))}}</h2>
                                    <p>{{date('M', strtotime($item->created_at))}}</p>
                                </div>
                                <img class="recent-img" src="{{asset('image/uploads/post/' . $item->image )}}"/>
                                <div class="recent-box-title">
                                    <div class="recent-post-text-box">
                                        <h4 class="title-recent-post">{{$item->title}}</h4>
                                        <p>{{ \Illuminate\Support\Str::limit($item->short_content, $limit = 85, $end = '...')}}</p>
                                    </div>
                                </div>
                                <div class="btn-join-post">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <!-- Bình Luận -->
                <div class="comments-box-full">
                    <H3 id="title-news">5 Comments</H3>
                    <div class="comnents-news-box">
                        <div class="comment-flex">
                            <div class="img-comment">
                                <img src="/image/img-comment1.png"/>
                            </div>
                            <div>
                                <div class="title-comment">Marts Davis <span class="vline-comment"></span> Jan 23, 2021
                                </div>
                                <div class="content-comment">Delivered ye sportsmen zealously arranging frankness
                                    estimable
                                    as.
                                    Nay any article musical shyness yet sixteen yet blushes. Entire its the did.
                                </div>
                                <div class="btn-reply-comment"><img style="padding-right:10px ; padding-bottom:1px ;"
                                                                    src="/image/share-comment.png"/><a>REPLY</a>
                                </div>
                            </div>
                        </div>
                        <!-- Bình Luận Tiếp Theo -->
                        <div class="in-comnents-news-box">
                            <div class="comment-flex">
                                <div class="img-comment">
                                    <img src="/image/img-comment2.png"/>
                                </div>
                                <div>
                                    <div class="title-comment">Emma Sara <span class="vline-comment"></span> Feb 29,
                                        2021
                                    </div>
                                    <div class="content-comment">Delivered ye sportsmen zealously arranging frankness
                                        estimable as.
                                        Nay musical shyness yet sixteen yet blushes. Entire
                                    </div>
                                    <div class="btn-reply-comment"><img
                                            style="padding-right:10px ; padding-bottom:1px ;"
                                            src="/image/share-comment.png"/><a>REPLY</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comnents-news-box">
                        <div class="comment-flex">
                            <div class="img-comment">
                                <img src="/image/img-comment3.png"/>
                            </div>
                            <div>
                                <div class="title-comment">David Marts<span class="vline-comment"></span> Jan 23, 2021
                                </div>
                                <div class="content-comment">Delivered ye sportsmen zealously arranging frankness
                                    estimable
                                    as.
                                    Nay any article musical shyness yet sixteen yet blushes. Entire its the did.
                                </div>
                                <div class="btn-reply-comment"><img style="padding-right:10px ; padding-bottom:1px ;"
                                                                    src="/image/share-comment.png"/><a>REPLY</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Leav A Comments -->
                <div>
                    <H3 id="title-news">Leav A Comments</H3>
                    <div class="row">
                        <div class="col-md-6"><input id="leav-comments" class="form-control" placeholder="Your Name"/>
                        </div>
                        <div class="col-md-6"><input id="leav-comments" style="    margin-left: auto;"
                                                     class="form-control"
                                                     placeholder="Your Email"/></div>
                    </div>
                    <div class="col-md-12" style="padding :0px"><input id="leav-comments-fn" class="form-control"
                                                                       placeholder="Your Comments"/>
                    </div>
                    <button id="btn-add-comments" type="form-control" class="btn btn-primary"><b class="send-mess">ADD
                            COMMENT</b></button>
                </div>

            </div>
            <!-- Nội Dung Bên Trái -->
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <!-- search box  -->
                <form class="form-input" type="get" action="{{url('/bai-viet/search')}}">
                    <input type="search" placeholder="Search here..." name="key" autocomplete="off"/>
                    <span id="searchicon" class="input-group-text bg-white">
                        <button type="submit" class="blog_searhicon"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
{{--                        <img src="{{asset('image/iconsearch.png')}}">--}}
                    </span>
                </form>

                <!-- send mail box -->
                <div id="send-mail-new">
                    <div class="container" style="width: 90%;">
                        <form action="{{url('bai-viet')}}" method="POST">
                            @csrf
                            <h3 id="title-news" style="font-size: 20px;">Sign Up To News</h3>
                            <p style="color: gray;">Subscribe to our news to get the latest updates and offers</p>
                            <div class="mess-mail"><input class="form-control" name="email"
                                                          style="border: 1px solid transparent;height: 55px; border: #eff3f7;"
                                                          placeholder="Your Email"/>
                                @error('email')
                                <span style="color :red;">{{$message}}</span>
                                @enderror</div>
                            <button id="btn-mess" type="form-control" class="btn btn-primary"><b class="send-mess">Send
                                    Message</b></button>
                        </form>
                    </div>
                </div>
                <!-- Recent Post -->
                <div class="Recent">
                    <!-- 1 -->
                    <div class="righttitle">Recent Post</div>
                    <div class="recent_post_box">
                        @foreach($popular_post as $item)
                            <a href="/bai-viet/{{$item->id}}-{{Str::slug($item->title, '-')}}.html">
                                <div class="recentpost">
                                    <div class="post">
                                        <div class="post_img">
                                            <img src="{{asset('image/uploads/post/'.$item->image)}}"
                                                 alt="{{$item->image}}">
                                        </div>
                                        <div class="postline">
                                            <div class="textpost">
                                                {{$item->title}}
                                            </div>
                                            <div class="designpost"><img class="clock" src="/image/icon-clock.png">
                                                <span>24 Jan, 2021</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                {{--                    <div class="recentpost">--}}
                {{--                        <div class="post">--}}
                {{--                            <div class="post_img">--}}
                {{--                                <a href=""><img src="/image/img-recent-tag3.png"></a>--}}
                {{--                            </div>--}}
                {{--                            <div class="postline">--}}
                {{--                                <div class="textpost">--}}
                {{--                                    Participate in staff meet ingness manage dedicated--}}
                {{--                                </div>--}}
                {{--                                <div class="designpost"><img class="clock" src="/image/icon-clock.png">--}}
                {{--                                    <span>24 Jan, 2021</span>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <!-- 2 -->--}}
                {{--                    <div class="postfile">--}}
                {{--                        <div class="post">--}}
                {{--                            <div class="post_img">--}}
                {{--                                <a href=""><img src="/image/img-recent-tag1.png"></a>--}}
                {{--                            </div>--}}
                {{--                            <div class="postline">--}}
                {{--                                <div class="textpost">--}}
                {{--                                    Dramatically provide access schemas without extensive back compatible--}}
                {{--                                </div>--}}
                {{--                                <div class="designpost"><img class="clock" src="/image/icon-clock.png">--}}
                {{--                                    <span>24 Jan, 2021</span>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <!-- 3 -->--}}

                {{--                    <div class="postfull">--}}
                {{--                        <div class="post">--}}
                {{--                            <div class="post_img">--}}
                {{--                                <a href=""><img src="/image/img-recent-tag2.png"></a>--}}
                {{--                            </div>--}}
                {{--                            <div class="postline">--}}
                {{--                                <div class="textpost">--}}
                {{--                                    Participate in staff meet ingness manage dedicated--}}
                {{--                                </div>--}}
                {{--                                <div class="designpost"><img class="clock" src="/image/icon-clock.png">--}}
                {{--                                    <span>24 Jan, 2021</span>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}

                <!-- Catagory List -->
                    <div class="catagory">Catagory List</div>
                    <div class="list">
                        <ul>
                            @foreach($post_total_by_category as $item)
                                <li>{{$item->name}} <span> ({{$item->total}}) </span></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Galary -->
                    <div class="galary">Galary</div>
                    <div class="blog_galary">
                        <div class="postimg"><img src="{{asset('image/blog_galary_01.png')}}"></div>
                        <div class="postimg"><img src="{{asset('image/blog_galary_02.png')}}"></div>
                        <div class="postimg"><img src="{{asset('image/blog_galary_03.png')}}"></div>
                        <div class="postimg"><img src="{{asset('image/blog_galary_04.png')}}"></div>
                        <div class="postimg"><img src="{{asset('image/blog_galary_05.png')}}"></div>
                        <div class="postimg"><img src="{{asset('image/blog_galary_06.png')}}"></div>
                    </div>
                    <!-- Archives -->
                    <div class="archive">Archives</div>
                    <div class="archives">
                        <ul>
                            <li><span><img class="file" src="/image/Archives-tag.png"><a>Sep 2020</a></span></li>
                            <li><span><img class="file" src="/image/Archives-tag.png"><a>Oct 2021</a></span></li>
                            <li><span><img class="file" src="/image/Archives-tag.png"><a>Jan 2020</a></span></li>
                            <li><span><img class="file" src="/image/Archives-tag.png"><a>Nov 2019</a></span></li>
                            <li><span><img class="file" src="/image/Archives-tag.png"><a>Dec 2018</a></span></li>
                        </ul>
                    </div>
                    <!-- Follow Us -->
                    <div class="followus">Follow Us</div>
                    <div class="follow">
                        <a href="#" class="follow_icon"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="follow_icon"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="follow_icon"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" class="follow_icon"><i class="fa-brands fa-pinterest-p"></i></a>
                        <a href="#" class="follow_icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    </div>
                    <!-- Tags -->
                    <div class="tag">Tags</div>
                    <div>
                        <a href="#" class="btn-tag">Fashion</a>
                        <a class="btn-tag">Nation</a>
                        <a class="btn-tag">Company</a>
                        <a class="btn-tag">Business </a>
                        <a class="btn-tag">Computer </a>
                        <a class="btn-tag">Travell </a>
                        <a class="btn-tag">Company</a>
                        <a class="btn-tag">Science </a>
                    </div>
                </div>
            </div>
        </div>
@endsection
