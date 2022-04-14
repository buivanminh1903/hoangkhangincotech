@extends('layouts')
@section('content')
    <div style="background-color: #f0f4f8;">
        <!--Start breadcrumb-->
        <div class="hk_breadcrumb">
            <div class="hk_breadcrumb_left">
                <span class="hk_breadcrumb__dot"></span> Services
            </div>
            <div class="hk_breadcrumb_right">
                <ul class="hk_menu">
                    <li>Home</li>
                    <li><i class="fa-solid fa-angle-right"></i>&nbsp;&nbsp;Contact Us</li>
                </ul>
            </div>
        </div>
        <!--End breadcrumb-->
    </div>
{{--    <div style="background-color: #f0f4f8;">--}}
{{--        <!--Start breadcrumb-->--}}
{{--        <div class="hk_breadcrumb">--}}
{{--            <div class="hk_breadcrumb_left">--}}
{{--                <span class="contactus-left" style="font-weight: 500;"><span class="hk_breadcrumb__dot"></span> Contact Us </span>--}}
{{--            </div>--}}
{{--            <div class="hk_breadcrumb_right">--}}
{{--                <ul class="hk_menu">--}}
{{--                    <li class="title-home">Home</li>--}}
{{--                    <li class="contact-us" style="color: #028bfe; margin-left: 5px;"><i--}}
{{--                            class="fa-solid fa-angle-right"></i>&nbsp;&nbsp;Contact Us--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!--End breadcrumb-->--}}
{{--    </div>--}}


    <div class="container">
        <div class="contact-map">
            <!-- Tiêu đề 1 -->
            <div class="title-contactinfo">
                <a>OUR CONTACT INFO</a>
            </div>
            <!-- Tiêu đề 1 -->

            <!-- Tiêu đề 2 -->
            <div class="title-contactus">
                <a>Contact with Us</a>
            </div>
            <!-- Tiêu đề 2 -->

            <!-- Khung liên hệ -->
            <div class="contact-info">
                <div class="row">
                    <!-- MAP bên trái -->
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <iframe class="map"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15674.475788673637!2d106.66281856973029!3d10.840445251323352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529bc96bc31d5%3A0xb45cb7e22ebf8fda!2zQ8O0bmcgVHkgVE5ISCBHaeG6o2kgUGjDoXAgQ8O0bmcgTmdo4buHIFRow7RuZyBUaW4gVsOgIFRydXnhu4FuIFRow7RuZyBIb8OgbmcgS2hhbmc!5e0!3m2!1svi!2s!4v1647495886453!5m2!1svi!2s"
                                with="" height="433" frameborder="0" scrolling="no"></iframe>
                    </div>
                    <!-- Nội dung liên hệ -->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="list-address">

                            <div class="title-addres"> Address</div>
                            <div class="address">
                                132 Baipail Street, Sandigo Californial , USA
                            </div>

                            <div class="title-addres">Phone</div>

                            <div class="address">
                                +880 321 569 098 <br>
                                +880 321 569 098
                            </div>

                            <div class="title-addres">Email</div>
                            <div class="address">
                                bigfox@gmail.com
                                support121@yahoo.com
                            </div>
                            <div class="title-addres">Social</div>
                            <div class="social">
                                <i id="icon-address" class="fa-brands fa-facebook-f"></i>
                                <i id="icon-address" class="fa-brands fa-twitter"></i>
                                <i id="icon-address" class="fa-brands fa-linkedin-in"></i>
                                <i id="icon-address" class="fa-brands fa-instagram"></i>
                            </div>

                        </div>
                    </div>
                    <!-- Nội dung liên hệ -->
                </div>
            </div>
        </div>
    </div>
    <!-- Khung liên hệ -->

    <!-- Nền khung điền thông tin -->


    <div class="getintouch_section">
        <div class="form-getintouch">
            <div class="title-getintouch">Get in Touch</div>

            <div class="content-intouch">
                Interactively seize focused methodologies
                for extensive <br> growth strategies. Professinonally
            </div>

            @if (session('msg'))
                <div class="alert alert-success">{{session('msg')}}</div>
                @endif
            <form action="{{url('/backend/Contactus/contactus-submit')}}" method="POST">
            @csrf
                <div class="row" style="margin-left: 0; margin-right: 0;">
                    <div class="col-lg-6 col-md-6 col-sm-12 form-name">
                        <input id="your-name" name="names" type="text" class="form-control" placeholder="Your Name"
                               required="">
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 form-name">
                        <input id="your-name" name="email" type="text" class="form-control" placeholder="Your Email"
                               required="">
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 form-name">
                        <input id="your-phone" name="phone" type="text" class="form-control" id="input-register"
                               placeholder="Phone" required="">
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 form-name">
                        <select id="selected" class="form-control text-select" id="exampleFormControlSelect1"
                        name="position" required="">
                            <option>---</option>
                            <option>Trưởng phòng</option>
                            <option>Kế toán</option>
                            <option>Quản lý</option>
                            <option>Nhân viên</option>
                            <option>Tiếp tân</option>>
                        </select>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 form-subject">
                        <input id="subject" type="text" class="form-control" placeholder="Subject" name=
                        "subject" required="">
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 form-meseage">
                        <textarea id="meseage-register" class="form-control" name="messages"
                                  placeholder="Your Messeage: " required=""></textarea>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 button-send">
                        <button id="button-sendmessage" type="form-control" class="btn btn-primary">SEND MESSEAGE
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
