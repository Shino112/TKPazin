                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group {{ $errors->has('naziv') ? 'has-error' : '' }}">
                            {!! Form::label('Naziv piramide') !!}
                            {!! Form::text('naziv', null, ['class' => 'form-control']) !!}
                            @if($errors->has('naziv'))
                                <span class="help-block">{{ $errors->first('naziv') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group {{ $errors->has('sezona_id') ? 'has-error' : '' }}">
                            {!! Form::label('sezona_id', 'Sezona') !!}
                            {!! Form::select('sezona_id', App\Sezona::pluck('godina', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Odaberi sezonu']) !!}
                            @if($errors->has('sezona_id'))
                                <span class="help-block">{{ $errors->first('sezona_id') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <hr>
                