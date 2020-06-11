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
        window.setInterval(function(){
            var one_h3 = document.getElementsByName("one_h3");
            var two_h3 = document.getElementsByName("two_h3");
            var three_h3 = document.getElementsByName("three_h3");
            var four_h3 = document.getElementsByName("four_h3");
            var five_h3 = document.getElementsByName("five_h3");

            var one_bracket = document.getElementsByName("one_bracket");
            var two_bracket = document.getElementsByName("two_bracket");
            var three_bracket = document.getElementsByName("three_bracket");
            var four_bracket = document.getElementsByName("four_bracket");
            var five_bracket = document.getElementsByName("five_bracket");

            style1 = window.getComputedStyle(one_bracket);
            style2 = window.getComputedStyle(two_bracket);
            style3 = window.getComputedStyle(three_bracket);
            style4 = window.getComputedStyle(four_bracket);
            style5 = window.getComputedStyle(five_bracket);
              
            wdt1 = style1.getPropertyValue('width');
            wdt2 = style2.getPropertyValue('width');
            wdt3 = style3.getPropertyValue('width');
            wdt4 = style4.getPropertyValue('width');
            wdt5 = style5.getPropertyValue('width');
              
            one_h3.style.width = wdt1;
            two_h3.style.width = wdt2;
            three_h3.style.width = wdt3;
            four_h3.style.width = wdt4;
            five_h3.style.width = wdt5;

            var one_h4 = document.getElementsByName("one_h4");
            var two_h4 = document.getElementsByName("two_h4");
            var three_h4 = document.getElementsByName("three_h4");
            var four_h4 = document.getElementsByName("four_h4");

            var one_bracket2 = document.getElementsByName("one_bracket2");
            var two_bracket2 = document.getElementsByName("two_bracket2");
            var three_bracket2 = document.getElementsByName("three_bracket2");
            var four_bracket2 = document.getElementsByName("four_bracket2");

            style6 = window.getComputedStyle(one_bracket2);
            style7 = window.getComputedStyle(two_bracket2);
            style8 = window.getComputedStyle(three_bracket2);
            style9 = window.getComputedStyle(four_bracket2);

            wdt6 = style6.getPropertyValue('width');
            wdt7 = style7.getPropertyValue('width');
            wdt8 = style8.getPropertyValue('width');
            wdt9 = style9.getPropertyValue('width');

            one_h4.style.width = wdt6;
            two_h4.style.width = wdt7;
            three_h4.style.width = wdt8;
            four_h4.style.width = wdt9;
        }, 100);
    </script>
@endsection