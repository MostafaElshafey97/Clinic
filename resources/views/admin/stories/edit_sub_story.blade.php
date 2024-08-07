@extends('layouts.admin')

@section('styles')

@endsection
@section('content')
    <div class="pt-3">
        <div class="row">
            <div class="col-12">
                <div class="form-layout">


                    {{-- units per purchase request --}}
                    <div class="card mt-3">
                        <div class="card-header">
                            <div class="card-title">

                                Edit {{$sub_story->name}}

                            </div>
                        </div>
                        <div class="card-body">
                            <div id="units_table" class="table">
                                <form action="{{route("admin.stories.update_sub_story",$sub_story->uuid)}}" id="storyUpdate" class="form"
                                      autocomplete="off" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">
                                                    Name
                                                </label>
                                                <input type="text" name="name" value="{{$sub_story->name}}"
                                                       class="form-control" id="" required>
                                                @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">
                                                    Image Story
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
                                                <textarea name="description" required class="form-control textarea-editor" id="" cols="30" rows="10">
                                                    {{$sub_story->description}}
                                                </textarea>
                                                @error('description')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 m-3">
                                            <img src="{{secure_asset('assets/img/'.$sub_story->image)}}" style="width: 400px"  alt="">
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
        $('#storyUpdate').validate();
        $('#storyUpdate').submit(function (e) {
            var validation = $("#storyUpdate").valid();
            if (!validation) {
                e.preventDefault();
                return;
            }
            $("#loader_new").show();

        });
    </script>
@endsection
