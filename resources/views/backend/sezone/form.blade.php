<div class="form-group {{ $errors->has('godina') ? 'has-error' : '' }}">
                    {!! Form::label('Godina') !!}
                    {!! Form::number('godina', null, ['class' => 'form-control']) !!}
                    @if($errors->has('godina'))
                        <span class="help-block">{{ $errors->first('godina') }}</span>
                    @endif
                </div>
                
                <hr>
                