@extends('layouts.backend.main')

@section('title', 'TK Pazin CMS | Piramida index')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Piramide
        <small> Prikaz svih piramida</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Nadzorna ploča</a></li>
        <li class="active"><i class="fa fa-stack-overflow"></i> Piramide</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header clearfix">
                <div class="pull-left">
                  <a href="{{ route('piramida.create') }}" class="btn btn-success">Dodaj novu piramidu</a>
                </div>
                <div class="pull-right">
                  <p>Piramida se može tražiti po sezoni</p>
                  <form class="form-inline md-form mr-auto mb-4" action="/search-piramida" method="get">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
                    <button class="btn aqua-gradient btn-rounded btn-sm my-0" type="submit">Search</button>
                  </form>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body ">
                    @include('backend.piramida.message')
                    @include('backend.piramida.table')
              </div>
              <!-- /.box-body -->
              <div class="box-footer clearfix">
                  <div class="pull-left">
                    {{ $piramide->links() }}
                  </div>
                  <div class="pull-right">
                      <small>{{ $piramideCount }} stvari</small>
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
