@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Profiel van {{ Auth::user()->contact->surname }} {{ Auth::user()->contact->insertion }} {{ Auth::user()->contact->familyname }} </div>
                    <div class="panel-body">
                        {!! Form::open() !!}
                        <div class="form-group">
                            {!! Form::label('name','Voornaam:') !!}
                            {!! Form::text('name',Auth::user()->contact->surname, ['class' => 'form-control', 'readonly']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('tussenvoegsel','Tussenvoegsel:') !!}
                            {!! Form::text('tussenvoegsel',Auth::user()->contact->insertion, ['class' => 'form-control', 'readonly']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('achternaam','Achternaam:') !!}
                            {!! Form::text('achternaam',Auth::user()->contact->familyname, ['class' => 'form-control', 'readonly']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email','E-Mail:') !!}
                            {!! Form::text('email',Auth::user()->contact->email, ['class' => 'form-control', 'readonly']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('telefoon','Telefoon:') !!}
                            {!! Form::text('telefoon',Auth::user()->contact->phone, ['class' => 'form-control', 'readonly']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('mobiel','Mobiel:') !!}
                            {!! Form::text('mobiel',Auth::user()->contact->mobile, ['class' => 'form-control', 'readonly']) !!}
                        </div>
                            <a href="{{ url('profile/edit/id') }}">Wijzigen</a>
                        {!! Form::close() !!}
                        <h2>School gegevens</h2>
                        {!! Form::open() !!}
                        <div class="form-group">
                            {!! Form::label('name','School:') !!}
                            {!! Form::text('name','', ['class' => 'form-control', 'readonly']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('name','Opleding:') !!}
                            {!! Form::text('name','Zadkine', ['class' => 'form-control', 'readonly']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('name','Periode:') !!}
                            {!! Form::text('name','Zadkine', ['class' => 'form-control', 'readonly']) !!}
                        </div>
                            <a href="#">Wijzig</a>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
