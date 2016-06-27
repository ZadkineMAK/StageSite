@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Profiel van {{ Auth::user()->contact->surname }} {{ Auth::user()->contact->insertion }} {{ Auth::user()->contact->familyname }} </div>
                    <div class="panel-body">
                        {!! Form::open(['url'=>'profile/update', 'method'=>'PUT']) !!}
                        <div class="form-group">
                            {!! Form::label('name','Voornaam:') !!}
                            {!! Form::text('surname',Auth::user()->contact->surname, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('tussenvoegsel','Tussenvoegsel:') !!}
                            {!! Form::text('insertion',Auth::user()->contact->insertion, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('achternaam','Achternaam:') !!}
                            {!! Form::text('familyname',Auth::user()->contact->familyname, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email','E-Mail:') !!}
                            {!! Form::text('email',Auth::user()->contact->email, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('telefoon','Telefoon:') !!}
                            {!! Form::text('phone',Auth::user()->contact->phone, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('mobiel','Mobiel:') !!}
                            {!! Form::text('mobile',Auth::user()->contact->mobile, ['class' => 'form-control']) !!}
                        </div>
                        {!! Form::submit('verstuur') !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


