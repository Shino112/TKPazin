<table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>Akcija</td>
                                <td>Naslov</td>
                                <td>Date</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($novosti as $novost)
                                <tr>
                                    <td style="min-width: 70px;">
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['novosti.destroy', $novost->id]]) !!}
                                          <a href="{{ route('novosti.edit', $novost->id) }}" class="btn btn-xs btn-default">
                                              <i class="fa fa-edit"></i>
                                          </a>
                                          <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Da li sigurno želite izbrisati ovu novost?')">
                                              <i class="fa fa-trash"></i>
                                          </button>
                                        {!! Form::close() !!}  
                                    </td>
                                    <td>{{ $novost->naslov }}</td>
                                    <td><abbr title="{{ $novost->dateFormatted(true) }}">{{ $novost->dateFormatted() }}</abbr></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>