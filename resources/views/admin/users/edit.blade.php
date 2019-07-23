
@extends('adminlte::page')

@section('css')
    <!-- Responive datatable -->
    <link rel="stylesheet" href="{{ asset('css/custom-datatable.css') }}">
@stop



@section('content_header')
    <h1>Edit User</h1>
@stop

@section('content')

<div class="box box-warning">
        <div class="box-header with-border custom-tools">
            <h3 class="box-title">User Information</h3>
            <div>
                <form role="form" method="POST" action="{{ action('Admin\UsersController@destroy', ['id' => $user->id]) }}">
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


            <!-- select -->
            <div class="form-group">
            <label>Role</label>
            <select class="form-control" name="role">
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}" {{ ( $role->slug == $user->roles()->first()->slug) ? 'selected' : '' }}>{{ $role->name }}</option>
                    @endforeach

                </select>
            </div>

            <!-- /.box-body -->
        </div>
            <div class="box-footer">
                <a href="{{ url('/admin/users') }}" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-primary pull-right">Save</button>
            </div>
        </form>
    </div>

@stop

@section('js')

@stop
