<!DOCTYPE html>
<html class="bg-black">
<head>
  <meta charset="UTF-8">
  <title>Admin | Log in</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <link href="{{ asset('admin-theme/css/bootstrap.min.css' ) }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('admin-theme/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('admin-theme/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>
<body class="bg-black">
  <div class="form-box" id="login-box">
    <div class="header">Sign In</div>
    <form action="{{ route('postLogin') }}" method="post">
      {!! csrf_field() !!}
      @include('utilities.forms.errors')
      <div class="body bg-gray">
        @include('utilities.forms.validation', ['space' => false ])

        @include('utilities.forms.input_placeholder', [
          'placeholder' => 'Email',
          'name'        => 'email',
          'type'        => 'email',
          'content'     => old('email')
        ])
        @include('utilities.forms.input_placeholder', [
          'placeholder' => 'Password',
          'name'        => 'password',
          'type'        => 'password',
          'content'     => ''
        ])
      </div>
      <div class="footer">
        <button type="submit" class="btn bg-olive btn-block">Sign me in</button>
      </div>
    </form>
  </div>


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  <script src="{{ asset('admin-thene/js/bootstrap.min.js') }}" type="text/javascript"></script>

</body>
</html>
