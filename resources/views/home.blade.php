@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
            <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <img class="images" style="height: 100%; width: 100%" src="{{ asset('images/came.gif') }}">
                        </div>
        
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
        
                            You are logged in!
                            kreierooor
                            gerererer
                            rererhiuh
                        </div>
                    </div>
                </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>

@endsection
