<table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>Akcija</td>
                                <td>Naziv piramide</td>
                                <td>Sezona</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($piramide as $piramida)
                                <tr>
                                    <td style="min-width: 70px;">
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['piramida.destroy', $piramida->id]]) !!}
                                          <a href="{{ route('piramida.edit', $piramida->id) }}" class="btn btn-xs btn-default">
                                              <i class="fa fa-edit"></i>
                                          </a>
                                          <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Da li sigurno želite izbrisati ovu piramidu?')">
                                              <i class="fa fa-trash"></i>
                                          </button>
                                        {!! Form::close() !!}  
                                    </td>
                                    <td>{{ $piramida->naziv }}</td>
                                    <td>{{ $piramida->sezona_piramida->godina }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>