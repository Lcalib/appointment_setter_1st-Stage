<!DOCTYPE html>
<html lang="en">
<head>
  <title>i Appoint PH</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
  
  <script defer="" src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <!-- Popper.JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  <!-- jQuery Custom Scroller CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script> 


<link rel="stylesheet" type="text/css" href="{{ ('css/login.css') }}" />

<link rel="stylesheet" type="text/css" href="{{ ('css/floating-labels.css') }}" />

</head>
<body>

<div class="container" id="loginmain">
    <div class="card card-container">
      <div class="row">
          <div class="col-lg-6" id="collogin1">
          <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card">Hello there!</p>
            <br>
            <label for="loginform" id="labelforlogin">Log in to Your Account</label>
            <br>
            <form action="{{ route('login') }}" class="form-signin" method="POST" id="loginform">
                @csrf
                <div class="form-group">
                    <div class="form-label-group outline">
                        <span><i class="fa fa-envelope" style="position: relative;color: #fff !important;top: 27%;left: 90%;font-size: 20px;"></i></span>
                        <span id="reauth-email" class="reauth-email"></span>
                        <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email address" required autofocus>
                        <span><label for="inputEmail">Email Address</label></span>
                    </div>
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                        <!-- @if (count($errors) > 0)
                            <script type="text/javascript">
                                $( document ).ready(function() {
                                    $('#myModal').modal('show');
                                });
                            </script>
                        @endif -->
                    </div>
                    
                <div class="form-group">  
                    <div class="form-label-group outline">
                        <span><i class="fa fa-lock" style="position: relative;color: #fff !important;top: 27%;left: 90%;font-size: 20px;"></i></span>
                        <input type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                        <span><label for="inputPassword">Password</label></span>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div id="remember" class="checkbox">
                  <label><input type="checkbox" value="remember-me"> Remember me</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">Forgot the password?</a>
          </div>

          <div class="col-lg-6 mt-3" id="collogin2">
            <form method="POST" action="{{ route('register') }}" id="registrationform" class="form-register">
                @csrf
                <!-- FOR NAME -->
                <div class="form-froup">
                    <div class="form-label-group outline">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder=" " autofocus>
                        <span><label for="name">Name</label></span>
                        
                    </div>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- FOR EMAIL -->
                <div class="form-group">
                    <div class="form-label-group outline">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" placeholder=" ">
                        <span><label for="email">Email</label></span>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!-- FOR PASSWORD -->

                <div class="form-group">
                    <div class="form-label-group outline">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder=" ">
                        <span><label for="password">Password</label></span>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!-- PASSWORD CONFIRMATION -->
                <div class="form-label-group outline">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder=" ">
                    <span><label for="password">Confirm Password</label></span>
                </div>

                <button type="submit" class="btn btn-lg btn-primary btn-register">Register</button>
              </form>
          </div>
      </div>
    </div>
</div>
<main class="py-5">
    @yield('content')
</main>
</body>
</html>

