@extends('layouts.backend.main')

@section('title', 'TK Pazin CMS | Izmjena Igrača')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Igrači
        <small> Izmjena igrača</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Nadzorna ploča</a></li>
        <li><i class="fa fa-users"></i> <a href="{{ route('igraci.index') }}"> Igrači</a></li>
        <li class="active">Izmjena igrača</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              
              <!-- /.box-header -->
              <div class="box-body ">
                {!! Form::model($igrac, [
                    'method' => 'PUT',
                    'route' => ['igraci.update', $igrac->id],
                    'files' => TRUE,
                    'id' => 'post-form'
                ]) !!}

                @include('backend.igraci.form')
                {!! Form::submit('Izmjeni podatke o igraču', ['class' => 'btn btn-primary']) !!}
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

@include('backend.igraci.script')
