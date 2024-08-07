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
            <div class="card-body " >
                <div class="table-responsive">
                    <table id="example" class="table data-table table-hover table-bordered table-h text-center">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Type</th>
                            <!-- <th>Message</th>
                            <th>Date</th>
                            <th>department</th> -->
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($appointments as $appointment)
                            <tr>
                                <td>{{$appointment->name}}</td>
                                <td>{{$appointment->email}}</td>
                                <td>{{$appointment->phone}}</td>
                                <td>
                                    @if($appointment->type == 0)
                                        contact
                                    @elseif($appointment->type == 1)
                                        fellowship
                                    @elseif($appointment->type == 2)
                                        publishwithus
                                    @else
                                        -
                                    @endif
                                </td>
                                <!-- <td>{{$appointment->message ? $appointment->message : '-'}}</td>
                                <td>{{$appointment->date ? $appointment->date : '-'}}</td>
                                <td>{{$appointment->department ? $appointment->department : '-'}}</td> -->
                                <td>
                                    <select name="" class="form-control status_data " id="">
                                        <option value="" disabled selected>Status</option>
                                        <option value="0" @if($appointment->status == 0) selected @endif >Pending</option>
                                        <option value="1" @if($appointment->status == 1) selected @endif >Approve</option>
                                        <option value="2" @if($appointment->status == 2) selected @endif >Reject</option>
                                    </select>
                                </td>
                                <input type="hidden" name="" value="{{$appointment->id}}" class="appointment">
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{route('admin.show_booking',$appointment->uuid)}}">view </a>
                                    <a class="btn btn-danger delete_booking btn-sm" href="{{route('admin.delete_booking',$appointment->uuid)}}">Delete </a>

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

            $('.delete_booking').click(function () {
                $('#loader_new').show();
            })

            $('.status_data').on('change',function (e) {
                var status = $(this).val();
            
                var id = $('.appointment').val();
                $.ajax({
                        url: "{{ route('booking.change_status') }}",
                        data: {
                            id: id,
                            status: status,
                        },
                        success: function (data) {
                           alert('Status Updated');
                        }
                    });
            })
        });
    </script>
@endsection
