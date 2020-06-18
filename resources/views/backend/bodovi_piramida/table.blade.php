<table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>/</td>
                                <td>Ime</td>
                                <td>Prezime</td>
                                <td>Bodovi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($igraci_u_piramidi as $igrac_u_piramidi)
                                <tr>
                                    <td style="min-width: 70px;">
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['bodovi_delete.piramida', $igrac_u_piramidi->turnir_piramida_id, $igrac_u_piramidi->igrac_id]]) !!}
                                          <a href="{{ route('bodovi_edit.piramida', [$igrac_u_piramidi->turnir_piramida_id, $igrac_u_piramidi->igrac_id]) }}" class="btn btn-xs btn-default">
                                              <i class="fa fa-edit"></i>
                                          </a>
                                          <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Da li sigurno želite izbrisati bodove ovog igrača?')">
                                              <i class="fa fa-trash"></i>
                                          </button>
                                        {!! Form::close() !!}  
                                    </td>
                                    <td>{{ $igrac_u_piramidi->bodovi_piramida_igrac->ime }}</td>
                                    <td>{{ $igrac_u_piramidi->bodovi_piramida_igrac->prezime }}</td>
                                    <td>{{ $igrac_u_piramidi->bodovi }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>