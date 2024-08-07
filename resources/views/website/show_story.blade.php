@extends('layouts.app')

@section('title')
{{$story->name}}
@endsection

@section('content')
@php
                                         $images = explode(',',$story->image);
                                @endphp
    <div class="st-content">
        <div class="st-page-heading st-dynamic-bg" data-src="{{secure_asset('assets/img/'.$images[0])}}">
            <div class="container">
                <div class="st-page-heading-in text-center">
                    <h1 class="st-page-heading-title">{{$story->name}}</h1>
                </div>
            </div>
        </div>
        <section class="news-single section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="single-main">
                                {!! $story->content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
