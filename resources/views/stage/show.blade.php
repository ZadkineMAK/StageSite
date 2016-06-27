@extends('layouts.app')
{{--{{dd($stage)}}--}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1><b>{{ $stage->contact->companie->name }}</b></h1>
                    </div>
                    <div class="panel-body">
                        <h3>stage informatie</h3>
                        <address>
                            <strong>{{ $stage->contact->companie->name }}</strong><br>
                            {{ $stage->contact->companie->address }}<br>
                            {{ $stage->contact->companie->city }} {{ $stage->contact->companie->zipcode }}<br>
                            <abbr title="Phone">T:</abbr> {{ $stage->contact->companie->phone }}
                            <abbr title="email">E:</abbr> {{ $stage->contact->companie->email }}
                        </address>
                        <h3>Stage omschrijving</h3>
                        <p class="stage-description">
                            {{$stage->contact->companie->description}}
                        </p>

                            @if(Auth::user()->role->id == 1)
                                {!! Form::open(['route' => ['stage.destroy',$stage->id] , 'method' =>'DELETE']) !!}


                            {{ Form::submit('Delete'),['class' => 'btn btn-primary'] }}

                                {!! Form::close() !!}
                            @endif

                    <div class="comment-placement">
                        <h4>Indien je hier stage hebt gelopen, laat ons weten wat je er van vond!</h4>
                        @if(Auth::User()->role_id != 2 && 4 && 7 )
                            {!! Form::open([ 'route' => 'comment.store', 'method' => 'POST'])!!}
                            {!! Form::label('review','Comment:') !!}
                            {!! Form::text('review', null, ['class' => 'form-control' , 'placeholder' => 'Laat vooral weten welke tools je hebt gebruikt en wat je allemaal geleerd hebt!']) !!}

                            {!! Form::label('grade','Cijfer:') !!}
                            {!! Form::text('grade', null, ['class' => 'form-control']) !!}
                            {{ Form::hidden('stage_user_id', '1') }}

                            {!! Form::submit('Verstuur comment') !!}

                            {!! Form::close() !!}
                        @endif
                    </div>
                        <div class="">
                            <h2>Opmerkingen en bevindingen</h2>
                            @foreach($comments as $comment)
                            <hr>
                            <h3>Door: {{$comment->stage_user_id}}</h3>
                            <p><i>{{$comment->review}}</i></p>
                                <span>Beoordeling: {{$comment->grade}}</span>
                                @endforeach
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection





