
@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/custom-datatable.css') }}">
@stop

@section('content_header')
    <h1>Edit User</h1>
@stop

@section('content')
<div class='row'>
    <div class='col-md-6 col-sm-6 col-xs-12'>
        <div class="box box-warning">
            <div class="box-header with-border custom-tools">
                <h3 class="box-title">User Information</h3>
                <div>
                    <form role="form" method="POST" action="{{ action('Admin\UsersController@destroy', ['id' => $user->id]) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <div class="btn-group">
                            <button type="submit" class="btn btn-danger btn-xs pull-right">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="POST" action="{{ action('Admin\UsersController@update', ['id' => $user->id]) }}">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                <!-- name input -->
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label>Name</label>
                    <input type="text" name='name' class="form-control" value="{{ $user['name'] }}" placeholder="Enter ...">
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <small>{{ $errors->first('name') }}</small>
                        </span>
                    @endif
                </div>
                <!-- /.name-input -->

                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label>Email</label>
                <input type="text" name='email' class="form-control" value="{{ $user['email'] }}" placeholder="Enter ...">
                @if ($errors->has('email'))
                <span class="help-block">
                    <small>{{ $errors->first('email') }}</small>
                </span>
                @endif
                </div>

                <div class="form-group {{ $errors->has('role') ? 'has-error' : '' }}">
                    <label>Roles</label>
                    <div>
                        @foreach ($roles as $role)
                            <label class="checkbox-inline">
                                <input name="role[]" value="{{ $role->id }}" type="checkbox" {{  $user->hasRole($role->slug) ? 'checked' : '' }}>{{ $role->name }}
                            </label>
                        @endforeach
                        @if ($errors->has('role'))
                            <span class="help-block">
                                <small>{{ $errors->first('role') }}</small>
                            </span>
                        @endif
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
                <div class="box-footer">
                    <a href="{{ url()->previous() }}" class="btn btn-default">Cancel</a>
                    <button type="submit" class="btn btn-primary pull-right">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@stop

@section('js')

@stop
