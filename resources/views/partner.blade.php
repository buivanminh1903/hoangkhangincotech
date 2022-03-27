@extends('layouts')
@section('content')
    <!--Start header-->
    <div class="header">
        <div class="header_content">
            <h3>Brand</h3>
            <ul class="hk_breadcrumb_partner">
                <li><a href="#">Home</a></li>
                <li>/</li>
                <li>Brand</li>
            </ul>
        </div>
    </div>
    <div class="bg_overlay"></div>
    <!--End header-->
    <!--Start container-->
    <div class="container">
        <div class="maincontent">
            <div class="topheader">
                <p>CUSTOMERS AREA</p>
                <h2 style="font-weight: 700;">Our Customers</h2>
            </div>
            <!--Customers logo-->
            <div class="row customerlogo_row">
                <div class="section_customers col-md-3 col-sm-6 col-6">
                    <img class="customerlogo" src="image/beauty_pro.png" alt="">
                </div>
                <div class="section_customers col-md-3 col-sm-6 col-6">
                    <img class="customerlogo" src="image/fancy_box.png" alt="">
                </div>
                <div class="section_customers col-md-3 col-sm-6 col-6">
                    <img class="customerlogo" src="image/beta_plus.png" alt="">
                </div>
                <div class="section_customers col-md-3 col-sm-6 col-6">
                    <img class="customerlogo" src="image/jaki_soft.png" alt="">
                </div>
                <div class="section_customers col-md-3 col-sm-6 col-6">
                    <img class="customerlogo" src="image/time_logo.png" alt="">
                </div>
                <div class="section_customers col-md-3 col-sm-6 col-6">
                    <img class="customerlogo" src="image/medi_cros.png" alt="">
                </div>
                <div class="section_customers col-md-3 col-sm-6 col-6">
                    <img class="customerlogo" src="image/exo_pro.png" alt="">
                </div>
                <div class="section_customers col-md-3 col-sm-6 col-6">
                    <img class="customerlogo" src="image/g_round.png" alt="">
                </div>
            </div>
            <!--End Customers logo-->
        </div>
    </div>
    <div style="background-color: #f0f4f8;">
        <div class="ourpartners">
            <div class="ourpartners_content" style="background-color: #f0f4f8;">
                <!--Our Partners Section-->
                <div class="topheader">
                    <p>VALUEABLE PARTNERS</p>
                    <h2>Our Partners</h2>
                </div>
                <!--End section-->
                <!--Slider-->
                <div class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <img class="" src="image/medi_cros.png" alt="">
                            </li>
                            <li class="splide__slide">
                                <img class="" src="image/fancy_box.png" alt="">
                            </li>
                            <li class="splide__slide">
                                <img class="" src="image/beta_plus.png" alt="">
                            </li>
                            <li class="splide__slide">
                                <img class="" src="image/exo_pro.png" alt="">
                            </li>
                            <li class="splide__slide">
                                <img class="" src="image/medi_cros.png" alt="">
                            </li>
                            <li class="splide__slide">
                                <img class="" src="image/fancy_box.png" alt="">
                            </li>
                            <li class="splide__slide">
                                <img class="" src="image/beta_plus.png" alt="">
                            </li>
                            <li class="splide__slide">
                                <img class="" src="image/exo_pro.png" alt="">
                            </li>
                            <li class="splide__slide">
                                <img class="" src="image/medi_cros.png" alt="">
                            </li>
                            <li class="splide__slide">
                                <img class="" src="image/fancy_box.png" alt="">
                            </li>
                            <li class="splide__slide">
                                <img class="" src="image/beta_plus.png" alt="">
                            </li>
                            <li class="splide__slide">
                                <img class="" src="image/exo_pro.png" alt="">
                            </li>
                            <li class="splide__slide">
                                <img class="" src="image/medi_cros.png" alt="">
                            </li>
                            <li class="splide__slide">
                                <img class="" src="image/fancy_box.png" alt="">
                            </li>
                            <li class="splide__slide">
                                <img class="" src="image/beta_plus.png" alt="">
                            </li>
                            <li class="splide__slide">
                                <img class="" src="image/exo_pro.png" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
                <!--End slider section-->
            </div>
        </div>
    </div>
    <script>
        var splide = new Splide('.splide', {
            type: 'loop',
            perPage: 4,
            perMove: 1,
        });
        splide.mount();
    </script>
@endsection
