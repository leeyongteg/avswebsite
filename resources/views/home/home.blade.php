@extends('app_front')

@section('content')
    <!---slider-->
    <section class="slider style_four nav_position_one">
        <div class="owl-carousel owl_nav_block owl_dots_none theme_carousel owl-theme"
            data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 7000, "smartSpeed": 1800, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>
            <div class="slide-item-content">
                <div class="slide-item content_left">
                    <div class="image-layer"
                        style="background-image:url({{ asset('assets/images/sliders/slider-1-1.jpg') }})">
                    </div>
                    <div class="auto-container">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="slider_content pd_top_180 pd_bottom_200">
                                    <h6 class="animate_up d-inline-block"> Our Vision to Grow Better </h6>
                                    <h1 class="animate_left"> Inspired <br> Performance </h1>
                                    <p class="description animate_right"> Duty obligations of business it
                                        will
                                        frequently occur that pleasures <br> have to be repudiated and
                                        annoyances
                                        accepted. </p>
                                    <div class="button_all animate_down">
                                        <a href="#" target="_blank" rel="nofollow"
                                            class="theme-btn one  animated">Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item-content">
                <div class="slide-item content_center">
                    <div class="image-layer"
                        style="background-image:url({{ asset('assets/images/sliders/slider-1-2.jpg') }})">
                    </div>
                    <div class="auto-container">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="slider_content pd_top_180 pd_bottom_200">
                                    <h6 class="animate_up d-inline-block"> Hire the Best </h6>
                                    <h1 class="animate_left"> Hire Better, <br> Faster! </h1>
                                    <p class="description animate_right"> On the other hand, we denounce
                                        with
                                        righteous indignation and <br> dislike men who are so beguiled. </p>
                                    <div class="button_all animate_down">
                                        <a href="#" target="_blank" rel="nofollow"
                                            class="theme-btn one  animated">Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item-content">
                <div class="slide-item content_right">
                    <div class="image-layer"
                        style="background-image:url({{ asset('assets/images/sliders/slider-1-3.jpg') }})">
                    </div>
                    <div class="auto-container">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="slider_content pd_top_180 pd_bottom_200">
                                    <h6 class="animate_up d-inline-block"> Our Vision to Grow Better </h6>
                                    <h1 class="animate_left"> Countless <br> Happy Clients </h1>
                                    <p class="description animate_right"> These cases are perfectly simple
                                        and easy
                                        to distinguish. In a free <br> hour, when our power of choice is
                                        untrammelled.
                                    </p>
                                    <a href="#" target=_blank rel=nofollow class="theme-btn one  animated _zoomIn">
                                        Read
                                        More </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---slider-end--->
    <!----icon box---->
    <section class="icon-box-section position-relative mr_top_minus_90 z_99">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
                    <div class="icon_box_all style_five">
                        <div class="icon_content">
                            <div class="icon">
                                <span class="icon-support"></span>
                            </div>
                            <small>01</small>
                            <div class="text_box">
                                <h2>24/7 Customer support</h2>
                                <p>The less water you use, the less runoff and wastewater that eventually end
                                    up in the ocean.</p>
                            </div>
                            <div class="hover_content">
                                <div class="content">
                                    <div class="inner">
                                        <p>The less water you use, the less runoff and wastewater that
                                            eventually end up in the ocean.</p>
                                        <a href="#" class="read_more">Read More<span
                                                class="icon-right-arrow-long"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_20"></div>
                    <!--===============spacing==============-->
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
                    <div class="icon_box_all style_five">
                        <div class="icon_content">
                            <div class="icon">
                                <span class="icon-united"></span>
                            </div>
                            <small>02</small>
                            <div class="text_box">
                                <h2>Experience Team</h2>
                                <p>The less water you use, the less runoff and wastewater that eventually end
                                    up in the ocean.</p>
                            </div>
                            <div class="hover_content">
                                <div class="content">
                                    <div class="inner">
                                        <p>The less water you use, the less runoff and wastewater that
                                            eventually end up in the ocean.</p>
                                        <a href="#" class="read_more">Read More <span
                                                class="icon-right-arrow-long"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_20"></div>
                    <!--===============spacing==============-->
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                    <div class="icon_box_all style_five">
                        <div class="icon_content">
                            <div class="icon">
                                <span class="icon-solution"></span>
                            </div>
                            <small>03</small>
                            <div class="text_box">
                                <h2>Smart solutions</h2>
                                <p>The less water you use, the less runoff and wastewater that eventually end
                                    up in the ocean.</p>
                            </div>
                            <div class="hover_content">
                                <div class="content">
                                    <div class="inner">
                                        <p>The less water you use, the less runoff and wastewater that
                                            eventually end up in the ocean.</p>
                                        <a href="#" class="read_more">Read More <span
                                                class="icon-right-arrow-long"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----icon box end---->
@endsection
