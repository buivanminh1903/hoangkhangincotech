@extends('layouts')
@section('content')
    <!-- Start head -->
    <div class="card">
        <img src="{{asset('image/background.png')}}" class="card-img" alt="..."/>

        <div class="head">
            <div class="head_title">Blog Section</div>
            <a class="" href="#">HOME</a><span> / BLOG</span>
        </div>

    </div>
    <!--End head-->

    <!-- News -->
    <div class="container headnew">
        <!-- Heading-->
        <div class="heading row">
            <div class="col-md-8 col-sm-12 col-12 left">
                <a>UPDATES NEWS</a>
                <h1>Latest News</h1>
            </div>
            <!-- Search -->
            <div class="col-md-4 col-sm-12 col-12 right">
                <form class="form-input" type="get" action="{{url('/bai-viet/search')}}">
                    <input type="search" placeholder="Search here..." name="key" autocomplete="off" required/>
                    <span id="searchicon" class="input-group-text bg-white">
                        <button type="submit" class="blog_searhicon"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
{{--                        <img src="{{asset('image/iconsearch.png')}}">--}}
                    </span>
                </form>
            </div>
        </div>

        <!-- item -->
        <div class="box-main row mb-5">
            <!-- 1 -->
            <div class="col-lg-8 col-md-12 col-sm-12" style="padding-right: ">
                @foreach($post as $item)
                    <div class="itemm">
                        <div class="blog">
                            <div class="blog_img">
                                <a href="/bai-viet/{{$item->id}}-{{Str::slug($item->title, '-')}}.html"><img
                                        src="{{'../image/uploads/post/' . $item->image}}" style="object-fit: cover"></a>
                            </div>
                            <div class="blogtext">
                                <h3>
                                    <a href="/bai-viet/{{$item->id}}-{{Str::slug($item->title, '-')}}.html">{{$item->title}}</a>
                                </h3>
                                <div class="blogtag"><img
                                        src="{{asset('image/iconclander.png')}}"></i> {{date('d M, Y', strtotime($item->created_at))}}
                                    By </i><a
                                        class="blogfill" href="/chi-tiet-bai-viet">John Doe</a></div>
                                <div
                                    class="blogtitle">{{ \Illuminate\Support\Str::limit($item->short_content, $limit = 130, $end = '...')}}</div>
                                <a class="read" href="/bai-viet/{{$item->id}}-{{Str::slug($item->title, '-')}}.html">READ
                                    MORE
                                    →</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="loadmore">
                    <button class="btn btn-primary" id="button-loand" type="button"><a>Load More</a></button>
                </div>
            </div>
            <!-- 2 -->
            <div class="col-lg-4 col-md-12 col-sm-12">
                <!-- Sign Up -->
                <div class="signing row" style=" margin-left: 0; margin-right: 0;">
                    <div class="sign">
                        <div class="textsign">
                            <form action="{{url('bai-viet')}}" method="POST">
                                @csrf
                                <div class="signup">Sign Up to News</div>
                                <div class="sign_text">Subscribe to our news to get the latest updates and offers</div>
                                <div class="mess"><input class="form-control" name="email"
                                                         style="border: 1px solid transparent;"
                                                         placeholder="Your Email"/>
                                    @error('email')
                                    <span style="color :red;">{{$message}}</span>
                                    @enderror</div>
                                <button class="btn btn-primary" id="button-search" type="submit">Send Message</button>
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
                                                <img src="{{asset('image/uploads/post/'.$item->image)}}">
                                            </div>
                                            <div class="postline">
                                                <div class="textpost">
                                                    {{$item->title}}
                                                </div>
                                                <div class="designpost"><img class="clock" src="/image/icon-clock.png"
                                                                             alt="{{$item->image}}">
                                                    <span>{{date('d M, Y', strtotime($item->created_at))}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>


                        <!-- 2 -->
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
                    <!-- 3 -->

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
                            @foreach ($photolist as $item)
                                <div class="postimg"><img src="{{asset('image/uploads/photo_blog/' .$item->images)}}"
                                                          data-bs-toggle="tooltip" data-bs-placement="top"
                                                          title="{{$item->title}}"></div>
                            @endforeach
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
            <script type="text/javascript">
                var paginate = 1;
                loadMoreData(paginate);

                $('#load-more').click(function () {
                    var page = $(this).data('paginate');
                    loadMoreData(page);
                    $(this).data('paginate', page + 1);
                });

                // run function when user click load more button
                function loadMoreData(paginate) {
                    $.ajax({
                        url: '?page=' + paginate,
                        type: 'get',
                        datatype: 'html',
                        beforeSend: function () {
                            $('#load-more').text('Loading...');
                        }
                    })
                        .done(function (data) {
                            if (data.length == 0) {
                                $('.invisible').removeClass('invisible');
                                $('#load-more').hide();
                                return;
                            } else {
                                $('#load-more').text('Load more...');
                                $('#post').append(data);
                            }
                        })
                        .fail(function (jqXHR, ajaxOptions, thrownError) {
                            alert('Something went wrong.');
                        });
                }
            </script>
        </div>
    </div>
<<<<<<< HEAD

=======
>>>>>>> 900d401656ad96389e89f20009ca157b445205b5
@endsection
