@extends('layouts.backend.main')

@section('title', 'TK Pazin CMS | Dodaj novu novost')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Novosti
        <small> Dodaj novu novost</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Nadzorna ploča</a></li>
        <li><i class="fa fa-newspaper-o"></i> <a href="{{ route('novosti.index') }}"> Novosti</a></li>
        <li class="active">Dodaj novu novost</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              
              <!-- /.box-header -->
              <div class="box-body ">
                {!! Form::model($novost, [
                    'method' => 'POST',
                    'route' => 'novosti.store',
                    'files' => TRUE
                ]) !!}

                @include('backend.novosti.form')
                {!! Form::submit('Izradi novu novost', ['class' => 'btn btn-primary']) !!}
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

@include('backend.novosti.script')
