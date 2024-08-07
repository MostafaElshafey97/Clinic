@extends('layouts.admin')

@section('styles')
<style>

    .note-editing-area {
            height: 400px !important;
        }
    </style>
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

                               Edit {{$story->name}}

                           </div>
                        </div>
                        <div class="card-body">
                            <div id="units_table" class="table">
                                <form action="{{route("admin.stories.update",$story->uuid)}}" id="storyUpdate" class="form"
                                      autocomplete="off" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">
                                                    Name
                                                </label>
                                                <input type="text" name="name" value="{{$story->name}}"
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
                                                <input type="file"  name="image[]" multiple class="form-control" id="">
                                                @error('image')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                                <small class="text-danger">Please if you Choose a new Image, the previous image will be  If you  want to keep them add them Again</small>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">
                                                    Content
                                                </label>
                                                <textarea name="contents" required class="form-control textarea-editor" id="" cols="30" rows="10">
                                                    {!! $story->content !!}
                                                </textarea>
                                                @error('content')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 m-3">
                                         @php
                                         $images = explode(',',$story->image);
                                @endphp
                                        @foreach($images as $image)
                                            <img src="{{secure_asset('assets/img/'.$image)}}" width="250" height="250" alt="">
                                    @endforeach
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
