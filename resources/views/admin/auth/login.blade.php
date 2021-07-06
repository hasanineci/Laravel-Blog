<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Blog Sayfam</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="{{ url('login') }}" class="h1"><b>Admin</b>Login</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Yönetim Peneli Giriş</p>

        @if ( session('error') )
        <div class="alert alert-danger">
          {{ session('error') }}
        </div>
        @endif

        <form action="" method="post">
          @csrf
          <div class="input-group mb-3">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
            <input type="email" name="email" class="form-control" placeholder="Email">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            <input type="password" name="password" class="form-control" placeholder="Password">
          </div>
          <div class="row mt-5">
            <div class="col-6">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Beni Hatırla
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-6">
              <button type="submit" class="btn btn-primary btn-block">Oturum Aç</button>
            </div><!-- /.col -->
          </div>
        </form>
      </div><!-- /.card-body -->
    </div><!-- /.card -->
  </div><!-- /.login-box -->

  <!-- jQuery -->
  <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>

</html>