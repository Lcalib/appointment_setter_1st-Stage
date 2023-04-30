<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Our Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ ('css/sidebar.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ ('css/content.css') }}" />
    <!-- Font Awesome JS -->
    <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    
    <script src="{{ asset('js/passport.js') }}" defer></script>

    <link rel="stylesheet" type="text/css" href="{{ ('css/passport.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ ('css/floating-labels.css') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css" integrity="sha512-Fppbdpv9QhevzDE+UHmdxL4HoW8HantO+rC8oQB2hCofV+dWV2hePnP5SgiWR1Y1vbJeYONZfzQc5iII6sID2Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        @include('layouts.sidebar')
        <!-- Page Content  -->
        <!-- <div class="container-fluid" id="tagoNaAppoint"> -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                <i class="fa fa-envelope"></i>  
                                Appointment</a>
                                <!-- <span class="sr-only">Toggle Dropdown</span>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" value="1" href="/home">PASSPORT</a></li>
                                    <li><a class="dropdown-item" value="2" href="/home">NBI</a></li>
                                    <li><a class="dropdown-item" value="3" href="/home">PRC</a></li>
                                    <li><a class="dropdown-item" value="4" href="/home">MOVIES</a></li>
                                </ul> -->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                <i style="font-size:18px" class="fa">&#xf013;</i>  Setting</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out-alt"></i>  Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            
                <div class="container-fluid" id="formforpassport">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="col-header" id="head1">
                            <p>Individual Appointment</p>
                            </div>
                            <div class="container-fluid" id="sidenav">
                                <div class="tab">
                                    <button class="tablinks" onclick="openApp(event, 'site')" id="defaultOpen"><i class="fas fa-map" id="ic1"></i>&nbsp;&nbsp;Site</button>
                                    <button class="tablinks" id="tab1" onclick="openApp(event, 'datetime')"><i id="ic2" class="fas fa-calendar-alt"></i>&nbsp;&nbsp;&nbsp;Date</button>
                                    <button class="tablinks"  id="tab2" onclick="openApp(event, 'personal')"><i id="ic3" class="fas fa-user-check"></i>&nbsp;&nbsp;&nbsp;Personal</button>
                                    <button class="tablinks" id="tab3" onclick="openApp(event, 'family')"><i id="ic4" class="fa fa-users"></i>&nbsp;&nbsp;&nbsp;Family</button>
                                    <button class="tablinks" id="tab4" onclick="openApp(event, 'application')"><i id="ic5" class="fa fa-id-card"></i>&nbsp;&nbsp;&nbsp;Application</button>
                                    <button class="tablinks" id="tab5" onclick="openApp(event, 'contact')"><i id="ic6" class="fa fa-phone-square"></i>&nbsp;&nbsp;&nbsp;Contact</button>
                                    <button class="tablinks" id="tab6" onclick="openApp(event, 'update')"><i id="ic7" class="fa fa-edit"></i>&nbsp;&nbsp;&nbsp;Final</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9" id="colcontent">
                            <div class="col-header" id="head2">
                            <p>Input Form</p>
                            </div>
                            <div class="container-fluid" id="logincontent">

                                @include('dashboard.site')

                                @include('dashboard.dateandtime')

                                <div id="personal" class="tabcontent">
                                    <h3>Personal Information</h3>
                                    <button type="button" class="btn btn-primary" onclick="toback1()" id="backbutton">Back</button>
                                    <button type="button" class="btn btn-primary" onclick="tofamily()" id="nextbutton">Next</button>
                                </div>

                                <div id="family" class="tabcontent">
                                    <h3>Family Information</h3>
                                    <button type="button" class="btn btn-primary" onclick="topersonalback()" id="backbutton">Back</button>
                                    <button type="button" class="btn btn-primary" onclick="toapplication()" id="nextbutton">Next</button>
                                </div>

                                <div id="application" class="tabcontent">
                                    <h3>Application Information</h3>
                                    <button type="button" class="btn btn-primary" onclick="tofamilyback()" id="backbutton">Back</button>
                                    <button type="button" class="btn btn-primary" onclick="tocontact()" id="nextbutton">Next</button>
                                </div>

                                <div id="contact" class="tabcontent">
                                    <h3>Contact Information</h3>
                                    <button type="button" class="btn btn-primary" onclick="toapplicationback()" id="backbutton">Back</button>
                                    <button type="button" class="btn btn-primary" onclick="toedit()" id="nextbutton">Next</button>
                                </div>
                                
                                <div id="update" class="tabcontent">
                                    <h3>Edit details</h3>
                                    <button type="button" class="btn btn-primary" onclick="tofinal()" id="nextbutton">Submit</button>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            <!-- </div> -->
        </div>
    </div>
</body>
</html>


