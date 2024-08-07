@extends('layouts.app')

@section('title')
    Events
@endsection

@section('content')
    <div class="st-content">
        <div class="st-page-heading st-dynamic-bg"
             style="background-size: cover;background-position: right;background-repeat: no-repeat;"
             data-src="{{secure_asset('assets/img/injuryf.png')}}">
            <div class="container">
                <div class="st-page-heading-in text-center">
                    <h1 class="st-page-heading-title">
                       
                        @if (app()->getLocale() == 'ar')
                        الأحداث
                          @else
                          Events
                          @endif
                    </h1>
                </div>
            </div>
        </div>
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="row">
                        <div class="container">
                            <div class="st-slider st-style2">
                                <div class="slick-container" id="recentinvts" data-autoplay="1" data-loop="1"
                                     data-speed="600" data-center="0"
                                     data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="1"
                                     data-md-slides="1"
                                     data-lg-slides="1" data-add-slides="2">
                                    <div class="slick-wrapper">
                                        @foreach($events as $event)
                                            <div class="slick-slide-in">
                                                <div class="single-news">
                                                    <div class="news-head">
                                                        <img src="{{secure_asset('assets/img/'.$event->image)}}" alt="#">
                                                    </div>
                                                    <div class="news-body">
                                                        <div class="news-content">
                                                            <div class="date">
                                                                {{$event->created_at->format('d-M-Y')}}
                                                            </div>
                                                            <h2>
                                                                <a href="{{route('website.events.show',$event->uuid)}}">{{$event->name}}
                                                                    .</a></h2>
                                                            <p class="text">
                                                                {{-- {{ $event->description}} --}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="pagination st-style1 st-flex st-hidden"></div>

                                <div class="swipe-arrow st-style1">

                                    <div class="slick-arrow-left" style="background-color: black;color: #fff;"><i
                                            class="fa fa-chevron-left"></i></div>
                                    <div class="slick-arrow-right" style="background-color: black;color: #fff;"><i
                                            class="fa fa-chevron-right"></i></div>
                                </div>
                            </div>
                        </div>
                        @foreach($events as $event)
                            <div class="col-lg-6 col-md-6 col-12">

                                <div class="single-news">
                                    <div class="news-head">
                                        <img src="{{secure_asset('assets/img/'.$event->image)}}" alt="#">
                                    </div>
                                    <div class="news-body">
                                        <div class="news-content">
                                            <div class="date">22 Aug, 2020</div>
                                            <h2><a href="{{route('website.events.show',$event->uuid)}}">{{$event->name}}.</a></h2>
                                            <p class="text">
                                                {{-- {{ \Str::limit($event->description,30) }}.... --}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="main-sidebar">

                        <!-- <div class="single-widget category">
                        <h3 class="title">Blog Categories</h3>
                        <ul class="categor-list">
                        <li><a href="#">Glasses</a></li>
                        </ul>
                        </div> -->

                        <div class="single-widget side-tags">
                            <h3 class="title">Tags</h3>
                            <ul class="tag">
                                <li><a href="#">tag</a></li>
                                <li><a href="#">tag</a></li>
                                <li><a href="#">tag</a></li>
                                <li><a href="#">tag</a></li>
                                <li><a href="#">tag</a></li>
                                <li><a href="#">tag</a></li>
                                <li><a href="#">tag</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="st-height-b100 st-height-lg-b80"></div>
    </div>

@endsection
