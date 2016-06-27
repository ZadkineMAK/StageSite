@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    @if(Auth::user())
                        @if(Auth::user()->role->id == 1)
                            <div class="panel-heading">
                                <h1>Welcome admin</h1>
                            </div>
                            <div class="panel-body">
                                <h3>Voeg stage toe</h3>
                                {{-- Admin stage toevoegen--}}
                                {{--end comment--}}
                                {!! Form::open([ 'route' => 'admin.stage.store', 'method' => 'POST']) !!}
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


                                {{--<div class="form-group{{ $errors->has('course') ? 'has-error' : ''  }}">--}}
                                    {{--{{ form :: select('course_id',$courses , null , ['id' => 'course_id', 'class' =>'form-control'] ) }}--}}
                                {{--</div>--}}

                                <div class="form-group{{ $errors->has('tool') ? 'has-error' : ''  }}">
                                    {{ form :: select('tool_id',$tools , null , ['id' => 'tool_id', 'class' =>'form-control'] ) }}
                                </div>

                                <div class="form-group{{ $errors->has('status_id') ? 'has-error' : ''  }}">
                                    {{ form :: select('status_id' ,$status, null , ['id' => 'status_id', 'class' =>'form-control'] ) }}
                                </div>


                                <div class="form-group{{ $errors->has('contact') ? 'has-error' : ''  }}">
                                    {{ form :: select('contact_id',$contacts , null , ['id' => 'contact_id', 'class' =>'form-control'] ) }}
                                </div>


                                {{ Form::submit('Save'),['class' => 'btn btn-primary'] }}
                                {!! Form::close() !!}

                            </div>
                        @endif
                    @else
                        <p>Login PLEASE</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
