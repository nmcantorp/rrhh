<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', '"SEIP" RR.HH')</title>
    <link type="image/x-icon" href="{{ asset('images/favicon.ico') }}" rel="icon"/>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/skins/blue.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0 !important;background-color: white !important;">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('images/logo.png') }}" class="img-responsive" alt="Responsive image" style="width:22%">
                    </a>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li><a href="{{ url('/home') }}">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Administraci&oacute;n <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Usuarios</a></li>
                                <li><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>Organizaciones</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div id="subheader">
        <div class="row">
            <div class="twelve columns">
                <p class="text-center">
                     <font style="font-size:25px; font-weight: bold; color:#FFFFFF;">@yield('subtitle','Panel de Administraci&oacute;n')</font>
                </p>
            </div>
        </div>
    </div>
    @yield('content')


    <!-- FOOOTER
================================================== -->
<div id="footer">
    <footer class="row">
    <p class="back-top floatright">
        <a href="#top"><span></span></a>
    </p>
    <div class="four columns">
        <h1>Nuestra Misi&oacute;n</h1>
         Nuestro objetivo es ayudar a los clientes de todo el mundo a desarrollar las mejores pol&iacute;ticas,
         pr&aacute;cticas y procesos de RR.HH, para que puedan desempe&ntilde;ar f&aacute;cilmente las tareas
         diarias y alinear los RR.HH con la organizaci&oacute;n, armonizando la gesti&oacute;n de personas a
         todos los niveles.
    </div>
    <div class="four columns">
        <h1>Nuestra Visi&oacute;n</h1>
        El &oacute;ptimo desarrollo de nuestra tecnolog&iacute;a para los RR.HH proporciona a los
        clientes la mejor forma de disfrutar de un entorno en constante evoluci&oacute;n y adaptado a
        sus prop&oacute;sitos. Esta tecnolog&iacute;a nos permite ofrecer servicios avanzados de RR.HH
        en la nube para compa&ntilde;&iacute;as de todos los tama&ntilde;os y estructuras alrededor de
        todo el mundo.
    </div>
    <div class="four columns">
        <h1>Nuestro Esp&iacute;ritu</h1>
        Nuestros procesos de innovaci&oacute;n integran las necesidades de nuestros clientes y responden
        a los retos planteados por la complejidad actual, detectando las tendencias emergentes e
        incorporando las mejores pr&aacute;cticas del mercado a nuestra soluci&oacute;n.
    </div>
    </footer>
</div>
<div class="copyright">
    <div class="row">
        <div class="six columns">
             <span class="small">&copy; Copyright 2016 "SEIP" RR.HH</span>
        </div>
        <div class="six columns">
            <span class="small floatright">Dise&ntilde;ado por:&nbsp;&nbsp;<a href="http://www.sialen.com/" target="_blank"><font style="font-size:12px; font-weight: bold; color:#3399FF;">Sialen Ingenieros</font></a></span>
        </div>
    </div>
</div>
    <!-- JavaScripts -->
    <script src="{{ asset('plugins/jquery/js/jquery-2.2.3.js') }}" ></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}" ></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
