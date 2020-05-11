@extends('layouts.backend.main')

@section('title', 'TK Pazin CMS | Izmjena Albuma')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Albumi
        <small> Izmjena albuma</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Nadzorna ploča</a></li>
        <li><i class="fa fa-image"></i> <a href="{{ route('albumi.index') }}"> Albumi</a></li>
        <li class="active">Izmjena albuma</li>
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
                    'method' => 'PUT',
                    'route' => ['albumi.update', $album->id],
                    'files' => TRUE,
                    'id' => 'post-form'
                ]) !!}

                @include('backend.albumi.form')
                {!! Form::submit('Izmjeni album', ['class' => 'btn btn-primary']) !!}
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
