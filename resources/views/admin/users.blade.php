
@extends('adminlte::page')

@section('css')
    <!-- Responive datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.5/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom-datatable.css') }}">
@stop

@section('content_header')
    <h1>
        Users
        <small>Current registered users</small>
    </h1>
@stop

@section('content')

    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-person"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Users</span>
            <span class="info-box-number">{{ $admin['totals']->users }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>

    <div class="box box-warning">
        <div class="box-header with-border custom-tools">
            <h3 class="box-title">User Management</h3>
            <div>
                <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>

            {{-- <span class="label label-primary">datatable</span> --}}
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
    <div class="box-body">
        <table class="table table-striped nowrap" id="users-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Updated At</th>
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




// $( document ).ready(function() {
//     console.log( "ready!" );
// });

        $(function() {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                bAutoWidth: false,
                dom: '<"top"f>rt<"bottom"lip><"clear">',
                ajax: '{!! route('datatables.data') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'updated_at', name: 'updated_at' },
                    { data: null, orderable: false, searchable: false }
                ],
                "columnDefs": [ {
                "targets": -1,
                "data": null,
                // "defaultContent": "<button class='btn btn-xs btn-primary'>Edit</button>"
                "render": function ( data, type, row ) {
                            //  return `<a href="users/${data['id']}" class="yourClass">Edit</a>`;
                             return '<a href="users/"' + data['id'] + ' class="yourClass">Edit</a>';
                          }
                }],
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
