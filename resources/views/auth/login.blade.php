
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin EMR | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Admin EMR </b>KN</a>
    </div>
    <div class="card-body">
        <p class="login-box-msg">Đăng nhập để bắt đầu</p>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p class="text-justify text-danger">{{ $error }}</p>
            @endforeach
        @endif
        @if (Session::has('success'))
            <p class="text-justify text-success">{{ Session::get('success') }}</p>
        @endif
        <form action="{{ route('auth.login.post') }}" method="post" id="form-1">
            @csrf
            <div class="form-group">
                <div class="input-group mb-1">
                    <input id="username" type="email" name="email" class="form-control" placeholder="Địa chỉ email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <div class="input-group mb-1">
                  <input id="password" type="text" name="password" class="form-control" placeholder="Mật khẩu">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div>
                </div>
                <span class="form-message"></span>
            </div>
          <div class="row">
            <div class="col-6">
              <div class="icheck-primary">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">
                    Ghi nhớ
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-6">
                <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
    
        <p class="mb-1">
            <a href="{{ route('auth.forgot.get') }}">Quên mật khẩu ?</a>
        </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/dist/js/adminlte.min.js"></script>
<!-- Validation form submit -->
<script src="/assets/js/validation.js"></script>

<script>
    Validator({
        form: "#form-1",
        formGroupSelector: ".form-group",
        errorSelector: ".form-message",
        rules: [
            Validator.isRequired("#username", "@lang('Please fill out this field')"),
            Validator.isRequired("#password", "@lang('Please fill out this field')"),
            Validator.isEmail("#username", "@lang('You have typed an invalid email address')"),
        ],
    });
</script>
</body>
</html>
