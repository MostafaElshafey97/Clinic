@extends('layouts.app')

@section('title')
HomePage
@endsection

@section('styles')
<style>
    .st-funfact.st-style1 .st-funfact-icon {
        background-color: grey !important;
    }

    .st-funfact.st-style1 .st-funfact-icon svg {
        fill: #FFF !important;
    }

    .st-funfact.st-style1:hover .st-funfact-icon {
        background-color: #0d6efd !important;
    }

    .st-imagebox-title {
        text-transform: uppercase;
    }
</style>
@endsection

@section('content')
<div class="st-content">
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


    <div class="st-height-b125 st-height-lg-b80"></div>
    <div class="st-slider st-style1 st-slider-animation1">
        <div class="slick-container" data-autoplay="1" data-loop="1" data-speed="800" data-autoplay-timeout="500" data-center="0" data-slides-per-view="1">
            <div class="slick-wrapper">
                <div class="slick-slide-in">
                    <div class="st-hero st-style1 st-size1">
                        <div class="st-hero-bg st-dynamic-bg st-bg" data-src="{{secure_asset('assets/img/ss3.jpg')}}"></div>
                        <div class="container">
                            <div class="st-hero-text">
                                <h1 class="st-hero-title" style="color:white;">
                                    The art of transforming the passion into knowledge to heal
                                </h1>
                                <div class="st-hero-btn-group">
                                    <a href="#appointment" class="st-btn st-style1 st-size-medium st-color1 st-smooth-move" style="border: 1px solid #0f3bff;">{{ __('admin.Appointment') }}</a>
                                </div>
                                <div class="st-height-b15 st-height-lg-b15"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-in">
                    <div class="st-hero st-style1 st-size1">
                        <div class="st-hero-bg st-dynamic-bg st-bg" data-src="{{secure_asset('assets/img/thirdslide.png')}}"></div>
                        <div class="container">
                            <div class="st-hero-text">
                                <h1 class="st-hero-title" style="color:white;">
                                    The art of transforming the passion into knowledge to heal
                                </h1>
                                <div class="st-hero-btn-group">
                                    <a href="#appointment" class="st-btn st-style1 st-size-medium st-color1 st-smooth-move">{{ __('admin.Appointment') }}</a>
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
                                <h1 class="st-hero-title" style="color:#5ba1ed;">
                                    The art of transforming the passion into knowledge to heal
                                </h1>
                                <div class="st-hero-btn-group">
                                    <a href="#appointment" class="st-btn st-style1 st-size-medium st-color1 st-smooth-move">{{ __('admin.Appointment') }}</a>
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
    <section>
        <div class="st-height-b40 st-height-lg-b40"></div>
        <div class="container">
            <div class="st-tabs st-fade-tabs st-style1">
                <ul class="st-tab-links st-style1 section-with-3-icons st-mp0">
                    <li class="st-tab-title active ">
                        <a href="#location1" class="st-dip-blue-box">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <g>
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path d="M12 20.9l4.95-4.95a7 7 0 1 0-9.9 0L12 20.9zm0 2.828l-6.364-6.364a9 9 0 1 1 12.728 0L12 23.728zM12 13a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 2a4 4 0 1 1 0-8 4 4 0 0 1 0 8z" />
                                </g>
                            </svg>
                            <span> {{ __('admin.Main Clinic') }}</span>
                        </a>
                    </li>
                    <li class="st-tab-title">
                        <a href="#location2" class="st-dip-blue-box">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <g>
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path d="M12 20.9l4.95-4.95a7 7 0 1 0-9.9 0L12 20.9zm0 2.828l-6.364-6.364a9 9 0 1 1 12.728 0L12 23.728zM12 13a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 2a4 4 0 1 1 0-8 4 4 0 0 1 0 8z" />
                                </g>
                            </svg>
                            <span> {{ __('admin.Zayed Clinic') }}</span>
                        </a>
                    </li>
                    <li class="st-tab-title">
                        <a href="#emergency" class="st-dip-blue-box">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-ambulance" viewBox="0 0 24 24" stroke-width="1" stroke="red" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="7" cy="17" r="2" />
                                <circle cx="17" cy="17" r="2" />
                                <path d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                                <path d="M6 10h4m-2 -2v4" />
                            </svg>
                            <span> {{ __('admin.Emergency') }}</span>
                        </a>
                    </li>
                    <li class="st-tab-title">
                        <a href="#recentevents" class="st-dip-blue-box">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M20 4H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 15H4V6h16v13z" />
                                <circle cx="12" cy="11" r="3" />
                            </svg>
                            <span> {{ __('admin.Recent Events') }}</span>
                        </a>

                    </li>
                </ul>
                <div class="st-height-b25 st-height-lg-b25"></div>
                <div class="tab-content">
                    <div id="location1" class="st-tab active">
                        <div class="st-imagebox st-style2">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="st-imagebox-img">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.8644307060135!2d31.20717731506936!3d30.04074698188373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458412cc8d62cb3%3A0x730cfb09d007a930!2s3%20Mossadak%2C%20Ad%20Doqi%2C%20Giza%20District%2C%20Giza%20Governorate%203751222!5e0!3m2!1sen!2seg!4v1676485510423!5m2!1sen!2seg" width="450" height="350" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen=""></iframe>
                                    </div>
                                    <div class="st-height-b0 st-height-lg-b30"></div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="st-vertical-middle">
                                        <div class="st-vertical-middle-in">
                                            <div class="st-imagebox-info">
                                                @if (app()->getLocale() == 'ar')
                                                <h2 class="st-imagebox-title"> <span>العيادة</span>  الرئيسية</h2>
                                                @else
                                                <h2 class="st-imagebox-title"> {{ __('admin.Main') }} <span> {{ __('admin.Clinic') }}</span></h2>

                                                @endif
                                                @if (app()->getLocale() == 'ar')
                                                <div class="st-imagebox-text"> شارع مصدق - الدقي - الجيزة<br>السبت والثلاثاء</div>
                                                @else
                                                <div class="st-imagebox-text">3 Mosadak st. - Dokki - Giza.<br>Saturday & Tuesday</div>

                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="location2" class="st-tab">
                        <div class="st-imagebox st-style2">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="st-imagebox-img">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.8644307060135!2d31.20717731506936!3d30.04074698188373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458412cc8d62cb3%3A0x730cfb09d007a930!2s3%20Mossadak%2C%20Ad%20Doqi%2C%20Giza%20District%2C%20Giza%20Governorate%203751222!5e0!3m2!1sen!2seg!4v1676485510423!5m2!1sen!2seg" width="450" height="350" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen=""></iframe>
                                    </div>
                                    <div class="st-height-b0 st-height-lg-b30"></div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="st-vertical-middle">
                                        <div class="st-vertical-middle-in">
                                            <div class="st-imagebox-info">
                                                <h2 class="st-imagebox-title">Zayed <span>Clinic</span></h2>
                                                <div class="st-imagebox-text">Twin Tower - Zayed City - Giza.<br>Wednesday</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="emergency" class="st-tab">
                        <div class="st-imagebox st-style2">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="st-vertical-middle">
                                        <div class="st-vertical-middle-in">
                                            <div class="st-imagebox-info">
                                                <h4 class="st-imagebox-subtitle">In case of emergencies, we're here to assist you. Our dedicated team is ready to
                                                    provide immediate support and solutions to address your urgent needs.<br><br> Contact us now for prompt assistance. </h4>
                                            </div>
                                            <div class="st-imagebox-btn">
                                                <a href="https://wa.me/+201234567890" target="_blank" class="st-style1 st-size-medium st-color1"><svg style="max-width:21px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                                                    </svg> +201021222121</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="recentevents" class="st-tab">
                        <div class="st-imagebox st-style2">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="container">
                                        <div class="row g-3">
                                            @foreach( $events as $event)
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="slick-slide-in">
                                                    <div class="st-member st-style1 st-zoom">
                                                        <div class="st-member-img">
                                                            <img src="{{secure_asset('assets/img/'.$event->image)}}" alt="" class="st-zoom-in">
                                                            <a class="st-doctor-link" style="width:97px;" href="{{route('website.events.show',$event->uuid)}}">
                                                                {{$event->created_at->format('d-M-Y')}}
                                                            </a>
                                                        </div>
                                                        <div class="st-member-meta">
                                                            <div class="st-member-meta-in">
                                                                <h3 class="st-member-name"><a href="{{route('website.events.show',$event->uuid)}}">
                                                                        {{$event->name}}
                                                                    </a></h3>
                                                                <div class="st-member-designation"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="st-about-wrap" id="about">
        <div class="st-shape-bg">
            <img src="{{secure_asset('assets/img/shape/about-bg-shape.png')}}" alt="shape">
        </div>
        <div class="st-height-b120 st-height-lg-b50"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h2 class="st-section-heading-title"> {{ __('admin.Who we Are') }}</h2>
                <div class="st-seperator">
                    <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                    <div class="st-seperator-center"><img src="{{secure_asset('assets/img/arrow.png')}}" alt="icon"></div>
                    <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                </div>
                @if (app()->getLocale() == 'ar')
                <div class="st-section-heading-subtitle">
                    الهدف الأساسي لهذا الموقع هو تعريف مفهوم "جراحة اليد أو الطرف العلوي" لجميع المهتمين بها من المرضى والأطباء والمتخصصين وكل من يبحث عن معلومات حول ما تم تحقيقه حتى الآن في مجال جراحة اليد في مصر. وفي هذا الموقع يمكنك التعرف أكثر على أهم تخصصاتنا، كما يمكنك العثور على إجابات للأسئلة التي تدور في ذهنك.

                </div>
                @else
                <div class="st-section-heading-subtitle">
                    The primary aim of this website is to define the concept of “Hand or Upper Limb Surgery” to all those who are interested in it, including patients, doctors, specialists and anyone who seeks information about what has been achieved so far in the field of hand surgery in Egypt.
                    On this website, you can learn more about our most important specialties, and you can find answers to questions on your mind.
                </div>
                @endif
            </div>
            <div class="st-height-b40 st-height-lg-b40"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="st-vertical-middle">
                        <div class="st-vertical-middle-in">
                            <div class="st-text-block st-style1">
                                <h2 class="st-text-block-title"></h2>
                                <div class="st-height-b20 st-height-lg-b20"></div>
                                <div class="st-text-block-text">
                                    <ul>
                                        @if (app()->getLocale() == 'ar')
                                        <li>بكالوريوس الطب والجراحة جامعة القاهرة.</li>
                                        <li>ماجستير ودكتوراه جراحة العظام - جامعة القاهرة.</li>
                                        <li>أستاذ جراحة العظام - جامعة القاهرة.</li>
                                        <li>استشاري جراحة اليد والجراحات الميكروسكوبية.</li>
                                        <li>البورد الأوروبي لجراحة اليد.</li>
                                        <li>عضو الجمعية الأمريكية لجراحة اليد (ASSH).</li>
                                        <li>عضو كلية الجراحين الملكية (MRCS).</li>
                                        <li>عضو جمعية جراحة العظام المصرية (EOA).</li>
                                        <li>عضو الجمعية المصرية لجراحة اليد والجراحات المجهرية (ESSHM).</li>
                                        <li>عضو في الاتحاد الدولي لجمعيات جراحة اليد (IFSSH).</li>
                                        <li>عضو في جمعية جراحة العظام الأمريكية لعلاج إصابات والتثبيت الداخلي لليد (AOAA).</li>
                                        @else
                                        <li>Bachelor degree of Medicine and Surgery, Cairo University.</li>
                                        <li>M.Sc. and MD of Orthopedics – Cairo University.</li>
                                        <li>Assistant Professor of Orthopedics – Cairo University.</li>
                                        <li>Consultant of Hand Surgery and Microscopic Surgeries.</li>
                                        <li>European Board of Hand Surgery.</li>
                                        <li>Member of the American Society for Surgery of the Hand (ASSH).</li>
                                        <li>A member of the Royal College of Surgeons (MRCS).</li>
                                        <li>A member of the Egyptian Orthopedic Association (EOA).</li>
                                        <li>A member of the Egyptian Society for Surgery of the Hand & Microsurgery (ESSHM).</li>
                                        <li>A member of the International Federation of Societies for Surgery of the Hand (IFSSH).</li>
                                        <li>A member in the American Orthopedic Society for the treatment of injuries and internal fixation of the hand (AOAA).</li>
                                        @endif
                                    </ul>
                                </div>
                                <div class="st-height-b25 st-height-lg-b25"></div>
                            </div>
                        </div>
                    </div>
                    <div class="st-height-b0 st-height-lg-b30"></div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="st-video-block st-style1 st-zoom">
                        <div class="st-video-block-img st-zoom-in st-dynamic-bg" data-src="{{secure_asset('assets/img/video-block-img.jpg')}}"></div>
                        <a href="https://www.youtube.com/embed/jRcfE2xxSAw?autoplay=1" class="st-play-btn st-style1 st-video-open">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 336 336" xml:space="preserve">
                                <g>
                                    <path d="M286.8,49.2C256.4,18.8,214.4,0,168,0C121.6,0,79.6,18.8,49.2,49.2C18.8,79.6,0,121.6,0,168c0,46.4,18.8,88.4,49.2,118.8
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
        </div>
    </section>
    <section id="servicez">
        <div class="st-height-b120 st-height-lg-b80"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h2 id="ourservicez" class="st-section-heading-title">
                    @if (app()->getLocale() == 'ar')
                    خدماتنا
                    @else
                    Our services
                    @endif
                    
                </h2>
                <div class="st-seperator">
                    <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                    <div class="st-seperator-center"><img src="{{secure_asset('assets/img/arrow.png')}}" alt="icon"></div>
                    <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                </div>
            </div>
            <div class="st-height-b40 st-height-lg-b40"></div>
        </div>

        <div class="container">
            <div class="st-tabs st-fade-tabs st-style1">
                <ul class="st-tab-links st-style1 servicessect st-mp0">
                    <li class="st-tab-title active ">
                        <a href="#service1" class="st-dip-blue-box">
                            <img src="https://127.0.0.1/assets/img/shape/birth_defects2.png">
                            <span>
                    @if (app()->getLocale() == 'ar')
                    علاج الكسور
                    @else
                    TREATMENT OF FRACTURES
                    @endif
                            </span>
                        </a>
                    </li>
                    <li class="st-tab-title">
                        <a href="#service2" class="st-dip-blue-box">
                            <img src="https://127.0.0.1/assets/img/shape/birth_defects2.png">
                            <span>
                                @if (app()->getLocale() == 'ar')
                                علاج تمزق الأوتار والأربطة
                                @else
                                TREATMENT OF TENDON AND LIGAMENT TEARS
                                @endif
                            </span>
                        </a>
                    </li>
                    <li class="st-tab-title">
                        <a href="#service3" class="st-dip-blue-box">
                            <img src="https://127.0.0.1/assets/img/shape/birth_defects2.png">
                            <span>
                                @if (app()->getLocale() == 'ar')
                                جراحات تسليك الأعصاب
                                @else
                                NERVE DECOMPRESSION SURGERY
                                @endif
                            </span>
                        </a>
                    </li>
                    <li class="st-tab-title">
                        <a href="#service4" class="st-dip-blue-box">
                            <img src="https://127.0.0.1/assets/img/shape/birth_defects2.png">
                            <span>
                                @if (app()->getLocale() == 'ar')
                                الجراحات الميكروسكوبية والتكميلية
                                @else
                                RECONSTRUCTIVE MICROSCOPIC SURGERIE
                                @endif
                            </span>
                        </a>
                    </li>
                    <li class="st-tab-title">
                        <a href="#service5" class="st-dip-blue-box">
                            <img src="https://127.0.0.1/assets/img/shape/birth_defects2.png">
                            <span>
                                @if (app()->getLocale() == 'ar')
                                إصابات الأعصاب و الضفيرة العصبية 
                                @else
                                NERVE PLEXUS INJURIES
                                @endif
                            </span>
                        </a>
                    </li>
                    <li class="st-tab-title">
                        <a href="#service6" class="st-dip-blue-box">
                            <img src="https://127.0.0.1/assets/img/shape/birth_defects2.png">
                            <span>
                                @if (app()->getLocale() == 'ar')
                                الإصابات الرياضية للطرف العلوى
                                @else
                                SPORTS INJURIES 
                                @endif
                            </span>
                        </a>
                    </li>
                </ul>
                <div class="st-height-b25 st-height-lg-b25"></div>
                <div class="tab-content">
                    <div id="service1" class="st-tab active">
                        <div class="st-imagebox st-style2">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="st-imagebox-img"><img src="{{secure_asset('assets/img/'.$services[0]->image)}}" alt="service"></div>
                                    <div class="st-height-b0 st-height-lg-b30"></div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="st-vertical-middle">
                                        <div class="st-vertical-middle-in">
                                            <div class="st-imagebox-info">
                                                <h2 class="st-imagebox-title"><span>
                                                    
                                                    @if (app()->getLocale() == 'ar')
                                                    {{$services[0]->name_ar}}
                                                    @else
                                                    {{$services[0]->name}}
                                                    @endif
                                                </span></h2>
                                                <div class="st-imagebox-text">
                                                    @if (app()->getLocale() == 'ar')
                                                    {{$services[0]->description_ar}}
                                                    @else
                                                    {{$services[0]->description}}
                                                    @endif
                                                   
                                                </div>
                                            </div>
                                            <div class="st-imagebox-btn">
                                                <a href="{{route('website.sp1')}}" class="st-btn st-style1 st-size-medium st-color1">
                                                    
                                                    @if (app()->getLocale() == 'ar')
                                                    قراءة المزيد
                                                    @else
                                                    Read More
                                                    @endif
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="service2" class="st-tab">
                        <div class="st-imagebox st-style2">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="st-imagebox-img"><img src="{{secure_asset('assets/img/'.$services[1]->image)}}" alt="service"></div>
                                    <div class="st-height-b0 st-height-lg-b30"></div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="st-vertical-middle">
                                        <div class="st-vertical-middle-in">
                                            <div class="st-imagebox-info">
                                                <h2 class="st-imagebox-title"><span>
                                                    
                                                    @if (app()->getLocale() == 'ar')
                                                    {{$services[1]->name_ar}}
                                                    @else
                                                    {{$services[1]->name}}
                                                    @endif
                                                </span></h2>
                                                <div class="st-imagebox-text">
                                                    @if (app()->getLocale() == 'ar')
                                                    {{$services[1]->description_ar}}
                                                    @else
                                                    {{$services[1]->description}}
                                                    @endif
                                                   
                                                </div>
                                            </div>
                                            <div class="st-imagebox-btn">
                                                <a href="{{route('website.sp2')}}" class="st-btn st-style1 st-size-medium st-color1"> 
                                                 
                                                    @if (app()->getLocale() == 'ar')
                                                    قراءة المزيد
                                                    @else
                                                    Read More
                                                    @endif
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="service3" class="st-tab">
                        <div class="st-imagebox st-style2">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="st-imagebox-img"><img src="{{secure_asset('assets/img/'.$services[2]->image)}}" alt="service"></div>
                                    <div class="st-height-b0 st-height-lg-b30"></div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="st-vertical-middle">
                                        <div class="st-vertical-middle-in">
                                            <div class="st-imagebox-info">
                                                <h2 class="st-imagebox-title"><span>
                                                    
                                                    @if (app()->getLocale() == 'ar')
                                                    {{$services[2]->name_ar}}
                                                    @else
                                                    {{$services[2]->name}}
                                                    @endif
                                                </span></h2>
                                                <div class="st-imagebox-text">
                                                    @if (app()->getLocale() == 'ar')
                                                    {{$services[2]->description_ar}}
                                                    @else
                                                    {{$services[2]->description}}
                                                    @endif
                                                   
                                                </div>
                                            </div>
                                            <div class="st-imagebox-btn">
                                                <a href="{{route('website.sp3')}}" class="st-btn st-style1 st-size-medium st-color1">
                                                 
                                                    @if (app()->getLocale() == 'ar')
                                                    قراءة المزيد
                                                    @else
                                                    Read More
                                                    @endif
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="service4" class="st-tab">
                        <div class="st-imagebox st-style2">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="st-imagebox-img"><img src="{{secure_asset('assets/img/'.$services[3]->image)}}" alt="service"></div>
                                    <div class="st-height-b0 st-height-lg-b30"></div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="st-vertical-middle">
                                        <div class="st-vertical-middle-in">
                                            <div class="st-imagebox-info">
                                                <h2 class="st-imagebox-title"><span>
                                                    
                                                    @if (app()->getLocale() == 'ar')
                                                    {{$services[3]->name_ar}}
                                                    @else
                                                    {{$services[3]->name}}
                                                    @endif
                                                </span></h2>
                                                <div class="st-imagebox-text">
                                                    @if (app()->getLocale() == 'ar')
                                                    {{$services[3]->description_ar}}
                                                    @else
                                                    {{$services[3]->description}}
                                                    @endif
                                                   
                                                </div>
                                            </div>
                                            <div class="st-imagebox-btn">
                                                <a href="{{route('website.sp4')}}" class="st-btn st-style1 st-size-medium st-color1">
                                                 
                                                    @if (app()->getLocale() == 'ar')
                                                    قراءة المزيد
                                                    @else
                                                    Read More
                                                    @endif
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="service5" class="st-tab">
                        <div class="st-imagebox st-style2">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="st-imagebox-img"><img src="{{secure_asset('assets/img/'.$services[4]->image)}}" alt="service"></div>
                                    <div class="st-height-b0 st-height-lg-b30"></div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="st-vertical-middle">
                                        <div class="st-vertical-middle-in">
                                            <div class="st-imagebox-info">
                                                <h2 class="st-imagebox-title"><span>
                                                    
                                                    @if (app()->getLocale() == 'ar')
                                                    {{$services[4]->name_ar}}
                                                    @else
                                                    {{$services[4]->name}}
                                                    @endif
                                                </span></h2>
                                                <div class="st-imagebox-text">
                                                    @if (app()->getLocale() == 'ar')
                                                    {{$services[4]->description_ar}}
                                                    @else
                                                    {{$services[4]->description}}
                                                    @endif
                                                   
                                                </div>
                                            </div>
                                            <div class="st-imagebox-btn">
                                                <a href="{{route('website.sp5')}}" class="st-btn st-style1 st-size-medium st-color1"> 
                                                 
                                                    @if (app()->getLocale() == 'ar')
                                                    قراءة المزيد
                                                    @else
                                                    Read More
                                                    @endif
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="service6" class="st-tab">
                        <div class="st-imagebox st-style2">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="st-imagebox-img"><img src="{{secure_asset('assets/img/'.$services[5]->image)}}" alt="service"></div>
                                    <div class="st-height-b0 st-height-lg-b30"></div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="st-vertical-middle">
                                        <div class="st-vertical-middle-in">
                                            <div class="st-imagebox-info">
                                                <h2 class="st-imagebox-title"><span>
                                                    
                                                    @if (app()->getLocale() == 'ar')
                                                    {{$services[5]->name_ar}}
                                                    @else
                                                    {{$services[5]->name}}
                                                    @endif
                                                </span></h2>
                                                <div class="st-imagebox-text">
                                                    @if (app()->getLocale() == 'ar')
                                                    {{$services[5]->description_ar}}
                                                    @else
                                                    {{$services[5]->description}}
                                                    @endif
                                                   
                                                </div>
                                            </div>
                                            <div class="st-imagebox-btn">
                                                <a href="{{route('website.sp6')}}" class="st-btn st-style1 st-size-medium st-color1"> 
                                                 
                                                    @if (app()->getLocale() == 'ar')
                                                    قراءة المزيد
                                                    @else
                                                    Read More
                                                    @endif
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="st-height-b120 st-height-lg-b80"></div>
    </section>

    <section id="doctors">
        <div class="st-height-b120 st-height-lg-b80"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h2 class="st-section-heading-title">
                    
                    @if (app()->getLocale() == 'ar')
                    فريقنا الطبي
                    @else
                    Meet our professional specialists
                    @endif
                </h2>
                <div class="st-seperator">
                    <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                    <div class="st-seperator-center"><img src="{{secure_asset('assets/img/arrow.png')}}" alt="icon"></div>
                    <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                </div>
                <div class="st-section-heading-subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. <br>
                    Lorem Ipsum the industry's standard dummy text.</div>
            </div>
            <div class="st-height-b40 st-height-lg-b40"></div>
        </div>
        <div class="container">
            <div class="st-slider st-style2">
                <div class="slick-container" id="recentinvts" data-autoplay="1" data-loop="1" data-speed="600" data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="3" data-lg-slides="4" data-add-slides="4">
                    <div class="slick-wrapper">
                        <div class="slick-slide-in">
                            <div class="st-member st-style1 st-zoom">
                                <div class="st-member-img">
                                    <a href="{{route('website.aboutdrmoustafa')}}">
                                        <img src="{{secure_asset('assets/img/mm.jpg')}}" alt="" class="st-zoom-in">
                                    </a>
                                    <a class="st-doctor-link" href="{{route('website.aboutdrmoustafa')}}"><i class="fas fa-link"></i></a>
                                    <div class="st-member-social-wrap">
                                        <img src="{{secure_asset('assets/img/shape/member-shape.png')}}" width="50px" alt="shape" class="st-member-social-bg">
                                        <ul class="st-member-social st-mp0">
                                            <li><a href="mailto:support@example.com"><i class="fa fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="st-member-meta">
                                    <div class="st-member-meta-in">
                                        <h3 class="st-member-name"><a href="{{route('website.aboutdrmoustafa')}}">Dr. Moustafa</a></h3>
                                        <div class="st-member-designation"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide-in">
                            <div class="st-member st-style1 st-zoom">
                                <div class="st-member-img">
                                    <a href="{{route('website.aboutdrmoustafa')}}">
                                        <img src="{{secure_asset('assets/img/mm.jpg')}}" alt="" class="st-zoom-in">
                                    </a>
                                    <a class="st-doctor-link" href="{{route('website.aboutdrmoustafa')}}"><i class="fas fa-link"></i></a>
                                    <div class="st-member-social-wrap">
                                        <img src="{{secure_asset('assets/img/shape/member-shape.png')}}" width="50px" alt="shape" class="st-member-social-bg">
                                        <ul class="st-member-social st-mp0">
                                            <li><a href="mailto:support@example.com"><i class="fa fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="st-member-meta">
                                    <div class="st-member-meta-in">
                                        <h3 class="st-member-name"><a href="{{route('website.aboutdrmoustafa')}}">Dr. Moustafa</a></h3>
                                        <div class="st-member-designation"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide-in">
                            <div class="st-member st-style1 st-zoom">
                                <div class="st-member-img">
                                    <a href="{{route('website.aboutdrmoustafa')}}">
                                        <img src="{{secure_asset('assets/img/mm.jpg')}}" alt="" class="st-zoom-in">
                                    </a>
                                    <a class="st-doctor-link" href="{{route('website.aboutdrmoustafa')}}"><i class="fas fa-link"></i></a>
                                    <div class="st-member-social-wrap">
                                        <img src="{{secure_asset('assets/img/shape/member-shape.png')}}" width="50px" alt="shape" class="st-member-social-bg">
                                        <ul class="st-member-social st-mp0">
                                            <li><a href="mailto:support@example.com"><i class="fa fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="st-member-meta">
                                    <div class="st-member-meta-in">
                                        <h3 class="st-member-name"><a href="{{route('website.aboutdrmoustafa')}}">Dr. Moustafa</a></h3>
                                        <div class="st-member-designation"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide-in">
                            <div class="st-member st-style1 st-zoom">
                                <div class="st-member-img">
                                    <a href="{{route('website.aboutdrmoustafa')}}">
                                        <img src="{{secure_asset('assets/img/mm.jpg')}}" alt="" class="st-zoom-in">
                                    </a>
                                    <a class="st-doctor-link" href="{{route('website.aboutdrmoustafa')}}"><i class="fas fa-link"></i></a>
                                    <div class="st-member-social-wrap">
                                        <img src="{{secure_asset('assets/img/shape/member-shape.png')}}" width="50px" alt="shape" class="st-member-social-bg">
                                        <ul class="st-member-social st-mp0">
                                            <li><a href="mailto:support@example.com"><i class="fa fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="st-member-meta">
                                    <div class="st-member-meta-in">
                                        <h3 class="st-member-name"><a href="{{route('website.aboutdrmoustafa')}}">Dr. Moustafa</a></h3>
                                        <div class="st-member-designation"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide-in">
                            <div class="st-member st-style1 st-zoom">
                                <div class="st-member-img">
                                    <a href="{{route('website.aboutdrmoustafa')}}">
                                        <img src="{{secure_asset('assets/img/mm.jpg')}}" alt="" class="st-zoom-in">
                                    </a>
                                    <a class="st-doctor-link" href="{{route('website.aboutdrmoustafa')}}"><i class="fas fa-link"></i></a>
                                    <div class="st-member-social-wrap">
                                        <img src="{{secure_asset('assets/img/shape/member-shape.png')}}" width="50px" alt="shape" class="st-member-social-bg">
                                        <ul class="st-member-social st-mp0">
                                            <li><a href="mailto:support@example.com"><i class="fa fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="st-member-meta">
                                    <div class="st-member-meta-in">
                                        <h3 class="st-member-name"><a href="{{route('website.aboutdrmoustafa')}}">Dr. Moustafa</a></h3>
                                        <div class="st-member-designation"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination st-style1 st-flex st-hidden"></div>
                <div class="swipe-arrow st-style1">
                    <div class="slick-arrow-left" style="background-color: black;color: #fff;"><i class="fa fa-chevron-left"></i></div>
                    <div class="slick-arrow-right" style="background-color: black;color: #fff;"><i class="fa fa-chevron-right"></i></div>
                </div>
            </div>
        </div>
        <div class="st-height-b120 st-height-lg-b80"></div>
    </section>
    <hr>
    <section>
        <div class="st-height-b120 st-height-lg-b80"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h2 class="st-section-heading-title">
                    
                    @if (app()->getLocale() == 'ar')
                    ماذا قالوا عنا
                    @else
                    Patients word
                    @endif
                </h2>
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
        <div class="container container-slider">
            @isset($google_reviews[0])
            <div class="slick-wrapper">
                <div class="the-last" style=" display: inline-block;">
                    <input type="hidden" name="" class="review" value="{{$google_reviews[0]->review}}">

                    <div class="st-testimonial st-style1 wow " style="">
                        <div class="st-testimonial-info">
                            <div class="st-testimonial-img"><img src="@if($google_reviews[0]->image){{secure_asset('assets/img/'.$google_reviews[0]->image)}}@else{{secure_asset('assets/img/avatar2.png')}} @endif" alt="avatar1"></div>
                            <div class="st-testimonial-meta">
                                <div class="star starRating" style="background-color:white;color:#e2d146;" id="starRating">
                                    <span class="fa fa-star-o "></span>
                                    <span class="fa fa-star-o "></span>
                                    <span class="fa fa-star-o "></span>
                                    <span class="fa fa-star-o "></span>
                                    <span class="fa fa-star-o "></span>
                                </div>
                                <div class="st-testimonial-designation">{{$google_reviews[0]->name}}</div>
                            </div>
                        </div>
                        <div class="st-testimonial-text">{{$google_reviews[0]->description}}</div>
                        <div class="st-quote"><i class="fas fa-quote-right"></i></div>
                    </div>
                </div>
            </div>
            @endif
            <div class="st-slider st-style2 st-pricing-wrap" style="">
                <div class="slick-container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lg-slides="2" data-add-slides="2">

                    <div class="slick-wrapper">
                        @foreach($google_reviews as $review)
                        @if(!$loop->first)
                        <div class="slick-slide-in">
                            <input type="hidden" name="" class="review" value="{{$review->review}}">
                            <div class="st-testimonial st-style1 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                <div class="st-testimonial-info">
                                    <div class="st-testimonial-img"><img src="@if($review->image){{secure_asset('assets/img/'.$review->image)}}@else{{secure_asset('assets/img/avatar2.png')}} @endif" alt="avatar1"></div>
                                    <div class="st-testimonial-meta">
                                        <div class="star starRating" style="background-color:white;color:#e2d146;" id="starRating">
                                            <span class="fa fa-star-o "></span>
                                            <span class="fa fa-star-o "></span>
                                            <span class="fa fa-star-o "></span>
                                            <span class="fa fa-star-o "></span>
                                            <span class="fa fa-star-o "></span>
                                        </div>
                                        <div class="st-testimonial-designation">{{$review->name}}</div>
                                    </div>
                                </div>
                                <div class="st-testimonial-text">{{$review->description}}</div>
                                <div class="st-quote"><i class="fas fa-quote-right"></i></div>
                            </div>
                        </div>
                        @endif
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
        <div class="st-height-b120 st-height-lg-b80"></div>
    </section>
    <section class="st-gray-bg st-shape-wrap">
        <div class="st-shape4">
            <img src="{{secure_asset('assets/img/shape/section_shape.png')}}" alt="shape1">
        </div>
        <div class="st-height-b120 st-height-lg-b80"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="st-funfact st-style1">
                        <div class="st-funfact-icon st-purple-box">
                            <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path d="m316 76c0-33.084-26.916-60-60-60s-60 26.916-60 60 26.916 60 60 60 60-26.916 60-60zm-60 40c-22.056 0-40-17.944-40-40s17.944-40 40-40 40 17.944 40 40-17.944 40-40 40z" />
                                    <path d="m346 266v-40c0-49.626-40.374-90-90-90s-90 40.374-90 90v40c0 5.523 4.478 10 10 10h160c5.522 0 10-4.477 10-10zm-20-10h-140v-30c0-38.598 31.402-70 70-70s70 31.402 70 70z" />
                                    <path d="m71.858 408.114 48.142 24.067v53.819c0 5.523 4.478 10 10 10h106c5.522 0 10-4.477 10-10v-127.22c0-31.783-23.452-59.203-53.391-62.423-.795-.15-38.649-2.971-56.948-21.258l-27.38-27.379c-7.556-7.558-17.6-11.72-28.281-11.72v-80c0-22.056-17.944-40-40-40s-40 17.944-40 40v135.84c0 49.212 27.798 94.239 71.858 116.274zm-51.858-252.114c0-11.028 8.972-20 20-20s20 8.972 20 20v85.361c-12.196 7.052-20 20.2-20 34.639 0 10.68 4.162 20.723 11.719 28.28l51.21 51.22c3.903 3.905 10.236 3.907 14.142.001 3.905-3.905 3.906-10.236.001-14.142l-51.21-51.221c-3.78-3.779-5.862-8.8-5.862-14.138 0-8.464 5.357-16.044 13.332-18.861.003-.001.006-.003.009-.004h.001c6.88-2.439 15.066-1.005 20.797 4.726l27.383 27.383c18.65 18.637 45.831 23.879 68.836 26.986.037.004.075.009.113.013 19.923 2.142 35.529 20.827 35.529 42.537v117.22h-86v-50c0-3.788-2.141-7.251-5.528-8.944l-53.669-26.83c-37.504-18.757-60.803-56.456-60.803-98.386z" />
                                    <circle cx="459" cy="384" r="10" />
                                    <path d="m472 116c-22.056 0-40 17.944-40 40v80c-10.681 0-20.725 4.162-28.281 11.719l-27.377 27.377c-15.96 15.949-41.848 18.608-56.951 21.262-29.939 3.22-53.391 30.639-53.391 62.422v127.22c0 5.523 4.478 10 10 10h106c5.522 0 10-4.477 10-10v-53.819l32.73-16.362c4.939-2.47 6.942-8.476 4.473-13.417-2.469-4.939-8.474-6.942-13.416-4.473l-38.259 19.125c-3.387 1.695-5.528 5.158-5.528 8.946v50h-86v-117.22c0-21.71 15.606-40.395 35.529-42.538.038-.004.076-.008.113-.013 23.361-3.155 50.206-8.368 68.839-26.988l27.38-27.38c5.724-5.724 13.913-7.166 20.797-4.726h.001c.003.001.006.003.009.004 7.975 2.817 13.332 10.397 13.332 18.861 0 5.338-2.082 10.359-5.861 14.14l-51.21 51.22c-3.905 3.906-3.904 10.237.001 14.142 3.904 3.904 10.237 3.905 14.142-.001l51.21-51.22c7.556-7.558 11.718-17.601 11.718-28.281 0-14.439-7.804-27.587-20-34.639v-85.361c0-11.028 8.972-20 20-20s20 8.972 20 20v135.84c0 18.296-4.617 36.46-13.353 52.528-2.639 4.852-.844 10.924 4.009 13.562 4.851 2.637 10.924.843 13.562-4.009 10.325-18.99 15.782-40.458 15.782-62.081v-135.84c0-22.056-17.944-40-40-40z" />
                                </g>
                            </svg>
                        </div>
                        <h2 class="st-funfact-number st-counter">20</h2>
                        <div class="st-funfact-title">
                            @if (app()->getLocale() == 'ar')
                            عاما من الخبرة
                            @else
                            Years of experience
                            @endif
                            
                        </div>
                    </div>
                    <div class="st-height-b30 st-height-lg-b30"></div>
                </div>
                <div class="col-lg-6">
                    <div class="st-funfact st-style1">
                        <div class="st-funfact-icon st-green-box">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
                                <g>
                                    <path d="M107.972,291.258c-1.861-1.861-4.432-2.932-7.073-2.932c-2.631,0-5.213,1.071-7.073,2.932
                    c-1.861,1.86-2.931,4.441-2.931,7.072c0,2.642,1.071,5.213,2.931,7.083c1.861,1.861,4.442,2.921,7.073,2.921
                    s5.213-1.06,7.073-2.921c1.861-1.871,2.931-4.441,2.931-7.083C110.903,295.699,109.833,293.118,107.972,291.258z" />
                                </g>
                                <g>
                                    <path d="M202.317,291.258c-1.86-1.861-4.441-2.932-7.073-2.932c-2.631,0-5.213,1.071-7.073,2.932
                    c-1.861,1.86-2.931,4.441-2.931,7.072c0,2.642,1.07,5.213,2.931,7.083c1.861,1.861,4.442,2.921,7.073,2.921
                    s5.213-1.06,7.073-2.921c1.861-1.871,2.931-4.452,2.931-7.083C205.248,295.699,204.178,293.118,202.317,291.258z" />
                                </g>
                                <g>
                                    <path d="M183.966,346.195c-5.338-1.43-10.821,1.746-12.248,7.083c-2.859,10.702-12.582,18.178-23.646,18.178
                    c-11.063,0-20.786-7.476-23.646-18.178c-1.426-5.339-6.909-8.515-12.248-7.083c-5.338,1.427-8.509,6.909-7.083,12.248
                    c5.194,19.443,22.867,33.023,42.978,33.023c20.11,0,37.783-13.58,42.977-33.023C192.475,353.105,189.303,347.621,183.966,346.195z
                    " />
                                </g>
                                <g>
                                    <path d="M256.121,39.995c-5.526,0-10.005,4.479-10.005,10.005v63.514c0,5.526,4.479,10.005,10.005,10.005
                    c5.526,0,10.005-4.479,10.005-10.005V50C266.126,44.474,261.647,39.995,256.121,39.995z" />
                                </g>
                                <g>
                                    <path d="M263.198,141.795c-1.862-1.871-4.443-2.931-7.073-2.931c-2.641,0-5.213,1.061-7.083,2.931
                    c-1.861,1.861-2.921,4.442-2.921,7.073s1.061,5.213,2.921,7.073c1.871,1.861,4.442,2.931,7.083,2.931
                    c2.631,0,5.213-1.07,7.073-2.931s2.931-4.442,2.931-7.073S265.058,143.656,263.198,141.795z" />
                                </g>
                                <g>
                                    <path d="M195.152,130.95L169.61,105.43c-3.908-3.905-10.244-3.903-14.149,0.006c-3.905,3.909-3.903,10.243,0.006,14.149
                    l25.542,25.521c1.953,1.952,4.512,2.927,7.071,2.927c2.562,0,5.125-0.979,7.078-2.933
                    C199.063,141.19,199.061,134.856,195.152,130.95z" />
                                </g>
                                <g>
                                    <path d="M356.801,105.456c-3.909-3.906-10.244-3.903-14.149,0.005l-27.155,27.177c-3.906,3.909-3.903,10.244,0.005,14.149
                    c1.953,1.953,4.512,2.928,7.071,2.928c2.562,0,5.124-0.978,7.077-2.933l27.155-27.177
                    C360.712,115.696,360.709,109.361,356.801,105.456z" />
                                </g>
                                <g>
                                    <path d="M506.938,285.54c-21.132-78.867-102.486-125.836-181.351-104.702c-27.068,7.253-50.981,21.674-69.659,41.643
                    c-27.946-29.764-66.622-46.621-107.856-46.621C66.425,175.86,0,242.286,0,323.933s66.425,148.072,148.072,148.072
                    c41.273,0,80.011-16.909,107.967-46.745c27.682,29.351,66.721,46.694,107.906,46.694c12.649,0,25.505-1.637,38.29-5.062
                    C481.1,445.759,528.07,364.404,506.938,285.54z M148.072,451.995c-70.615,0-128.063-57.449-128.063-128.063
                    c0-70.614,57.448-128.063,128.063-128.063c36.555,0,70.791,15.319,95.088,42.282c-2.654,3.754-5.156,7.645-7.484,11.676
                    c-19.776,34.253-25.029,74.157-14.792,112.36c4.697,17.533,12.371,33.487,22.332,47.469
                    C218.914,436.654,184.64,451.995,148.072,451.995z M397.056,447.564c-68.207,18.271-138.568-22.347-156.844-90.554
                    c-8.853-33.041-4.31-67.553,12.793-97.176c3.156-5.466,6.671-10.642,10.51-15.509c0.166-0.191,0.32-0.389,0.47-0.59
                    c16.93-21.203,40.082-36.415,66.78-43.569c11.061-2.963,22.173-4.378,33.116-4.378c56.536,0,108.415,37.785,123.727,94.931
                    C505.886,358.927,465.263,429.287,397.056,447.564z" />
                                </g>
                                <g>
                                    <path d="M334.605,304.249c-3.096-11.558-15.014-18.444-26.577-15.345c-11.558,3.098-18.441,15.019-15.344,26.577
                    c1.198,4.47,5.24,7.419,9.658,7.419c0.856,0,1.729-0.111,2.595-0.344c5.338-1.431,8.505-6.915,7.074-12.253
                    c-0.241-0.9,0.295-1.83,1.195-2.071c0.558-0.148,1.006,0.01,1.283,0.169c0.276,0.16,0.638,0.468,0.788,1.026
                    c1.43,5.337,6.914,8.506,12.253,7.074C332.869,315.072,336.035,309.587,334.605,304.249z" />
                                </g>
                                <g>
                                    <path d="M425.169,279.982c-1.501-5.599-5.091-10.278-10.111-13.177c-5.02-2.897-10.868-3.668-16.466-2.167
                    c-5.599,1.5-10.279,5.09-13.176,10.11c-2.898,5.02-3.669,10.867-2.168,16.467c1.198,4.47,5.24,7.418,9.658,7.418
                    c0.856-0.001,1.729-0.111,2.596-0.344c5.337-1.431,8.504-6.916,7.074-12.254c-0.149-0.558,0.009-1.005,0.169-1.282
                    s0.467-0.638,1.026-0.787c0.558-0.149,1.007,0.01,1.283,0.169s0.637,0.467,0.787,1.026c1.43,5.337,6.914,8.505,12.253,7.074
                    C423.432,290.805,426.599,285.32,425.169,279.982z" />
                                </g>
                                <g>
                                    <path d="M416.404,342.76c-1.431-5.337-6.917-8.506-12.254-7.075c-5.338,1.431-8.504,6.915-7.074,12.253
                    c3.404,12.705-4.163,25.812-16.868,29.216c-6.156,1.65-12.584,0.802-18.101-2.383c-5.519-3.187-9.466-8.33-11.114-14.485
                    c-1.431-5.337-6.916-8.508-12.254-7.074c-5.337,1.431-8.504,6.916-7.074,12.253c3.033,11.318,10.291,20.777,20.438,26.635
                    c6.758,3.902,14.26,5.896,21.861,5.896c3.811,0,7.646-0.5,11.425-1.514C408.75,390.222,422.663,366.121,416.404,342.76z" />
                                </g>
                            </svg>
                        </div>
                        <h2 class="st-funfact-number st-counter">2354</h2>
                        <div class="st-funfact-title">
                            
                            @if (app()->getLocale() == 'ar')
                            مريض تمت خدمتهم
                            @else
                            Served Patients
                            @endif
                        </div>
                    </div>
                    <div class="st-height-b30 st-height-lg-b30"></div>
                </div>
                <div class="col-lg-6">
                    <div class="st-funfact st-style1">
                        <div class="st-funfact-icon st-orange-box">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
                                <g>
                                    <path d="M482.726,485.783l-22.65-132.603c-2.441-14.287-12.576-25.764-26.453-29.95l-61.092-18.433
                  c-1.265-14.934-7.388-29.023-17.578-40.175c-8.151-8.92-18.403-15.415-29.704-18.999c1.934-2.146,3.727-4.285,5.372-6.377
                  c14.528-18.477,22.306-38.833,24.286-52.724h4.713c12.258,0,22.231-9.972,22.231-22.231v-11.396
                  c0-8.181-4.602-15.594-11.523-19.441V106.05c0-4.141-3.357-7.498-7.498-7.498s-7.497,3.356-7.497,7.498v30.764
                  c-2.92,0.507-6.404,1.383-9.968,2.884c-0.365,0.133-0.72,0.287-1.056,0.472c-0.805,0.367-1.611,0.754-2.414,1.19V80.938
                  c0-16.693-13.58-30.273-30.273-30.273h-20.695c-7.138,0-14.111,2.487-19.637,7.005l-2.031,1.66c-3.73,3.05-8.438,4.73-13.257,4.73
                  c-4.819,0-9.528-1.68-13.258-4.73l-2.03-1.66c-5.526-4.517-12.499-7.005-19.637-7.005H200.38
                  c-16.693,0-30.273,13.58-30.273,30.273v60.422c-0.803-0.436-1.609-0.823-2.414-1.19c-0.336-0.185-0.69-0.339-1.055-0.472
                  c-3.564-1.501-7.049-2.377-9.968-2.884V59.025c0-24.278,19.752-44.03,44.03-44.03h110.601c24.279,0,44.03,19.752,44.03,44.03
                  v11.786c0,4.141,3.357,7.498,7.497,7.498s7.498-3.356,7.498-7.498V59.025C370.326,26.479,343.847,0,311.301,0H200.7
                  c-32.547,0-59.025,26.479-59.025,59.025v74.43c-6.921,3.847-11.523,11.259-11.523,19.441v11.396
                  c0,12.259,9.973,22.231,22.231,22.231h4.713c1.979,13.891,9.758,34.247,24.286,52.724c1.643,2.09,3.435,4.227,5.367,6.371
                  c-25.98,8.252-44.926,31.61-47.277,59.179L78.378,323.23c-13.877,4.186-24.013,15.663-26.453,29.95l-9.198,53.849
                  c-0.697,4.082,2.047,7.955,6.128,8.652c4.08,0.699,7.955-2.046,8.653-6.128l9.198-53.849c1.476-8.644,7.608-15.586,16.003-18.118
                  l56.505-17.049v14.831c-12.952,2.384-23.973,11.281-28.512,23.608c-1.205,3.272-1.954,6.698-2.226,10.182l-5.461,70.095
                  c-0.412,5.28,1.415,10.538,5.01,14.423c3.595,3.886,8.694,6.116,13.989,6.116h9.348c4.141,0,7.498-3.356,7.498-7.498
                  c0-4.142-3.357-7.497-7.498-7.497h-9.348c-1.129,0-2.215-0.474-2.982-1.304c-0.766-0.828-1.155-1.948-1.067-3.073l5.461-70.096
                  c0.165-2.111,0.618-4.186,1.348-6.167c3.158-8.575,11.686-14.382,21.223-14.449l1.235-0.009c0.058-0.001,0.115-0.001,0.172-0.001
                  c9.269,0,17.474,5.256,20.935,13.427c0.971,2.291,1.561,4.713,1.755,7.199l5.463,70.097c0.087,1.124-0.302,2.244-1.068,3.073
                  c-0.766,0.828-1.853,1.303-2.982,1.303h-9.348c-4.141,0-7.498,3.356-7.498,7.497c0,4.141,3.357,7.498,7.498,7.498h9.348
                  c5.295,0,10.395-2.229,13.989-6.116c3.596-3.887,5.423-9.144,5.011-14.422l-5.463-70.096c-0.32-4.102-1.295-8.101-2.898-11.884
                  c-4.939-11.657-15.5-19.762-27.938-21.955v-19.306l25.774-7.777c2.345,4.939,6.992,15.612,16.197,38.619
                  c9.277,23.214,20.808,52.969,31.867,81.895c0.079,0.243,0.17,0.48,0.272,0.712c7.38,19.311,14.539,38.225,20.662,54.541
                  c1.098,2.926,3.895,4.864,7.02,4.864c3.125,0,5.922-1.938,7.02-4.864c6.122-16.316,13.281-35.23,20.662-54.541
                  c0.103-0.232,0.193-0.47,0.272-0.712c11.051-28.909,22.576-58.645,31.849-81.852c9.217-23.037,13.868-33.719,16.214-38.662
                  l25.774,7.777v44.285c-17.858,3.469-31.385,19.219-31.385,38.077c0,21.391,17.403,38.795,38.795,38.795
                  c21.392,0,38.795-17.403,38.795-38.795c0-18.796-13.438-34.508-31.21-38.045v-39.792l56.506,17.049
                  c8.395,2.532,14.526,9.474,16.003,18.118l22.65,132.603c0.376,2.199-0.209,4.349-1.648,6.054c-1.438,1.704-3.459,2.644-5.69,2.644
                  H51.393c-2.231,0-4.251-0.939-5.69-2.644c-1.438-1.705-2.024-3.854-1.648-6.054l7.475-43.762c0.697-4.082-2.047-7.955-6.128-8.652
                  c-4.08-0.7-7.955,2.047-8.653,6.128l-7.475,43.762c-1.115,6.532,0.696,13.183,4.968,18.248C38.516,509.096,44.767,512,51.393,512
                  h409.214c6.626,0,12.878-2.904,17.151-7.969C482.03,498.966,483.841,492.315,482.726,485.783z M355.421,152.089
                  c3.995-0.996,7.202-0.978,7.238-0.977c1.292,0.017,2.548-0.285,3.664-0.87c0.334,0.831,0.531,1.724,0.531,2.654v11.396
                  c0,3.99-3.246,7.236-7.236,7.236h-4.197V152.089z M156.579,171.528L156.579,171.528h-4.197c-3.99,0-7.236-3.246-7.236-7.236
                  v-11.396c0-0.93,0.198-1.823,0.531-2.653c1.115,0.585,2.371,0.887,3.664,0.869c0.057,0.01,3.255-0.008,7.238,0.981V171.528z
                  M171.574,179.935v-19.698c2.272,0.681,4.757,0.588,7.051-0.369c3.935-1.642,6.477-5.455,6.477-9.716V80.938
                  c0-8.424,6.854-15.278,15.278-15.278h20.695c3.688,0,7.291,1.285,10.146,3.619l2.03,1.66c6.401,5.234,14.48,8.115,22.749,8.115
                  c8.269,0,16.348-2.882,22.749-8.115l2.03-1.66c2.854-2.334,6.458-3.619,10.146-3.619h20.695c8.424,0,15.278,6.854,15.278,15.278
                  v69.215c0,4.26,2.542,8.074,6.477,9.716c1.314,0.548,2.69,0.814,4.054,0.814c1.017,0,2.026-0.149,2.997-0.439v19.691
                  c0,10.947-7.568,32.205-21.594,50.043c-4.646,5.909-10.618,12.257-17.971,17.805c-0.233,0.156-0.456,0.325-0.669,0.505
                  c-11.391,8.422-26.038,14.874-44.192,14.874s-32.801-6.452-44.193-14.875c-0.213-0.179-0.435-0.348-0.667-0.503
                  c-7.353-5.549-13.325-11.897-17.972-17.806C179.143,212.141,171.574,190.882,171.574,179.935z M305.12,301.07L256,337.784
                  l-49.12-36.714c4.871-6.191,7.6-14.138,7.6-21.23v-12.086c11.551,6.212,25.334,10.404,41.52,10.404s29.97-4.192,41.52-10.404
                  v12.086C297.52,286.932,300.249,294.879,305.12,301.07z M194.367,292.701c-4.004-1.525-8.443-1.775-12.642-0.636
                  c-0.184,0.043-0.364,0.092-0.539,0.144l-25.903,7.816c4.381-21.542,21.873-38.688,44.202-42.009v21.824
                  C199.485,284.544,197.385,289.407,194.367,292.701z M214.716,352.889c-0.014-0.035-0.028-0.07-0.041-0.104
                  c-0.38-0.961-0.755-1.909-1.127-2.846c-0.067-0.17-0.134-0.339-0.201-0.507c-0.364-0.917-0.725-1.827-1.081-2.722
                  c-0.025-0.063-0.05-0.125-0.075-0.189c-1.111-2.793-2.182-5.472-3.212-8.039c-0.075-0.186-0.15-0.375-0.225-0.56
                  c-0.296-0.736-0.587-1.461-0.876-2.177c-0.106-0.263-0.211-0.523-0.316-0.783c-0.28-0.694-0.558-1.384-0.832-2.059
                  c-0.082-0.202-0.162-0.398-0.243-0.599c-0.497-1.226-0.983-2.421-1.457-3.586c-0.128-0.315-0.259-0.636-0.386-0.947
                  c-0.186-0.454-0.367-0.896-0.549-1.341c-0.196-0.48-0.392-0.956-0.584-1.424c-0.072-0.175-0.147-0.36-0.219-0.534
                  c-0.058-0.14-0.111-0.269-0.168-0.408c-0.866-2.104-1.689-4.087-2.47-5.952c-0.006-0.015-0.013-0.03-0.019-0.045
                  c-0.416-0.993-0.823-1.963-1.214-2.887c-0.203-0.479-0.403-0.95-0.599-1.412l42.245,31.574l-17.652,7.499
                  c-0.031,0.013-0.063,0.026-0.094,0.04l-7.37,3.131C215.533,354.955,215.124,353.919,214.716,352.889z M232.606,398.797
                  c-1.481-3.843-2.973-7.708-4.468-11.569c-2.338-6.039-4.571-11.781-6.708-17.251l2.798-1.189l11.432,13.289L232.606,398.797z
                  M256.145,459.735c-0.215-0.446-0.471-0.867-0.767-1.259c-3.388-8.955-7.688-20.286-12.447-32.753l7-38.325h12.138l7,38.325
                  C264.082,438.784,259.603,450.594,256.145,459.735z M264.881,372.404h-17.762l-8.405-9.77L256,355.291l17.286,7.343
                  L264.881,372.404z M283.862,387.228c-1.495,3.861-2.987,7.726-4.468,11.569l-3.054-16.721l11.432-13.289l2.798,1.189
                  C288.433,375.446,286.2,381.189,283.862,387.228z M312.58,315.18c-0.371,0.876-0.757,1.795-1.15,2.733
                  c-0.051,0.122-0.103,0.245-0.154,0.368c-0.389,0.93-0.785,1.88-1.195,2.869c-0.027,0.065-0.055,0.134-0.082,0.2
                  c-0.354,0.853-0.717,1.733-1.086,2.63c-0.069,0.168-0.134,0.323-0.203,0.492c-0.082,0.201-0.17,0.414-0.253,0.617
                  c-0.164,0.4-0.331,0.808-0.499,1.216c-0.206,0.503-0.411,1.004-0.622,1.519c-0.067,0.164-0.136,0.335-0.204,0.5
                  c-0.522,1.279-1.058,2.597-1.606,3.951c-0.086,0.212-0.171,0.42-0.257,0.635c-0.271,0.669-0.547,1.352-0.824,2.039
                  c-0.108,0.269-0.217,0.537-0.326,0.809c-0.286,0.709-0.575,1.427-0.867,2.155c-0.082,0.203-0.165,0.411-0.247,0.615
                  c-1.017,2.532-2.072,5.173-3.167,7.925c-0.036,0.091-0.072,0.18-0.108,0.272c-0.354,0.889-0.712,1.793-1.074,2.704
                  c-0.067,0.17-0.135,0.34-0.203,0.511c-0.374,0.942-0.751,1.894-1.133,2.861c-0.007,0.018-0.014,0.036-0.021,0.053
                  c-0.412,1.042-0.826,2.09-1.248,3.16l-7.377-3.134c-0.026-0.011-0.052-0.022-0.077-0.033l-17.662-7.503l42.245-31.574
                  C312.982,314.23,312.782,314.7,312.58,315.18z M330.814,292.21c-0.001,0-0.003-0.001-0.004-0.001
                  c-0.006-0.002-0.013-0.003-0.019-0.006c-4.35-1.305-8.99-1.089-13.157,0.498c-3.019-3.294-5.118-8.157-5.118-12.861v-21.835
                  c22.469,3.312,39.908,20.297,44.232,42.029L330.814,292.21z M389.001,398.375c0,13.124-10.677,23.8-23.8,23.8
                  s-23.8-10.676-23.8-23.8c0-13.124,10.677-23.8,23.8-23.8S389.001,385.251,389.001,398.375z" />
                                </g>
                            </svg>
                        </div>
                        <h2 class="st-funfact-number st-counter">29</h2>
                        <div class="st-funfact-title">
                            
                            @if (app()->getLocale() == 'ar')
                            من الاطباء المهنيين لدينا
                            @else
                            Our Professionals
                            @endif
                        </div>
                    </div>
                    <div class="st-height-b30 st-height-lg-b30"></div>
                </div>
                <div class="col-lg-6">
                    <div class="st-funfact st-style1">
                        <div class="st-funfact-icon st-dip-blue-box">
                            <svg enable-background="new 0 0 511.619 511.619" viewBox="0 0 511.619 511.619" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path d="m504.12 423.958c-.003 0-.006 0-.009 0l-28.68.033-.031-24.191c-.005-4.139-3.362-7.491-7.5-7.491-.003 0-.006 0-.009 0-4.143.005-7.496 3.367-7.491 7.509l.031 24.19-112.203.13-.111-96.11 77.654-.09c3.963-.004 7.686-1.551 10.484-4.355s4.336-6.531 4.331-10.493l-.09-78.359c-.005-3.962-1.552-7.686-4.356-10.483-2.8-2.793-6.519-4.331-10.475-4.331-.006 0-.012 0-.019 0l-77.655.089-.036-31.016 112.203-.128.201 176.954c.005 4.14 3.361 7.492 7.5 7.492h.009c4.143-.005 7.497-3.366 7.492-7.508l-.201-176.955 14.762-.017c11.396-.016 20.654-9.298 20.639-20.688l-.02-19.672c-.015-11.393-9.286-20.65-20.669-20.65-.009 0-.02 0-.028 0l-48.04.05c-4.142.004-7.497 3.366-7.492 7.508.004 4.14 3.361 7.492 7.5 7.492h.008l48.042-.05h.007c3.124 0 5.668 2.542 5.672 5.668l.02 19.672c.004 3.122-2.535 5.666-5.658 5.67l-141.964.161-.036-31.01 59.917-.071c4.142-.005 7.496-3.367 7.491-7.509-.005-4.139-3.362-7.491-7.5-7.491-.003 0-.006 0-.009 0l-59.916.071-.041-35.216c-.006-5.53-2.166-10.727-6.081-14.632-3.909-3.9-9.101-6.046-14.622-6.046-.008 0-.017 0-.024 0l-143.451.166c-5.53.006-10.727 2.166-14.632 6.081s-6.053 9.116-6.046 14.646l.041 35.217-141.967.165c-5.521.006-10.709 2.164-14.608 6.076-3.896 3.909-6.038 9.102-6.031 14.621l.022 19.675c.006 5.52 2.162 10.707 6.068 14.604 3.901 3.892 9.083 6.034 14.593 6.034h.026l14.847-.017v22.456c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-22.474l112.119-.13.036 31.014-77.65.09c-3.963.004-7.686 1.551-10.484 4.355s-4.336 6.531-4.331 10.494l.09 78.359c.005 3.962 1.552 7.686 4.356 10.483 2.8 2.793 6.519 4.331 10.475 4.331h.019l77.651-.089.111 96.11-112.391.13v-178.672c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v178.69l-28.488.033c-4.143.005-7.497 3.367-7.492 7.509.005 4.139 3.361 7.491 7.5 7.491h.009l496.619-.575c4.142-.005 7.496-3.367 7.491-7.509-.005-4.138-3.361-7.491-7.499-7.491zm-78.625-189.041.09 78.022-77.486.09-.09-78.022zm-404.38-60.546c-.002 0-.004 0-.007 0-1.511 0-2.931-.587-4-1.653-1.07-1.068-1.661-2.489-1.663-4.003l-.022-19.675c-.002-1.516.586-2.941 1.656-4.015 1.068-1.072 2.489-1.663 4.001-1.665l141.966-.164.036 31.011zm64.645 138.962-.09-78.022 77.482-.09.09 78.022zm92.227-220.372c-.002-1.523.59-2.956 1.666-4.034s2.507-1.673 4.03-1.675l143.451-.166h.007c3.141 0 5.699 2.554 5.703 5.696l.383 331.375-18.744.022-.153-132.263c-.007-6.323-2.435-12.271-6.835-16.749-4.434-4.511-10.334-6.994-16.618-6.994-.009 0-.019 0-.028 0l-70.459.082c-6.294.007-12.2 2.505-16.629 7.033-4.39 4.488-6.804 10.441-6.796 16.765l.153 132.263-18.748.022zm33.978 199.072c-.003-2.372.892-4.595 2.519-6.258 1.588-1.624 3.692-2.52 5.924-2.522l70.459-.082h.01c2.228 0 4.33.891 5.919 2.508 1.631 1.66 2.531 3.88 2.534 6.252l.153 132.263-87.365.101z" />
                                    <path d="m207.012 200.158h.018l25.008-.029.029 25.008c.009 7.715 6.289 13.985 14 13.985h.018l19.004-.022c3.74-.004 7.255-1.464 9.896-4.112 2.642-2.647 4.094-6.166 4.089-9.906l-.029-25.008 25.007-.029c7.72-.008 13.994-6.296 13.986-14.018l-.022-19.005c-.004-3.74-1.465-7.254-4.113-9.896-2.644-2.638-6.154-4.089-9.888-4.089-.005 0-.012 0-.018 0l-25.008.029-.029-25.007c-.004-3.74-1.464-7.254-4.112-9.896-2.644-2.638-6.155-4.09-9.888-4.09-.005 0-.012 0-.018 0l-19.005.022c-3.74.004-7.254 1.465-9.896 4.113-2.641 2.647-4.093 6.166-4.089 9.905l.029 25.008-25.007.029c-3.74.004-7.255 1.464-9.896 4.112-2.642 2.648-4.094 6.166-4.089 9.906l.022 19.004c.004 3.74 1.464 7.255 4.112 9.896 2.645 2.639 6.156 4.09 9.889 4.09zm32.489-32.045c4.142-.005 7.496-3.367 7.491-7.509l-.037-31.509 17.007-.02.037 31.51c0 .259.014.514.04.766.388 3.779 3.58 6.725 7.46 6.725h.009l31.509-.037.02 17.007-31.51.037c-4.142.005-7.496 3.367-7.491 7.509l.037 31.509-17.008.02-.037-31.51c-.005-4.139-3.361-7.491-7.5-7.491-.002 0-.006 0-.009 0l-31.509.037-.02-17.007z" />
                                </g>
                            </svg>
                        </div>
                        <h2 class="st-funfact-number st-counter">12000</h2>
                        <div class="st-funfact-title">
                            
                            @if (app()->getLocale() == 'ar')
                            عملية
                            @else
                            Operations
                            @endif
                        </div>
                    </div>
                    <div class="st-height-b30 st-height-lg-b30"></div>
                </div>
            </div>
        </div>
    </section>
    <div class="st-gray-bg">
        <div class="st-height-b120 st-height-lg-b80"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h2 class="st-section-heading-title">
                    
                    @if (app()->getLocale() == 'ar')
                    شركاؤنا
                    @else
                    Our Partners
                    @endif
                </h2>
                <div class="st-seperator">
                    <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                    <div class="st-seperator-center"><img src="{{secure_asset('assets/img/arrow.png')}}" alt="icon"></div>
                    <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                </div>
            </div>
            <div class="st-height-b40 st-height-lg-b40"></div>
            <div class="st-slider st-style2 specific-slider st-pricing-wrap">
                <div class="slick-container" data-autoplay="1" data-loop="1" data-speed="600" data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="3" data-lg-slides="4" data-add-slides="5">
                    <div class="slick-wrapper">
                        <div class="slick-slide-in">
                            <div class="st-logo-carousel st-style1 st-orange-box">
                                <img src="https://daralfouad.org/ar/_images-best-hospital-egypt/2.jpg" alt="دار الفؤاد">
                            </div>
                        </div>
                        <div class="slick-slide-in">
                            <div class="st-logo-carousel st-style1 st-blue-box">
                                <img src="https://images.squarespace-cdn.com/content/v1/5efa0fe78713d718e5a23e0d/1603387698591-OH9DT0LHDGIX2N22L411/logo_Asslam-%281%29.png" alt="السلام الدولي">
                            </div>
                        </div>
                        <div class="slick-slide-in">
                            <div class="st-logo-carousel st-style1">
                                <img src="{{secure_asset('assets/img/borg.jpg')}}" width="100px;" alt="برج الاطباء">
                            </div>
                        </div>
                        <div class="slick-slide-in">
                            <div class="st-logo-carousel st-style1 st-dip-blue-box">
                                <img src="https://www.darelezam.com/wp-content/uploads/2023/06/white-2.png" width="120px;" alt="دار العظام">
                            </div>
                        </div>
                        <div class="slick-slide-in">
                            <div class="st-logo-carousel st-style1 st-black-box">
                                <img src="{{secure_asset('assets/img/mmclinic.jpg')}}" width="150px;" alt="client5">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination st-style1 st-flex st-hidden"></div>

                <div class="swipe-arrow st-style1">
                    <div class="slick-arrow-left" style="background-color: black;color: #fff;"><i class="fa fa-chevron-left"></i></div>
                    <div class="slick-arrow-right" style="background-color: black;color: #fff;"><i class="fa fa-chevron-right"></i></div>
                </div>
            </div>
        </div>
        <div class="st-height-b120 st-height-lg-b80"></div>
    </div>
    <section id="appointment" class="st-shape-wrap st-gray-bg">
        <div class="st-shape4">
            <!-- <img src="assets/img/shape/section_shape.png" alt="shape1"> -->
        </div>
        <div class="st-shape6">
            <img src="{{secure_asset('assets/img/shape/contact-shape3.svg')}}" alt="shape3">
        </div>
        <div class="st-height-b120 st-height-lg-b80"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h2 class="st-section-heading-title">
                   
                    @if (app()->getLocale() == 'ar')
                    حجز موعد
                    @else
                    Make an appointment
                    @endif
                </h2>
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

        @php
          $bookingStatus =App\Models\PublicData::first();
    
  
        @endphp
        @if ($bookingStatus && $bookingStatus->booking_status == 'active')
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <form method="POST" action="{{route('website.appointment.store',0)}}" class="st-appointment-form" id="appointment-contact">
                        @csrf
                        <div id="st-alert1"></div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="st-form-field st-style1">
                                    <label>
                                        
                                        @if (app()->getLocale() == 'ar')
                                       الاسم بالكامل
                                        @else
                                        Full Name
                                        @endif
                                         <b style="color:red">*</b></label>
                                    <input type="text" id="uname" name="name" placeholder="Jhon Doe" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="st-form-field st-style1">
                                    <label>
                                        
                                        @if (app()->getLocale() == 'ar')
                                        البريد الالكتروني
                                         @else
                                         Email Address
                                         @endif
                                    </label>
                                    <input type="text" id="uemail" name="email" placeholder="example@gmail.com" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="st-form-field st-style1">
                                    <label>
                                        
                                         
                                        @if (app()->getLocale() == 'ar')
                                        التليفون
                                         @else
                                         Phone Number
                                         @endif
                                         <b style="color:red">*</b></label>
                                    <input type="text" id="unumber" name="phone" placeholder="+20 104 2314 234" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="st-form-field st-style1">
                                    <label>
                                        
                                        @if (app()->getLocale() == 'ar')
                                        العيادة
                                         @else
                                         Clinic
                                         @endif
                                         <b style="color:red">*</b></label>
                                    <div class="st-custom-select-wrap">
                                        <select name="clinic" id="" required class="st_select1 clinic" data-placeholder="Select clinic">
                                            <option>
                                                
                                                @if (app()->getLocale() == 'ar')
                                                اختيار
                                                 @else
                                                 select
                                                 @endif
                                            </option>
                                            <option value="0">
                                                @if (app()->getLocale() == 'ar')
                                                العيادة الرئيسية - الدقي
                                                 @else
                                                 Main Clinic - Dokki
                                                 @endif
                                                
                                            </option>
                                            <option value="1">
                                                
                                                @if (app()->getLocale() == 'ar')
                                                عيادة زايد
                                                 @else
                                                 Zayed Clinic
                                                 @endif
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="st-form-field st-style1">
                                    <label>
                                        
                                        @if (app()->getLocale() == 'ar')
                                        تاريخ الحجز
                                         @else
                                         Booking Date
                                         @endif
                                         <b style="color:red">*</b></label>
                                    <input name="date" required type="text" id="datePicker" placeholder="Please Select Day" autocomplete="OFF">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="st-form-field st-style1">
                                    <label>
                                       
                                        @if (app()->getLocale() == 'ar')
                                        رسالة
                                         @else
                                         Message
                                         @endif
                                    </label>
                                    <textarea cols="30" rows="10" id="umsg" name="msg" placeholder="Write something here..."></textarea>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <button class="st-btn st-style1 st-color1 st-size-medium" type="submit" id="" name="submit">
                                    
                                    @if (app()->getLocale() == 'ar')
                                    حجز موعد
                                     @else
                                     Book an appointment
                                     @endif
                                </button><br><br><br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @else
        <h1> Booking is not active now go to app </h1>
        @endif
    </section>

    <section class="st-news-letter-section st-dynamic-bg st-bg">
        <div class="container">
            <div class="st-section-heading st-style1"><br>
                <h2 class="st-section-heading-title">
                    
                    @if (app()->getLocale() == 'ar')
                    اشترك وابق على اطلاع
                     @else
                     Subscribe & stay updated
                     @endif
                </h2>
                <div class="st-seperator">
                    <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                    <div class="st-seperator-center"><img src="{{secure_asset('assets/img/arrow.png')}}" alt="icon"></div>
                    <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                </div>
                @if (app()->getLocale() == 'ar')
                <div class="st-section-heading-subtitle">اشترك في النشرة الإخبارية لدينا وكن أول من يعرف عن آخر الأخبار، 
                    <br> العروض الخاصة والفعاليات والخصومات.
                </div>
                 @else
                 <div class="st-section-heading-subtitle">Sign up to our newsletter and be the first to know about latest news,
                    <br>special offers, events, and discounts.
                </div>
                 @endif
               
            </div>
            <div class="st-height-b40 st-height-lg-b40"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="st-news-letter">
                        <form class="mailchimp st-news-letter-form" action="">
                            @if (app()->getLocale() == 'ar')
                            <input type="email" name="subscribe" id="subscriber-email" placeholder="ادخل بريدك الالكتروني">
                             @else
                             <input type="email" name="subscribe" id="subscriber-email" placeholder="Enter Your Email Address">
                             @endif
                            <button type="submit" id="subscribe-button" class="st-mailchimp-btn"><i class="fas fa-paper-plane"></i></button>
                            <h5 class="subscription-success"> .</h5>
                            <h5 class="subscription-error"> .</h5>
                            <label class="subscription-label" for="subscriber-email"></label><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
