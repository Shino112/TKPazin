@extends('layouts.backend.main')

@section('title', 'TK Pazin CMS | Albumi index')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Albumi
        <small> Prikaz svih albuma</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Nadzorna ploča</a></li>
        <li class="active"><i class="fa fa-image"></i> Albumi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header clearfix">
                <div class="pull-left">
                  <a href="{{ route('albumi.create') }}" class="btn btn-success">Dodaj novi album</a>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body ">
                    @include('backend.albumi.message')
                    @include('backend.albumi.table')
              </div>
              <!-- /.box-body -->
              <div class="box-footer clearfix">
                  <div class="pull-left">
                    {{ $albumi->links() }}
                  </div>
                  <div class="pull-right">
                      <small>{{ $albumiCount }} albuma</small>
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
