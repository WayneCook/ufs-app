@extends('adminlte::page')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="ion ion-ios-email-outline"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Unread Messages</span>
                    <span class="info-box-number">{{ $admin['total_unread_messages'] }}</span>
                </div>
            <!-- /.info-box-content -->
            </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-ios-eye-outline"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Site Views</span>
                <span class="info-box-number">{{ $admin['total_home_page_views'] }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion ion-ios-people-outline"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Administrators</span>
                    <span class="info-box-number">{{ $admin['total_admin'] }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Members</span>
              <span class="info-box-number">{{ $admin['total_member'] }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
@endsection
