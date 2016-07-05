
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>{{ get_global_settings('website_title') }}</title>

  <!-- Bootstrap Core CSS -->
  <link href="{{ asset('frontend-theme/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="{{ asset('frontend-theme/css/clean-blog.min.css') }}" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href='//fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  {!! get_global_settings('code_header') !!}

  @yield('head')
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">{{ get_global_settings('website_title') }}</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="{{ route('home') }}">Accueil</a>
          </li>
          <li>
            <a href="{{ route('blog') }}">Blog</a>
          </li>
          <li>
            <a href="{{ route('testimonials') }}">Témoignages</a>
          </li>
          <li>
            <a href="{{ route('about') }}">À propos</a>
          </li>
          @if (env('APP_ENV') == 'development' || !Auth::guest())
            <li>
              <a href="{{ route('login') }}">ADMIN</a>
            </li>
          @endif
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>

  <!-- Page Header -->
  <!-- Set your background image for this header on the line below. -->
  <header class="intro-header" style="background-image: url('{{ $image }}')">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          @if ($type == 'post')
            <div class="post-heading">
              <h1>{{ $heading }}</h1>
              <h2 class="subheading">{{ $subheading }}</h2>
              <span class="meta">{!! $meta !!}</span>
            </div>
          @else
            <div class="site-heading">
              <h1>{{ $heading }}</h1>
              <hr class="small">
              <span class="subheading">{{ $subheading }}</span>
            </div>
          @endif
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    @yield('page')
  </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          <ul class="list-inline text-center">
            <li>
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li>
              <a href="https://github.com/victorboissiere/synergie" target="_blank">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Synergie</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="{{ asset('frontend-theme/js/jquery.js') }}"></script>

  <script src="{{ asset('frontend-theme/js/bootstrap.min.js') }}"></script>

  <script src="{{ asset('frontend-theme/js/clean-blog.min.js') }}"></script>


  {!! get_global_settings('code_footer') !!}

  @yield('scripts')
</body>

</html>
