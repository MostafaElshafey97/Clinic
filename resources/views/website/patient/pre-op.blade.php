@extends('layouts.app')

@section('title')
    Preparing for surgery & Procedure
@endsection

@section('content')
    <div class="st-content">
        <div class="st-page-heading st-dynamic-bg" data-src="{{secure_asset('assets/img/op.jpg')}}">
            <div class="container">
                <div class="st-page-heading-in text-center">
                    <h1 class="st-page-heading-title">
                        
                        @if (app()->getLocale() == 'ar')
                        التحضير للجراحة والإجراءات
                          @else
                          Preparing for surgery & Procedure
                          @endif
                    </h1>
                </div>
            </div>
        </div>
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="st-post-details st-style1">
                        <blockquote><small>Professor Mahmoud has over 35 years’ experience in orthopedics, with special interest in
                                Hand,
                                Upper Limb
                                and Microsurgery. He is an orthopedic surgeon in the Hand, Upper Limb and Microsurgery Unit, and the
                                Orthopedic Trauma and Emergency Unit, Kasr Al Ainy, Cairo University hospital.</small></blockquote>
                        <div class="st-seperator">
                            <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                            <div class="st-seperator-center"><img src="{{secure_asset('assets/img/arrow.png')}}" alt="icon"></div>
                            <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                        </div>
                        <blockquote><small>Professor Mahmoud has over 35 years’ experience in orthopedics, with special interest in
                                Hand,
                                Upper Limb
                                and Microsurgery. He is an orthopedic surgeon in the Hand, Upper Limb and Microsurgery Unit, and the
                                Orthopedic Trauma and Emergency Unit, Kasr Al Ainy, Cairo University hospital.</small></blockquote>
                        <div class="st-seperator">
                            <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                            <div class="st-seperator-center"><img src="{{secure_asset('assets/img/arrow.png')}}" alt="icon"></div>
                            <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                        </div>
                        <blockquote><small>Professor Mahmoud has over 35 years’ experience in orthopedics, with special interest in
                                Hand,
                                Upper Limb
                                and Microsurgery. He is an orthopedic surgeon in the Hand, Upper Limb and Microsurgery Unit, and the
                                Orthopedic Trauma and Emergency Unit, Kasr Al Ainy, Cairo University hospital.</small></blockquote>
                        <div class="st-seperator">
                            <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                            <div class="st-seperator-center"><img src="{{secure_asset('assets/img/arrow.png')}}" alt="icon"></div>
                            <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                        </div>
                        <blockquote><small>Professor Mahmoud has over 35 years’ experience in orthopedics, with special interest in
                                Hand,
                                Upper Limb
                                and Microsurgery. He is an orthopedic surgeon in the Hand, Upper Limb and Microsurgery Unit, and the
                                Orthopedic Trauma and Emergency Unit, Kasr Al Ainy, Cairo University hospital.</small></blockquote>
                        <div class="st-seperator">
                            <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                            <div class="st-seperator-center"><img src="{{secure_asset('assets/img/arrow.png')}}" alt="icon"></div>
                            <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                        </div>
                        <blockquote><small>Professor Mahmoud has over 35 years’ experience in orthopedics, with special interest in
                                Hand,
                                Upper Limb
                                and Microsurgery. He is an orthopedic surgeon in the Hand, Upper Limb and Microsurgery Unit, and the
                                Orthopedic Trauma and Emergency Unit, Kasr Al Ainy, Cairo University hospital.</small></blockquote>
                    </div>
                </div>
            </div>
        </div>
        <div class="st-height-b100 st-height-lg-b80"></div>
    </div>
@endsection
