@extends('adminlte::page')

@section('css')
    <!-- Responive datatable -->
    <link rel="stylesheet" href="{{ asset('css/custom-datatable.css') }}">
@stop

@section('content_header')
    <h1>
        Permissions
    </h1>
@stop

@section('content')

    <div class="row">
            <div class="col-xs-12">
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Active Permissions</h3>

                  <div class="box-tools">

                    <div class="dropdown">
                        <button class="btn btn-sm btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Actions
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                            <li><a href="{{ action('Admin\PermissionsController@create') }}">Create new permission</a></li>

                        </ul>
                    </div>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tbody><tr>
                      <th>ID</th>
                      <th>Slug</th>
                      <th>Name</th>
                      <th>Actions</th>
                    </tr>
                    @foreach ($permissions as $permission)
                        <tr>
                            <td>{{ $permission->id }}</td>
                            <td>{{ $permission->slug }}</td>
                            <td>{{ $permission->name }}</td>
                            <td>
                                <a class="btn btn-xs btn-default" href="{{ action('Admin\PermissionsController@edit', ['id' => $permission->id]) }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach

                  </tbody></table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>

  <!-- /.box -->

  @stop

@section('js')

@stop
