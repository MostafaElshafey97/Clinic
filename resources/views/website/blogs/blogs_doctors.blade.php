@extends('layouts.app')

@section('title')
    Doctors Blogs
@endsection

@section('content')
    <div class="st-content">
        <div class="st-page-heading st-dynamic-bg" style="background-size: cover;background-position: right;background-repeat: no-repeat;" data-src="{{secure_asset('assets/img/injuryf.png')}}">
            <div class="container">
                <div class="st-page-heading-in text-center">
                    <h1 class="st-page-heading-title">
                        
                        @if (app()->getLocale() == 'ar')
                        مدونات الأطباء
                          @else
                          Doctors Blogs
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

                        @foreach($blogs as $blog)
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="single-news">
                                <div class="news-head">
                                    <img src="{{secure_asset('assets/img/'.$blog->image)}}" alt="#">
                                </div>
                                <div class="news-body">
                                    <div class="news-content">
                                        <div class="date">
                                            {{$blog->name}}
                                        </div>
                                        <h2><a href="{{route('website.blogs.show',$blog->uuid)}}">
                                            {{$blog->title}}
                                        </a></h2>
                                        <p class="text">
                                        {{ \Str::limit($blog->description,30)  }}....
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
