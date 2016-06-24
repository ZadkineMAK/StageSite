@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Welcome stage home page</h1>
                    </div>
                    <div class="panel-body">
                        <h3>stage plaats</h3>

                        @foreach($stages as $stage)
                            <div class="well">
                                <h2><a href="{{ route('stage.show', $stage->contact->companie->id) }}">{{ $stage->contact->companie->name }}</a></h2>
                            </div>
                        @endforeach

                            <h3><a href="{{ url('stage') }}">Terug naar zoeken</a></h3>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection