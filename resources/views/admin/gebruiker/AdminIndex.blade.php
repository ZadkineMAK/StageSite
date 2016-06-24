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
                                <h2>Gebruikers</h2>
                                <table class="table">
                                    @foreach($users as $gebruiker)
                                        <tr>
                                        <td><li><a href="{{ url('admin/gebruiker', $gebruiker->contact_id)  }}">{{$gebruiker->contact->surname }} {{$gebruiker->contact->insertion }} {{$gebruiker->contact->familyname }} </a></li></td>
                                            <td>
                                            {!! Form::open(array('route' => array('admin.gebruiker.destroy', $gebruiker->id), 'method' => 'delete')) !!}

                                            {!! Form::submit('Verwijderen') !!}
                                            {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
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
