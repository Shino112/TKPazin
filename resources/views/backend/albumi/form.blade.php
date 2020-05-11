                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group {{ $errors->has('naslov') ? 'has-error' : '' }}">
                            {!! Form::label('Naziv albuma') !!}
                            {!! Form::text('naslov', null, ['class' => 'form-control']) !!}
                            @if($errors->has('naslov'))
                                <span class="help-block">{{ $errors->first('naslov') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group {{ $errors->has('slika_albuma') ? 'has-error' : '' }}">
                            {!! Form::label('slika_albuma', 'Slika albuma') !!}
                            {!! Form::file('slika_albuma', ['class' => 'form-control']) !!}
                            @if($errors->has('slika_albuma'))
                                <span class="help-block">{{ $errors->first('slika_albuma') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <hr>