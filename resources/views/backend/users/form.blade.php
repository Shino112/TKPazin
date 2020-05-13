                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            {!! Form::label('Naziv usera') !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            @if($errors->has('name'))
                                <span class="help-block">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            {!! Form::label('E-mail') !!}
                            {!! Form::email('email', null, ['class' => 'form-control']) !!}
                            @if($errors->has('email'))
                                <span class="help-block">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                            {!! Form::label('Lozinka') !!}
                            {!! Form::password('password', ['class' => 'form-control']) !!}
                            @if($errors->has('password'))
                                <span class="help-block">{{ $errors->first('password') }}</span>
                            @endif
                        </div>    
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                            {!! Form::label('Ponovno unesite lozinku') !!}
                            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                            @if($errors->has('password_confirmation'))
                                <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <hr>
                