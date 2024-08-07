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

                               Edit {{$journal->title}}

                           </div>
                        </div>
                        <div class="card-body">
                            <div id="units_table" class="table">
                                <form action="{{route("admin.journals.update",$journal->uuid)}}" id="journalUpdate" class="form"
                                      autocomplete="off" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">
                                                    Title
                                                </label>
                                                <input type="text" name="title" value="{{$journal->title}}"
                                                       class="form-control" id="" required>
                                                @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">
                                                    Author
                                                </label>
                                                <input type="text" name="author" value="{{$journal->author}}"
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
                                                <textarea name="description" required class="form-control " id="" cols="30" rows="10">
                                                    {{ $journal->description}}
                                                </textarea>
                                                @error('description')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
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
        $('#journalUpdate').validate();
        $('#journalUpdate').submit(function (e) {
            var validation = $("#journalUpdate").valid();
            if (!validation) {
                e.preventDefault();
                return;
            }
            $("#loader_new").show();

        });
    </script>
@endsection
