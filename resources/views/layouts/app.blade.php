<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'gestion des marché') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/material/materialize.min.css') }}" rel="stylesheet"> -->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm  bg-dark">
            <div class="container">
                <div>
                        <img class="images" style="height: 25%; width: 25%" src="{{ asset('images/came.gif') }}">
                </div>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <i class="material-icons" style="color:darkturquoise; size:45px"> home </i>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>

                            @endif
                        @else
                        <li class="nav-item nav-item dropdown">
                            <a id="navbarDropdown" class="navbar-brand nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre href="{{ route('marches.create') }}">
                                <span>{{ __('Marchés') }}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown" >

                                    <a class="dropdown-item" href="{{ route('marches.create') }}">
                                      <div class="d-flex"><i class="material-icons" style="color:blue; margin-left: 2">add</i>  <span style="color:cyan">{{ __('Créer') }}</span></div>
                                    </a>
                                    <a class="dropdown-item" href="{{ route('marches.index') }}">
                                            <div class="d-md-inline-flex"><i class="material-icons" style="color:blue">list</i>  <span style="color:cyan">{{ __('Liste') }}</span></div>
                                    </a>
                                    <a class="dropdown-item" href="{{ route('marches.index') }}">
                                            <div class="d-md-inline-flex"><i class="material-icons" style="color:blue">list</i>  <span style="color:cyan">{{ __('Les Marchés Validés') }}</span></div>
                                    </a>
                            </div>

                        </li>
                      <li class="nav-item nav-item dropdown">
                            <a id="navbarDropdown" class="navbar-brand nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre href="{{ route('marches.create') }}">
                                <span>{{ __('Prestataires') }}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown" >

                                    <a class="dropdown-item" href="{{ route('prestataires.create') }}">
                                            <div class="d-md-inline-flex"><i class="material-icons" style="color:blue">add</i>  <span style="color:cyan">{{ __('Ajouter') }}</span></div>
                                    </a>
                                    <a class="dropdown-item" href="{{ route('prestataires.index') }}">
                                           <div class="d-md-inline-flex"> <i class="material-icons" style="color:blue">list</i>  <span style="color:cyan">{{ __('Liste') }}</span></div>
                                    </a>

                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               <i class="material-icons" style="color:aqua">notifications </i> <span style="color: yellow">10</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown" >

                                        <a class="dropdown-item" href="{{ route('marches.index') }}">
                                               <span style="color:cyan">{{ __('Les Nouveaux Marchés') }}</span> <span style="color:chartreuse">3</span>
                                        </a>

                                        <a class="dropdown-item" href="{{ route('marches.index') }}">
                                                <span style="color:cyan">{{ __('Les Marchés à Livrer') }}</span> <span style="color:red">3</span>
                                        </a>

                                        <a class="dropdown-item" href="{{ route('marches.index') }}">
                                                <span style="color:cyan">{{ __('Les Marchés Validés') }}</span> <span style="color:green">2</span>
                                        </a>
                            </div>
                        </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')


            </main>
    </div>
   <!-- <script src="{{ asset('js/material/materialize.min.js') }}" defer></script> -->
    <script src="{{ asset('js/jequery-3.4.1.min.js') }}" defer></script>
    <script src="{{ asset('js/jequery-3.4.1.js') }}" defer></script>
</body>
<script src="https://kit.fontawesome.com/yourcode.js"></script>
</html>
