@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    @if(Auth::user())
                        <div class="panel-heading">
                            <h1>Aangesloten scholen</h1>
                        </div>
                        <div class="panel-body">
                            @foreach($schools as $school)
                                <div class="well">
                                    {{--<a href="{{ $school->school_id }}"> {{ $school->school->name }}</a>--}}
                                    <a href="{{ route('school.show', $school->id) }}">
                                        {{ $school->name }}
                                    </a>
                                    {{--<a href="{{ route('contact.destroy', $school->id) }}" data-token="{{ csrf_token() }}" class="delete">Verwijderen</a>--}}
                                    {{--<a href="{{ route('contact.edit', $school->id) }}">Wijzig</a>--}}
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p>ᕕ( ᐛ )ᕗ Login PLEASE</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

