@extends('layouts.backend.main')

@section('title', 'TK Pazin CMS | Users show')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User profile
        <small> Prikaz podataka usera</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Nadzorna ploča</a></li>
        <li class="active"><i class="fa fa-user"></i> User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header clearfix">
                <div class="pull-left">
                  <a href="{{ route('users.edit', $user->id) }}" class="btn btn-xs btn-default"><i class="fa fa-edit"></i> Izmjeni podatke</a>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body ">
                    <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username">{{ $user->name }}</h3>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="{{ Auth::user()->gravatar }}" alt="{{ $user->name }}">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-text">INFO: </h5>
                    <span class="description-header">Admin</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-8 border-right">
                  <div class="description-block">
                    <h5 class="description-text">E-MAIL:</h5>
                    <span class="description-header">{{ $user->email }}</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
