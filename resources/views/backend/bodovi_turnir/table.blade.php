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
                            @foreach ($igraci_u_turniru as $igrac_u_turnir)
                                <tr>
                                    <td style="min-width: 70px;">
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['bodovi_delete.turnir', $igrac_u_turnir->turnir_pojedinacni_id, $igrac_u_turnir->igrac_id]]) !!}
                                          <a href="{{ route('bodovi_edit.turnir', [$igrac_u_turnir->turnir_pojedinacni_id, $igrac_u_turnir->igrac_id]) }}" class="btn btn-xs btn-default">
                                              <i class="fa fa-edit"></i>
                                          </a>
                                          <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Da li sigurno želite izbrisati bodove ovog igrača?')">
                                              <i class="fa fa-trash"></i>
                                          </button>
                                        {!! Form::close() !!}  
                                    </td>
                                    <td>{{ $igrac_u_turnir->bodovi_pojedinacni_turnir_igrac->ime }}</td>
                                    <td>{{ $igrac_u_turnir->bodovi_pojedinacni_turnir_igrac->prezime }}</td>
                                    <td>{{ $igrac_u_turnir->bodovi }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>