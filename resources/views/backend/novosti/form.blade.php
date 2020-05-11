<div class="form-group {{ $errors->has('naslov') ? 'has-error' : '' }}">
                    {!! Form::label('naslov') !!}
                    {!! Form::text('naslov', null, ['class' => 'form-control']) !!}
                    @if($errors->has('naslov'))
                        <span class="help-block">{{ $errors->first('naslov') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('tekst') ? 'has-error' : '' }}">
                    {!! Form::label('tekst') !!}
                    {!! Form::textarea('tekst', null, ['class' => 'form-control']) !!}
                    @if($errors->has('tekst'))
                        <span class="help-block">{{ $errors->first('tekst') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('slika') ? 'has-error' : '' }}">
                    {!! Form::label('slika', 'Slika') !!}
                    {!! Form::file('slika') !!}
                    @if($errors->has('slika'))
                        <span class="help-block">{{ $errors->first('slika') }}</span>
                    @endif
                </div>
                <hr>
                