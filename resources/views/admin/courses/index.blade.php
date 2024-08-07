@extends('layouts.admin')

@section('styles')

    <style>
        /* Ensure that the demo table scrolls */
        th, td {
            white-space: nowrap;
        }

        div.dataTables_wrapper {
            /*width: 800px;*/
            margin: 0 auto;
        }

        /*div.container {*/
        /*    width: 80%;*/
        /*}*/

        div.ColVis {
            float: right !important;
        }
    </style>
    <style>
        /*profile*/
        .profile-sidebar {
            float: left;
            width: 300px;
            margin-right: 20px
        }

        /*.profile-content {*/
        /*    overflow: hidden*/
        /*}*/

        .profile-sidebar-portlet {
            padding: 30px 0 0 !important
        }

        .profile-userpic img {
            float: none;
            margin: 0 auto;
            width: 30%;
            height: 30%;
            -webkit-border-radius: 50% !important;
            -moz-border-radius: 50% !important;
            border-radius: 50% !important
        }

        .profile-usertitle {
            text-align: center;
            margin-top: 20px
        }

        .profile-usertitle-name {
            color: #5a7391;
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 7px
        }

        .profile-usertitle-job {
            text-transform: uppercase;
            color: #5b9bd1;
            font-size: 13px;
            font-weight: 800;
            margin-bottom: 7px
        }

        .data_entry {
            border: 1px solid #CCC;
            box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
        }

    </style>
@endsection
@section('content')
    <div class="pt-3">
        <div class=" card">
           <div class="m-3">
               <a href="{{route('admin.courses.create')}}" class="btn btn-success btn-sm">Add Course <i class="fa fa-plus-circle"></i></a>
           </div>
            <div class="card-body " >
                <div class="table-responsive">
                    <table id="example" class="table data-table table-hover table-bordered table-h text-center">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>What you will learn</th>
                            <th>Course content</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $course)
                            <tr>
                                <td>{{$course->name}}</td>
                                <td>
                                    {{ \Str::limit($course->description,30)  }}...
                                </td>
                                <td>{!! \Str::limit($course->learn,30) !!}...</td>
                                <td>{!! \Str::limit($course->course_content,30) !!}...</td>

                                <td>
                                    <img src="{{secure_asset('assets/img/'.$course->image)}}" width="50" height="50" alt="">
                                </td>
                                <td>
                                    <a href="{{route('admin.courses.edit',$course->uuid)}}" class="btn btn-primary btn-sm ">Edit <i class="fa fa-edit"></i> </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            var table = $('#example').DataTable({
                lengthMenu: [[10, 50, 100, -1], [10, 50, 100, 'All']],

                "pageLength": 10,
                pagingType: 'full_numbers',
                processing: true,
                serverSide: false,
                searching: true,

                // scrollY: '300px',
                // sScrollY: "200px",

                // scrollX: true,
                // "autoWidth": false,

                colReorder: true,

                columnDefs: [{
                    targets: "hiddenCols",
                    visible: false,
                    // targets: '_all',
                    render: function (data, type, row) {
                        if (type === 'PDF') {
                            return data.split(' ').reverse().join(' ');
                        }
                        return data;
                    }
                }],

                buttons: [
                    {extend: 'colvis'},
                    // {extend: 'copyHtml5', footer: true},
                    {
                        extend: 'excelHtml5', exportOptions: {
                            columns: [':visible']
                        }, footer: true
                    },
                    // {extend: 'csvHtml5', footer: true},
                    {extend: 'pdfHtml5', footer: true},
                    {
                        extend: 'print', exportOptions: {
                            columns: [':visible']
                        }, footer: true
                    },
                    'refresh',
                    // 'pageLength',
                ],
                select: true,
                deferRender: true,
                scrollCollapse: true,
                scroller: true,
                // scrollY: 300,

                fixedHeader: false,
                fixedColumns: {
                    leftColumns: 2
                },
            });
        });
    </script>
@endsection
