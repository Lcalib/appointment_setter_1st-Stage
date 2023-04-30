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

  <link rel="stylesheet" type="text/css" href="{{ ('css/header.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ ('css/mobheader.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ ('css/lawas.css') }}" />

  <script src="{{ asset('js/header.js') }}" defer></script>
 
  

</head>
<body>
<div class="bg-overlay" id="imgoverlay">


<div class="wrapper d-block d-sm-none">
    <!-- Sidebar  -->
    <nav id="sidebar" class="sidebar-header">
        <div id="dismiss" class="btn">
            <i class="fas fa-angle-double-left"></i>
        </div>
        <ul class="list-unstyled components">
            <li>
                <a href="#">
                <i class="fas fa-home" style='font-size:20px'></i>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home
                </a>
            </li>
            <li>
                <a href="#">
                <i class="fas fa-briefcase" style='font-size:20px'></i>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Clients
                </a>
            </li>
            <li>
                <a href="#">
                <i class="fa fa-globe" style='font-size:20px'></i>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Services
                </a>
            </li>
            <li>
                <a href="#" >
                <i class="fa fa-star" style='font-size:20px'></i>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reviews
                </a>
            </li>
            </ul>
            <label>Account</label>
            <ul class="list-unstyled components">
            <li>
                <a href="#">
                <i class="fas fa-sign-in-alt" style='font-size:20px'></i>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Log in
                </a>
            </li>
            <li>
                <a href="#">
                <i class="fas fa-user-plus" style='font-size:20px'></i>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Register
                </a>
            </li>
            </ul>
            <label>Connect</label>
            <ul class="list-unstyled components">
            <li>
                <a href="#">
                <i class='fab fa-facebook-messenger' style='font-size:20px'></i>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Messenger
                </a>
            </li>
            <li>
                <a href="#">
                <i class="fas fa-paper-plane" style='font-size:20px'></i>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact US
                </a>
            </li>
            <li>
                <a href="#">
                <i class="fas fa-question" style='font-size:20px'></i>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FAQ
                </a>
            </li>
        </ul>
    </nav>

    <div class="card" id="head1">
        <a href="#"><strong>i Appoint</strong><span class="highlight"><strong>.</strong></span>PH</a>
    </div>
    <div class="card" id="head2">
         <a href="#">LOG IN</a>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="fixedtopmobile">
        <div class="btn group">
            <button type="button" id="sidebarCollapse" class="btn">
            <i class="fas fa-align-left"></i>
            </button>
         </div>
    </nav>
</div>

<div class="overlay d-block d-sm-none">
</div>
  
<div class="container-fluid d-none d-sm-block bg-transparent" id="homelanding">
    <div class="row">
        <div class="col-md-4" id="id1">
            <div class="container-fluid" id="loginheader1">
                <h3>Site Logo Here</h3>
            </div>
        </div>
        <div class="col-md-8" id="id2">
            <div class="container-fluid" id="loginheader2">
                <form action="{{ route('login') }}" class="form-signin" method="post" id="homelogin">
                    @csrf
                    <div class="row" id="loginHome">
                        <div class="col" id="logcol1">
                            <span id="reauth-email" class="reauth-email"></span>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" required autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                        <div class="col" id="logcol2">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required>
                        </div>
                        <div class="col" id="logcol3">
                            <button type="submit" class="btn btn-primary">Log in</button>
                        </div>
                    </div>
                </form>
            <div class="container-fluid mr-5" id="loginrow1">
                <a href="#">
                <i class='fab fa-facebook-messenger' style='font-size:20px'></i>
                &nbsp;Contact Us
                </a>
            </div>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-sm navbar-dark sticky-top d-none d-sm-block" id="navstick">
    <div class="header sticky-top" id="footer1">
        <div class="progress-container">
            <div class="progress-bar" id="headerBar"></div>
        </div>
    </div>
    <div class="container ml-5 mt-2">
        <a class="navbar-brand" href="/" style="position: relative;font-size: 25px;bottom: 5px;">i <span style="color: #138496"><strong>Appoint</strong> </span>PH</a>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active"  href="#homelanding"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="#service1"><i class="fa fa-globe"></i>&nbsp;&nbsp;Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="#"><i class="fa fa-star"></i>&nbsp;&nbsp;Reviews</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="/login"><i class="fa fa-user-circle"></i>&nbsp;&nbsp;Register</a>
            </li>
        </ul>
    </div>
</nav> 

@include('layouts.body') 

</div>
</body>
</html>