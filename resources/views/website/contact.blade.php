@extends('layouts.app')

@section('title')
    Contact Us
@endsection

@section('styles')
    <style>
        .st-iconbox.st-style1 {
            border: 1px solid #CCC !important;
            background-color: #FFF !important;
        }

        .st-iconbox.st-style1:hover {
            border: 1px solid #007bff !important;
            background-color: #f2f3f7 !important;
        }
    </style>
@endsection



@section('content')
    <div class="st-content">
        <div class="st-page-heading  st-size-md" style="background-color: #3578f3;">
            <div class="container">
                <div class="st-page-heading-in text-center">
                    <h1 class="st-page-heading-title">
                        
                        @if (app()->getLocale() == 'ar')
                        اتصل بنا
                         @else
                         Contact Us
                         @endif
                    </h1>
                </div>
            </div>
        </div>
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="row ">
                <div class="col-lg-6">
                    <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.8644307060135!2d31.20717731506936!3d30.04074698188373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458412cc8d62cb3%3A0x730cfb09d007a930!2s3%20Mossadak%2C%20Ad%20Doqi%2C%20Giza%20District%2C%20Giza%20Governorate%203751222!5e0!3m2!1sen!2seg!4v1676485510423!5m2!1sen!2seg" width="100%" height="450" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen=""></iframe>
                </div>
                <div class="col-lg-6">
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
                                        رقم التليفون
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
                                        رسالة نصية
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
        <div class="st-height-b40 st-height-lg-b40"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="st-iconbox st-style1">
                        <div class="st-iconbox-icon st-purple-box">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <g>
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path
                                        d="M12 20.9l4.95-4.95a7 7 0 1 0-9.9 0L12 20.9zm0 2.828l-6.364-6.364a9 9 0 1 1 12.728 0L12 23.728zM12 13a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 2a4 4 0 1 1 0-8 4 4 0 0 1 0 8z" />
                                </g>
                            </svg>
                        </div>
                        <h2 class="st-iconbox-title">Location 1</h2>
                        <div class="st-iconbox-text">3, Mosaddaq St., Dokki, Giza, Egypt<br><br><br></div>
                    </div>
                    <div class="st-height-b0 st-height-lg-b30"></div>
                </div>
                <div class="col-lg-4">
                    <div class="st-iconbox st-style1">
                        <div class="st-iconbox-icon st-green-box">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <g>
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path
                                        d="M12 20.9l4.95-4.95a7 7 0 1 0-9.9 0L12 20.9zm0 2.828l-6.364-6.364a9 9 0 1 1 12.728 0L12 23.728zM12 13a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 2a4 4 0 1 1 0-8 4 4 0 0 1 0 8z" />
                                </g>
                            </svg>
                        </div>
                        <h2 class="st-iconbox-title">Location 2</h2>
                        <div class="st-iconbox-text">3, Mosaddaq St., Dokki, Giza, Egypt<br><br><br></div>
                    </div>
                    <div class="st-height-b0 st-height-lg-b10"></div>
                </div>
                <div class="col-lg-4">
                    <div class="st-iconbox st-style1">
                        <div class="st-iconbox-icon st-red-box">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-ambulance"
                                 viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round"
                                 stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="7" cy="17" r="2" />
                                <circle cx="17" cy="17" r="2" />
                                <path d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                                <path d="M6 10h4m-2 -2v4" />
                            </svg>
                        </div>
                        <h2 class="st-iconbox-title">Emergency</h2>
                        <div class="st-iconbox-text">Secretary: +20100 1511 997<br>
                            Phone: +20100 5070 605<br>
                            Email:handclinicmm@gmail.com</div>
                    </div>
                    <div class="st-height-b0 st-height-lg-b130"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="st-height-b80 st-height-lg-b100"></div>

@endsection
@section('scripts')
    <script>
        $("#datePicker").datepicker({
            beforeShowDay: function(date) {
                // By default, disable all days
                return [false, ''];
            }
        });
        $('.clinic').on('change',function () {
            if($(this).val() == 1) {
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

        $('#appointment-contact').validate();
        $('#appointment-contact').submit(function (e) {
            var validation = $("#appointment-contact").valid();
            if (!validation) {
                e.preventDefault();
                return;
            }
            $("#loader_new").show();

        });
    </script>
@endsection
