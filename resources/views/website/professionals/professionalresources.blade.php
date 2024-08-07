@extends('layouts.app')

@section('title')
    Professional Resources
@endsection

@section('content')
    <div class="st-content">
        <div class="st-page-heading st-dynamic-bg" data-src="{{secure_asset('assets/img/op.jpg')}}">
            <div class="container">
                <div class="st-page-heading-in text-center">
                    <h1 class="st-page-heading-title">
                       
                        @if (app()->getLocale() == 'ar')
                        الموارد الطبية
                          @else
                          Professional Resources
                          @endif
                    </h1>
                </div>
            </div>
        </div>
        <style>
            .story_img {
                width: 50%;
                min-height: 400px;
{{--                background: url({{secure_asset('assets/img/blog12.jpg')}}) no-repeat;--}}
                background-position: center;
                background-size: cover;
                border-radius: 20px;
            }
        </style>
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="st-post-details st-style1">

                        @foreach($courses as $course)
                        <div class="story_con">
                            <div class="story_img" style="  background: url({{secure_asset('assets/img/'.$course->image)}}) no-repeat;" ></div>
                            <div class="story_text"><h2>{{$course->name}}</h2>
                                <p>{{$course->description}}</p>
                                <a href="{{ route('website.professionals.viewproresource',$course->uuid) }}">View Course </a>
                            </div>
                        </div>
                        <br/>
                        <div class="st-seperator">
                            <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                            <div class="st-seperator-center"><img src='{{secure_asset('assets/img/arrow.png')}}' alt="icon"></div>
                            <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="st-height-b100 st-height-lg-b80"></div>
        </div>
    </div>

@endsection
