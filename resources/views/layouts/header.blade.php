<!DOCTYPE html>
{{-- <html class="no-js" lang="en"> --}}
<html class="no-js" lang="{{ app()->getLocale() }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

@php
$public_data = \App\Models\PublicData::first();
$services = \App\Models\Service::all();
@endphp

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <title>
        @yield('title')
    </title>
    <link rel="icon" href="{{secure_asset('assets/img/logo.png')}}" />
    <link rel="stylesheet" href="{{secure_asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{secure_asset('assets/css/icofont.css')}}" />
    <link rel="stylesheet" href="{{secure_asset('assets/css/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{secure_asset('assets/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{secure_asset('assets/css/slick.css')}}" />
    <link rel="stylesheet" href="{{secure_asset('assets/css/lightgallery.min.css')}}" />
    <link rel="stylesheet" href="{{secure_asset('assets/css/animate.css')}}" />
    <link rel="stylesheet" href="{{secure_asset('assets/css/jQueryUi.min.css')}}" />
    <link rel="stylesheet" href="{{secure_asset('assets/css/textRotate.css')}}" />
    <link rel="stylesheet" href="{{secure_asset('assets/css/select2.min.css')}}" />
    <link rel="stylesheet" href="{{secure_asset('assets/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{secure_asset('assets/css/style.css')}}" />
    @yield('styles')
    <style>
        .loading-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .circle {
            position: relative;
            width: 100px;
            height: 100px;
            border: 0px solid #ccc;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        .upper-limb {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .hand {
            position: relative;
            width: 4px;
            height: 40px;
            background-color: #333;
            animation: rotate-hand 1s infinite alternate;
        }

        .note {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 20px;
            height: 20px;
            background-color: #333;
            border-radius: 50%;
        }

        @keyframes spin {
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes rotate-hand {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(45deg);
            }
        }

        .overlay {
            background-color: rgba(255, 255, 255, 0.8);
            /* White with opacity */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9998;
            /* Ensure it's below preloader */
            display: block;
        }

        /* Style for preloader */
        .preloader {
            border: 8px solid #f3f3f3;
            /* Light grey */
            border-top: 8px solid #3498db;
            /* Blue */
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 2s linear infinite;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            /* Ensure it's on top of overlay */
            display: block;
        }

        /* Rotate animation for preloader */
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .error {
            color: #FF0000 !important;
        }

        .tobehidden {
            display: none;
        }
    </style>
</head>

