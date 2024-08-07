@extends('layouts.app')

@section('title')
    Journals A-Z
@endsection

@section('content')
    <div class="st-content">
        <div class="st-page-heading st-dynamic-bg" style="background-size: cover;background-position: right;background-repeat: no-repeat;" data-src="{{secure_asset('assets/img/injuryf.png')}}">
            <div class="container">
                <div class="st-page-heading-in text-center">
                    <h1 class="st-page-heading-title">Journals A-Z</h1>
                </div>
            </div>
        </div>
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="st-post-details st-style1">
                        <style>
                            .course_con {
                                width: 90%;
                                margin: auto;
                                display: flex;
                                justify-content: flex-end;
                                flex-direction: row-reverse;
                                border-radius: 40px;
                                box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
                                padding: 25px;
                                flex-wrap: wrap;
                            }
                            .course_img {
                                height:125px;
                                margin-left: 5px;
                                border: 1px solid;
                                border-radius: 20px;
                                background-image: url('https://i1.rgstatic.net/publication/372586238_Literary_and_critical_encounters_with_the_Anthropocene_An_interview_with_Sean_Hand/links/64f0a164c40f1d22df7d1ae1/smallpreview.png');
                                background-repeat: no-repeat;
                                width: 10%;
                            }
                            .course_text {
                                padding: 25px 0px 0px 50px;
                                width: 89%;
                            }
                            .course_text p {
                                font-size: 13px;
                                color:blue;
                            }
                            .course_con a {
                                font-size:12px;
                                text-decoration: none;
                                background-color: #fff;
                                color: #007bff;
                                border: 1px solid #007bff;
                                padding: 5px 8px;
                                box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
                                border-radius: 20px;
                            }
                            @media (max-width: 650px) {
                                .course_text,.course_img {
                                    width: 100%;
                                }
                            }
                            .article-box {
                                padding: 10px; /* Padding around the content inside the box */
                                border-radius: 5px; /* Rounded corners for the box */
                                display: inline-block; /* Display the box as inline-block to fit the content */
                            }

                            .article-label {
                                font-size:14px;
                                background-color: #007bff; /* Background color of the label */
                                color: #fff; /* Color of the text */
                                padding: 5px 10px; /* Padding around the label */
                                border-radius: 5px; /* Rounded corners for the label */
                                margin-right: 10px; /* Add some space between the label and the content */
                            }

                            .article-box .content {
                                display: inline-block; /* Display the content as inline-block */
                            }

                            .article-box p {
                                margin: 0; /* Remove default margin */
                            }


                        </style>

                        @foreach($journals as $journal)
                            <div class="course_con">
                                <div class="course_img">
                                </div>
                                <div class="course_text">
                                    <h4>
                                        {{$journal->title}}
                                    </h4>
                                    <div class="article-box">
                                        <span class="article-label">Article</span>
                                        <div class="content">
                                            <p>
                                                {{ $journal->description }}
                                            </p>
                                        </div>
                                        <p>Author:   {{$journal->author}}</p>
                                    </div>
                                    <a href="#">Source </a>
                                </div>
                            </div>



                            <br>
                            <div class="st-seperator">
                                <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInLeft;"></div>
                                <div class="st-seperator-center"><img src="{{secure_asset('assets/img/arrow.png')}}" alt="icon"></div>
                                <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInRight;"></div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="st-height-b100 st-height-lg-b80"></div>
    </div>
@endsection
