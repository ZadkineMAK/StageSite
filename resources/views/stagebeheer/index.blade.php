@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    @if(Auth::user())
                        @if(Auth::user()->role_id == 1 || 5)
                            <div class="panel-heading">
                                <h1>Stage beheer</h1>
                                <p><a href="#">Voeg tool toe</a></p>
                                <ul>
                                    @foreach($tools as $tool)
                                        <li><a href="#">{{$tool->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>


                        @endif
                    @else
                        <p>Please log in</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

