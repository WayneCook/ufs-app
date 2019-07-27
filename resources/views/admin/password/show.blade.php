
@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/custom-datatable.css') }}">
@stop



@section('content_header')
    <h1>Change Password</h1>
@stop

@section('content')
<div class='row'>
        <div class='col-md-3 col-sm-6 col-xs-12'>
<div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">New Password</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
    <form role="form" method="get" action="{{ action('Admin\ChangePasswordController@store') }}">
            {{ csrf_field() }}
          <div class="box-body">

            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
              <label for="exampleInputPassword1">New Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter new password...">
              @if ($errors->has('password'))
              <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
            </div>

            <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                    <label for="exampleInputPassword1">Confirm New Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Enter password again...">
                    @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
                </div>

          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <a class="btn btn-default" href="{{ url()->previous() }}">Back</a>
            <button type="submit" class="btn btn-primary pull-right">Submit</button>
          </div>
        </form>
      </div>
    </div>
</div>


@stop

@section('js')

@stop
