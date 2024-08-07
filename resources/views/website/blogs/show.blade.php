@extends('layouts.app')

@section('title')
    {{$blog->name}}
@endsection

@section('styles')
    <style>
        blockquote {
            background-color: #f9fafc;
            margin: 0;
            padding: 30px 40px 27px;
            font-size: 24px;
            line-height: 1.6em;
            border-left: 5px solid #007bff;
            color: #111;
            border-radius: 7px;
            font-weight: 400;
            margin: 20px 0;
        }
    </style>
@endsection

@section('content')
    <div class="st-content">
        <div class="st-page-heading st-dynamic-bg" style="background-size: cover;background-position: right;background-repeat: no-repeat;" data-src="{{secure_asset('assets/img/'.$blog->image)}}">
            <div class="container">
                <div class="st-page-heading-in text-center">
                    <h1 class="st-page-heading-title">
                        {{$blog->name}}
                    </h1>
                </div>
            </div>
        </div>
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="row">
                        <div class="col-12">
                            <div class="single-main">

                                <div class="meta">
                                    <div class="meta-left">
                                        <span class="author"><a href="#">{{$blog->title}}</a></span>
                                    </div>
                                    <div class="meta-right">
                                        <span class="date"><i class="far fa-clock"></i>
                                            {{$blog->created_at->format('Y-m-d')}}
                                        </span>
                                    </div>
                                    <div class="news-text" style="margin-top: 15%;">
                                    {{ \Str::limit($blog->description,30)  }}....
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="st-height-b100 st-height-lg-b80"></div>
        </div>
    </div>
    </div>
    </div>
@endsection
