<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/yourcode.js"></script>
        <link rel="stylesheet" href="{{ asset('css/style.css') }} " defer>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/material/materialize.min.css') }}" rel="stylesheet"> -->

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif

                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="card">
                        <h2 class="card-header text-center font-weight-bold text-uppercase py-4" style="color: cyan">Système de Gestion des Marchés Du MINADER</h2>
                     <div class="card-body title m-b-md">
                            <div>
                                    <img class="images" style="height: 25%; width: 25%" src="{{ asset('images/logo.jpg') }}">
                            </div>
                         Laravel

                     </div>
                </div>

            </div>
        </div>
        <!-- <script src="{{ asset('js/jequery-3.4.1.min.js') }}" defer></script>
        <script src="{{ asset('js/jequery-3.4.1.js') }}" defer></script> -->
    </body>
</html>
