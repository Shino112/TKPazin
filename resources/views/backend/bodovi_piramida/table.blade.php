<table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>Ime</td>
                                <td>Prezime</td>
                                <td>Bodovi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($igraci_u_piramidi as $igrac_u_piramidi)
                                @if($igrac_u_piramidi->bodovi != 0)
                                <tr>
                                    <td>{{ $igrac_u_piramidi->bodovi_piramida_igrac->ime }}</td>
                                    <td>{{ $igrac_u_piramidi->bodovi_piramida_igrac->prezime }}</td>
                                    <td>{{ $igrac_u_piramidi->bodovi }}</td>
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>