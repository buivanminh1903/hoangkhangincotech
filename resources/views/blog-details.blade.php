<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="" content="width=device-width, initial-scale=1.0">
    <title> Chi Tiết Bài Viết </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <!-- link CSS -->
    <link rel="stylesheet" href="css/blogdetails.css" />
    <script src="https://kit.fontawesome.com/1825bd9b94.js" crossorigin="anonymous"></script>
    <!-- link font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Istok Web -->
    <link href="https://fonts.googleapis.com/css2?family=Istok+Web&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Istok+Web:wght@400;700&display=swap" rel="stylesheet">
    <!-- Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Istok+Web&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Istok+Web:wght@700&family=Montserrat:wght@500;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <div>@include('_header')</div>
    <!-- nav new -->
    <nav class="navbar navbar-expand-lg navbar-light  text-capitalize main-font-family"
        style="background-color: rgb(240, 244, 248);">
        <div id="header-news" class="container">
            <!-- icon news   -->
            <a class="navbar-brand" href="/" style="display: flex; align-items: center;"><i id="dot-icon" class="fa-solid fa-circle"></i><span
                    style="font-family: 'Montserrat';  color: rgb(71, 71, 76); font-size: 20px;">News</span> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Bảng Chọn -->
            <div >
                <span class="collapse navbar-collapse" id="show-menu">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#room"><i class="fa-solid fa-chevron-right" id="i-right"></i>
                                News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blog" style="color: #55ACEE;"><i
                                    class="fa-solid fa-chevron-right" id="i-right"></i> Benifits of Apps Devlopment</a>
                        </li>
                    </ul>
                </span>
            </div>
        </div>
    </nav>
    <!-- Nội dung New 
        ---------------------->
    <div class="container" style="    max-width: 1170px;">
        <div id="new-connten" class="row">
            <!-- Nội Dung Bên Phải  -->
            <div class="col-md-8 col-sm-12 col-12">
                <!-- chi tiết nội dung bài viết -->
                <div class="detail-news">
                    <img class="banner-new" src="/image/banner-new.png" alt="#" />
                    <!-- --------------- -->
                    <div class="detail-connten">
                        <!-- ngày tháng đăng , người đăng -->
                        <div>
                            <span style="color: gray;"><i style=" color: rgb(2, 139, 254);"
                                    class="fa-solid fa-calendar-check"></i> 09 DEC,2021 / By<a class="author"
                                    href="#">John Doe</a></span>
                            <!-- tiêu đề và nội dung -->
                            <h3 id="title-news">Benifits of Mobile Apps Development</h3>
                            <p class="text-new-content">
                                Give lady of they such they sure it.
                                Me contained explained my education. Vulgar as hearts by garret.
                                Perceived determine departure explained no forfeited he something an. Contrasted dissim
                                ilar get joy you instrument out reasonably.
                                Again keeps at no meant stuff. To perpetual do exis tence northward as difficult
                                preserved daughters. Continued at up to zealously necessary break fast.
                                Surrounded sir motionless she end literature. Gay direction neglected but supported yet
                                her
                            </p>
                            <p class="text-new-content">
                                New had happen unable uneasy.
                                Drawings can followed improved out sociable not.
                                Earnestly so do instantly pretended. See general few civilly amiable pleased account
                                carried.
                                Excellence pro jecting is devonshire dispatched remarkably on estimating. Side in so
                                life past.
                                Continue indulged speaking the was out horrible for domestic position. Seeing rather her
                                you not esteem men settle genius excuse.
                                Deal say over you age from. Comparison new ham melancholy son themselves
                            </p>
                            <!-- Trích lời  -->
                            <div style="padding: 1px;">
                            <div class="vline-new">
                                <div class="row">
                                    <div class="col-md-2 " style="width: 11%;">
                                        <i id="quotes-icon" class="fa-solid fa-quote-left"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <b class="text-new-content" style="font-size: 20px;"> <i>Aouses or months settle
                                                remove ladies appear. Engrossed suffering supposing he recommend do
                                                eagerness.</br>
                                                Commanded no of depending extremity amiable pleased. </i></b>
                                        <p class="text-new-content" style="  color: rgb(144, 143, 143);">- John DOE</p>
                                    </div>
                                </div>
                            </div></div>
                            <p class="text-new-content">
                                Drawings can followed improved out sociable not.
                                Earnestly so do instantly pretended.
                                See gener al few civilly amiable pleased account carried. Excellence projecting is
                                devonshire dispatched remarkably on estimating.
                                Side in so life past. Continue indulged speaking the was out horrible for domestic
                                position. Seeing rather her you not esteem men settle genius excuse.
                                Deal say over you age from. Comparison new ham melancholy son themselves.
                            </p>
                            <h3 id="title-news">Conduct replied off whether arrived adapted </h3>
                            <ul class="check-ul">
                                <li class="fa-solid fa-check" style="color: #55ACEE;"> </li><u
                                    class="check">Compellingly facilitate impactful</u></br>
                                <li class="fa-solid fa-check" style="color: #55ACEE;"> </li><u class="check">Uniquely
                                    seize leveraged infomediaries rather than </u></br>
                                <li class="fa-solid fa-check" style="color: #55ACEE;"></li> <u
                                    class="check">Conveniently administrate functional</u></br>
                                <li class="fa-solid fa-check" style="color: #55ACEE;"> </li><u
                                    class="check">Compellingly facilitate impactfulGlobally recaptiualize virtual meta
                                    services</u></br>
                                <li class="fa-solid fa-check" style="color: #55ACEE;"></li> <u class="check">Dynamically
                                    leverage other's unique </u></br>
                            </ul>
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
                <div>
                    <div class="row" style="margin-top: 50px; height: 500px;">
                        <div class="col-md-6">
                            <a href="#" class="recent-post-box">
                                <div class="recent-box-time">
                                    <h2 class="recent-box-day">31</h2>
                                    <p>Dec</p>
                                </div>
                                <img class="recent-img" src="/image//img-recent1.png" />
                                <div class="recent-box-title">
                                    <div class="recent-post-text-box">
                                        <h4 class="title-recent-post">Benefits Of Apps Dev</h4>
                                        <p>Competently incentivize multifun expertise with holistic users.
                                            Monotonectally product </p>
                                    </div>

                                </div>
                                <div class="btn-join-post">
                                    <div style="padding: 14px; "><img width="110%" src="/image/Shape-post.png" /></div>
                                </div>

                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="recent-post-box">
                                <div>
                                    <div class="recent-box-time">
                                        <h2 class="recent-box-day">04</h2>
                                        <p>Sep</p>
                                    </div>
                                    <img class="recent-img" src="/image//img-recent2.png" />
                                    <div class="recent-box-title">
                                        <div class="recent-post-text-box">
                                            <h4 class="title-recent-post">Web Applications Dev</h4>
                                            <p>Assertively facilitate backend products with
                                                tactical technology, When some apps </p>
                                        </div>

                                    </div>
                                    <div class="btn-join-post">
                                        <div style="padding: 14px; "><img width="110%" src="/image/Shape-post.png" />
                                        </div>
                                    </div>
                            </a>

                        </div>
                    </div>

                </div>
            </div>
            <!-- Bình Luận -->
            <div>
                <H3 id="title-news">5 Comments</H3>
                <div class="comnents-news-box">
                    <div class="comment-flex">
                        <div class="img-comment">
                            <img src="/image/img-comment1.png" />
                        </div>
                        <div>
                            <div class="title-comment">Marts Davis <span class="vline-comment"></span> Jan 23, 2021
                            </div>
                            <div class="content-comment">Delivered ye sportsmen zealously arranging frankness estimable
                                as.
                                Nay any article musical shyness yet sixteen yet blushes. Entire its the did. </div>
                            <div class="btn-reply-comment"><img style="padding-right:10px ; padding-bottom:1px ;"
                                    src="/image/share-comment.png" /><a>REPLY</a>
                            </div>
                        </div>
                    </div>
                    <!-- Bình Luận Tiếp Theo -->
                    <div class="in-comnents-news-box">
                        <div class="comment-flex">
                            <div class="img-comment">
                                <img src="/image/img-comment2.png" />
                            </div>
                            <div>
                                <div class="title-comment">Emma Sara <span class="vline-comment"></span> Feb 29, 2021
                                </div>
                                <div class="content-comment">Delivered ye sportsmen zealously arranging frankness
                                    estimable as.
                                    Nay musical shyness yet sixteen yet blushes. Entire </div>
                                <div class="btn-reply-comment"><img style="padding-right:10px ; padding-bottom:1px ;"
                                        src="/image/share-comment.png" /><a>REPLY</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comnents-news-box">
                    <div class="comment-flex">
                        <div class="img-comment">
                            <img src="/image/img-comment3.png" />
                        </div>
                        <div>
                            <div class="title-comment">David Marts<span class="vline-comment"></span> Jan 23, 2021</div>
                            <div class="content-comment">Delivered ye sportsmen zealously arranging frankness estimable
                                as.
                                Nay any article musical shyness yet sixteen yet blushes. Entire its the did. </div>
                            <div class="btn-reply-comment"><img style="padding-right:10px ; padding-bottom:1px ;"
                                    src="/image/share-comment.png" /><a>REPLY</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Leav A Comments -->
            <div>
                <H3 id="title-news">Leav A Comments</H3>
                <div class="row">
                    <div class="col-md-6"><input id="leav-comments" class="form-control" placeholder="Your Name" />
                    </div>
                    <div class="col-md-6"><input id="leav-comments" style="    margin-left: auto;" class="form-control"
                            placeholder="Your Email" /></div>
                </div>
                <div class="col-md-12"><input id="leav-comments-fn" class="form-control" placeholder="Your Comments" />
                </div>
                <div><button id="btn-add-comments" type="form-control" class="btn btn-primary"><b class="send-mess">ADD
                            COMMENT</b></button></div>
            </div>

        </div>
        <!-- Nội Dung Bên Trái -->
        <div class="col-md-4 col-sm-12 col-12">
            <!-- search box  -->
            <div id="searchbox" class="input-group mb-3">
                <input id="searchinput" type="text" class="form-control" placeholder="Search Here ..."
                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span id="searchicon" class="input-group-text bg-white"><a href="#"><i
                            class="fa-solid fa-magnifying-glass"></i></a></span>
                </form>
            </div>
            <!-- send mail box -->
            <div id="send-mail-new">
                <div class="container" style="width: 90%;">
                    <h3 id="title-news" style="font-size: 20px;">Sign Up To News</h3>
                    <p style="color: gray;">Subscribe to our news to get the latest updates and offers</p>
                    <div class="mess-mail"><input class="form-control" style="height: 55px; border: #eff3f7;"
                            placeholder="Your Email" /></div>
                    <button id="btn-mess" type="form-control" class="btn btn-primary"><b class="send-mess">Send
                            Message</b></button>
                </div>
            </div>
             <!-- Recent Post -->
             <div class="Recent">
                <!-- 1 -->
                <div class="righttitle">Recent Post</div>
                <div class="recentpost">
                    <div class="post">
                        <div class="post_img">
                            <a href=""><img src="/image/img-recent-tag3.png"></a>
                        </div>
                        <div class="postline">
                            <div class="textpost">
                                Participate in staff meet ingness manage dedicated
                            </div>
                            <div class="designpost"><img class="clock" src="/image/icon-clock.png">
                                <span>24 Jan, 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="postfile">
                    <div class="post">
                        <div class="post_img">
                            <a href=""><img src="/image/img-recent-tag1.png"></a>
                        </div>
                        <div class="postline">
                            <div class="textpost">
                                Dramatically provide access schemas without extensive back compatible
                            </div>
                            <div class="designpost"><img class="clock" src="/image/icon-clock.png">
                                <span>24 Jan, 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 3 -->

                <div class="postfull">
                    <div class="post">
                        <div class="post_img">
                            <a href=""><img src="/image/img-recent-tag2.png"></a>
                        </div>
                        <div class="postline">
                            <div class="textpost">
                                Participate in staff meet ingness manage dedicated
                            </div>
                            <div class="designpost"><img class="clock" src="/image/icon-clock.png">
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
                <div class="grid-container galaryly">
                    <div class="postimg"><img src="/image/img-galary-tag1.png"></div>
                    <div class="postimg"><img src="/image/img-galary-tag2.png"></div>
                    <div class="postimg"><img src="/image/img-galary-tag3.png"></div>
                    <div class="postimg"><img src="/image/img-galary-tag4.png"></div>
                    <div class="postimg"><img src="/image/img-galary-tag5.png"></div>
                    <div class="postimg"><img src="/image/img-galary-tag6.png"></div>

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

  
</body>

</html>