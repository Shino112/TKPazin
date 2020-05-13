@extends('layouts.backend.main')

@section('title', 'TK Pazin CMS | Izmjena Piramide')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Piramide
        <small> Izmjena piramide</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Nadzorna ploča</a></li>
        <li><i class="fa fa-stack-overflow"></i> <a href="{{ route('piramida.index') }}"> Piramide</a></li>
        <li class="active">Izmjena piramide</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              
              <!-- /.box-header -->
              <div class="box-body ">
                {!! Form::model($piramida, [
                    'method' => 'PUT',
                    'route' => ['piramida.update', $piramida->id],
                    'files' => TRUE,
                    'id' => 'post-form'
                ]) !!}

                @include('backend.piramida.form')
                {!! Form::submit('Izmjeni piramidu', ['class' => 'btn btn-primary']) !!}
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

@include('backend.piramida.script')
