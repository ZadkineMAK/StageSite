@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <h1>Tools page</h1>
                    {!! Form::open([ 'route' => 'tool.store', 'method' => 'POST']) !!}
                    {!! Form::label('tool') !!}
                    {!! Form::text('text',null) !!}
                    {!! Form::submit('Create tool') !!}
                    {!! Form:: close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


