
@extends('adminlte::page')

@section('css')
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"> --}}
    {{-- Responive datatable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.5/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">

@stop

@section('content_header')

    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Users</h3>
            <div class="box-tools pull-right">
            <!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example -->
            <span class="label label-primary">Label</span>
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
        $(function() {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                bAutoWidth: false,
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
                             return `<a href="users/${data['id']}" class="yourClass">Edit</a>`;
                          }
            } ]
            });
        });
        </script>
@stop
