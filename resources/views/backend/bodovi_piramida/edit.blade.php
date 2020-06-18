@extends('layouts.backend.main')

@section('title', 'TK Pazin CMS | Izmjena Igrača')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bodovi igrača na piramidi
        <small> Izmjena bodova igrača na turniru</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Nadzorna ploča</a></li>
        <li><i class="fa fa-stack-overflow"></i> <a href="{{ route('piramida.index') }}"> Turniri</a></li>
        <li><a href="{{ route('piramida.show', $id_turnira) }}"> {{ $piramida->naziv }} | {{ $piramida->sezona_piramida->godina }}</a></li>
        <li class="active">Izmjeni bodove igraču na piramidi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              
              <!-- /.box-header -->
              <div class="box-body ">
                {!! Form::model($nastup_piramida, [
                    'method' => 'PUT',
                    'route' => ['bodovi_update.piramida', $nastup_piramida->turnir_piramida_id, $nastup_piramida->igrac_id],
                    'files' => TRUE,
                    'id' => 'post-form'
                ]) !!}

                @include('backend.bodovi_piramida.form_jedan')
                {!! Form::submit('Izmjeni bodove piramide igraču', ['class' => 'btn btn-primary']) !!}
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
