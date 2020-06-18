                <div class="row">
                    <div class="col-12 col-md-6">
                        <br>
                        {!! Form::label('Naziv igrača: ' . $nastup_turnir->bodovi_pojedinacni_turnir_igrac->ime . " " . $nastup_turnir->bodovi_pojedinacni_turnir_igrac->prezime) !!}
                        <div hidden>
                            {!! Form::text('igrac_id', $nastup_turnir->igrac_id, ['class' => 'form-control']) !!}
                        </div>    
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group {{ $errors->has('bodovi') ? 'has-error' : '' }}">
                            {!! Form::label('Bodovi') !!}
                            {!! Form::number('bodovi', $nastup_turnir->bodovi, ['class' => 'form-control']) !!}
                            @if($errors->has('bodovi'))
                                <span class="help-block">{{ $errors->first('bodovi') }}</span>
                            @endif
                        </div>
                    </div>
                    
                </div>
                <hr>
                