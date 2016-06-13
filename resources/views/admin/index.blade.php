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
                            </div>
                            <div class="list">
                                <ul>
                                    <li><a href="{{ url('admin/school') }}">Scholen</a></li>
                                    <li><a href="{{ url('admin/gebruiker') }}">Gebruikers</a></li>
                                    <li><a href="{{ url('admin/stage') }}">Stages</a></li>
                                </ul>
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

