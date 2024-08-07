@extends('layouts.app')

@section('title')
    About
@endsection

@section('content')
    <div class="st-content">
        <div class="st-height-b125 st-height-lg-b80"></div>
        <div class="st-slider st-style1 st-slider-animation1">
            <div class="slick-container" data-autoplay="1" data-loop="1" data-speed="800" data-autoplay-timeout="500"
                 data-center="0" data-slides-per-view="1">
                <div class="slick-wrapper">
                    <div class="slick-slide-in">
                        <div class="st-hero st-style1 st-size1">
                            <div class="st-hero-bg st-dynamic-bg st-bg" data-src="{{secure_asset('assets/img/ss3.jpg')}}"></div>
                            <div class="container">
                                <div class="st-hero-text">
                                    <h1 class="st-hero-title" style="color:white;">
                                        Save your own health <br>
                                        Get best Service
                                    </h1>
                                    <div class="st-hero-btn-group">
                                        <a href="#appointment" class="st-btn st-style1 st-size-medium st-color1 st-smooth-move"
                                           style="border: 1px solid #0f3bff;">Get Appointment</a>
                                    </div>
                                    <div class="st-height-b15 st-height-lg-b15"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide-in">
                        <div class="st-hero st-style1 st-size1">
                            <div class="st-hero-bg st-dynamic-bg st-bg" data-src="{{secure_asset('assets/img/ss.jpg')}}"></div>
                            <div class="container">
                                <div class="st-hero-text">
                                    <h1 class="st-hero-title" style="color:white;">
                                        How do we protect our elders <br>
                                        from accidents at home
                                    </h1>
                                    <div class="st-hero-btn-group">
                                        <a href="#appointment"
                                           class="st-btn st-style1 st-size-medium st-color1 st-smooth-move">Appointment</a>
                                    </div>
                                    <div class="st-height-b15 st-height-lg-b15"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination st-style2 st-hidden"></div>
            <div class="swipe-arrow st-style2">
                <div class="slick-arrow-left"><i class="fa fa-chevron-left"></i></div>
                <div class="slick-arrow-right"><i class="fa fa-chevron-right"></i></div>
            </div>
        </div>

        <section class="st-about-wrap" id="about">
            <div class="st-height-b120 st-height-lg-b50"></div>
            <div class="container">
                <div class="st-section-heading st-style1">
                    <h2 class="st-section-heading-title">About Us</h2>
                    <div class="st-seperator">
                        <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                        <div class="st-seperator-center"><img src="{{secure_asset('assets/img/arrow.png')}}" alt="icon"></div>
                        <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                    </div>
                    <div class="st-section-heading-subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. <br>Lorem Ipsum the industry's standard dummy text.</div>
                </div>
                <div class="st-height-b40 st-height-lg-b40"></div>
            </div>
            <div class="container">
                <div class="row m-0">
                    <div class="col-lg-6 col-md-12 p-0">
                        <div class="about-image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 p-0">
                        <div class="about-content">
                            <span>About Us</span>
                            <h2>Short Story About Fovia Clinic Since 1999</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                            <ul>
                                <li><i class="icofont-tick-mark"></i> Scientific Skills For getting a better result</li>
                                <li><i class="icofont-tick-mark"></i> Communication Skills to getting in touch</li>
                                <li><i class="icofont-tick-mark"></i> A Career Overview opportunity Available</li>
                                <li><i class="icofont-tick-mark"></i> A good Work Environment For work</li>
                                <li><i class="icofont-tick-mark"></i> Scientific Skills For getting a better result</li>
                                <li><i class="icofont-tick-mark"></i> Communication Skills to getting in touch</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section id="team" class="team section single-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">

                        <div class="single-team">
                            <div class="t-head">
                                <img src="{{secure_asset('assets/img/team1.jpg')}}" alt="#">
                            </div>
                            <div class="t-bottom">
                                <p>Neurosurgeon</p>
                                <h2><a href="{{route('website.doctordetails',1)}}">Collis Molate</a></h2>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6 col-12">

                        <div class="single-team">

                            <div class="t-head">
                                <img src="{{secure_asset('assets/img/team2.jpg')}}" alt="#">
                            </div>

                            <div class="t-bottom">
                                <p>Neurosurgeon</p>
                                <h2><a href="{{route('website.doctordetails',1)}}">Domani Plavon</a></h2>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6 col-12">

                        <div class="single-team">

                            <div class="t-head">
                                <img src="{{secure_asset('assets/img/team3.jpg')}}" alt="#">
                            </div>

                            <div class="t-bottom">
                                <p>Dental Surgeon</p>
                                <h2><a href="{{route('website.doctordetails',1)}}">John Mard</a></h2>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6 col-12">

                        <div class="single-team">

                            <div class="t-head">
                                <img src="{{secure_asset('assets/img/team4.jpg')}}" alt="#">
                            </div>

                            <div class="t-bottom">
                                <p>Neurosurgeon</p>
                                <h2><a href="{{route('website.doctordetails',1)}}">Amanal Frond</a></h2>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6 col-12">

                        <div class="single-team">
                            <div class="t-head">
                                <img src="{{secure_asset('assets/img/team1.jpg')}}" alt="#">
                            </div>
                            <div class="t-bottom">
                                <p>Neurosurgeon</p>
                                <h2><a href="{{route('website.doctordetails',1)}}">Collis Molate</a></h2>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6 col-12">

                        <div class="single-team">

                            <div class="t-head">
                                <img src="{{secure_asset('assets/img/team2.jpg')}}" alt="#">
                            </div>

                            <div class="t-bottom">
                                <p>Neurosurgeon</p>
                                <h2><a href="{{route('website.doctordetails',1)}}">Domani Plavon</a></h2>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <div class="st-height-b120 st-height-lg-b50"></div>
    </div>
@endsection
