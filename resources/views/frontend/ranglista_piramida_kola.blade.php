@extends('layouts.frontend')
@section('title', 'TK Pazin | Rang-liste Piramida')
@section('content')
    <!-- Page Content -->
    <div class="container">
    <!-- Page Heading -->
    <h1 class="my-4" style="text-align:center; color: #ba3631;">Rang-lista | Piramida {{ $sezona->godina }}</h1>
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
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Ime i prezime</th>
                @foreach($kola as $kolo)
                    <th scope="col">{{ $kolo->naziv }}</th>
                @endforeach
                <th scope="col">Ukupno</th>
                </tr>
            </thead>
            <tbody>
                @foreach($igraci as $igrac)
                @if($igrac->igrac_piramida()->whereIn('turnir_piramida_id', $kola_id)->sum('bodovi') != 0)
                <tr>
                    <td scope="row" class="sno">&nbsp;</td>
                    <td>
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#view_{{ $igrac->id }}">{{ $igrac->ime . " " . $igrac->prezime }}</button>
                        <!-- Modal -->
                        <div class="modal fade" id="view_{{ $igrac->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Natjecatelj: {{ $igrac->ime . " " . $igrac->prezime }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <img src="{{ $igrac->slika }}" alt="..." class="img-thumbnail">
                                        </div>
                                        <div class="col-6">
                                            <b>Prebivalište: </b>
                                            <p> {{ $igrac->prebivaliste }}</p>
                                            <b>Igra: </b>
                                            <p> {{ $igrac->igra }}</p>
                                            <b>Član kluba od:</b>
                                            <p> {{ $igrac->clanstvo }}. godine</p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvori</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                        @foreach($kola as $kolo)
                            @foreach($igrac->igrac_piramida as $ip)
                                @if($ip->pivot->turnir_piramida_id == $kolo->id)
                                    <td>{{ $ip->pivot->bodovi }}</td>
                                    
                                @endif
                                    
                            @endforeach
                                
                        @endforeach
                        <td>{{ $igrac->igrac_piramida()->whereIn('turnir_piramida_id', $kola_id)->sum('bodovi') }}</td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
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