@extends('layouts.backend.main')

@section('title', 'TK Pazin CMS | Dodaj bodove igračima')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Piramida - Sustav bodovanja
        
      </h1>
      <small> Dodavanje bodova igračima na piramidi</small>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Nadzorna ploča</a></li>
        <li><i class="fa fa-stack-overflow"></i> <a href="{{ route('piramida.index') }}"> Piramide</a></li>
        <li><a href="{{ route('piramida.show', $id_turnira) }}"> {{ $piramida->naziv }} | {{ $piramida->sezona_piramida->godina }}</a></li>
        <li class="active">Dodaj bodove igračima na piramidi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="row">
              <div class="col-xs-6">
                <h3>Naziv piramide: {{ $piramida->naziv }}</h3>
              </div>
              <div class="col-xs-6">
                <h3>Sezona: {{ $piramida->sezona_piramida->godina }}</h3>
              </div>
            </div>
          </div>
          <div class="col-xs-12">
            <div class="box">
              
              <!-- /.box-header -->
              <div class="box-body ">
                {!! Form::model($bodovi, [
                    'method' => 'POST',
                    'route' => ['bodovi.piramida.store', $id_turnira],
                    'files' => TRUE
                ]) !!}

                @include('backend.bodovi_piramida.form')
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

@include('backend.bodovi_piramida.script')
