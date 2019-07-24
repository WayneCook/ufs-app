
@extends('adminlte::page')



@section('content_header')
    <h1>Create Role</h1>
@stop

@section('content')

<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">Role Information</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

    <form method="post" action="{{ action('Admin\RolesController@store') }}">

        {{ csrf_field() }}

        <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="name">name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            @if ($errors->has('name'))
            <span class="help-block">
                <small>{{ $errors->first('name') }}</small>
            </span>
            @endif
        </div>

        <div class="form-group {{ $errors->has('permission') ? 'has-error' : '' }}">
                <label>Permissions</label>
                <div>
                    @foreach ($permissions as $permission)
                        <label class="checkbox-inline">
                            <input name="permission[]" value="{{ $permission->id }}" type="checkbox">{{ $permission->name }}
                        </label>
                    @endforeach
                    @if ($errors->has('permission'))
                        <span class="help-block">
                            <small>{{ $errors->first('permission') }}</small>
                        </span>
                    @endif
                </div>
            </div>



        <!-- /.box-body -->
    </div>
    <div class="box-footer">

        <a href="{{ url('/admin/roles') }}" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-primary pull-right">Create</button>
    </form>
    </div>

</div>

@stop

@section('js')

@stop
