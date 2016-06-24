@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Welcome Praktijkopleider</h1>
                    </div>
                    <div class="panel-body">
                        <h3>Voeg stage toe</h3>
                        {{-- Praktijkopleider stage toevoegen--}}
                        {{--end comment--}}
                        @if(Auth::user()->role->id == 1)
                            {!! Form::open([ 'route' => 'stage.store', 'method' => 'POST']) !!}

                            <div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
                                {{ form :: label('name') }}
                                {{ form:: text('name' , null, ['class' => 'form-control', 'placeholder'=>'name']) }}
                                @if($errors->has('name'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('start-date') ? 'has-error' : '' }}">
                                {{ form :: label('start-date') }}
                                {{ form:: date('startdate' , null, ['class' => 'form-control', 'placeholder'=>'Start-date']) }}
                                @if($errors->has('startdate'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('start-date') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('end-date') ? 'has-error' : '' }}">
                                {{ form :: label('end-date') }}
                                {{ form:: date('enddate' , null, ['class' => 'form-control', 'placeholder' => 'end-date']) }}
                                @if($errors->has('enddate'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('end-date') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('course') ? 'has-error' : ''  }}">
                                {{ form :: label('School', 'School:') }}
                                {{ form :: select('course_id',$courses , null , ['id' => 'course_id', 'class' =>'form-control'] ) }}
                            </div>

                            <div class="form-group{{ $errors->has('contact') ? 'has-error' : ''  }}">
                                {{ form :: hidden('contact_id',Auth::user()->contact->id , null , ['id' => 'contact_id', 'class' =>'form-control'] ) }}

                            </div>



                            {{ Form::submit('Save'),['class' => 'btn btn-primary'] }}
                            {!! Form::close() !!}

                        @else(<h3>Praktijkopleider allen kan stage toevoegen</h3>)
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
