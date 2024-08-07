@extends('layouts.app')

@section('title')
    Our Doctors
@endsection

@section('content')
    <div class="st-content" >
        <div class="st-page-heading  st-size-md" style="background-color: #3578f3;">
            <div class="container">
                <div class="st-page-heading-in text-center">
                    <h1 class="st-page-heading-title">
                       
                        @if (app()->getLocale() == 'ar')
                        فريقنا الطبي
                          @else
                          Our Team
                          @endif
                    </h1>
                </div>
            </div>
        </div>
        <section id="team" class="team section single-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">

                        <div class="single-team">
                            <div class="t-head">
                                <img src="{{secure_asset('assets/img/team1.jpg')}}" alt="#">
                            </div>
                            <div class="t-bottom">
                                <p>Neurosurgeon</p>
                                <h2><a href="{{route('website.doctordetails',1)}}">Collis Molate</a></h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <div class="st-height-b120 st-height-lg-b50"></div>

    </div>
@endsection