<!-- Sweet Alert CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@section('scripts')
<script>
    window.onload = function() {
        function updateStars($starsContainer, rating) {
            $starsContainer.empty(); // Clear existing stars
            for (let i = 0; i < 5; i++) {
                const $star = $('<span class="m-1">').addClass('fa');
                if (i < rating) {
                    $star.addClass('fa-star');
                } else {
                    $star.addClass('fa-star-o');
                }
                $starsContainer.append($star);
            }
        }

        $('.slick-slide-in').each(function() {
            const $starsContainer = $(this).find('.starRating');
            const rating = $(this).find('.review').val(); // Assuming you have a data attribute for rating
            updateStars($starsContainer, rating);
        });


        const $starsContainer = $('.the-last').find('.starRating');
        const rating = $('.the-last').find('.review').val(); // Assuming you have a data attribute for rating
        updateStars($starsContainer, rating);
        // Example usage:
    }

    $('#appointment-contact').validate();
    $('#appointment-contact').submit(function(e) {
        var validation = $("#appointment-contact").valid();
        if (!validation) {
            e.preventDefault();
            return;
        }
        $("#loader_new").show();

    });

    $("#datePicker").datepicker({
        beforeShowDay: function(date) {
            // By default, disable all days
            return [false, ''];
        }
    });
    $('.clinic').on('change', function() {
        if ($(this).val() == 1) {
            // $( function() {
            $('#datePicker').val('');
            $("#datePicker").datepicker("option", "beforeShowDay", function(date) {
                return [date.getDay() === 3, ''];
            });
            // } );
        } else {
            $('#datePicker').val('');
            // $( function() {
            $("#datePicker").datepicker("option", "beforeShowDay", function(date) {
                return [(date.getDay() === 6 || date.getDay() === 2), ''];
            });
            // } );
        }
    })
</script>
@endsection
