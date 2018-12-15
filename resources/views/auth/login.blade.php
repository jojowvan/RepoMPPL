<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistem Informasi Manajemen dan Keuangan</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="{{ asset('images/school.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/scss/style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
  </head>
  <body class="bg-dark">
    <div class="sufee-login d-flex align-content-center flex-wrap">
      <div class="container">
        <div class="login-content">
          <div class="login-logo">
            <!-- <a href="index.html"> -->
              <img class="align-content" src="{{ asset('images/simakeu.png') }}" alt="">
            <!-- </a> -->
          </div>
          <div class="login-form">
            <form method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}
              <div class="form-group">
                <label>Alamat Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group">
                <label>Kata Sandi</label>
                <input type="password" class="form-control" name="password" placeholder="Kata Sandi">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
              <div class="checkbox">
                <label>
                    <!-- <input type="checkbox"> Remember Me -->
                </label>
              </div>
              <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Masuk</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Script -->
    <script src="{{ asset('assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
  </body>
</html>
