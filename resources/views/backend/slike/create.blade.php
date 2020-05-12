@extends('layouts.backend.main')

@section('title', 'TK Pazin CMS | Dodaj nove slike')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Slike albuma | {{ $album->naslov }}
        <small> Dodaj nove slike</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Nadzorna ploča</a></li>
        <li><i class="fa fa-image"></i> <a href="{{ route('albumi.index') }}"> Albumi</a></li>
        <li><a href="{{ route('albumi.show', $album->id) }}">{{ $album->naslov }}</a></li>
        <li class="active">Dodaj nove slike</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              
              @if (count($errors) > 0)
              <div class="alert alert-danger">
                <strong>Sorry !</strong> There were some problems with your input.<br><br>
                <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif

                @if(session('success'))
                <div class="alert alert-success">
                  {{ session('success') }}
                </div> 
                @endif
              <div style="margin:20px;">  
                <form method="post" action="{{route('slike.store', $album->id)}}" enctype="multipart/form-data">
                  {{csrf_field()}}
                        <div class="input-group control-group increment" >
                          <input type="text" name="naslov[]" class="form-control" placeholder="Naslov slike">
                          <br>
                          <br>
                          <input type="file" name="putanja[]" class="form-control">
                          <div class="input-group-btn"> 
                            <button class="btn btn-success" type="button" style="margin-left:15px;">Add</button>
                          </div>
                        </div>
                        <div class="clone hide">
                          <div class="control-group input-group" style="margin-top:10px">
                            <input type="text" name="naslov[]" class="form-control" placeholder="Naslov slike">
                            <br>
                            <br>
                            <input type="file" name="putanja[]" class="form-control">
                            <div class="input-group-btn"> 
                              <button class="btn btn-danger" type="button" style="margin-left:15px;">Remove</button>
                            </div>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-info" style="margin-top:12px">Submit</button>
                        <br>
                        <br>
                  </form>
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

@include('backend.slike.script')
