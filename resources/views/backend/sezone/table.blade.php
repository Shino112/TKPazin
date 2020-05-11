<table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>Akcija</td>
                                <td>Godina</td>
                                <td>Date</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sezone as $sezona)
                                <tr>
                                    <td style="min-width: 70px;">
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['sezone.destroy', $sezona->id]]) !!}
                                          <a href="{{ route('sezone.edit', $sezona->id) }}" class="btn btn-xs btn-default">
                                              <i class="fa fa-edit"></i>
                                          </a>
                                          <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Da li sigurno želite izbrisati ovu sezonu?')">
                                              <i class="fa fa-trash"></i>
                                          </button>
                                        {!! Form::close() !!}  
                                    </td>
                                    <td>{{ $sezona->godina }}</td>
                                    <td><abbr title="{{ $sezona->dateFormatted(true) }}">{{ $sezona->dateFormatted() }}</abbr></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>