@extends('layouts.backend.main')

@section('title', 'TK Pazin CMS | Igrači index')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Igrači
        <small> Prikaz svih igrača</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Nadzorna ploča</a></li>
        <li class="active"><i class="fa fa-users"></i> Igrači</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header clearfix">
                <div class="pull-left">
                  <a href="{{ route('igraci.create') }}" class="btn btn-success">Dodaj novog igrača</a>
                </div>
                <div class="pull-right">
                  <p>Igrača se može tražiti po imenu <b>ILI</b> po prezimenu</p>
                  <form class="form-inline md-form mr-auto mb-4" action="/search-igrac" method="get">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
                    <button class="btn aqua-gradient btn-rounded btn-sm my-0" type="submit">Search</button>
                  </form>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body ">
                    @include('backend.igraci.message')
                    @include('backend.igraci.table')
              </div>
              <!-- /.box-body -->
              <div class="box-footer clearfix">
                  <div class="pull-left">
                    {{ $igraci->links() }}
                  </div>
                  <div class="pull-right">
                      <small>{{ $igraciCount }} stvari</small>
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
