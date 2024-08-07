@extends('layouts.admin')

@section('styles')
    <style>
        label {
            padding-top: 3px;
        }
    </style>
@endsection
@section('content')
    <div class="pt-3">
        <div class=" card">
            <div class="card-body " >
            <form method="POST" action="{{route('website.appointment.store',0)}}" class="st-appointment-form" id="appointment-contact">
                        @csrf
                        <div id="st-alert1"></div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="st-form-field st-style1">
                                    <label>Full Name</label>
                                    <input type="text" id="uname" value="{{$appointment->name}}" name="name" class="form-control" readonly placeholder="Jhon Doe" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="st-form-field st-style1">
                                    <label>Email Address</label>
                                    <input type="text" id="uemail" value="{{$appointment->email}}"  name="email" class="form-control" readonly placeholder="example@gmail.com" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="st-form-field st-style1">
                                    <label>Phone Number</label>
                                    <input type="text" id="unumber" value="{{$appointment->phone}}"  class="form-control" readonly name="phone" placeholder="+00 141 23 234" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="st-form-field st-style1">
                                    <label>Clinic </label>
                                    <div class="st-custom-select-wrap">
                                        <select name="clinic" id="" class="st_select1 clinic form-control" disabled
                                                data-placeholder="Select clinic">
                                            <option></option>
                                            <option value="0" @if($appointment->clinic == 0) selected @endif> Main Clinic - Dokki</option>
                                            <option value="1" @if($appointment->clinic == 1) selected @endif>Zayed Clinic</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="st-form-field st-style1">
                                    <label>Booking Date</label>
                                    <input name="" type="date" class="form-control" value="{{$appointment->date}}"  id="date" readonly>

                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="st-form-field st-style1">
                                    <label>Department</label>
                                    <div class="st-custom-select-wrap">
                                        <select name="department" id="udepartment" class="form-control" disabled
                                                data-placeholder="Select department">
                                            <option></option>
                                            <option value="0" @if($appointment->department == 0) selected @endif >Department</option>
                                            <option value="1"  @if($appointment->department == 1) selected @endif>Department</option>
                                            <option value="2" @if($appointment->department == 2) selected @endif>Department</option>
                                            <option value="3" @if($appointment->department == 3) selected @endif>Department</option>
                                        </select>
                                    </div>
                                </div>
                                <br><br><br>
                            </div>
                            <div class="col-lg-6">
                                <div class="st-form-field st-style1">
                                    <label>Message</label>
                                    <textarea cols="30" rows="10" id="umsg" name="msg" class="form-control" readonly
                                              placeholder="Write something here...">{{$appointment->message}} </textarea>
                                </div>
                            </div>
                            <div class="col-md-6">

                            <div class="st-form-field st-style1">
                                    <label>type</label>
                                    <input type="text" id="uname" value=" @if($appointment->type == 0) contact @elseif($appointment->type == 1) fellowship @elseif($appointment->type == 2) publishwithus @else
                                        - @endif
                                    " name="name" class="form-control" readonly  required>
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {

        });
    </script>
@endsection
