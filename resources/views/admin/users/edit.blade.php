
@extends('adminlte::page')



@section('content_header')
    <h1>Edit User</h1>
@stop

@section('content')


<div class="box box-warning">
    <form role="form" method="POST" action="/admin/users/{{ $user->id }}">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="box-header with-border">
          <h3 class="box-title">User Information</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <!-- text input -->
            <div class="form-group">
              <label>Name</label>
            <input type="text" name='name' class="form-control" value="{{ $user['name'] }}" placeholder="Enter ...">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="text" name='email' class="form-control" value="{{ $user['email'] }}" placeholder="Enter ...">
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
                <a href="{{ url()->previous() }}" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-danger pull-right">Save</button>
            </div>
        </form>
    </div>




@stop

@section('js')

@stop
