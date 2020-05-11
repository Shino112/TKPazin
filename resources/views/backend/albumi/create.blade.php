@extends('layouts.backend.main')

@section('title', 'TK Pazin CMS | Dodaj novi album')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Albumi
        <small> Dodaj novi album</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Nadzorna ploča</a></li>
        <li><i class="fa fa-image"></i> <a href="{{ route('albumi.index') }}"> Albumi</a></li>
        <li class="active">Dodaj novi album</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              
              <!-- /.box-header -->
              <div class="box-body ">
                {!! Form::model($album, [
                    'method' => 'POST',
                    'route' => 'albumi.store',
                    'files' => TRUE
                ]) !!}

                @include('backend.albumi.form')
                {!! Form::submit('Izradi novi album', ['class' => 'btn btn-primary']) !!}
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

@include('backend.albumi.script')
