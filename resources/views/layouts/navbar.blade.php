@extends('layouts.main')

@section('navbar')

       <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#toggle-on" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}">Inicio</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="toggle-on">

                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/eventos') }}">Eventos<span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Bandas</a></li>                                
                    </ul>

                    <!-- usuario invitado / usuario logueado -->
                    @if(!Auth::check()) 

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ url('/ingreso') }}">Ingresar</a></li>
                        <li><a href="{{ url('/registro') }}">Registrarse</a></li>       
                    </ul>

                    @else
                    <p class="navbar-text navbar-right">Logueado con <i>{{ Auth::user()->correo }}</i></p>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ url('/desloguear') }}">Desloguear</a></li>       
                    </ul>

                    @endif

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <!-- Jumbotron -->
        <div class="jumbotron" id="main-jumbo">
            <h1>CÓRDOBA ROOTS</h1>
            <p>Apoyando el reggae de córdoba...</p>
        </div>

@endsection