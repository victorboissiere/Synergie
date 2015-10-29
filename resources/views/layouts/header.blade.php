<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width initial-scale=1" name="viewport">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <title>Synergie</title>
    <meta content="Hello, I'm Naveen, a freelance front-end developer and UI designer. Check out my projects on GitHub"
          name="description">
    <meta content="width=device-width, initial-scale=0.7, user-scalable=0" name="viewport">
    <!--Import materialize.css-->
    <link href="css/materialize.css" media="screen,projection" rel=
    "stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="http://naveenshaji.github.io/material/material//blog/" rel=
    "canonical">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nicescroll.min.js">
    </script>
    <script src="js/jquery.nicescroll.plus.js">
    </script>
    <script src="js/velocity.min.js">
    </script>
    <!--<script src="js/skrollr.min.js">
    </script>!-->
    <script src="js/jquery.scrolline.js">
    </script>
    <script src="js/modernizr.js" type="text/javascript">
    </script>
    <script src="js/materialize.min.js" type="text/javascript">
    </script>
    <script src="js/main.js" type="text/javascript">
    </script>
</head>
<body class="cyan lighten-5">
<header class="site-header">
    <div class="navbar-fixed">
        <nav class="cyan darken-2 waves-effect waves-light">
            <div class="nav-wrapper">
                <div class="container">
                    <a class="brand-logo" href="{{ route('home') }}"><i class="mdi-communication-chat"></i> synergie</a>
                    <ul class="right side-nav" id="nav-mobile">
                        <li>
                            <a href="{{ route('home') }}">Accueil</a>
                        </li>
                        <li>
                            <a href="{{ route('blog')}}">Blog</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}">À propos</a>
                        </li>
                        <li>
                            <a href="http://github.com/victorboissiere/Synergie" target="_blank">GitHub</a>
                        </li>
                        @if (env('APP_ENV') == 'development' || !Auth::guest())
                            <li>
                                <a href="{{ route('login') }}">Admin</a>
                            </li>
                        @endif
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
<footer class="page-footer cyan darken-2">
    <div class="container">
        <div class="row">
            <div class="col l3 m6 s12">
                <h5 class="white-text">social-links</h5>
                <ul>
                    <li>
                        <a class="grey-text text-lighten-3" href="http://facebook.com/xSF.AzraeL/" target="_blank">
                            <i class="mdi-social-person-add"></i>
                            Facebook</a>
                    </li>
                    <li>
                        <a class="grey-text text-lighten-3"
                           href="https://plus.google.com/u/0/114363400342894379257/posts" target="_blank">
                            <i class="mdi-social-plus-one"></i>
                            Google+</a>
                    </li>
                    <li>
                        <a class="grey-text text-lighten-3" href="http://github.com/naveenshaji/" target="_blank">
                            <i class="mdi-notification-adb"></i>
                            GitHub</a>
                    </li>
                </ul>
            </div>
            <div class="col l3 m6 s12">
                <h5 class="white-text">where-i-live</h5>

                <p class="grey-text text-lighten-4">TC 11/1827<br>
                    West Cliff Gardens 35<br>
                    Kowdiar, Trivandrum<br>
                    &nbsp;</p>
            </div>
            <div class="col l3 m6 s12">
                <h5 class="white-text">Contact</h5>

                <p class="grey-text text-lighten-4">+91-9496-74-7070<br>
                    contact@tivbroc.com<br>
                    contact@canan.training</p>
            </div>
            <div class="col l3 m6 s12">
                <h5 class="white-text">naveenshaji</h5>

                <p class="grey-text text-lighten-4">Converting caffeine to
                    code since 1997. I love web design. xoxo.</p>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © {{ date("Y") }} Synergie <a class="grey-text text-lighten-4 right" href="http://epita.fr/"
                                          target="_blank">EPITA</a>
        </div>
    </div>
</footer>
</body>
</html>