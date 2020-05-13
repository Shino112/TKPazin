                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group {{ $errors->has('ime') ? 'has-error' : '' }}">
                            {!! Form::label('Ime') !!}
                            {!! Form::text('ime', null, ['class' => 'form-control']) !!}
                            @if($errors->has('ime'))
                                <span class="help-block">{{ $errors->first('ime') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group {{ $errors->has('prezime') ? 'has-error' : '' }}">
                            {!! Form::label('Prezime') !!}
                            {!! Form::text('prezime', null, ['class' => 'form-control']) !!}
                            @if($errors->has('prezime'))
                                <span class="help-block">{{ $errors->first('prezime') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group {{ $errors->has('prebivaliste') ? 'has-error' : '' }}">
                            {!! Form::label('Prebivalište') !!}
                            {!! Form::text('prebivaliste', null, ['class' => 'form-control']) !!}
                            @if($errors->has('prebivaliste'))
                                <span class="help-block">{{ $errors->first('prebivaliste') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group {{ $errors->has('igra') ? 'has-error' : '' }}">
                            {!! Form::label('Kojom rukom igra:') !!}<br>
                            {!! Form::radio('igra', 'desnom rukom', ['class' => 'form-control']) !!} desnom rukom
                            {!! Form::radio('igra', 'lijevom rukom', ['class' => 'form-control']) !!} lijevom rukom
                            @if($errors->has('igra'))
                                <span class="help-block">{{ $errors->first('igra') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group {{ $errors->has('clanstvo') ? 'has-error' : '' }}">
                            {!! Form::label('Član od:') !!}
                            {!! Form::number('clanstvo', 2000, ['class' => 'form-control']) !!}
                            @if($errors->has('clanstvo'))
                                <span class="help-block">{{ $errors->first('clanstvo') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group {{ $errors->has('slika') ? 'has-error' : '' }}">
                            {!! Form::label('slika', 'Slika') !!}
                            {!! Form::file('slika') !!}
                            @if($errors->has('slika'))
                                <span class="help-block">{{ $errors->first('slika') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <hr>