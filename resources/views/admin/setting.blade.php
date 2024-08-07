@extends('layouts.admin')

@section('styles')

@endsection
@section('content')
    <div class="pt-3 pb-2">
        <div class=" card">
            <div class="card-header">
              Public Data
            </div>
            <div class="card-body " >
                <form action="{{route('admin.setting.store')}}" method="post" id="public_data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" value="{{$public_data->email}}" required class="form-control" id="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">phone</label>
                            <input type="text" name="phone"  value="{{$public_data->phone}}"  required class="form-control" id="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">WhatsApp Number </label>
                            <input type="text" name="whatsapp" value="{{$public_data->whatsapp}}"  required class="form-control" id="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Link Facebook</label>
                            <input type="text" name="facebook" value="{{$public_data->facebook}}"  required class="form-control" id="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Link Linkedin</label>
                            <input type="text" name="linkedin"  value="{{$public_data->linkedin}}"  required class="form-control" id="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Link instagram</label>
                            <input type="text" name="instagram"  value="{{$public_data->instagram}}"   required class="form-control" id="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Link twitter (X) </label>
                            <input type="text" name="twitter"  value="{{$public_data->twitter}}"  required class="form-control" id="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Booking Status</label>
                            <select name="booking_status" class="form-control" required>
                                <option value="active" {{ $public_data->booking_status == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ $public_data->booking_status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                        
                    </div>
                    <button type="submit" class="btn btn-success btn-sm">update</button>
                </form>
            </div>
        </div>
    </div>
    <div class="pt-3 pb-2">
        <div class=" card">
            <div class="card-header">
              Update Account Admin
            </div>
            <div class="card-body " >
                <form action="{{route('admin.account.update')}}" method="post" id="admin_data">
                    @csrf
                    <div class="row">

                        <div class="col-md-6 form-group">
                            <label for="">Name</label>
                            <input type="text" name="name"  value="{{$admin->name}}"  required class="form-control" id="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" value="{{$admin->email}}" required class="form-control" id="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Current Password</label>
                            <input type="password" name="current_password" required class="form-control" id="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Password</label>
                            <input type="password" name="password"  required class="form-control" id="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Password</label>
                            <input type="password" name="password_confirmation"  required class="form-control" id="">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-sm">update</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('#public_data').validate();
        $('#public_data').submit(function (e) {
            var validation = $("#public_data").valid();
            if (!validation) {
                e.preventDefault();
                return;
            }
            $("#loader_new").show();

        });

        $('#admin_data').validate();
        $('#admin_data').submit(function (e) {
            var validation = $("#admin_data").valid();
            if (!validation) {
                e.preventDefault();
                return;
            }
            $("#loader_new").show();

        });
    </script>
@endsection
