@extends('layouts.frontend')
@section('title', 'TK Pazin | Pojedinačni turnir')
@section('css')
    <link href="/css/style_pojedinacni_turniri.css" rel="stylesheet"/>
@endsection
@section('content')
    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading -->
        <h1 class="my-4">Pojedinačni turniri {{ $sezona->godina }}</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                @foreach($sezone as $sezona)
                    @if($sezona->id == session('odabrana_godina'))
                        <li class="breadcrumb-item active" aria-current="page">{{ $sezona->godina }}</li>
                    @else
                        <li class="breadcrumb-item"><a href="{{ route('pojedinacni.turnir', $sezona->id) }}">{{ $sezona->godina }}</a></li>
                    @endif
                @endforeach
            </ol>    
        </nav>
        <div class="row mb-5">
            <div class="col-12 col-md-12 mb-5">
                @if(isset($kola) && count($kola) > 0)
                    <div class="list-group">
                        @foreach($kola as $kolo)
                            @if($kolo->zdrijeb != NULL)
                                <button type="button" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#zdrijeb_{{ $kolo->id }}">{{ $kolo->naziv }}</button>
                                <div id="zdrijeb_{{ $kolo->id }}" class="panel-collapse collapse mt-4">
                                    {!! $kolo->zdrijeb !!}
                                </div>
                            @endif
                        @endforeach    
                    </div>
                @else
                    <div class="alert alert-primary" role="alert">
                        Nema unesenog ždrijeba za ovu godinu!
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- /.container -->
@endsection
@section('script')
    <script>
        $('button').on('click', function(){
            $('button').removeClass('active');
            $(this).addClass('active');
        });
    </script>
    <script>
        $(document).ready(function() {
          $(".tournament-headers").css({
            'width': ($(".tournament-brackets").width() + 'px')
          });
        });
    </script>
@endsection