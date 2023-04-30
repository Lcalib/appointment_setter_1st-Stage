@extends('home')

@section('title', 'Create Appointment')

@section('content')

<div class="container-fluid" id="formforpassport">
    <div class="row">
        <div class="col-lg-2" id="colforpassport">
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
                    <!-- <button class="tablinks" id="tab5" onclick="openApp(event, 'contact')"><i id="ic6" class="fa fa-phone-square"></i>&nbsp;&nbsp;&nbsp;Contact</button> -->
                    <button class="tablinks" id="tab5" onclick="openApp(event, 'update')"><i id="ic6" class="fa fa-edit"></i>&nbsp;&nbsp;&nbsp;Final</button>
                </div>
            </div>
        </div>

        <div class="col-lg-10" id="colcontent">
            <div class="col-header" id="head2">
            <p>Input Form</p>
            </div>
            <div class="container-fluid" id="logincontent">
                <!-- <form action="/appointment/final" method="POST"> -->
                    
                    @yield('site')

                    @include('dashboard.dateandtime')

                    @include('dashboard.personal')

                    @include('dashboard.family')

                    @include('dashboard.application')

                    @include('dashboard.update')

                <!-- </form> -->
            </div>
        </div>

    </div>
</div>
@endsection