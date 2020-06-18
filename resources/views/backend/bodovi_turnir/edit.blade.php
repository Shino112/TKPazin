@extends('layouts.backend.main')

@section('title', 'TK Pazin CMS | Izmjena Igrača')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bodovi igrača na turniru
        <small> Izmjena bodova igrača na turniru</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Nadzorna ploča</a></li>
        <li><i class="fa fa-stack-overflow"></i> <a href="{{ route('turniri.index') }}"> Turniri</a></li>
        <li><a href="{{ route('turniri.show', $id_turnira) }}"> {{ $turnir->naziv }} | {{ $turnir->sezona_pojedinacni_turnir->godina }}</a></li>
        <li class="active">Izmjeni bodove igraču na turniru</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              
              <!-- /.box-header -->
              <div class="box-body ">
                {!! Form::model($nastup_turnir, [
                    'method' => 'PUT',
                    'route' => ['bodovi_update.turnir', $nastup_turnir->turnir_pojedinacni_id, $nastup_turnir->igrac_id],
                    'files' => TRUE,
                    'id' => 'post-form'
                ]) !!}

                @include('backend.bodovi_turnir.form_jedan')
                {!! Form::submit('Izmjeni bodove turnira igraču', ['class' => 'btn btn-primary']) !!}
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
