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
                        <h3>stage content</h3>
                        {{--Moet nog afgemaakt worden, Praktijkopleider stage toevoegen--}}
                        @if(Auth::user()->role->id == 3)
                            <button>Voeg stage toe</button>
                        @endif
                        {{--end comment--}}
                        @foreach($stages as $stage)
                            <div class="well">
                                Surename: {{ $stage->contact->surname }}<br/>
                                Startdate: {{ $stage->startdate }}<br/>
                                Enddate: {{ $stage->enddate }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection