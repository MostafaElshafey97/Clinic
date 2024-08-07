{{-- @extends('layouts.app')

@section('title')
    Success Stories
@endsection

@section('content')
    <div class="st-content">
        <div class="st-page-heading st-dynamic-bg" data-src="{{secure_asset('assets/img/op.jpg')}}">
<div class="container">
    <div class="st-page-heading-in text-center">
        <h1 class="st-page-heading-title">Success Stories</h1>
    </div>
</div>
</div>
@foreach($stories as $story)
<section id="doctors">
    <div class="st-height-b120 st-height-lg-b80"></div>
    <div class="container">
        <div class="st-section-heading st-style1">
            <div class="st-seperator">
                <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                <div class="st-seperator-center"><img src="{{secure_asset('assets/img/arrow.png')}}" alt="icon"></div>
                <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
            </div>
            <div class="st-section-heading-subtitle">
                {!! \Str::limit($story->content,30) !!}
            </div>
        </div>
    </div>

    <div class="container">
        <div class="st-slider st-style2">
            <div class="slick-container" id="recentinvts" data-autoplay="1" data-loop="1" data-speed="600" data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lg-slides="2" data-add-slides="2">
                <div class="slick-wrapper">
                    @php
                    $images = explode(',',$story->image);
                    @endphp
                    @foreach($images as $image)
                    <div class="slick-slide-in">
                        <div class="st-member st-style1 st-zoom">
                            <div class="st-member-img">
                                <img src="{{secure_asset('assets/img/'.$image)}}" alt="member1" class="st-zoom-in">
                                <div class="st-member-social-wrap">
                                    <img src="{{secure_asset('assets/img/shape/member-shape.png')}}" alt="shape" class="st-member-social-bg">
                                    <ul class="st-member-social st-mp0">
                                        <li><a href="{{route('website.show_success_story',$story->uuid)}}">{{$story->name}}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="pagination st-style1 st-flex st-hidden"></div>
            <div class="swipe-arrow st-style1">
                <div class="slick-arrow-left" style="background-color: black;color: #fff;"><i class="fa fa-chevron-left"></i></div>
                <div class="slick-arrow-right" style="background-color: black;color: #fff;"><i class="fa fa-chevron-right"></i></div>
            </div>
        </div>
    </div>

</section>
@endforeach
</div>

@endsection --}}


@extends('layouts.app')

@section('title')
Success Stories
@endsection

@section('content')
<div class="st-content">
    <div class="st-page-heading st-dynamic-bg" data-src="{{secure_asset('assets/img/op.jpg')}}">
        <div class="container">
            <div class="st-page-heading-in text-center">
                <h1 class="st-page-heading-title">
                    
                    @if (app()->getLocale() == 'ar')
                    قصصنا
                    @else
                    Success Stories
                    @endif
                </h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mb-5">
            @foreach($stories as $story)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="st-section-heading st-style1">
                    <div class="st-seperator">
                        <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                        <div class="st-seperator-center"><img src="{{secure_asset('assets/img/arrow.png')}}" alt="icon"></div>
                        <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                    </div>
                    <div class="st-section-heading-subtitle">
                        {!! \Str::limit($story->content,30) !!}
                    </div>
                </div>
                @php
                $images = explode(',',$story->image);
                @endphp
                @foreach($images as $image)
                <div class="st-member st-style1 st-zoom">
                    <div class="st-member-img">
                        <img src="{{secure_asset('assets/img/'.$image)}}" alt="member1" class="st-zoom-in">
                        <div class="st-member-social-wrap">
                            <img src="{{secure_asset('assets/img/shape/member-shape.png')}}" alt="shape" class="st-member-social-bg">
                            <ul class="st-member-social st-mp0">
                                <li><a href="{{route('website.show_success_story',$story->uuid)}}">{{$story->name}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection