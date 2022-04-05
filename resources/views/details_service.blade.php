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
                    <li><i class="fa-solid fa-angle-right"></i>&nbsp;&nbsp;Services</li>
                    <li><i class="fa-solid fa-angle-right"></i>&nbsp;&nbsp;Mobile Apps Develop</li>
                </ul>
            </div>
        </div>
        <!--End breadcrumb-->
    </div>
    <div class="container" style="width: 1170px;">
        <h1 class="service-title">{{$service_detail->title}}</h1>
{{--        <img class="serice-image" src="{{ asset('image/uploads/service/' . $service_detail->image) }}"--}}
{{--             style="width: 100%;"--}}
{{--             alt="">--}}
        <div class="service-title-open">{!! $service_detail->content !!}</div>
    </div>
    <div class="service-main">
        <div class="container" style="width: 1170px; margin-top: 90px">
            <h3 class="title"> Pricing Plan</h3>
            <div class="row">
                <div class="col-md-4 col-sm-12 ">
                    <div class="service-main-box">
                        <p class="service-main-box1">PRICING TABLE</p>
                        <p class="service-main-box2">PREMIUM</p>
                        <div class="box">
                            <p class="service-main-box3" style="font-weight: 400"><sup style="font-size:13px;">$</sup>199
                            </p>
                            <p class="service-main-box4" style="color: #888787">Per Month</p>
                            </p>
                        </div>
                        <div class="service-main-box5">
                            <ul>
                                <li><img src="{{asset('image/checked.png')}}" alt="">Conpect Development</li>
                                <li><img src="{{asset('image/checked.png')}}" alt="">UI/UX Design</li>
                                <li class="service_text_dark"><img src="{{asset('image/check.png')}}" alt="">Configuration Management
                                </li>
                                <li class="service_text_dark"><img src="{{asset('image/check.png')}}" alt="">App intergition</li>
                                <li class="service_text_dark"><img src="{{asset('image/check.png')}}" alt="">App Intergition</li>
                            </ul>

                        </div>
                        <button class="button button1">BUY NOW</button>
                    </div>

                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="service-main-box">
                        <p class="service-main-box1">PRICING TABLE</p>
                        <p class="service-main-box2">BASIC</p>
                        <div class="box">
                            <p class="service-main-box3" style="font-weight: 400"><sup style="font-size:13px;">$</sup>199
                            </p>
                            <p class="service-main-box4" style="color: #888787">Per Month</p>
                        </div>
                        <div class="service-main-box5">
                            <ul>
                                <li><img src="{{asset('image/checked.png')}}" alt="">Conpect Development</li>
                                <li><img src="{{asset('image/checked.png')}}" alt="">UI/UX Design</li>
                                <li><img src="{{asset('image/checked.png')}}" alt="">Configuration Management</li>
                                <li class="service_text_dark"><img src="{{asset('image/check.png')}}" alt="">App intergition</li>
                                <li class="service_text_dark"><img src="{{asset('image/check.png')}}" alt="">App Intergition</li>
                            </ul>

                        </div>
                        <button class="button button1">BUY NOW</button>

                    </div>

                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="service-main-box">
                        <p class="service-main-box1">PRICING TABLE</p>
                        <p class="service-main-box2">GOLDEN</p>
                        <div class="box">
                            <p class="service-main-box3" style="font-weight: 400"><sup style="font-size:13px;">$</sup>199
                            </p>
                            <p class="service-main-box4" style="color: #888787 ;">Per Month</p>
                        </div>
                        <div class="service-main-box5">
                            <ul>
                                <li><img src="{{asset('image/checked.png')}}" alt="">Conpect Development</li>
                                <li><img src="{{asset('image/checked.png')}}" alt="">UI/UX Design</li>
                                <li><img src="{{asset('image/checked.png')}}" alt="">Configuration Management</li>
                                <li><img src="{{asset('image/checked.png')}}" alt="">App intergition</li>
                                <li><img src="{{asset('image/checked.png')}}" alt="">App Intergition</li>
                            </ul>

                        </div>

                        <button class="button button1">BUY NOW</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="all-service">
        <div>
            <h3 class="all-service-title" style="margin-bottom: 100px">All Services</h3>
            <div class="container" style="margin-bottom: 70px">
                <div class="row" style="margin: 0 auto">
                    <div class="detailservice">
                        @foreach($service as $item)
                            <div class="detailservice_card">
                                <img src="{{ asset('image/uploads/service/' . $item->image) }}" alt="Avatar"
                                     class="detailservice_card__image">
                                <div class="detailservice_card__overlay">
                                    <div class="detailservice_card__text">
                                        <div class="detailservice_card__title">{{$item->title}}</div>
                                        <div class="detailservice_card__content">{{$item->short_content}}</div>
                                        <a href="#" class="detailservice_card__nextbutton"><i
                                                class="fa-solid fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
