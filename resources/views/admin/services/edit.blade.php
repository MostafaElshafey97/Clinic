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

                                Edit {{$service->name}}

                            </div>
                        </div>
                        <div class="card-body">
                            <div id="units_table" class="table">
                                <form action="{{route("admin.services.update",$service->uuid)}}" id="serviceUpdate" class="form"
                                      autocomplete="off" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">
                                                    Name
                                                </label>
                                                <input type="text" name="name" value="{{$service->name}}"
                                                       class="form-control" id="" required>
                                                @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                                <label for="">
                                                    Name Ar
                                                </label>
                                                <input type="text" name="name_ar" value="{{$service->name_ar}}"
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
                                                <input type="text" name="title" value="{{$service->title}}"
                                                       class="form-control" id="" required>
                                                @error('title')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                                <label for="">
                                                    Title Ar
                                                </label>
                                                <input type="text" name="title_ar" value="{{$service->title_ar}}"
                                                       class="form-control" id="" required>
                                                @error('title_ar')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">
                                                    Description
                                                </label>
                                                <textarea name="description"  class="form-control" id="" cols="30" rows="10">{{$service->description }}</textarea>
                                                @error('description')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                                <label for="">
                                                    Description Ar
                                                </label>
                                                <textarea name="description_ar"  class="form-control" id="" cols="30" rows="10">{{$service->description_ar }}</textarea>
                                                @error('description_ar')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">
                                                     Content
                                                </label>
                                                <textarea name="service_content" required class="form-control textarea-editor3" id="" cols="30" rows="10">{!! $service->content !!}</textarea>
                                                @error('service_content')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                                <label for="">
                                                    Content Ar
                                               </label>
                                               <textarea name="service_content_ar" required class="form-control textarea-editor3" id="" cols="30" rows="10">{!! $service->service_content_ar !!}</textarea>
                                               @error('service_content_ar')
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
                                            <img src="{{secure_asset('assets/img/'.$service->image)}}" style="width: 400px"  alt="">
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
        $('#serviceUpdate').validate();
        $('#serviceUpdate').submit(function (e) {
            var validation = $("#serviceUpdate").valid();
            if (!validation) {
                e.preventDefault();
                return;
            }
            $("#loader_new").show();

        });
    </script>
@endsection
