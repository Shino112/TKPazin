@extends('layouts.backend.main')

@section('title', 'TK Pazin CMS | Nadzorna ploča')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Nadzorna ploča
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i> Nadzorna ploča</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <!-- /.box-header -->
              <div class="box-body ">
                    <h3>Dobrodošli na CMS TK Pazina!</h3>
                    <p class="lead text-muted">Pozdrav {{ Auth::user()->name }}, Dobrodošli na CMS TK Pazina</p>

                    <h4>Počnimo...</h4>
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
