@extends('adminlte::page')

@section('css')
    <!-- Responive datatable -->
    <link rel="stylesheet" href="{{ asset('css/custom-datatable.css') }}">
@stop

@section('content_header')
    <h1>
        Profile

    </h1>
@stop

@section('content')
<div class='row'>
    <div class='col-md-3 col-sm-6 col-xs-12'>
        <div class="box box-warning">
            <div class="box-body box-profile" col-6>
                <img class="profile-user-img img-responsive img-circle" src="{{ asset('storage/images/user-default.png') }}" alt="User profile picture">

                <h3 class="profile-username text-center">{{ auth()->user()->name }}</h3>

                <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                    <b>Current Roles</b>
                    <p class='text-muted pull-right'>
                        @foreach (auth()->user()->roles()->get() as $role)

                            @if ($loop->last)
                                {{ $role->name }}
                                @break
                            @endif

                            {{ $role->name }}
                            <span> &#8226; </span>
                        @endforeach
                    </p>

                </li>
                <li class="list-group-item">
                    <b>Email</b> <p class="pull-right text-muted">{{ auth()->user()->email }}</p>
                </li>
                <li class="list-group-item">
                    <b>Member Since</b> <p class="text-muted pull-right">{{ date_format( auth()->user()->created_at, "M-d Y") }}</p>
                </li>
                </ul>

            </div>
             <!-- /.box-body -->
             <div class="box-footer">
                <a href="{{ url()->previous() }}" class="btn btn-default">Back</a>
                <a href="{{ url('admin/users', ['id' => auth()->user()->id]) }}" class="btn btn-primary pull-right">Edit</a>
            </div>
         </div>
    </div>
</div>


@endsection
