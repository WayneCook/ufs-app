
@extends('adminlte::page')

@section('css')
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"> --}}
@stop

@section('content_header')
    <h1>messages</h1>
@stop
@section('content')


    <table class="table table-bordered" id="users-table">
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

@endsection

@section('js')
<script src='https://cdn.datatables.net/rowreorder/1.2.5/js/dataTables.rowReorder.min.js'></script>
<script src='https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js'></script>
<script>
        $(function() {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
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

                           return `<a href="sdfsdf${data['id']}" class="yourClass">Edit</a>`;

                    }
            } ]
            });
        });
        </script>
@stop
