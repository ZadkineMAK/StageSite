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
                        <h3>Update stage toe</h3>

                        @if(Auth::user()->role->id == 1)
                            {!! Form::model($stage,['route' => ['stage.update',$stage->id] , 'method' =>'Patch']) !!}

                            <div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
                                {{ Form :: label('name') }}
                                {{ Form:: text('name' , $stage->name, ['class' => 'form-control', 'placeholder'=>'name']) }}
                                @if($errors->has('name'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('start-date') ? 'has-error' : '' }}">
                                {{ Form :: label('start-date') }}
                                {{ Form:: date('startdate' , $stage->startdate, ['class' => 'form-control', 'placeholder'=>'Start-date']) }}
                                @if($errors->has('startdate'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('start-date') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('end-date') ? 'has-error' : '' }}">
                                {{ Form :: label('end-date') }}
                                {{ Form:: date('enddate' , $stage->endate, ['class' => 'form-control', 'placeholder' => 'end-date']) }}
                                @if($errors->has('enddate'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('end-date') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('course') ? 'has-error' : ''  }}">
                                {{ Form :: select('course_id',$courses , null , ['id' => 'course_id', 'class' =>'form-control'] ) }}
                            </div>

                            <div class="form-group{{ $errors->has('contact') ? 'has-error' : ''  }}">
                                {{ Form :: hidden('contact_id',Auth::user()->contact->id , null , ['id' => 'contact_id', 'class' =>'form-control'] ) }}

                            </div>
                            {{ Form::submit('Update'),['class' => 'btn btn-primary'] }}

                            {!! Form::close() !!}
                        @else(<h3>Praktijkopleider allen kan stage wijzegen</h3>)
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection