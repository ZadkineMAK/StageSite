@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        {{ Form::open(['url' => 'register']) }}

                        <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                            {{ Form::label('surname', 'Surname') }}
                            {{ Form::text('surname', null, ['class' => 'form-control']) }}
                            @if ($errors->has('surname'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('insertion') ? ' has-error' : '' }}">
                            {{ Form::label('insertion', 'Insertion') }}
                            {{ Form::text('insertion', null, ['class' => 'form-control']) }}
                            @if ($errors->has('insertion'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('insertion') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('familyname') ? ' has-error' : '' }}">
                            {{ Form::label('familyname', 'Familyname') }}
                            {{ Form::text('familyname', null, ['class' => 'form-control']) }}
                            @if ($errors->has('familyname'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('familyname') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            {{ Form::label('phone', 'Phone') }}
                            {{ Form::text('phone', null, ['class' => 'form-control']) }}
                            @if ($errors->has('phone'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                            {{ Form::label('mobile', 'Mobile') }}
                            {{ Form::text('mobile', null, ['class' => 'form-control']) }}
                            @if ($errors->has('mobile'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            {{ Form::label('email', 'Email') }}
                            {{ Form::email('email', null, ['class' => 'form-control']) }}
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            {{ Form::label('password', 'Password') }}
                            {{ Form::password('password', ['class' => 'form-control']) }}
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            {{ Form::label('password_confirmation', 'Password Confirm') }}
                            {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                            @endif
                        </div>


                        <div class="form-group">
                            {{ Form::submit('Register', ['class' => 'btn btn-primary']) }}
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
