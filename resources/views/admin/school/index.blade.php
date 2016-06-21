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
                                <h2>School</h2>
                                <div class="panel-body">
                                    @foreach($schools as $school)
                                        <div class="well">
                                            <a href="{{ route('admin.school.show', $school->id) }}">
                                                {{ $school->name }}
                                            </a>


                                        </div>
                                    @endforeach
                                </div>
                                <a href="{{ route('admin.school.create') }}" class="btn btn-primary form-control">Create school</a>
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
