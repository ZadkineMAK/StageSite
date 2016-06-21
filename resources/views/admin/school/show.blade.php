@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Aangesloten scholen</h1>
                    </div>
                    <div class="panel-body">
                        <div class="well">
                            <h2>{{ $school->name }}</h2>
                            @foreach($school->locations as $location)
                                <div class="well">
                                    <p>
                                        {{ $location->full_address }}

                                        {!! Form::open(array('route' => array('admin.schoolandlocation.destroy', $location->id), 'method' => 'delete')) !!}

                                        {!! Form::submit('Verwijderen') !!}
                                        {!! Form::close() !!}

                                        {!! Form::open(array('route' => array('admin.schoolandlocation.edit', $location->id), 'method' => 'GET')) !!}
                                        {!! Form::submit('Aanpassen') !!}
                                        {!! Form::close() !!}
                                    </p>
                                </div>
                            @endforeach
                            <a href="{{ route('admin.schoolandlocation.create', $school->id) }}"
                               class="btn btn-primary form-control">Add location</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
