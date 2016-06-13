@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Welcome Docent</h1>
                    </div>
                    <div class="panel-body">
                        <h3>Voeg stage toe</h3>
                        {{-- Praktijkopleider stage toevoegen--}}
                        {{--end comment--}}

                        {!! Form::open(array('route' => 'stageController@tovogen', 'class' => 'form')) !!}
                        <div class="form-group{{ $erroers->has('name') ? 'has-error' : '' }}">
                            {{ form :: lapel('name') }}
                            {{ form:: text('name' , null, ['class => form-control'],['placeholder'=>'name']) }}
                            @if($erroers->has('name'))
                                <span class="help-block">
                                    <strong>{{ $erroers->first('name') }}</strong>
                                </span>
                                @endif
                        </div>
                        <div class="form-group{{ $erroers->has('start-date') ? 'has-error' : '' }}">
                            {{ form :: lapel('start-date') }}
                            {{ form:: date('start-date' , null, ['class => form-control'],['placeholder'=>'Start-date']) }}
                            @if($erroers->has('star-tdate'))
                                <span class="help-block">
                                    <strong>{{ $erroers->first('start-date') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $erroers->has('end-date') ? 'has-error' : '' }}">
                            {{ form :: lapel('end-date') }}
                            {{ form:: date('end-date' , null, ['class => form-control'],['placeholder'=>'end-date']) }}
                            @if($erroers->has('end-date'))
                                <span class="help-block">
                                    <strong>{{ $erroers->first('end-date') }}</strong>
                                </span>
                            @endif
                        </div>



                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
