@extends('layouts.frontend')
@section('title', 'TK Pazin | Rang-liste Piramida')
@section('content')
    <!-- Page Content -->
    <div class="container">
    <!-- Page Heading -->
    <h1 class="my-4">Rang-lista | Piramida {{ $sezona->godina }}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        @foreach($sezone as $sezona)
            @if($sezona->id == session('odabrana_godina'))
                <li class="breadcrumb-item active" aria-current="page">{{ $sezona->godina }}</li>
            @else
                <li class="breadcrumb-item"><a href="{{ route('ranglista.piramida.kola', $sezona->id) }}">{{ $sezona->godina }}</a></li>
            @endif
        @endforeach
        </ol>
    </nav>
    <div>
        <div class="media mb-5">
            <div class="mr-3"><a href="../datoteke/Pravila-Pojedinačni-turniri.pdf" target="_blank"><i
                class="far fa-file-pdf fa-3x"></i></a></div>
            <div class="media-body mt-3">
                <a href="/datoteke/Pravila-Piramida.pdf" target="_blank">
                <h5 class="mt-0">Pravila
                    natjecanja u piramidi
                </h5>
                </a>
            </div>
        </div>
    </div>
    <div class="alert alert-primary" role="alert">
        Nema unesene piramide za ovu godinu!
    </div>
    </div>
    <!-- /.container -->
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            //use a special class name or id for the table
            //using find I'm getting all tr elements in the table
            //using not(':eq(0)') I'm ignoring the first tr element
            //using each I'm iterating through the selected elements
            $('table').find('tr').not(':eq(0)').each(function(i){
                //using children('td:eq(0)') I'm getting the first td element inside the tr
                $(this).children('td:eq(0)').addClass('sno').text(i+1);
            });
        });
    </script>
@endsection