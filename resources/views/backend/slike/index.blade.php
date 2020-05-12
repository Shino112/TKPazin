@extends('layouts.backend.main')

@section('title', 'TK Pazin CMS | Album index')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Slike albuma | {{ $album->naslov }}
        <small> Prikaz svih slika albuma</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Nadzorna ploča</a></li>
        <li><i class="fa fa-image"></i> <a href="{{ route('albumi.index') }}"> Albumi</a></li>
        <li class="active"><i class="fa fa-newspaper-o"></i> Slike albuma</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header clearfix">
                <div class="pull-left">
                  <a href="{{ route('slike.create', $album->id) }}" class="btn btn-success">Dodaj nove slike</a>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body ">
                    @include('backend.slike.message')
                    @include('backend.slike.table')
              </div>
              <!-- /.box-body -->
              <div class="box-footer clearfix">
                  <div class="pull-left">
                    
                  </div>
                  <div class="pull-right">
                      <small>{{ $slikeCount }} slika</small>
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
