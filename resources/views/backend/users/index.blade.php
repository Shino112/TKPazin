@extends('layouts.backend.main')

@section('title', 'TK Pazin CMS | Users index')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users
        <small> Prikaz svih usera</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Nadzorna ploča</a></li>
        <li class="active"><i class="fa fa-user"></i> Users</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header clearfix">
                <div class="pull-left">
                  <a href="{{ route('users.create') }}" class="btn btn-success">Dodaj novog usera</a>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body ">
                    @include('backend.users.message')
                    @include('backend.users.table')
              </div>
              <!-- /.box-body -->
              <div class="box-footer clearfix">
                  <div class="pull-left">
                    {{ $users->links() }}
                  </div>
                  <div class="pull-right">
                      <small>{{ $usersCount }} novosti</small>
                  </div>
                  
              </div>
            </div>
            <!-- /.box -->
          </div>
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
