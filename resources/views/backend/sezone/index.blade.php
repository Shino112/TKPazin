@extends('layouts.backend.main')

@section('title', 'TK Pazin CMS | Sezone index')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sezone
        <small> Prikaz svih sezona</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Nadzorna ploča</a></li>
        <li class="active"><i class="fa fa-calendar"></i> Sezone</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header clearfix">
                <div class="pull-left">
                  <a href="{{ route('sezone.create') }}" class="btn btn-success">Dodaj novu sezonu</a>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body ">
                    @include('backend.sezone.message')
                    @include('backend.sezone.table')
              </div>
              <!-- /.box-body -->
              <div class="box-footer clearfix">
                  <div class="pull-left">
                    {{ $sezone->links() }}
                  </div>
                  <div class="pull-right">
                      <small>{{ $sezoneCount }} sezone</small>
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
