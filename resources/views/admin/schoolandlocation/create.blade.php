@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    @if(Auth::user())
                        @if(Auth::user()->role_id == 1)
                            <div class="panel-heading">
                                <h1>Admin panel</h1>
                                <h2>{{$school->name}}</h2>
                                <div class="panel-body">
                                    <h3>Add location</h3>

                                    {!! Form::open(['route' => 'admin.schoolandlocation.store', 'method' => 'POST']) !!}
                                    <div class="form-group">
                                        {!! Form::hidden('school_id', $school->id, ['class' => 'form-control']) !!}
                                    </div>
                                    @include('errors.validateError', ['errorName' => 'name'])

                                    <div class="form-group">
                                        {!! Form::label('address', 'Straatnaam en huisnummer:') !!}
                                        {!! Form::text('address', null, ['class' => 'form-control']) !!}
                                    </div>
                                    @include('errors.validateError', ['errorName' => 'address'])

                                    <div class="form-group">
                                        {!! Form::label('zipcode', 'Postcode:') !!}
                                        {!! Form::text('zipcode', null, ['class' => 'form-control']) !!}
                                    </div>
                                    @include('errors.validateError', ['errorName' => 'zipcode'])

                                    <div class="form-group">
                                        {!! Form::label('city', 'Stad:') !!}
                                        {!! Form::text('city', null, ['class' => 'form-control']) !!}
                                    </div>
                                    @include('errors.validateError', ['errorName' => 'city'])


                                    <div class="form-group">
                                        {!! Form::submit('Verstuur', array('class' => 'btn btn-primary form-control')) !!}
                                    </div>
                                    {!! Form::close() !!}

                                </div>
                            </div>

                        @endif
                    @else
                        <p>ᕕ( ᐛ )ᕗ Login PLEASE</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

