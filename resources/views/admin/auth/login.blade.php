<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login to dasboard</title>
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

  <link rel="stylesheet" href="{{ asset('templates/admin/css/login.css') }}">
</head>

<body>
  <div class="login-form">
      <div class="login-face">
        <img src="https://images.forbes.com/media/2007/12/11/fictional/stark.jpg" alt="Tony Stark" />
    </div>
    <section class="form">
        @if(Session::get('msg') != "")
        <p class="alert alert-danger">{{ Session::get('msg') }}</p>
        @endif
        <form class="email-login" action="{{route('admin.login') }}" method="post">
            {{csrf_field()}}
            <div class="form-input">
                <input type="text" id="username" name="username" placeholder="Username" required>
                <i class="fa fa-user"></i>
            </div>
            <div class="form-input">
                <input type="password" id="password" name="password" placeholder="Password" required>
                <i class="fa fa-lock"></i>
            </div>
            <a href="#" class="lost-pass">Lost Your Password?</a>
            <p class="error-msg">Wrong Credential</p>
            <div>
                <button type="submit" id="login" class="btn">Login</button>
            </div>
        </form>
    </section>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
</body>
</html>
