@extends('layouts.frontend')
@section('title', 'TK Pazin | Rang-liste Pojedinačni turnir')
@section('content')
    <!-- Page Content -->
    <div class="container">
    <!-- Page Heading -->
    <h1 class="my-4">Rang-lista | Pojedinačni turnir {{ $sezona->godina }}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        @foreach($sezone as $sezona)
            @if($sezona->id == session('odabrana_godina'))
                <li class="breadcrumb-item active" aria-current="page">{{ $sezona->godina }}</li>
            @else
                <li class="breadcrumb-item"><a href="{{ route('ranglista.turnir.kola', $sezona->id) }}">{{ $sezona->godina }}</a></li>
            @endif
        @endforeach
        </ol>
    </nav>
    <div>
        <div class="media mb-5">
            <div class="mr-3"><a href="../datoteke/Pravila-Pojedinačni-turniri.pdf" target="_blank"><i
                class="far fa-file-pdf fa-3x" style="color: #dc3545"></i></a></div>
            <div class="media-body mt-3">
                <a href="/datoteke/Pravila-Piramida.pdf" target="_blank">
                <h5 class="mt-0">Pravila
                    natjecanja u pojedinačnom turniru
                </h5>
                </a>
            </div>
        </div>
    </div>
    <p style="color: white;">U tražilicu možete unijeti ime ili prezime igrača radi lakšeg pronalaženja.</p>
    <input class="form-control" id="myInput" type="text" placeholder="Unesite ime ili prezime...">
    <br>
    <div class="table-responsive" style="overflow-y: auto; height: 500px; margin-bottom: 50px;">
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                <th class="sticky-top" scope="col">#</th>
                <th class="sticky-top" scope="col">Ime i prezime</th>
                @foreach($kola as $kolo)
                    <th class="sticky-top" scope="col">{{ $kolo->naziv }}</th>
                @endforeach
                <th class="sticky-top" scope="col">Ukupno</th>
                </tr>
            </thead>
            <tbody id="myTable">
                @foreach($igraci as $igrac)
                @if($igrac->igrac_turnir()->whereIn('turnir_pojedinacni_id', $kola_id)->sum('bodovi') != 0)
                <tr>
                    <td scope="row" class="sno" style="font-weight: 500;">&nbsp;</td>       
                    <td style="min-width: 200px;">
                        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#view_{{ $igrac->id }}">{{ $igrac->ime . " " . $igrac->prezime }}</button>
                        <!-- Modal -->
                        <div class="modal fade" id="view_{{ $igrac->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel" style="color: #000000;">Natjecatelj: {{ $igrac->ime . " " . $igrac->prezime }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <img src="{{ $igrac->slika }}" alt="..." class="img-thumbnail">
                                        </div>
                                        <div class="col-6" style="color: #000000;">
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
                            @foreach($igrac->igrac_turnir as $ip)
                                @if($ip->pivot->turnir_pojedinacni_id == $kolo->id)
                                    <td>{{ $ip->pivot->bodovi }}</td>
                                @endif
                                    
                            @endforeach
                                
                        @endforeach
                        <td>{{ $igrac->igrac_turnir()->whereIn('turnir_pojedinacni_id', $kola_id)->sum('bodovi') }}</td>
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
    <script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script>
@endsection
