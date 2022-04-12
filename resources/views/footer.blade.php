<div class="footer">
    <div class="container" style="max-width: 1170px">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="logo_footer">
                    <img src="{{asset('image/logo_footer.png')}}" alt="">
                </div>
                <div class="footer-box-firts">
                    <p class="text mb-5">Our company has been developing high-quality and reliable software for
                        corporate
                        needs since 2008.We are renowed processionals of software developement.</p>
                    <a href="#" style="padding: 10px 16px"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" style="padding: 10px 14px"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="footer-box-second quicklinks">
                    <h3>Quick Links</h3>
                    <hr>
                    <ul class="mb-0" style="padding-left: 0">
                        <li><i class="fa-solid fa-angles-right"></i><a href="/">About Us</a></li>
                        <li><i class="fa-solid fa-angles-right"></i><a href="/">Our Service</a></li>
                        <li><i class="fa-solid fa-angles-right"></i><a href="/">Pricing Plan</a></li>
                        <li><i class="fa-solid fa-angles-right"></i><a href="/">Blog Classic</a></li>
                        <li><i class="fa-solid fa-angles-right"></i><a href="/">Contact Us</a></li>
                        <li><i class="fa-solid fa-angles-right"></i><a href="/"> Faqs</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="footer-box-second popular">
                    <h3>Popular Post</h3>
                    <hr>
                </div>
                <div class="footer-box-three">
{{--                    @foreach($popular_post as $item)--}}
{{--                        <div class="post">--}}
{{--                            <img src="{{asset('image/uploads/post/' . $item->image)}}" alt="{{$item->image}}"--}}
{{--                                 style="object-fit: cover">--}}
{{--                            <p> {{ \Illuminate\Support\Str::limit($item->title, $limit = 28, $end = '...')}} <br> <i--}}
{{--                                    style="font-size: small;color: #919192;">{{date('M d, Y', strtotime($item->created_at))}}</i>--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
                    @foreach($popular_post as $item)
                        <a class="footer__popular-post" href="/bai-viet/{{$item->id}}-{{Str::slug($item->title, '-')}}.html">
                            <div class="post">
                                <img src="{{asset('image/uploads/post/' . $item->image)}}" alt="{{$item->image}}"
                                     style="object-fit: cover">
                                <p>
                                    <span style="color: #fff">{{ \Illuminate\Support\Str::limit($item->title, $limit = 28, $end = '...')}}</span>
                                    <br> <i
                                        style="font-size: small;color: #919192;">{{date('M d, Y', strtotime($item->created_at))}}</i>
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="footer-box-second">
                    <h3>Our contacts</h3>
                    <hr>
                </div>
                <div class="footer-text">
                    <img src="{{asset('image/address.png')}}" alt="">
                    <div style="margin-left: 20px">
                        <a> Address</a>
                        <p>125, Suitand Street,USA</p>
                    </div>
                </div>
                <div class="footer-text">
                    <img src="{{asset('image/phone.JPG')}}" alt="">
                    <div style="margin-left: 20px">
                        <a>Phone</a>
                        <p>+0397181527</p>
                    </div>
                </div>
                <div class="footer-text">
                    <img src="{{asset('image/email.JPG')}}" alt=" ">
                    <div style="margin-left: 20px">
                        <a>E-Mail</a>
                        <p class="mb-0">tranquan12a8@gmai.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-end ">
    <div class="container " style="max-width: 1170px; ">
        <div class="row" style="align-items: center; padding: 40px 0;">
            <div class="col-md-6 col-6 ">
                <div class="footer-end-text " style="float: left; ">
                    <p class="mb-0">&copy; CoppyRight 2021. All Rights Reserved. Designed by <a href="/ "><i> Dream
                                IT </i></a></p>
                </div>
            </div>
            <div class="col-md-6 col-6 ">
                <div class="footer-end-text ">
                    <p class="mb-0">Powered By
                        <a href=" "> <i> Wordpress </i> </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
