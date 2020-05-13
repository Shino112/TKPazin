@extends('layouts.backend.main')

@section('title', 'TK Pazin CMS | Bodovi na Piramidi index')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bodovi na piramidi
        <small> Prikaz svih igrača s njihovim ostvarenim bodovima na piramidi</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Nadzorna ploča</a></li>
        <li><i class="fa fa-stack-overflow"></i> <a href="{{ route('piramida.index') }}"> Piramida</a></li>
        <li class="active">Bodovi na piramidi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header clearfix">
                <div class="pull-left" style="margin-top:20px;">
                  <a href="{{ route('bodovi.piramida', $id_turnira) }}" class="btn btn-success">Dodaj bodove igračima</a>
                </div>
                <div class="pull-right">
                  <h3>Naziv piramide: {{ $piramida->naziv }}</h3>
                  <h3>Sezona: {{ $piramida->sezona_piramida->godina }}</h3>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body ">
                    @include('backend.bodovi_piramida.message')
                    @include('backend.bodovi_piramida.table')
              </div>
              <!-- /.box-body -->
              <div class="box-footer clearfix">
                  <div class="pull-right">
                      <small>{{ $igraci_u_piramidiCount }} stvari</small>
                  </div>
                  
              </div>
            </div>
            <!-- /.box -->
          </div>
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
