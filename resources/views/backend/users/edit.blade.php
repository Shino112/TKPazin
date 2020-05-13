@extends('layouts.backend.main')

@section('title', 'TK Pazin CMS | Izmjena usera')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users
        <small> Izmjena usera</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Nadzorna ploča</a></li>
        <li><i class="fa fa-user"></i> <a href="{{ route('users.index') }}"> Users</a></li>
        <li class="active">Izmjena usera</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              
              <!-- /.box-header -->
              <div class="box-body ">
                {!! Form::model($user, [
                    'method' => 'PUT',
                    'route' => ['users.update', $user->id],
                    'files' => TRUE,
                    'id' => 'post-form'
                ]) !!}

                @include('backend.users.form')
                {!! Form::submit('Izmjeni usera', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}      
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

@include('backend.users.script')
