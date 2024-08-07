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

                                Create New Researcher

                           </div>
                        </div>
                        <div class="card-body">
                            <div id="units_table" class="table">
                                <form action="{{route("admin.researches.store")}}" id="researcherSuccess" class="form"
                                      autocomplete="off" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">
                                                    title
                                                </label>
                                                <input type="text" name="title" value="{{ old('title') }}"
                                                       class="form-control" id="" required>
                                                @error('title')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">
                                                    Author
                                                </label>
                                                <input type="text" name="author" value="{{ old('author') }}"
                                                       class="form-control" id="" required>
                                                @error('author')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">
                                                    Description
                                                </label>
                                                <textarea name="description" required class="form-control" id="" cols="30" rows="10"></textarea>
                                                @error('description')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">
                                                   Source
                                                </label>
                                                <input type="file" required name="source" class="form-control" id="">
                                                @error('source')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div> -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">
                                                Source
                                                </label>
                                                <input type="text" name="link" value="{{ old('link') }}"
                                                       class="form-control" id="" required>
                                                @error('link')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-sm">Save <i class="fa fa-save"></i> </button>
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
        $('#researcherSuccess').validate();
        $('#researcherSuccess').submit(function (e) {
            var validation = $("#researcherSuccess").valid();
            if (!validation) {
                e.preventDefault();
                return;
            }
            $("#loader_new").show();

        });
    </script>
@endsection
