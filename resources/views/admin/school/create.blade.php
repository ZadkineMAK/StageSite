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
                                <h2>Create school</h2>
                                <div class="panel-body">
                                    {!! Form::open(['route' => 'admin.school.store', 'method' => 'POST']) !!}

                                    <div class="form-group">
                                        {!! Form::label('name', 'Schoolnaam:') !!}
                                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                    </div>
                                    @include('errors.validateError', ['errorName' => 'name'])


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

