@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome</div>

                    <div class="panel-body">
                        Your Application's Landing Page.

                        @if(Auth::user()->role->id == 1)
                            <p>You are a admin</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
