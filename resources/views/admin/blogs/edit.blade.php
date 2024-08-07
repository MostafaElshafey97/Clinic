@extends('layouts.admin')

@section('styles')

@endsection
@section('content')
    <div class="pt-3">
        <div class="row">
            <div class="col-12">
                <div class="form-layout">

                    <div class="card mt-3">
                        <div class="card-header">
                           <div class="card-title">

                               Edit {{$blog->name}}

                           </div>
                        </div>
                        <div class="card-body">
                            <div id="units_table" class="table">
                                <form action="{{route("admin.blogs.update",$blog->uuid)}}" id="blogUpdate" class="form"
                                      autocomplete="off" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">
                                                    Name
                                                </label>
                                                <input type="text" name="name" value="{{$blog->name}}"
                                                       class="form-control" id="" required>
                                                @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">
                                                    Title
                                                </label>
                                                <input type="text" name="title"  value="{{$blog->title}}"
                                                       class="form-control" id="" required>
                                                @error('title')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">
                                                    Type
                                                </label>
                                                <select name="type" required id=""  class="form-control">
                                                    <option value="" selected disabled>Choose Type </option>
                                                    <option value="0" @if($blog->type == 0) selected @endif>Doctors</option>
                                                    <option value="1" @if($blog->type == 1) selected @endif>Patient</option>
                                                </select>

                                                @error('type')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">
                                                    Image
                                                </label>
                                                <input type="file"  name="image" class="form-control" id="">
                                                @error('image')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">
                                                    Description
                                                </label>
                                                <textarea name="description" required class="form-control " id="" cols="30" rows="10">
                                                    {{  $blog->description }}
                                                </textarea>
                                                @error('description')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 m-3">
                                                <img src="{{secure_asset('assets/img/'.$blog->image)}}" style="width: 400px"  alt="">
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-success btn-sm">Update <i class="fa fa-save"></i> </button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('#blogUpdate').validate();
        $('#blogUpdate').submit(function (e) {
            var validation = $("#blogUpdate").valid();
            if (!validation) {
                e.preventDefault();
                return;
            }
            $("#loader_new").show();

        });
    </script>
@endsection
