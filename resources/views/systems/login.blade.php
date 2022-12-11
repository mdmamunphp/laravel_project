<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ ('public/backend/asset/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ ('public/backend/asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ ('public/backend/asset/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<!--<body class="hold-transition login-page" class="hero-image"style="background-image:url('{{('public/admin/bg/bg-1.jpg')}}');background-repeat: no-repeat, repeat; background-position: center;">-->
    <body class="hold-transition login-page" class="hero-image">
    {{--  <div class="login-box" class="hero-image"style="background-image:url('{{('public/admin/bg/bg-1.jpg')}}');background-repeat: no-repeat, repeat; height:100%;weigth:100%;" >  --}}
        <div class="login-box" >
    {{--  <div class="login-logo">
        <a href="../../index2.html"><b>Sales Managemenet</b></a>
    </div>  --}}
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body">
         <p class="login-box-msg">Sales Managemenet</p>  

        <form action="login" method="post">
            @csrf
            <div class="input-group mb-3">
            <input type="text" name="username"class="form-control" value="admin@gmail.com" >
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-envelope"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input type="text" name="password" class="form-control" value="12345678" >
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-8">
                <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                    Remember Me
                </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
            </div>
        </form>

        {{--  <div class="social-auth-links text-center mb-3">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
            </a>
            <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
            </a>
        </div>  --}}
        <!-- /.social-auth-links -->

        {{--  <p class="mb-1">
            <a href="forgot-password.html">I forgot my password</a>
        </p>
        <p class="mb-0">
            <a href="register.html" class="text-center">Register a new membership</a>
        </p>  --}}
        </div>
        <!-- /.login-card-body -->
    </div>
    </div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ ('public/backend/asset/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ ('public/backend/asset/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ ('public/backend/asset/dist/js/adminlte.min.js') }}"></script>


</body>
</html>
