<table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>Akcija</td>
                                <td>Ime</td>
                                <td>Prezime</td>
                                <td>Prebivalište</td>
                                <td>Kojom rukom igra</td>
                                <td>Član od:</td>
                                <td>Date</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($igraci as $igrac)
                                <tr>
                                    <td style="min-width: 70px;">
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['igraci.destroy', $igrac->id]]) !!}
                                          <a href="{{ route('igraci.edit', $igrac->id) }}" class="btn btn-xs btn-default">
                                              <i class="fa fa-edit"></i>
                                          </a>
                                          <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Da li sigurno želite izbrisati ovog igrača?')">
                                              <i class="fa fa-trash"></i>
                                          </button>
                                        {!! Form::close() !!}  
                                    </td>
                                    <td>{{ $igrac->ime }}</td>
                                    <td>{{ $igrac->prezime }}</td>
                                    <td>{{ $igrac->prebivaliste }}</td>
                                    <td>{{ $igrac->igra }}</td>
                                    <td>{{ $igrac->clanstvo }}</td>
                                    <td><abbr title="{{ $igrac->dateFormatted(true) }}">{{ $igrac->dateFormatted() }}</abbr></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>