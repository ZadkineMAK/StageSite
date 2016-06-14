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
                        @foreach($school->locations as $location)
                            <div class="well">
                                <h2>{{ $school->name }} {{ $location->address }}</h2>
                                <p>
                                    {{ $location->full_address }}
                                </p>
                            </div>
                        @endforeach
                        {{--<a href="{{ route('school.show', $school->id) }}">--}}
                        {{--{{ $school->name }}--}}
                        {{--</a>--}}
                        {{--<a href="{{ route('contact.destroy', $school->id) }}" data-token="{{ csrf_token() }}" class="delete">Verwijderen</a>--}}
                        {{--<a href="{{ route('contact.edit', $school->id) }}">Wijzig</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
