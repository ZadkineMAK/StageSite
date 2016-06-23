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
                                <ol>
                                    @foreach($users as $gebruiker)
                                        <li><a href="{{ url('admin/gebruiker', $gebruiker->id)  }}">{{$gebruiker->contact->surname }} {{$gebruiker->contact->insertion }} {{$gebruiker->contact->familyname }} </a></li>
                                    @endforeach
                                </ol>
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

{{--<li><a href="{{ route('admin.gebruiker.show', $gebruiker->id) }}">{{$gebruiker->contact->surname }} {{$gebruiker->contact->insertion }} {{$gebruiker->contact->familyname }} </a></li>--}}