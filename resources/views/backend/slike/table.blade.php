<table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>Akcija</td>
                                <td>Naslov</td>
                                <td>Slika</td>
                                <td>Date</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($slike as $slika)
                                <tr>
                                    <td style="min-width: 10px;">
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['slike.destroy', $slika->id]]) !!}
                                          <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Da li sigurno želite izbrisati ovu sliku?')">
                                              <i class="fa fa-trash"></i>
                                          </button>
                                        {!! Form::close() !!}  
                                    </td>
                                    @if($slika->naslov == NULL)
                                        <td>/</td>
                                    @else
                                        <td>{{ $slika->naslov }}</td>
                                    @endif
                                    <td><img src="{{ $slika->putanja }}" alt="..." class="img-thumbnail" style="max-width:200px;"></td>
                                    @if($slika->updated_at == NULL)
                                        <td>/</td>
                                    @else
                                        <td><abbr title="{{ $slika->dateFormatted(true) }}">{{ $slika->dateFormatted() }}</abbr></td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>