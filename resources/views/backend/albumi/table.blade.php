<table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>Akcija</td>
                                <td>Naziv albuma</td>
                                <td>Date</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($albumi as $album)
                                <tr>
                                    <td style="min-width: 70px;">
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['albumi.destroy', $album->id]]) !!}
                                          <a href="{{ route('albumi.edit', $album->id) }}" class="btn btn-xs btn-default">
                                              <i class="fa fa-edit"></i>
                                          </a>
                                          <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Da li sigurno želite izbrisati ovaj album?')">
                                              <i class="fa fa-trash"></i>
                                          </button>
                                        {!! Form::close() !!}  
                                    </td>
                                    <td><a href="{{ route('albumi.show', $album->id) }}">{{ $album->naslov }}</a></td>
                                    <td><abbr title="{{ $album->dateFormatted(true) }}">{{ $album->dateFormatted() }}</abbr></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>