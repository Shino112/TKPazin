@extends('layouts.backend.main')

@section('title', 'TK Pazin CMS | Turniri index')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pojedinačni turniri
        <small> Prikaz svih pojedinačnih turnira</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Nadzorna ploča</a></li>
        <li class="active"><i class="fa fa-stack-overflow"></i> Turniri</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header clearfix">
                <div class="pull-left">
                  <a href="{{ route('turniri.create') }}" class="btn btn-success">Dodaj novi turnir</a>
                </div>
                <div class="pull-right">
                  <p>Turnir se može tražiti po sezoni</p>
                  <form class="form-inline md-form mr-auto mb-4" action="/search-turnir" method="get">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
                    <button class="btn aqua-gradient btn-rounded btn-sm my-0" type="submit">Search</button>
                  </form>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body ">
                    @include('backend.turniri.message')
                    @include('backend.turniri.table')
              </div>
              <!-- /.box-body -->
              <div class="box-footer clearfix">
                  <div class="pull-left">
                    {{ $turniri->links() }}
                  </div>
                  <div class="pull-right">
                      <small>{{ $turniriCount }} stvari</small>
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
