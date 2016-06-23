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
                    <div class="panel-heading">Aanpassen profiel </div>
                    <div class="panel-body">
                        {!! Form::open() !!}
                        <div class="form-group">
                            {!! Form::label('name','Voornaam:') !!}
                            {!! Form::text('name',$gebruiker->contact->surname, ['class' => 'form-control', 'readonly']) !!}

                        </div>
                        <div class="form-group">
                            {!! Form::label('name','Tussenvoegsel:') !!}
                            {!! Form::text('name',$gebruiker->contact->insertion, ['class' => 'form-control', 'readonly']) !!}

                        </div>
                        <div class="form-group">
                            {!! Form::label('name','Achternaam:') !!}
                            {!! Form::text('name',$gebruiker->contact->familyname, ['class' => 'form-control', 'readonly']) !!}

                        </div>
                        <div class="form-group">
                            {!! Form::label('name','E-mail:') !!}
                            {!! Form::text('name',$gebruiker->contact->email, ['class' => 'form-control', 'readonly']) !!}

                        </div>
                        <div class="form-group">
                            {!! Form::label('name','Telefoon:') !!}
                            {!! Form::text('name',$gebruiker->contact->phone, ['class' => 'form-control', 'readonly']) !!}

                        </div>
                        <div class="form-group">
                            {!! Form::label('name','Mobiel:') !!}
                            {!! Form::text('name',$gebruiker->contact->mobile, ['class' => 'form-control', 'readonly']) !!}

                        </div>


                        {!! Form::close() !!}
                        {!! Form::open(array('route'=> array ('admin.gebruiker.edit', $gebruiker->contact_id), 'method'=>'GET')) !!}
                        {!! Form::submit('Aanpassen') !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
