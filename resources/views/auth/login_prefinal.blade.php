@extends('layouts.app')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ ('css/login.css') }}" />

</head>
<body>

	<div class="container">
    <div class="card card-container">
      <ul class="nav nav-tabs nav-justified" role="tablist" id="navmenutabs">
        <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#tabmenu1">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="navtab" data-bs-toggle="tab" href="#tabmenu2">Create Account</a>
        </li>
      </ul>
      <div class="tab-content">
          <div id="tabmenu1" class="container tab-pane fade">
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form action="{{ route('login') }}" class="form-signin" method="post">
                @csrf
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email address" required autofocus>
                @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
                <input type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                <div id="remember" class="checkbox"><label><input type="checkbox" value="remember-me"> Remember me</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">Forgot the password?</a>
          </div>
          <!-- For Tabmenu 2 -->
          @include('auth.register')
      </div><!-- /card-container -->
    </div><!-- /container -->
  </div>

</body>
</html>

@endsection
