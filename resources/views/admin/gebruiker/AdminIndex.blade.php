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
                                    <theader><tr>
                                            <th>Naam</th>
                                            <th>Rechten</th>
                                            <th>Wijzig</th>
                                            <th>Verwijderen</th>
                                        </tr></theader>
                                    <tbody>
                                    @foreach($users as $gebruiker)
                                        <tr>
                                            <td>
                                                <p>{{$gebruiker->contact->surname}} {{$gebruiker->contact->insertion}} {{$gebruiker->contact->familyname}}</p>
                                            </td>
                                            <td>
                                                <p>{{ $gebruiker->role->name }}</p>
                                            </td>
                                            <td>
                                                <a href="{{ url('admin/gebruiker', $gebruiker->contact_id)  }}">Wijzig</a>
                                            </td>
                                            @if($gebruiker->role_id != 1)
                                            <td>
                                            {!! Form::open(array('route' => array('admin.gebruiker.destroy', $gebruiker->id), 'method' => 'delete')) !!}

                                            {!! Form::submit('Verwijderen') !!}
                                            {!! Form::close() !!}
                                            </td>
                                        </tr>
                                        @endif
                                        @if($gebruiker->role_id == 1)
                                            <td>
                                                <p>Admin (Niet verwijderbaar)</p>
                                            </td>
                                            @endif
                                    @endforeach
                                    </tbody>
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
