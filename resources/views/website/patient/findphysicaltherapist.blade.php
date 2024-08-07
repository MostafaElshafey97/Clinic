@extends('layouts.app')

@section('title')
Find Physical Therapist
@endsection

{{-- @section('styles') --}}
<style>
    @media (max-width: 650px) {
        .modal {
            margin-top: 60px;
        }
    }

    a:hover {
        text-decoration: none;
        color: #0f3bff;
    }

    .contactqrcode {
        display: block;
        position: absolute;
        background-color: #007bff;
        color: #fff;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        border-radius: 21px;
        top: 15px;
        right: 15px;
        height: 46px;
        width: 46px;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    .modal-body {
        display: flex;
        flex-wrap: wrap;
    }

    .col-md-6 {
        flex: 0 0 50%;
        /* Set column width to 50% */
        max-width: 50%;
        padding: 0 15px;
        /* Add some padding between columns */
    }

    .doctor-image,
    .qr-code {
        width: 100%;
        /* Make images fill their container */
        height: auto;
        /* Maintain aspect ratio */
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 8% auto;
        /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        /* Could be more or less, depending on screen size */
    }

    .close {
        color: #aaa;
        float: right !important;
        /* Adjusted to float right */
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>
{{-- @endsection --}}

@section('content')
<div class="st-content">
    <div class="st-page-heading st-dynamic-bg" data-src="{{secure_asset('assets/img/op.jpg')}}" style="background-image: url({{secure_asset('assets/img/op.jpg')}});">
        <div class="container">
            <div class="st-page-heading-in text-center">
                <h1 class="st-page-heading-title">
                    
                    @if (app()->getLocale() == 'ar')
                    البحث عن العلاج الطبيعي
                      @else
                      Find Physical Therapist
                      @endif
                </h1>
            </div>
        </div>
    </div>

    <section id="doctors">
        <div class="st-height-b120 st-height-lg-b80"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h2 class="st-section-heading-title">Find Phystical Therapist</h2>
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

        <div class="pagination st-style1 st-flex st-hidden"></div>
        <div id="doctorModal" class="modal">
            <div class="modal-content">
                <span onclick="closeDoctorModal()" class="close">&times;</span>
                <div class="modal-body">
                    <div class="row w-100">
                        <div class="col-md-6">
                            <img src="{{secure_asset('assets/img/mm.jpg')}}" alt="Doctor Image" class="doctor-image">
                        </div>
                        <div class="col-md-6 d-flex flex-column align-items-center justify-content-center ">
                            <div class="d-flex justify-content-center mb-3">
                                <div class=" border p-2 rounded   ">
                                    <img src="{{secure_asset('assets/img/qr.jpg')}}" alt="QR Code" style="width: 200px;" class="qr-code">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="inp">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" readonly name="" value="Dr Moustafa" id="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="inp">
                                        <label for="">Address</label>
                                        <input type="text" class="form-control" readonly name="" value="Hurghada street 30" id="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="inp">
                                        <label for="">Phone</label>
                                        <input type="text" class="form-control" readonly name="" value="01069441618" id="">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Other content here -->
                </div>
            </div>
        </div>






        <script>
            function openDoctorModal() {
                var modal = document.getElementById("doctorModal");
                modal.style.display = "block";
            }

            // Function to close the modal
            function closeDoctorModal() {
                var modal = document.getElementById("doctorModal");
                modal.style.display = "none";
            }
        </script>
        {{-- <section id="team" class="team section single-page">
                <div class="container">

                    <div class="row" style="justify-content: center;">
                        <div class="col-lg-4 ">
                            <div class="single-team">
                                <div class="t-head">
                                    <img src="{{secure_asset('assets/img/mm.jpg')}}" alt="#">
        <button class="contactqrcode" href="#" onclick="openDoctorModal()"><i class="fas fa-phone"></i></button>
</div>
<div class="t-bottom">
    <h2><a href="https://zcreations.tech/proj/index.php?act=aboutdrmoustafa" style="font-size: 20px;margin-bottom: 4px;-webkit-transition: all 0.3s ease;transition: all 0.3s ease;">Dr Moustafa</a></h2>
</div>

</div>
</div>
</div>

<div class="row" style="justify-content: center;">
    <div class="col-lg-4 ">
        <div class="single-team">
            <div class="t-head">
                <img src="{{secure_asset('assets/img/mm.jpg')}}" alt="#">
                <button class="contactqrcode" href="#" onclick="openDoctorModal()"><i class="fas fa-phone"></i></button>
            </div>
            <div class="t-bottom">
                <h2><a href="https://zcreations.tech/proj/index.php?act=aboutdrmoustafa" style="font-size: 20px;margin-bottom: 4px;-webkit-transition: all 0.3s ease;transition: all 0.3s ease;">Dr Moustafa</a></h2>
            </div>

        </div>
    </div>
</div>

<div class="row" style="justify-content: center;">
    <div class="col-lg-4 ">
        <div class="single-team">
            <div class="t-head">
                <img src="{{secure_asset('assets/img/mm.jpg')}}" alt="#">
                <button class="contactqrcode" href="#" onclick="openDoctorModal()"><i class="fas fa-phone"></i></button>
            </div>
            <div class="t-bottom">
                <h2><a href="https://zcreations.tech/proj/index.php?act=aboutdrmoustafa" style="font-size: 20px;margin-bottom: 4px;-webkit-transition: all 0.3s ease;transition: all 0.3s ease;">Dr Moustafa</a></h2>
            </div>

        </div>
    </div>
</div>

<div class="row" style="justify-content: center;">
    <div class="col-lg-4 ">
        <div class="single-team">
            <div class="t-head">
                <img src="{{secure_asset('assets/img/mm.jpg')}}" alt="#">
                <button class="contactqrcode" href="#" onclick="openDoctorModal()"><i class="fas fa-phone"></i></button>
            </div>
            <div class="t-bottom">
                <h2><a href="https://zcreations.tech/proj/index.php?act=aboutdrmoustafa" style="font-size: 20px;margin-bottom: 4px;-webkit-transition: all 0.3s ease;transition: all 0.3s ease;">Dr Moustafa</a></h2>
            </div>

        </div>
    </div>
</div>


</div>
</section> --}}

{{-- <section id="team" class="team section single-page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3">
                <div class="single-team" onclick="openDoctorModal()" style='cursor: pointer;'>
                    <div class="t-head">
                        <img src="{{secure_asset('assets/img/mm.jpg')}}" alt="#">
                        <button class="contactqrcode" href="#"><i class="fas fa-phone"></i></button>
                    </div>
                    <div class="t-bottom">
                        <h2><a href="https://zcreations.tech/proj/index.php?act=aboutdrmoustafa" style="font-size: 20px;margin-bottom: 4px;-webkit-transition: all 0.3s ease;transition: all 0.3s ease;">Dr Moustafa</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-team" onclick="openDoctorModal()" style='cursor: pointer;'>
                    <div class="t-head">
                        <img src="{{secure_asset('assets/img/mm.jpg')}}" alt="#">
                        <button class="contactqrcode" href="#"><i class="fas fa-phone"></i></button>
                    </div>
                    <div class="t-bottom">
                        <h2><a href="https://zcreations.tech/proj/index.php?act=aboutdrmoustafa" style="font-size: 20px;margin-bottom: 4px;-webkit-transition: all 0.3s ease;transition: all 0.3s ease;">Dr Moustafa</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-team" onclick="openDoctorModal()" style='cursor: pointer;'>
                    <div class="t-head">
                        <img src="{{secure_asset('assets/img/mm.jpg')}}" alt="#">
                        <button class="contactqrcode" href="#"><i class="fas fa-phone"></i></button>
                    </div>
                    <div class="t-bottom">
                        <h2><a href="https://zcreations.tech/proj/index.php?act=aboutdrmoustafa" style="font-size: 20px;margin-bottom: 4px;-webkit-transition: all 0.3s ease;transition: all 0.3s ease;">Dr Moustafa</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-team" onclick="openDoctorModal()" style='cursor: pointer;'>
                    <div class="t-head">
                        <img src="{{secure_asset('assets/img/mm.jpg')}}" alt="#">
                        <button class="contactqrcode" href="#"><i class="fas fa-phone"></i></button>
                    </div>
                    <div class="t-bottom">
                        <h2><a href="https://zcreations.tech/proj/index.php?act=aboutdrmoustafa" style="font-size: 20px;margin-bottom: 4px;-webkit-transition: all 0.3s ease;transition: all 0.3s ease;">Dr Moustafa</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<section id="team" class="team section single-page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3">
                <div class="single-team" onclick="openDoctorModal()" style='cursor: pointer;'>
                    <div class="t-head">
                        <img src="{{secure_asset('assets/img/mm.jpg')}}" alt="#">
                        <!-- زر الاتصال بالهاتف -->
                        <button class="contactqrcode" onclick="showPhoneNumber('+123456789')"><i class="fas fa-phone"></i></button>
                    </div>
                    <div class="t-bottom">
                        <h2><a href="https://zcreations.tech/proj/index.php?act=aboutdrmoustafa" style="font-size: 20px;margin-bottom: 4px;-webkit-transition: all 0.3s ease;transition: all 0.3s ease;">Dr Moustafa</a></h2>
                    </div>
                </div>
            </div>
            <!-- تكرار الكود للصور الأخرى -->
            <div class="col-lg-3">
                <div class="single-team" onclick="openDoctorModal()" style='cursor: pointer;'>
                    <div class="t-head">
                        <img src="{{secure_asset('assets/img/mm.jpg')}}" alt="#">
                        <!-- زر الاتصال بالهاتف -->
                        <button class="contactqrcode" onclick="showPhoneNumber('+987654321')"><i class="fas fa-phone"></i></button>
                    </div>
                    <div class="t-bottom">
                        <h2><a href="https://zcreations.tech/proj/index.php?act=aboutdrmoustafa" style="font-size: 20px;margin-bottom: 4px;-webkit-transition: all 0.3s ease;transition: all 0.3s ease;">Dr Moustafa</a></h2>
                    </div>
                </div>
            </div>
            <!-- تكرار الكود للصور الأخرى -->
            <div class="col-lg-3">
                <div class="single-team" onclick="openDoctorModal()" style='cursor: pointer;'>
                    <div class="t-head">
                        <img src="{{secure_asset('assets/img/mm.jpg')}}" alt="#">
                        <!-- زر الاتصال بالهاتف -->
                        <button class="contactqrcode" onclick="showPhoneNumber('+1122334455')"><i class="fas fa-phone"></i></button>
                    </div>
                    <div class="t-bottom">
                        <h2><a href="https://zcreations.tech/proj/index.php?act=aboutdrmoustafa" style="font-size: 20px;margin-bottom: 4px;-webkit-transition: all 0.3s ease;transition: all 0.3s ease;">Dr Moustafa</a></h2>
                    </div>
                </div>
            </div>
            <!-- تكرار الكود للصور الأخرى -->
            <div class="col-lg-3">
                <div class="single-team" onclick="openDoctorModal()" style='cursor: pointer;'>
                    <div class="t-head">
                        <img src="{{secure_asset('assets/img/mm.jpg')}}" alt="#">
                        <!-- زر الاتصال بالهاتف -->
                        <button class="contactqrcode" onclick="showPhoneNumber('+555555555')"><i class="fas fa-phone"></i></button>
                    </div>
                    <div class="t-bottom">
                        <h2><a href="https://zcreations.tech/proj/index.php?act=aboutdrmoustafa" style="font-size: 20px;margin-bottom: 4px;-webkit-transition: all 0.3s ease;transition: all 0.3s ease;">Dr Moustafa</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</div>
</div>
<div class="st-height-b120 st-height-lg-b80"></div>
</section>
<hr>
</div>
@endsection
<script>
    // Function to open modal with phone number
    function showPhoneNumber(phoneNumber) {
        // Display the phone number (you can replace this with your desired action)
        alert("Phone Number: " + phoneNumber);
    }
</script>
