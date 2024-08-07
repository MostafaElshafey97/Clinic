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

                                Edit {{$course->name}}

                            </div>
                        </div>
                        <div class="card-body">
                            <div id="units_table" class="table">
                                <form action="{{route("admin.courses.update",$course->uuid)}}" id="courseUpdate" class="form"
                                      autocomplete="off" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">
                                                    Name
                                                </label>
                                                <input type="text" name="name" value="{{$course->name}}"
                                                       class="form-control" id="" required>
                                                @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">
                                                    Description
                                                </label>
                                                <textarea name="description" required class="form-control " id="" cols="30" rows="10">{{$course->description }}</textarea>
                                                @error('description')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">
                                                    What you will learn
                                                </label>
                                                <textarea name="learn" required class="form-control textarea-editor2" id="" cols="30" rows="10">{!! $course->learn !!}</textarea>
                                                @error('learn')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">
                                                    Course Content
                                                </label>
                                                <textarea name="course_content" required class="form-control textarea-editor3" id="" cols="30" rows="10">{!! $course->course_content !!}</textarea>
                                                @error('course_content')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">
                                                    Link Video
                                                </label>
                                                <input type="text" name="link" value="{{ $course->link}}"
                                                       class="form-control" id="" required>
                                                @error('link')
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

                                        <div class="col-md-6 m-3">
                                            <img src="{{secure_asset('assets/img/'.$course->image)}}" style="width: 400px"  alt="">
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
        $('#courseUpdate').validate();
        $('#courseUpdate').submit(function (e) {
            var validation = $("#courseUpdate").valid();
            if (!validation) {
                e.preventDefault();
                return;
            }
            $("#loader_new").show();

        });
    </script>
@endsection
