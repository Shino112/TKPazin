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
                        <li class="breadcrumb-item"><a href="{{ route('pojedinacni.turnir', [$id_sezone = \App\Sezona::where('id', $sezona->id)->pluck('id')->first(), \App\TurnirPojedinacni::where('sezona_id', 15)->pluck('id')->first()]) }}">{{ $sezona->godina }}</a></li>
                    @endif
                @endforeach
            </ol>    
        </nav>
        <div class="row">
            <div class="col-12 col-md-2 mb-4">
                <div class="list-group">
                    @foreach($kola as $kolo)
                        @if($kolo->zdrijeb != NULL)
                            <div class="list-group">
                                @if($kolo->id == $kolo_aktivno->id)
                                    @if($kolo->naziv =="MA")
                                    <a href="{!!$kolo->id!!}" class="list-group-item list-group-item-action active">
                                        Masters Turnira
                                    </a>
                                    @else
                                    <a href="{!!$kolo->id!!}" class="list-group-item list-group-item-action active">
                                        {{ $kolo->naziv . ". mjesec"}}
                                    </a>
                                    @endif
                                @else    
                                    @if($kolo->naziv =="MA")
                                    <a href="{!!$kolo->id!!}" class="list-group-item list-group-item-action">
                                        Masters Turnira
                                    </a>
                                    @else
                                    <a href="{!!$kolo->id!!}" class="list-group-item list-group-item-action">
                                        {{ $kolo->naziv . ". mjesec"}}
                                    </a>
                                    @endif
                                @endif
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-md-10">
                @if($kolo_aktivno->naziv =="MA")
                    <h2 class="my-4" style="text-align: center;">Master Turnira</h2>
                @else
                    <h2 class="my-4" style="text-align: center;">{{ $kolo_aktivno->naziv}}. mjesec</h2>
                @endif
                {!! $kolo_aktivno->zdrijeb !!}
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
            var one_h3 = document.getElementById("one_h3");
            var two_h3 = document.getElementById("two_h3");
            var three_h3 = document.getElementById("three_h3");
            var four_h3 = document.getElementById("four_h3");
            var five_h3 = document.getElementById("five_h3");
            var one_bracket = document.getElementById("one_bracket");
            var two_bracket = document.getElementById("two_bracket");
            var three_bracket = document.getElementById("three_bracket");
            var four_bracket = document.getElementById("four_bracket");
            var five_bracket = document.getElementById("five_bracket");
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
            var one_h4 = document.getElementById("one_h4");
            var two_h4 = document.getElementById("two_h4");
            var three_h4 = document.getElementById("three_h4");
            var four_h4 = document.getElementById("four_h4");
            var one_bracket2 = document.getElementById("one_bracket2");
            var two_bracket2 = document.getElementById("two_bracket2");
            var three_bracket2 = document.getElementById("three_bracket2");
            var four_bracket2 = document.getElementById("four_bracket2");
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