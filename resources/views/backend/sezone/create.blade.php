@extends('layouts.backend.main')

@section('title', 'TK Pazin CMS | Dodaj novu sezonu')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sezone
        <small> Dodaj novu sezonu</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Nadzorna ploča</a></li>
        <li><i class="fa fa-calendar"></i> <a href="{{ route('sezone.index') }}"> Sezone</a></li>
        <li class="active">Dodaj novu sezonu</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              
              <!-- /.box-header -->
              <div class="box-body ">
                {!! Form::model($sezona, [
                    'method' => 'POST',
                    'route' => 'sezone.store',
                    'files' => TRUE
                ]) !!}

                @include('backend.sezone.form')
                {!! Form::submit('Izradi novu sezonu', ['class' => 'btn btn-primary']) !!}
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

@include('backend.sezone.script')
