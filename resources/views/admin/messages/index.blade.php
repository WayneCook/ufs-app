@extends('adminlte::page')

@section('css')
    <!-- Responive datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.5/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom-datatable.css') }}">
@stop

@section('content_header')
    <h1>
        Messages
        <small>Generated through contact form</small>
    </h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-4 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-email"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Messages</span>
                    <span class="info-box-number">{{ ($admin['total_read_messages'] + $admin['total_unread_messages']) }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="ion ion-ios-email"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Unread Messages</span>
                        <span class="info-box-number">{{ $admin['total_unread_messages'] }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-4 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="ion ion-ios-email"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Read Messages</span>
                            <span class="info-box-number">{{ $admin['total_read_messages'] }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
    </div>

    <div class="box box-warning">
        <div class="box-header with-border custom-tools">
            <h3 class="box-title">Messages</h3>
            <div>
                <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="{{ action('Admin\MessagesController@markAllRead') }}">Mark all as read</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->

        <div class="box-body">
            <table class="table table-striped nowrap" id="messages-table">
                <thead>
                    <tr>
                        <th>Status</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Sent On</th>
                        <th>Actions</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
  <!-- /.box -->

  @stop

@section('js')
<script src='https://cdn.datatables.net/rowreorder/1.2.5/js/dataTables.rowReorder.min.js'></script>
<script src='https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js'></script>

<script>

$(function() {
    $('#messages-table').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        bAutoWidth: false,
        dom: '<"top"f>rt<"bottom"lip><"clear">',
        ajax: '{!! route('datatables.getMessageData') !!}',
        columns: [
            { data: 'read', name: 'read' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'phone', name: 'phone' },
            { data: 'created_at', name: 'created_at' },
            { data: null, orderable: false, searchable: false }
        ],
        "columnDefs": [ {
        "targets": -1,
        "data": null,
        "render": function ( data, type, row ) {
                        return '<a href=/admin/messages/' + data['id'] + ' class="btn btn-xs btn-primary">View</a>';
                    }
        },
        {
        "targets": 0,
        "data": null,
        "render": function ( data, type, row ) {

            if(data){
                return '<span class="label label-success">Read</span>';

            }
                return '<span class="label label-danger">Unread</span>';
            }
        }

    ],
        language: {
            search: '', searchPlaceholder: "Search...",
            lengthMenu: "Display _MENU_ records per page",
            zeroRecords: "Nothing found - sorry",
            info: "Showing page _PAGE_ of _PAGES_",
            infoEmpty: "No records available",
            infoFiltered: "(filtered from _MAX_ total records)"
        }
    });
});
</script>
@stop
