<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width initial-scale=1" name="viewport">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <title>Synergie - Admin</title>
    <meta content="width=device-width, initial-scale=0.7, user-scalable=0" name="viewport">
    <!--Import materialize.css-->
    <link href="{{ asset('css/materialize.css') }}" media="screen,projection" rel=
    "stylesheet" type="text/css">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-theme.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="http://naveenshaji.github.io/material/material//blog/" rel=
    "canonical">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nicescroll.min.js') }}">
    </script>
    <script src="{{ asset('js/jquery.nicescroll.plus.js') }}">
    </script>
    <script src="{{ asset('js/velocity.min.js') }}">
    </script>
    <!--<script src="js/skrollr.min.js">
    </script>!-->
    <script src="{{ asset('js/jquery.scrolline.js') }}">
    </script>
    <script src="{{ asset('js/modernizr.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('js/materialize.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('js/main.js') }}" type="text/javascript">
    </script>
</head>
<body class="cyan lighten-5">
<header class="site-header">
    <div class="navbar-fixed">
        <nav class="blue-grey darken-4 waves-effect waves-light">
            <div class="nav-wrapper">
                <div class="container">
                    <a class="brand-logo" href="{{ route('home') }}"><i class="mdi-communication-chat"></i> synergie</a>
                    <ul class="right side-nav" id="nav-mobile">
                        <li>
                            <a href="{{ route('dashboard') }}">Admin</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}">Retour au site</a>
                        </li>
                        <li>
                            <a href="{{ url('auth/logout') }}">Se déconnecter</a>
                        </li>
                    </ul>
                    <a class="button-collapse" data-activates="nav-mobile" href="#"><i class="mdi-navigation-menu"></i></a>
                </div>
            </div>
        </nav>
    </div>
</header>
<a class=
   "darken-2 scrollToTop btn-floating btn-large waves-effect waves-light cyan"><i
            class="mdi-hardware-keyboard-arrow-up"></i></a>

<div id="page-wrap">
    <div id="main-content">
        <div id="guts">
            <div class="container">
                @yield('page')
            </div>
        </div>
    </div>
</div>
<br>
@yield('scripts')
</body>
</html>