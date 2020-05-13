@extends('layouts.backend.main')

@section('title', 'TK Pazin CMS | Izmjena Turnira')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pojedinačni turniri
        <small> Izmjena turnira</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Nadzorna ploča</a></li>
        <li><i class="fa fa-stack-overflow"></i> <a href="{{ route('turniri.index') }}"> Turniri</a></li>
        <li class="active">Izmjena turnira</li>
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
                    'method' => 'PUT',
                    'route' => ['turniri.update', $turnir->id],
                    'files' => TRUE,
                    'id' => 'post-form'
                ]) !!}

                @include('backend.turniri.form')
                {!! Form::submit('Izmjeni turnir', ['class' => 'btn btn-primary']) !!}
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
