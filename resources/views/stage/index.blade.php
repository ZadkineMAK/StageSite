@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">


                    @if(Auth::user())

                        <div class="panel-heading">
                            <h1>Zoek een stage</h1>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST"
                                  action="{{ route('stage.search') }}">
                                {{ csrf_field() }}

                                <div class="form-group"{{$errors->has('crebo')? ' has-error' : '' }}>
                                    {{Form::label('BEROEP/OPLEIDING') }}
                                    {{ Form::select('crebo', $crebo, null, ['class' => 'search form-control', 'mutliple' => 'multiple']) }}
                                    @if ($errors->has('core'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('core') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group"{{$errors->has('plaats')? ' has-error' : '' }}>
                                    {{Form::label('PLAATS/PROVINCIE/LAND') }}

                                    {{ Form::select('city', $steden, null, ['class' => 'search form-control', 'mutliple' => 'multiple']) }}
                                    @if ($errors->has('plaats'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('plaats') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    {{ Form::submit('Zoek', ['class' => 'btn btn-primary']) }}
                                    <a class="btn btn-link" href="{{ url('#') }}"></a>
                                </div>
                            </form>
                            @if(Auth::user()->role_id == 5)

                                <h3><a class="btn btn-primary" href="{{ url('stage/create') }}">Voeg stage toe</a></h3>
                            @endif
                        </div>

                    @else
                        <h2>you have to login </h2>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection