
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin EMR | Recover Password</title>

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
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Admin EMR </b>KN</a>
    </div>
    <div class="card-body">
        <p class="login-box-msg">@lang('You are only one step a way from your new password, recover your password now.')</p>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p class="text-justify text-danger">{{ $error }}</p>
            @endforeach
        @endif
        @if (Session::has('error'))
            <p class="text-justify text-danger">{{ Session::get('error') }}</p>
        @endif
        @if (Session::has('success'))
            <p class="text-justify text-success">{{ Session::get('success') }}</p>
        @endif
        <form action="{{ route('auth.recovery.post') }}" method="post"  id="form-1">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="form-group">
                <div class="input-group mb-1">
                    <input type="text" id="password" name="password" class="form-control" placeholder="Mật khẩu mới">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <div class="input-group mb-1">
                    <input type="text" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Nhập lại mật khẩu">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <span class="form-message"></span>
            </div>

            <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Đổi mật khẩu</button>
            </div>
            <!-- /.col -->
            </div>
        </form>

        <p class="mt-3 mb-1">
            <a href="{{ route('auth.login.get') }}">Đăng nhập</a>
        </p>
    </div>
    <!-- /.login-card-body -->
  </div>
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
        Validator.isRequired("#password", "@lang('Please fill out this field')"),
        Validator.isRequired("#password_confirmation", "@lang('Please fill out this field')"),
        Validator.validatePassword("#password", '@lang('Minimum eight and maximum 50 characters, at least one uppercase letter, one lowercase letter, one number and one special character')'),
        Validator.isConfirmed("#password_confirmation", function() {
            return document.querySelector('#form-1 #password').value;
        }, '@lang('Re-entered password is incorrect')'),
        ],
    });
</script>
</body>
</html>
