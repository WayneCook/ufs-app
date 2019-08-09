@extends('adminlte::page')

@section('css')
    <!-- Responive datatable -->
    <link rel="stylesheet" href="{{ asset('css/custom-datatable.css') }}">
@stop

@section('content_header')
    <h1>
        Message

    </h1>
@stop

@section('content')

<div class="box box-warning">
        <div class="box-header with-border custom-tools">
          <h3 class="box-title">Information</h3>
          <div>
                <form role="form" method="POST" action="{{ action('Admin\MessagesController@destroy', ['id' => $message->id]) }}">
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
          <strong><i class="fa fa-user margin-r-5"></i> Name</strong>

          <p class="text-muted">
            {{ $message->name }}
          </p>

          <hr>
          <strong><i class="fa fa-envelope margin-r-5"></i> Email</strong>

          <p class="text-muted">
            {{ $message->email }}
          </p>

          <hr>

          <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

          <p class="text-muted">{{ $message->location }}</p>

          <hr>

          <strong><i class="fa fa-phone margin-r-5"></i> Phone</strong>

          <p class="text-muted">{{ $message->phone }}</p>

          <hr>


          <strong><i class="fa fa-file-text-o margin-r-5"></i> Wrote</strong>

         <p class="text-muted">{{ $message->body }}</p>

         <hr>
         <strong><i class="fa fa-calendar margin-r-5"></i> Sent on</strong>

         <p class="text-muted">
           {{ $message->sentOn() }}
         </p>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
                <a href="{{ url()->previous() }}" class="btn btn-default">back</a>
                {{-- <button type="submit" class="btn btn-primary pull-right">Save</button> --}}
            </div>
      </div>

@endsection
