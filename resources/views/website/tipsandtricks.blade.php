@extends('layouts.app')

@section('title')
    Tips & Tricks
@endsection

@section('content')
    <div class="st-content">
        <div class="st-page-heading st-dynamic-bg" style="background-size: cover;background-position: right;background-repeat: no-repeat;" data-src="{{secure_asset('assets/img/injuryf.png')}}">
            <div class="container">
                <div class="st-page-heading-in text-center">
                    <h1 class="st-page-heading-title">Tips & Tricks</h1>
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
                                <div class="slick-container" id="recentinvts" data-autoplay="1" data-loop="1" data-speed="600" data-center="0"
                                     data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="1" data-md-slides="1"
                                     data-lg-slides="1" data-add-slides="2">
                                    <div class="slick-wrapper">
                                        <div class="slick-slide-in">
                                            <div class="single-news">
                                                <div class="news-head">
                                                    <div class="wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                                        <div class="st-video-block st-style1 st-zoom" style="border-radius:0%;">
                                                            <div class="st-video-block-img st-zoom-in st-dynamic-bg" data-src="{{secure_asset('assets/img/video-block-img.jpg')}}"></div>
                                                            <a href="https://www.youtube.com/embed/jRcfE2xxSAw?autoplay=1"
                                                               class="st-play-btn st-style1 st-video-open">
                                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                     y="0px" viewBox="0 0 336 336" xml:space="preserve">
                          <g>
                              <path
                                  d="M286.8,49.2C256.4,18.8,214.4,0,168,0C121.6,0,79.6,18.8,49.2,49.2C18.8,79.6,0,121.6,0,168c0,46.4,18.8,88.4,49.2,118.8
                              C79.6,317.2,121.6,336,168,336c46.4,0,88.4-18.8,118.8-49.2C317.2,256.4,336,214.4,336,168C336,121.6,317.2,79.6,286.8,49.2z
                              M272.4,272.4c-26.8,26.8-63.6,43.2-104.4,43.2s-77.6-16.4-104.4-43.2C37.2,245.6,20.4,208.8,20.4,168S36.8,90.4,63.6,63.6
                              C90.4,36.8,127.2,20.4,168,20.4s77.6,16.4,104.4,43.2c26.8,26.8,43.2,63.6,43.2,104.4S298.8,245.6,272.4,272.4z" />
                          </g>
                                                                    <g>
                                                                        <path d="M261.2,156c-0.8-0.8-2-2.4-3.2-4c-0.4-0.4-0.4-0.4-0.8-0.8c-1.2-1.2-2.4-2-4-2.8l-59.2-34c0,0-0.4,0-0.4-0.4L134,79.6
                              c-5.2-3.2-11.2-3.6-16.8-2.4c-5.6,1.6-10.4,5.2-13.6,10.4c-1.2,1.6-1.6,3.6-2.4,5.2c-0.4,1.2-0.4,2.8-0.8,4.4c0,0.4,0,1.2,0,1.6
                              V168v68.8c0,6,2.4,11.6,6.4,15.6s9.6,6.4,15.6,6.4c2,0,4.4-0.4,6.4-1.2s4-1.6,5.6-2.8l58.8-34l0.8-0.4l59.2-34
                              c0.4,0,0.4-0.4,0.8-0.4c4.8-3.2,8.4-8,9.6-13.2C265.2,167.2,264.4,161.2,261.2,156z M244,168.4c0,0.4-0.4,0.8-0.8,0.8h-0.4
                              L184,203.6l-0.4,0.4l-58.8,34c-0.4,0-0.4,0.4-0.8,0.4c0,0-0.4,0-0.4,0.4h-0.4c-0.4,0-0.8-0.4-1.2-0.4c-0.4-0.4-0.4-0.8-0.4-1.2
                              V168V99.2v-0.4v-0.4c0.4-0.4,0.8-0.8,1.2-0.8c0.4,0,0.8,0,1.2,0l59.2,34l0.4,0.4l59.6,34.4l0.4,0.4l0.4,0.4
                              C244,167.6,244,168,244,168.4z" />
                                                                    </g>
                        </svg>
                                                                <span class="st-video-animaiton"><span></span></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="news-body">
                                                    <div class="news-content">
                                                        <div class="date">22 Aug, 2020</div>
                                                        <h2><a href="{$base_url}index.php?act=blogs&id=1">We have annnocuced our new product.</a></h2>
                                                        <p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slick-slide-in">
                                            <div class="single-news">
                                                <div class="news-head">
                                                    <div class="wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                                        <div class="st-video-block st-style1 st-zoom" style="border-radius:0%;">
                                                            <div class="st-video-block-img st-zoom-in st-dynamic-bg" data-src="{{secure_asset('assets/img/video-block-img.jpg')}}"></div>
                                                            <a href="https://www.youtube.com/embed/jRcfE2xxSAw?autoplay=1"
                                                               class="st-play-btn st-style1 st-video-open">
                                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                     y="0px" viewBox="0 0 336 336" xml:space="preserve">
                          <g>
                              <path
                                  d="M286.8,49.2C256.4,18.8,214.4,0,168,0C121.6,0,79.6,18.8,49.2,49.2C18.8,79.6,0,121.6,0,168c0,46.4,18.8,88.4,49.2,118.8
                              C79.6,317.2,121.6,336,168,336c46.4,0,88.4-18.8,118.8-49.2C317.2,256.4,336,214.4,336,168C336,121.6,317.2,79.6,286.8,49.2z
                              M272.4,272.4c-26.8,26.8-63.6,43.2-104.4,43.2s-77.6-16.4-104.4-43.2C37.2,245.6,20.4,208.8,20.4,168S36.8,90.4,63.6,63.6
                              C90.4,36.8,127.2,20.4,168,20.4s77.6,16.4,104.4,43.2c26.8,26.8,43.2,63.6,43.2,104.4S298.8,245.6,272.4,272.4z" />
                          </g>
                                                                    <g>
                                                                        <path d="M261.2,156c-0.8-0.8-2-2.4-3.2-4c-0.4-0.4-0.4-0.4-0.8-0.8c-1.2-1.2-2.4-2-4-2.8l-59.2-34c0,0-0.4,0-0.4-0.4L134,79.6
                              c-5.2-3.2-11.2-3.6-16.8-2.4c-5.6,1.6-10.4,5.2-13.6,10.4c-1.2,1.6-1.6,3.6-2.4,5.2c-0.4,1.2-0.4,2.8-0.8,4.4c0,0.4,0,1.2,0,1.6
                              V168v68.8c0,6,2.4,11.6,6.4,15.6s9.6,6.4,15.6,6.4c2,0,4.4-0.4,6.4-1.2s4-1.6,5.6-2.8l58.8-34l0.8-0.4l59.2-34
                              c0.4,0,0.4-0.4,0.8-0.4c4.8-3.2,8.4-8,9.6-13.2C265.2,167.2,264.4,161.2,261.2,156z M244,168.4c0,0.4-0.4,0.8-0.8,0.8h-0.4
                              L184,203.6l-0.4,0.4l-58.8,34c-0.4,0-0.4,0.4-0.8,0.4c0,0-0.4,0-0.4,0.4h-0.4c-0.4,0-0.8-0.4-1.2-0.4c-0.4-0.4-0.4-0.8-0.4-1.2
                              V168V99.2v-0.4v-0.4c0.4-0.4,0.8-0.8,1.2-0.8c0.4,0,0.8,0,1.2,0l59.2,34l0.4,0.4l59.6,34.4l0.4,0.4l0.4,0.4
                              C244,167.6,244,168,244,168.4z" />
                                                                    </g>
                        </svg>
                                                                <span class="st-video-animaiton"><span></span></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="news-body">
                                                    <div class="news-content">
                                                        <div class="date">22 Aug, 2020</div>
                                                        <h2><a href="{$base_url}index.php?act=blogs&id=1">We have annnocuced our new product.</a></h2>
                                                        <p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
