@extends('layouts')
@section('content')
    <div class="container headnew">
        <!-- Heading-->
        @if ($result_total[0]->total == 0)
            <div class="heading row" style="padding-top: 36px;">
                <div class="col-md-8 col-sm-12 col-12">

                    <p class="mt-3"
                       style="font-family: 'Montserrat', sans-serif">Rất tiếc, không tìm thấy kết quả nào phù hợp với từ
                        khóa
                        <span class="fw-bold">"{{$key}}"</span>
                    </p>
                </div>
                <!-- Search -->
                <div class="col-md-4 col-sm-12 col-12 right">
                    <form class="form-input" type="get" action="{{url('/bai-viet/search')}}">
                        <input type="search" placeholder="Search here..." name="key" autocomplete="off"/>
                        <span id="searchicon" class="input-group-text bg-white">
                            <button type="submit" class="blog_searhicon"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
{{--                        <img src="{{asset('image/iconsearch.png')}}">--}}
                    </span>
                    </form>
                </div>
                @endif
                @if ($result_total[0]->total >= 1)
                    <div class="heading row" style="padding-top: 36px;">
                        <div class="col-md-8 col-sm-12 col-12">
                            <p class="mt-3"
                               style="font-family: 'Montserrat', sans-serif">Tìm thấy <span
                                    class="fw-bold">{{$result_total[0]->total}}</span> kết quả với từ
                                khoá
                                <span class="fw-bold">"{{$key}}"</span>
                            </p>
                        </div>
                        <!-- Search -->
                        <div class="col-md-4 col-sm-12 col-12 right">
                            <form class="form-input" type="get" action="{{url('/bai-viet/search')}}">
                                <input type="search" placeholder="Search here..." name="key" autocomplete="off"/>
                                <span id="searchicon" class="input-group-text bg-white">
                                    <button type="submit" class="blog_searhicon"><i
                                            class="fa-solid fa-magnifying-glass"></i></button>
{{--                                    <img src="{{asset('image/iconsearch.png')}}">--}}
                                </span>
                            </form>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="row mb-5">
                        <!-- 1 -->
                        <div class="col-md-8 col-sm-12 col-12">
                            @foreach($post as $item)
                                <div class="itemm">
                                    <div class="blog">
                                        <div class="blog_img">
                                            <a href="/bai-viet/{{$item->id}}-{{Str::slug($item->title, '-')}}.html"><img
                                                    src="{{'../image/uploads/post/' . $item->image}}"
                                                    style="object-fit: cover"></a>
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
                                            <a class="read"
                                               href="/bai-viet/{{$item->id}}-{{Str::slug($item->title, '-')}}.html">READ
                                                MORE
                                                →</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- 2 -->
                        <div class="col-md-4 col-sm-12 col-12">
                            <!-- Sign Up -->
                            <div class="signing row" style=" margin-left: 0; margin-right: 0;">
                                <div class="sign">
                                    <div class="textsign">
                                        <form action="{{url('bai-viet')}}" method="POST">
                                            @csrf
                                            <div class="signup">Sign Up to News</div>
                                            <div class="sign_text">Subscribe to our news to get the latest updates and
                                                offers
                                            </div>
                                            <div class="mess"><input class="form-control" name="email"
                                                                     style="border: 1px solid transparent;"
                                                                     placeholder="Your Email"/>
                                                @error('email')
                                                <span style="color :red;">{{$message}}</span>
                                                @enderror</div>
                                            <button class="btn btn-primary" id="button-search" type="submit">Send
                                                Message
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Recent Post -->
                            <div class="Recent">
                                <!-- 1 -->
                                <div class="righttitle">Recent Post</div>
                                <div class="recentpost">
                                    <div class="post">
                                        <div class="post_img">
                                            <a href=""><img src="{{asset('image/blog_galary_04.png')}}"></a>
                                        </div>
                                        <div class="postline">
                                            <div class="textpost">
                                                Participate in staff meet ingness manage dedicated
                                            </div>
                                            <div class="designpost"><img class="clock"
                                                                         src="{{asset('image/iconclock.png')}}">
                                                <span>24 Jan, 2021</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 2 -->
                                <div class="postfile">
                                    <div class="post">
                                        <div class="post_img">
                                            <a href=""><img src="{{asset('image/blog_galary_07.png')}}"></a>
                                        </div>
                                        <div class="postline">
                                            <div class="textpost">
                                                Dramatically provide access schemas without extensive back
                                                compatible
                                            </div>
                                            <div class="designpost"><img class="clock"
                                                                         src="{{asset('image/iconclock.png')}}">
                                                <span>24 Jan, 2021</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 3 -->

                                <div class="postfull">
                                    <div class="post">
                                        <div class="post_img">
                                            <a href=""><img src="{{asset('image/blog_galary_08.png')}}"></a>
                                        </div>
                                        <div class="postline">
                                            <div class="textpost">
                                                Participate in staff meet ingness manage dedicated
                                            </div>
                                            <div class="designpost"><img class="clock"
                                                                         src="{{asset('image/iconclock.png')}}">
                                                <span>24 Jan, 2021</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                                        <li><span><img class="file"
                                                       src="{{asset('image/iconfile.png')}}"><a>Sep 2020</a></span>
                                        </li>
                                        <li><span><img class="file"
                                                       src="{{asset('image/iconfile.png')}}"><a>Oct 2021</a></span>
                                        </li>
                                        <li><span><img class="file"
                                                       src="{{asset('image/iconfile.png')}}"><a>Jan 2020</a></span>
                                        </li>
                                        <li><span><img class="file"
                                                       src="{{asset('image/iconfile.png')}}"><a>Nov 2019</a></span>
                                        </li>
                                        <li><span><img class="file"
                                                       src="{{asset('image/iconfile.png')}}"><a>Dec 2018</a></span>
                                        </li>
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
                                    <a class="btn-tag">Fashion</a>
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
                @endif
            </div>
@endsection
