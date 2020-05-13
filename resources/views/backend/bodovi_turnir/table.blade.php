<table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>Ime</td>
                                <td>Prezime</td>
                                <td>Bodovi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($igraci_u_turniru as $igrac_u_turnir)
                                @if($igrac_u_turnir->bodovi != 0)
                                <tr>
                                    <td>{{ $igrac_u_turnir->bodovi_pojedinacni_turnir_igrac->ime }}</td>
                                    <td>{{ $igrac_u_turnir->bodovi_pojedinacni_turnir_igrac->prezime }}</td>
                                    <td>{{ $igrac_u_turnir->bodovi }}</td>
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>