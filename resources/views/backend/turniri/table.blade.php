<table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>Akcija</td>
                                <td>Naziv turnira</td>
                                <td>Sezona</td>
                                <td>Ždrijeb DA/NE</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($turniri as $turnir)
                                <tr>
                                    <td style="min-width: 70px;">
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['turniri.destroy', $turnir->id]]) !!}
                                          <a href="{{ route('turniri.edit', $turnir->id) }}" class="btn btn-xs btn-default">
                                              <i class="fa fa-edit"></i>
                                          </a>
                                          <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Da li sigurno želite izbrisati ovaj turnir?')">
                                              <i class="fa fa-trash"></i>
                                          </button>
                                        {!! Form::close() !!}  
                                    </td>
                                    <td><a href="{{ route('turniri.show', $turnir->id) }}">{{ $turnir->naziv }}</a></td>
                                    <td>{{ $turnir->sezona_pojedinacni_turnir->godina }}</td>
                                    @if($turnir->zdrijeb == NULL)
                                        <td>NE</td>
                                    @else
                                        <td>DA</td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>