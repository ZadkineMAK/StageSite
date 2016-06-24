@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Aanpassen van profiel </div>
                    <div class="panel-body">
                        {!! Form::model($gebruiker->contact, ['route' => ['admin.gebruiker.update', $gebruiker->contact->id], 'method' => 'put']) !!}
                        <div class="form-group">
                            {!! Form::label('surname','Voornaam:') !!}
                            {!! Form::text('surname', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('insertion','Tussenvoegsel:') !!}
                            {!! Form::text('insertion',null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('familyname','Achternaam:') !!}
                            {!! Form::text('familyname',null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email','E-Mail:') !!}
                            {!! Form::text('email',null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('phone','Telefoon:') !!}
                            {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('mobile','Mobiel:') !!}
                            {!! Form::text('mobile',null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('name','Role:') !!}
                            {!! Form::select('size', array($role), ['class' => 'form-control']) !!}

                        </div>

                        {!! Form::submit('Aanpassen') !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
