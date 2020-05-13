                @foreach($igraci as $igrac)
                <div class="row">
                    <div class="col-12 col-md-6">
                        <br>
                        {!! Form::label('Naziv igrača: ' . $igrac->ime . " " . $igrac->prezime) !!}
                        <div hidden>
                            {!! Form::text('igrac_id[]', $igrac->id, ['class' => 'form-control']) !!}
                        </div>    
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group {{ $errors->has('bodovi') ? 'has-error' : '' }}">
                            {!! Form::label('Bodovi') !!}
                            {!! Form::number('bodovi[]', 0, ['class' => 'form-control']) !!}
                            @if($errors->has('bodovi'))
                                <span class="help-block">{{ $errors->first('bodovi') }}</span>
                            @endif
                        </div>
                    </div>
                    
                </div>
                <hr>
                @endforeach
                <hr>
                