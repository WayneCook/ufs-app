
@extends('adminlte::page')



@section('content_header')
    <h1>Create User</h1>
@stop

@section('content')


<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">User Information</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <form method="post" action="{{ action('Admin\UsersController@store') }}">

            {{ csrf_field() }}
            <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Full Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                @if ($errors->has('name'))
                <span class="help-block">
                    <small>{{ $errors->first('name') }}</small>
                </span>
                @endif
            </div>

            <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
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
                            <input name="role[]" value="{{ $role->id }}" type="checkbox">{{ $role->name }}
                        </label>
                    @endforeach
                    @if ($errors->has('role'))
                        <span class="help-block">
                            <small>{{ $errors->first('role') }}</small>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                @if ($errors->has('password'))
                <span class="help-block">
                    <small>{{ $errors->first('password') }}</small>
                </span>
                @endif
            </div>

            <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirm') }}">
                @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <small>{{ $errors->first('password_confirmation') }}</small>
                </span>
                @endif
            </div>

            <!-- /.box-body -->
            </div>
            <div class="box-footer">
            <a href="{{ url('/admin/users') }}" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-primary pull-right">Create</button>
        </form>
    </div>
</div>

@stop

@section('js')

@stop
