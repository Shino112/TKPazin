@extends('layouts.backend.main')

@section('title', 'TK Pazin CMS | Dodaj novi turnir')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pojedinačni turniri
        <small> Dodaj novi turnir</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Nadzorna ploča</a></li>
        <li><i class="fa fa-stack-overflow"></i> <a href="{{ route('turniri.index') }}"> Turniri</a></li>
        <li class="active">Dodaj novi turnir</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              
              <!-- /.box-header -->
              <div class="box-body ">
                {!! Form::model($turnir, [
                    'method' => 'POST',
                    'route' => 'turniri.store',
                    'files' => TRUE
                ]) !!}

                @include('backend.turniri.form')
                {!! Form::submit('Izradi novi turnir', ['class' => 'btn btn-primary']) !!}
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

@include('backend.turniri.script')
