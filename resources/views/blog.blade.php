@extends('layouts')
@section('content')
    <!-- Start head -->
    <div class="card">
        <img src="image/background.png" class="card-img" alt="..."/>

        <div class="head">
            <div class="head_title">Blog Section</div>
            <a class="" href="#">HOME</a><span> / BLOG</span>
        </div>

    </div>
    <div class="background"></div>
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

                <div class="form-input">
                    <input type="text" placeholder="Search here..."/>
                    <span id="searchicon" class="input-group-text bg-white"><a href="#"><img
                                src="image/iconsearch.png"></a></span>

                </div>

            </div>
        </div>

        <!-- item -->
        <div class="box-main row mb-5">
            <!-- 1 -->
            <div class="col-lg-8 col-md-12 col-sm-12" style="padding-right: 18px;">
                <div class="item">
                    <div class="blog">
                        <div class="blog_img">
                            <a href=""><img src="image/item1.jpg"></a>
                        </div>
                        <div class="blogtext">
                            <h3>Benfits of App Developed</h3>
                            <div class="blogtag"><img src="image/iconclander.png"></i> 31 Dec, 2021 By </i><a
                                    class="blogfill" href="#">John Doe</a></div>
                            <div class="blogtitle">Compellingly aggregate proactive core competencies lever visualize
                                resource maximizing architectures front core development compet.
                            </div>
                            <a class="read" href="#!">READ MORE →</a>
                        </div>
                    </div>
                </div>
                <!-- 1 -->
                <div class="itemm">
                    <div class="blog">
                        <div class="blog_img">
                            <a href=""><img src="image/item2.jpg"></a>
                        </div>
                        <div class="blogtext">
                            <h3>UI/UX Design Services</h3>
                            <div class="blogtag"><img src="image/iconclander.png"></i> 31 Dec, 2021 By </i><a
                                    class="blogfill" href="#">John Doe</a></div>
                            <div class="blogtitle">Appropriately syndicate end-to-end functionalities after maximizing
                                architectures without front highly efficient partnerships with
                            </div>
                            <a class="read" href="#!">READ MORE →</a>
                        </div>
                    </div>
                </div>
                <!-- 1 -->
                <div class="itemm">
                    <div class="blog">
                        <div class="blog_img">
                            <a href=""><img src="image/item3.jpg"></a>
                        </div>
                        <div class="blogtext">
                            <h3>Higher Programming Consult</h3>
                            <div class="blogtag"><img src="image/iconclander.png"></i> 31 Dec, 2021 By </i><a
                                    class="blogfill" href="#">John Doe</a></div>
                            <div class="blogtitle">Compellingly aggregate proactive core competencieslever visualize
                                resource maximizing architectures front core development compet.
                            </div>
                            <a class="read" href="#!">READ MORE →</a>
                        </div>
                    </div>
                </div>
                <!-- 1 -->
                <div class="itemm">
                    <div class="blog">
                        <div class="blog_img">
                            <a href=""><img src="image/item4.jpg"></a>
                        </div>
                        <div class="blogtext">
                            <h3>Benefits of App Developed</h3>
                            <div class="blogtag"><img src="image/iconclander.png"></i> 31 Dec, 2021 By </i><a
                                    class="blogfill" href="#">John Doe</a></div>
                            <div class="blogtitle">Compellingly aggregate proactive core competencieslever visualize
                                resource maximizing architectures front core development compet.
                            </div>
                            <a class="read" href="#!">READ MORE →</a>
                        </div>
                    </div>
                </div>
                <!-- 1 -->
                <div class="itemm">
                    <div class="blog">
                        <div class="blog_img">
                            <a href=""><img src="image/item2.jpg"></a>
                        </div>
                        <div class="blogtext">
                            <h3>UI/UX Design Services</h3>
                            <div class="blogtag"><img src="image/iconclander.png"></i> 31 Dec, 2021 By </i><a
                                    class="blogfill" href="#">John Doe</a></div>
                            <div class="blogtitle">Appropriately syndicate end-to-end functionalities after maximizing
                                architectures without front highly efficient partnerships with
                            </div>
                            <a class="read" href="#!">READ MORE →</a>
                        </div>
                    </div>
                </div>
                <!-- 1 -->
                <div class="itemm">
                    <div class="blog">
                        <div class="blog_img">
                            <a href=""><img src="image/item5.jpg"></a>
                        </div>
                        <div class="blogtext">
                            <h3>Higher Programming Consult</h3>
                            <div class="blogtag"><img src="image/iconclander.png"></i> 31 Dec, 2021 By </i><a
                                    class="blogfill" href="#">John Doe</a></div>
                            <div class="blogtitle">Compellingly aggregate proactive core competencieslever visualize
                                resource maximizing architectures front core development compet.
                            </div>
                            <a class="read" href="#!">READ MORE →</a>
                        </div>
                    </div>
                </div>
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
                            <div class="signup">Sign Up to News</div>
                            <div class="sign_text">Subscribe to our news to get the latest updates and offers</div>
                            <div class="mess"><input class="form-control" placeholder="Your Email"/></div>
                            <button class="btn btn-primary" id="button-search" type="button">Send Message</button>
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
                                <a href=""><img src="image/blog_galary_04.png"></a>
                            </div>
                            <div class="postline">
                                <div class="textpost">
                                    Participate in staff meet ingness manage dedicated
                                </div>
                                <div class="designpost"><img class="clock" src="image/iconclock.png">
                                    <span>24 Jan, 2021</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="postfile">
                        <div class="post">
                            <div class="post_img">
                                <a href=""><img src="image/blog_galary_07.png"></a>
                            </div>
                            <div class="postline">
                                <div class="textpost">
                                    Dramatically provide access schemas without extensive back compatible
                                </div>
                                <div class="designpost"><img class="clock" src="image/iconclock.png">
                                    <span>24 Jan, 2021</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 3 -->

                    <div class="postfull">
                        <div class="post">
                            <div class="post_img">
                                <a href=""><img src="image/blog_galary_08.png"></a>
                            </div>
                            <div class="postline">
                                <div class="textpost">
                                    Participate in staff meet ingness manage dedicated
                                </div>
                                <div class="designpost"><img class="clock" src="image/iconclock.png">
                                    <span>24 Jan, 2021</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Catagory List -->
                    <div class="catagory">Catagory List</div>
                    <div class="list">
                        <ul>
                            <li>National <span> (69) </span></li>
                            <li>Computer <span> (85) </span></li>
                            <li>Product items <span> (90) </span></li>
                            <li>Sports <span> (56) </span></li>
                            <li>Magazine <span> (29) </span></li>
                        </ul>
                    </div>
                    <!-- Galary -->
                    <div class="galary">Galary</div>
                    <div class="blog_galary">
                        <div class="postimg"><img src="image/blog_galary_01.png"></div>
                        <div class="postimg"><img src="image/blog_galary_02.png"></div>
                        <div class="postimg"><img src="image/blog_galary_03.png"></div>
                        <div class="postimg"><img src="image/blog_galary_04.png"></div>
                        <div class="postimg"><img src="image/blog_galary_05.png"></div>
                        <div class="postimg"><img src="image/blog_galary_06.png"></div>
                    </div>
{{--                    <div class="grid-container galarylyy">--}}
{{--                        <div class="postimg"><img src="image/post.jpg"></div>--}}
{{--                        <div class="postimg"><img src="image/post2.jpg"></div>--}}
{{--                        <div class="postimg"><img src="image/post.jpg"></div>--}}
{{--                        <div class="postimg"><img src="image/post2.jpg"></div>--}}
{{--                        <div class="postimg"><img src="image/post2.jpg"></div>--}}
{{--                        <div class="postimg"><img src="image/post.jpg"></div>--}}
{{--                    </div>--}}
                    <!-- Archives -->
                    <div class="archive">Archives</div>
                    <div class="archives">
                        <ul>
                            <li><span><img class="file" src="image/iconfile.png"><a>Sep 2020</a></span></li>
                            <li><span><img class="file" src="image/iconfile.png"><a>Oct 2021</a></span></li>
                            <li><span><img class="file" src="image/iconfile.png"><a>Jan 2020</a></span></li>
                            <li><span><img class="file" src="image/iconfile.png"><a>Nov 2019</a></span></li>
                            <li><span><img class="file" src="image/iconfile.png"><a>Dec 2018</a></span></li>
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
    </div>
@endsection
