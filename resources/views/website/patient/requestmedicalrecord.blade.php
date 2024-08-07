@extends('layouts.app')

@section('title')
    Request Medical Record
@endsection

@section('content')
    <div class="st-content">
        <div class="st-page-heading  st-size-md" style="background-color: #3578f3;">
            <div class="container">
                <div class="st-page-heading-in text-center">
                    <h1 class="st-page-heading-title">
                        
                        @if (app()->getLocale() == 'ar')
                        طلب السجل الطبي
                         @else
                         Request Medical Record
                         @endif
                    </h1>
                </div>
            </div>
        </div>
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <form method="POST" action="{{ route('website.patient.request.record') }}" class="st-appointment-form" id="appointment-contact">
                        @csrf
                        <div id="st-alert1"></div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="st-form-field st-style1">
                                    <label>
                                       
                                        @if (app()->getLocale() == 'ar')
                                       أدخل رقم هاتفك
                                         @else
                                         Enter your phone number
                                         @endif
                                    </label>
                                    <input type="text" id="unumber" name="unumber" placeholder="01231234123" required>
                                </div>
                                <div class="st-form-field st-style1">
                                </div>
                                <button class="st-btn st-style1 st-color1 st-size-medium" type="submit" id="submit-button" name="submit">
                                    
                                    
                                    @if (app()->getLocale() == 'ar')
                                    اطلب السجل الخاص بك
                                      @else
                                      Request your record
                                      @endif
                                </button><br><br><br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="st-height-b80 st-height-lg-b100"></div>
    </div>
    <div class="st-height-b80 st-height-lg-b100"></div>

    @if(session('alert'))
        <script>
            alert('{{ session('alert') }}');
        </script>
    @endif
@endsection
