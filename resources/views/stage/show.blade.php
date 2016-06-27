@extends('layouts.app')
{{--{{dd($stage)}}--}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Welcome stage home page</h1>
                    </div>
                    <div class="panel-body">
                        <h3>stage informatie</h3>
                        {{ $stage->contact->companie->name }}
                        {{ $stage->contact->companie->address }}
                        {{ $stage->contact->companie->city }}
                        {{ $stage->contact->companie->zipcode }}
                        @if(Auth::user()->role->id == 1)
                            {!! Form::open(['route' => ['stage.destroy',$stage->id] , 'method' =>'DELETE']) !!}


                            {{ Form::submit('Delete'),['class' => 'btn btn-primary'] }}

                            {!! Form::close() !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection





