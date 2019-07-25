
@extends('adminlte::page')

@section('css')
    <!-- Responive datatable -->

    <link rel="stylesheet" href="{{ asset('css/custom-datatable.css') }}">
@stop



@section('content_header')
    <h1>Edit Permisson</h1>
@stop

@section('content')

<div class="box box-warning">
    <div class="box-header with-border custom-tools">
        <h3 class="box-title">Permission Information</h3>
        <div>
            <form role="form" method="POST" action="{{ action('Admin\PermissionsController@destroy', ['id' => $permission->id]) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <div class="btn-group">
                    <button type="submit" class="btn btn-danger btn-xs pull-right">Delete</button>
                    {{-- <input value="Delete User" type="submit" class="btn btn-danger btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> --}}
                </div>
            </form>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

    <form method="post" action="{{ action('Admin\PermissionsController@update', ['id' => $permission->id]) }}">

        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="name">name</label>
            <input type="text" name="name" class="form-control" value="{{ $permission->name }}">
            @if ($errors->has('name'))
            <span class="help-block">
                <small>{{ $errors->first('name') }}</small>
            </span>
            @endif
        </div>

        {{-- <div class="form-group {{ $errors->has('permission') ? 'has-error' : '' }}">
                <label>Permissions</label>
                <div>
                    @foreach ($permissions as $permission)
                        <label class="checkbox-inline">
                            <input name="permission[]" value="{{ $permission->id }}" type="checkbox"  {{  $role->hasPermission($permission->slug) ? 'checked' : '' }}>{{ $permission->name }}
                        </label>
                    @endforeach
                    @if ($errors->has('permission'))
                        <span class="help-block">
                            <small>{{ $errors->first('permission') }}</small>
                        </span>
                    @endif
                </div>
            </div> --}}



        <!-- /.box-body -->
    </div>
    <div class="box-footer">

        <a href="{{ url('/admin/permissions') }}" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-primary pull-right">Save</button>
    </form>
    </div>

</div>

@stop

@section('js')

@stop