<body class="">
    <div class="overlay"></div>
    <div class="preloader" style=""></div>


    </div>
    <header class="st-site-header st-style1 st-sticky-header">
        <div class="st-top-header">
            <div class="container">
                <div class="st-top-header-in">
                    <ul class="st-top-header-list">
                        <li>
                            <svg enable-background="new 0 0 479.058 479.058" viewBox="0 0 479.058 479.058" xmlns="http://www.w3.org/2000/svg">
                                <path d="m434.146 59.882h-389.234c-24.766 0-44.912 20.146-44.912 44.912v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159l-200.355 173.649-200.356-173.649c1.769-.736 3.704-1.159 5.738-1.159zm0 299.411h-389.234c-8.26 0-14.971-6.71-14.971-14.971v-251.648l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z" />
                            </svg>
                            <a href="mailto:support@example.com">{{$public_data->email}}</a>
                        </li>
                        <li>
                            <svg enable-background="new 0 0 512.021 512.021" viewBox="0 0 512.021 512.021" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path d="m367.988 512.021c-16.528 0-32.916-2.922-48.941-8.744-70.598-25.646-136.128-67.416-189.508-120.795s-95.15-118.91-120.795-189.508c-8.241-22.688-10.673-46.108-7.226-69.612 3.229-22.016 11.757-43.389 24.663-61.809 12.963-18.501 30.245-33.889 49.977-44.5 21.042-11.315 44.009-17.053 68.265-17.053 7.544 0 14.064 5.271 15.645 12.647l25.114 117.199c1.137 5.307-.494 10.829-4.331 14.667l-42.913 42.912c40.482 80.486 106.17 146.174 186.656 186.656l42.912-42.913c3.837-3.837 9.36-5.466 14.667-4.331l117.199 25.114c7.377 1.581 12.647 8.101 12.647 15.645 0 24.256-5.738 47.224-17.054 68.266-10.611 19.732-25.999 37.014-44.5 49.977-18.419 12.906-39.792 21.434-61.809 24.663-6.899 1.013-13.797 1.518-20.668 1.519zm-236.349-479.321c-31.995 3.532-60.393 20.302-79.251 47.217-21.206 30.265-26.151 67.49-13.567 102.132 49.304 135.726 155.425 241.847 291.151 291.151 34.641 12.584 71.867 7.64 102.132-13.567 26.915-18.858 43.685-47.256 47.217-79.251l-95.341-20.43-44.816 44.816c-4.769 4.769-12.015 6.036-18.117 3.168-95.19-44.72-172.242-121.772-216.962-216.962-2.867-6.103-1.601-13.349 3.168-18.117l44.816-44.816z" />
                                    <path d="m496.02 272c-8.836 0-16-7.164-16-16 0-123.514-100.486-224-224-224-8.836 0-16-7.164-16-16s7.164-16 16-16c68.381 0 132.668 26.628 181.02 74.98s74.98 112.639 74.98 181.02c0 8.836-7.163 16-16 16z" />
                                    <path d="m432.02 272c-8.836 0-16-7.164-16-16 0-88.224-71.776-160-160-160-8.836 0-16-7.164-16-16s7.164-16 16-16c105.869 0 192 86.131 192 192 0 8.836-7.163 16-16 16z" />
                                    <path d="m368.02 272c-8.836 0-16-7.164-16-16 0-52.935-43.065-96-96-96-8.836 0-16-7.164-16-16s7.164-16 16-16c70.58 0 128 57.42 128 128 0 8.836-7.163 16-16 16z" />
                                </g>
                            </svg>
                            <a href="tel:{{$public_data->phone}}">{{$public_data->phone}}</a>
                        </li>

                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                            </svg>
                            <a href="https://wa.me/2{{$public_data->phone}}" target="_blank">WhatsApp</a>
                        </li>
                        <li>
                            <a href=""></a>
                        </li>

                        <li>
                            @if (app()->getLocale() == 'ar')

                            <a href="{{ LaravelLocalization::getLocalizedURL('en') }}" class="d-flex">
                                {{-- <i class="fa-solid fa-language fs-5"></i> --}}
                                <svg fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="796 796 200 200" enable-background="new 796 796 200 200" xml:space="preserve">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g>
                                            <path d="M973.166,818.5H818.833c-12.591,0-22.833,10.243-22.833,22.833v109.333c0,12.59,10.243,22.833,22.833,22.833h154.333 c12.59,0,22.834-10.243,22.834-22.833V841.333C996,828.743,985.756,818.5,973.166,818.5z M896,961.5h-77.167 c-5.973,0-10.833-4.859-10.833-10.833V841.333c0-5.974,4.86-10.833,10.833-10.833H896V961.5z M978.58,872.129 c-0.547,9.145-5.668,27.261-20.869,39.845c4.615,1.022,9.629,1.573,14.92,1.573v12c-10.551,0-20.238-1.919-28.469-5.325 c-7.689,3.301-16.969,5.325-28.125,5.325v-12c5.132,0,9.924-0.501,14.366-1.498c-8.412-7.016-13.382-16.311-13.382-26.78h11.999 c0,8.857,5.66,16.517,14.884,21.623c4.641-2.66,8.702-6.112,12.164-10.351c5.628-6.886,8.502-14.521,9.754-20.042h-49.785v-12 h22.297v-11.986h12V864.5h21.055c1.986,0,3.902,0.831,5.258,2.28C977.986,868.199,978.697,870.155,978.58,872.129z"></path>
                                            <g>
                                                <g>
                                                    <path d="M839.035,914.262l-4.45,11.258h-15.971l26.355-61.09h15.971l25.746,61.09h-16.583l-4.363-11.258H839.035z M852.475,879.876l-8.902,22.604h17.629L852.475,879.876z"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            @else
                            <a href="{{ LaravelLocalization::getLocalizedURL('ar') }}" class="d-flex">
                                {{-- <i class="fa-solid fa-language fs-5"></i> --}}
                                <svg fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="796 796 200 200" enable-background="new 796 796 200 200" xml:space="preserve">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g>
                                            <path d="M973.166,818.5H818.833c-12.591,0-22.833,10.243-22.833,22.833v109.333c0,12.59,10.243,22.833,22.833,22.833h154.333 c12.59,0,22.834-10.243,22.834-22.833V841.333C996,828.743,985.756,818.5,973.166,818.5z M896,961.5h-77.167 c-5.973,0-10.833-4.859-10.833-10.833V841.333c0-5.974,4.86-10.833,10.833-10.833H896V961.5z M978.58,872.129 c-0.547,9.145-5.668,27.261-20.869,39.845c4.615,1.022,9.629,1.573,14.92,1.573v12c-10.551,0-20.238-1.919-28.469-5.325 c-7.689,3.301-16.969,5.325-28.125,5.325v-12c5.132,0,9.924-0.501,14.366-1.498c-8.412-7.016-13.382-16.311-13.382-26.78h11.999 c0,8.857,5.66,16.517,14.884,21.623c4.641-2.66,8.702-6.112,12.164-10.351c5.628-6.886,8.502-14.521,9.754-20.042h-49.785v-12 h22.297v-11.986h12V864.5h21.055c1.986,0,3.902,0.831,5.258,2.28C977.986,868.199,978.697,870.155,978.58,872.129z"></path>
                                            <g>
                                                <g>
                                                    <path d="M839.035,914.262l-4.45,11.258h-15.971l26.355-61.09h15.971l25.746,61.09h-16.583l-4.363-11.258H839.035z M852.475,879.876l-8.902,22.604h17.629L852.475,879.876z"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            @endif
                        </li>
                    </ul>
                    <a href="#appointment" class="st-btn st-style2 st-color1 st-size-medium" style="border-radius: 20px;">Request
                        Appointment</a>


                </div>
                <div class="translate">
                    {{-- <label for="">Change Language:</label> --}}
                    <div id="google_translate_element"></div>
                </div>

                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

            </div>
        </div>
        <div class="st-main-header">
            <div class="container">
                <div class="st-main-header-in">
                    <div class="st-main-header-left">
                        <a class="st-site-branding" href=""><img width="70px" src="{{secure_asset('assets/img/logo.png')}}" alt=""></a>
                    </div>
                    <div class="st-main-header-right">
                        <div class="st-nav">
                            <ul class="st-nav-list st-onepage-nav">
                                <li class="{{ request()->routeIs('website.index') ? 'active' : '' }}"><a href="{{route('website.index')}}" class="st-smooth-move">{{ __('admin.home') }}</a></li>
                                <li class="menu-item-has-children
                                {{ request()->routeIs('website.sp1') || request()->routeIs('website.sp2') || request()->routeIs('website.sp3')
                            || request()->routeIs('website.sp4') || request()->routeIs('website.sp5') || request()->routeIs('website.sp6')
                            || request()->routeIs('website.sp7') ? 'active' : '' }}"><a href="{{route('website.sp1')}}" class="st-smooth-move"> {{ __('admin.Services') }}</a>
                                    <ul class="vertical-line">
                                        <li><a href="{{route('website.sp1')}}">
                                                @if (app()->getLocale() == 'ar')
                                                {{$services[0]->name_ar}}
                                                @else
                                                {{$services[0]->name}}
                                                @endif

                                            </a></li>
                                        <li><a href="{{route('website.sp2')}}">
                                                @if (app()->getLocale() == 'ar')
                                                {{$services[1]->name_ar}}
                                                @else
                                                {{$services[1]->name}}
                                                @endif
                                            </a></li>
                                        <li><a href="{{route('website.sp3')}}">
                                                @if (app()->getLocale() == 'ar')
                                                {{$services[2]->name_ar}}
                                                @else
                                                {{$services[2]->name}}
                                                @endif
                                            </a></li>
                                        <li><a href="{{route('website.sp4')}}">
                                                @if (app()->getLocale() == 'ar')
                                                {{$services[3]->name_ar}}
                                                @else
                                                {{$services[3]->name}}
                                                @endif
                                            </a></li>
                                        <li><a href="{{route('website.sp5')}}">
                                                @if (app()->getLocale() == 'ar')
                                                {{$services[4]->name_ar}}
                                                @else
                                                {{$services[4]->name}}
                                                @endif
                                            </a></li>
                                        <li><a href="{{route('website.sp6')}}">
                                                @if (app()->getLocale() == 'ar')
                                                {{$services[5]->name_ar}}
                                                @else
                                                {{$services[5]->name}}
                                                @endif
                                            </a></li>
                                        <li><a href="{{route('website.sp7')}}">
                                                @if (app()->getLocale() == 'ar')
                                                {{$services[6]->name_ar}}
                                                @else
                                                {{$services[6]->name}}
                                                @endif
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="{{ request()->routeIs('website.success_story') ? 'active' : ''}}"><a href="{{route('website.success_story')}}" class="st-smooth-move"> {{ __('admin.Success Stories') }}</a></li>
                                <li class="menu-item-has-children
{{ request()->routeIs('website.patient.patientguide') || request()->routeIs('website.patient.requestmedicalrecord') || request()->routeIs('website.patient.patienteducationvideo')
                            || request()->routeIs('website.patient.pre_op') || request()->routeIs('website.patient.findphysicaltherapist') || request()->routeIs('website.patient.patientform')
                            || request()->routeIs('website.patient.post_op') ? 'active' : '' }}
                            "><a class="st-smooth-move">
                                        {{ __('admin.For Patients') }}</a>
                                    <ul class="vertical-line">
                                        <li><a href="{{route('website.patient.patientguide')}}">

                                                @if (app()->getLocale() == 'ar')
                                                دليل المرضي والزوار
                                                @else
                                                Patient and Visitor Guide
                                                @endif
                                            </a></li>
                                        <li><a href="{{route('website.patient.requestmedicalrecord')}}">

                                                @if (app()->getLocale() == 'ar')
                                                طلب السجل الطبي
                                                @else
                                                Request Medical Records
                                                @endif
                                            </a></li>
                                        <li><a href="{{route('website.patient.patienteducationvideo')}}">
                                                @if (app()->getLocale() == 'ar')
                                                فيديو تعليم المريض
                                                @else
                                                Patient Education Videos
                                                @endif
                                            </a></li>
                                        <li><a href="{{route('website.patient.pre_op')}}">

                                                @if (app()->getLocale() == 'ar')
                                                التحضير للجراحة والإجراءات
                                                @else
                                                Preparing for surgery & Procedure
                                                @endif
                                            </a></li>
                                        <li><a href="{{route('website.patient.post_op')}}">
                                                @if (app()->getLocale() == 'ar')
                                                تعليمات ما بعد الجراحة
                                                @else
                                                Post-Operative Instructions
                                                @endif
                                            </a></li>
                                        {{-- <li><a href="comingsoon.html">Ask Upper Limb Expert</a></li> --}}
                                        <!-- <li><a href="comingsoon.html">International Patients</a></li> -->
                                        <li><a href="{{route('website.patient.findphysicaltherapist')}}">
                                                @if (app()->getLocale() == 'ar')
                                                البحث عن العلاج الطبيعي
                                                @else
                                                Find Physical Therapist
                                                @endif
                                            </a></li>
                                        <li><a href="{{route('website.patient.patientform')}}">
                                                @if (app()->getLocale() == 'ar')
                                                نموذج المريض
                                                @else
                                                Patient Form
                                                @endif
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children
                             {{ request()->routeIs('website.professionals.events') || request()->routeIs('website.professionals.researches')
                            || request()->routeIs('website.professionals.professionalresources')
                            || request()->routeIs('website.professionals.journals') || request()->routeIs('website.professionals.fellowship')
                            || request()->routeIs('website.professionals.publishwithus') ? 'active' : '' }}
                                    "><a class="st-smooth-move"> {{ __('admin.For Medical Professionals') }}</a>
                                    <ul class="vertical-line">
                                        <li><a href="{{route('website.professionals.events')}}">
                                                @if (app()->getLocale() == 'ar')
                                                الأحداث
                                                @else
                                                Events
                                                @endif

                                            </a></li>
                                        <li><a href="{{route('website.professionals.researches')}}">

                                                @if (app()->getLocale() == 'ar')
                                                الأبحاث العلمية
                                                @else
                                                Researches
                                                @endif
                                            </a></li>
                                        {{-- <li><a href="{{route('website.professionals.fellowship')}}">

                                        @if (app()->getLocale() == 'ar')
                                        الزمالة
                                        @else
                                        Fellowship
                                        @endif
                                        </a>
                                </li> --}}
                                <li><a href="{{route('website.professionals.professionalresources')}}">

                                        @if (app()->getLocale() == 'ar')
                                        الموارد الطبية
                                        @else
                                        Professional Resources
                                        @endif
                                    </a></li>
                                {{-- <li><a href="{{route('website.professionals.journals')}}">Journals A-Z</a></li> --}}
                                <li><a href="{{route('website.professionals.publishwithus')}}">

                                        @if (app()->getLocale() == 'ar')
                                        انشر معنا
                                        @else
                                        Publish with us
                                        @endif
                                    </a></li>
                            </ul>
                            </li>

                            <li class="menu-item-has-children
    {{ request()->routeIs('website.blogs.blogs')  ? 'active' : '' }}
                                    "><a class="st-smooth-move"> {{ __('admin.Blog') }}</a>
                                <ul class="vertical-line">
                                    <li><a href="{{route('website.blogs.blogs_doctors')}}">
                                            @if (app()->getLocale() == 'ar')
                                            مدونة الأطباء
                                            @else
                                            Doctors blog
                                            @endif

                                        </a></li>
                                    <li><a href="{{route('website.blogs.blogs_patient')}}">

                                            @if (app()->getLocale() == 'ar')
                                            مدونة المرضى
                                            @else
                                            Patient blog
                                            @endif
                                        </a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children  {{ request()->routeIs('website.about') || request()->routeIs('website.aboutdrmoustafa') || request()->routeIs('website.ourdoctors')  ? 'active' : '' }}"><a class="st-smooth-move" href="{{route('website.about')}}">
                                    {{ __('admin.About') }}</a>
                                <ul class="vertical-line">
                                    <li><a href="{{route('website.aboutdrmoustafa')}}">

                                            @if (app()->getLocale() == 'ar')
                                            عن د.مصطفي محمود
                                            @else
                                            About Dr Moustafa
                                            @endif
                                        </a></li>
                                    <!-- <li><a href="handsurgery.php">Hand Surgery</a></li> -->
                                    <li><a href="{{route('website.ourdoctors')}}">

                                            @if (app()->getLocale() == 'ar')
                                            فريقنا الطبي
                                            @else
                                            Our Team
                                            @endif
                                        </a></li>
                                </ul>
                            </li>
                            <li class="{{ request()->routeIs('website.contact') ? 'active' : '' }} menu-item-has-children" style="margin-right:30px">
                                <a href="{{route('website.contact')}}" class="st-smooth-move"> {{ __('admin.Contact') }}</a>
                            </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
