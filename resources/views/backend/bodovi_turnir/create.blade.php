@extends('layouts.backend.main')

@section('title', 'TK Pazin CMS | Dodaj bodove igračima')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pojedinačni turniri - Sustav bodovanja
        
      </h1>
      <small> Dodavanje bodova igračima na turniru</small>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Nadzorna ploča</a></li>
        <li><i class="fa fa-stack-overflow"></i> <a href="{{ route('turniri.index') }}"> Turniri</a></li>
        <li><a href="{{ route('turniri.show', $id_turnira) }}"> {{ $turnir->naziv }} | {{ $turnir->sezona_pojedinacni_turnir->godina }}</a></li>
        <li class="active">Dodaj bodove igračima na turniru</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="row">
              <div class="col-xs-6">
                <h3>Naziv turnira: {{ $turnir->naziv }}</h3>
              </div>
              <div class="col-xs-6">
                <h3>Sezona: {{ $turnir->sezona_pojedinacni_turnir->godina }}</h3>
              </div>
            </div>
          </div>
          <div class="col-xs-12">
            <div class="box">
              
              <!-- /.box-header -->
              <div class="box-body ">
                {!! Form::model($bodovi, [
                    'method' => 'POST',
                    'route' => ['bodovi.turnir.store', $id_turnira],
                    'files' => TRUE
                ]) !!}

                @include('backend.bodovi_turnir.form')
                {!! Form::submit('Dodaj bodove igračima', ['class' => 'btn btn-primary']) !!}
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

@include('backend.bodovi_turnir.script')
