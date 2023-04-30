
@extends('home')

@section('title', 'Final Appointment')

@section('finalcontent')

<div id="update" class="container-fluid">

    <div class="container-header" id="finalheader">
        <p>FINAL INFORMATION</p>
    </div>

    <div class="container-body" id="finalcontent">
        <form action="#" method="post">
            @csrf
        <div class="row" id="finalsiteheader">
            <p>Please check the details before submitting this application.</p>
        </div>
        <hr/>
        
        <div class="row" id="forfinalinput">
            
            <div class="col-sm-4">
                <div class="form-label-group outline" id="forfinalcountry">
                    @foreach ($users as $user)
                    <input type="text" id="finalcountry" class="form-control" name="finalcountry" value="{{ $user->country }}" required/>
                    @endforeach
                    <span><label for="finalcountry">Country</label></span>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-label-group outline" id="forfinalsite">
                    @foreach ($users as $user)
                    <input type="text" id="finalsite" class="form-control" name="finalsite" value="{{ $user->site_id }}" required/>
                    @endforeach
                    <span><label for="finalsite">Site</label></span>
                    
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-label-group outline" id="forfinaldate">
                    <input type="text" id="finaldate" class="form-control" name="finaldate"  required/>
                    <span><label for="finaldate">Date and Time</label></span>
                </div>
            </div>

        </div>
        <hr/>

        <div class="row">

            <div class="col-sm-3">
                <div class="form-label-group outline" id="forfinalmobnumber">
                    <input type="text" id="finalmobnumber" class="form-control" name="finalmobnumber"  required/>
                    <span><label for="finalmobnumber">Mobile Number</label></span>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-label-group outline" id="forfinalemail">
                    <input type="email" id="finalemail" class="form-control" name="finalemail"  required/>
                    <span><label for="finalemail">Email</label></span>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-label-group outline" id="forfinalcivil">
                    <input type="text" id="finalcivil" class="form-control" name="finalcivil"  required/>
                    <span><label for="finalcivil">Civil Status</label></span>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-label-group outline" id="forfinallegit">
                    <input type="text" id="finallegit" class="form-control" name="finallegit"  required/>
                    <span><label for="finallegit">Birth Legitimacy</label></span>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-sm-3">
                <div class="form-label-group outline" id="forfinalgender">
                    <input type="text" id="finalgender" class="form-control" name="finalgender"  required/>
                    <span><label for="finalgender">Gender</label></span>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-label-group outline" id="forfinalbirthcountry">
                    <input type="text" id="finalbirthcountry" class="form-control" name="finalbirthcountry"  required/>
                    <span><label for="finalbirthcountry">Birth Country</label></span>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-label-group outline" id="forfinalprovince">
                    <input type="text" id="finalprovince" class="form-control" name="finalprovince"  required/>
                    <span><label for="finalprovince">Province</label></span>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-label-group outline" id="forfinalmunicipality">
                    <input type="text" id="finalmunicipality" class="form-control" name="finalmunicipality"  required/>
                    <span><label for="finalmunicipality">Municipality</label></span>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">

            <div class="col-sm-3">
                <div class="form-label-group outline" id="forfinalcurrentadd">
                    <input type="text" id="finalcurrentadd" class="form-control" name="finalcurrentadd"  required/>
                    <span><label for="finalcurrentadd">Current Address</label></span>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-label-group outline" id="forfinaloccupation">
                    <input type="text" id="finaloccupation" class="form-control" name="finaloccupation"  required/>
                    <span><label for="finaloccupation">Occupation</label></span>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-label-group outline" id="forfinalcity">
                    <input type="text" id="finalcity" class="form-control" name="finalcity"  required/>
                    <span><label for="finalcity">City</label></span>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-label-group outline" id="forfinalprovincecountry">
                    <input type="text" id="finalprovincecountry" class="form-control" name="finalprovincecountry"  required/>
                    <span><label for="finalprovincecountry">Province/Country</label></span>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">

            <div class="col-sm-3">
                <div class="form-label-group outline" id="forfinalfathername">
                    <input type="text" id="finalfathername" class="form-control" name="finalfathername"  required/>
                    <span><label for="finalfathername">Father's Name</label></span>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-label-group outline" id="forfinalfatherlast">
                    <input type="text" id="finalfatherlast" class="form-control" name="finalfatherlast"  required/>
                    <span><label for="finalfatherlast">Father's Last</label></span>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-label-group outline" id="forfinalfathermid">
                    <input type="text" id="finalfathermid" class="form-control" name="finalfathermid"  required/>
                    <span><label for="finalfathermid">Father's Midname</label></span>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-label-group outline" id="forfinalfathercitizen">
                    <input type="text" id="finalfathercitizen" class="form-control" name="finalfathercitizen"  required/>
                    <span><label for="finalfathercitizen">Citizenship</label></span>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-sm-3">
                <div class="form-label-group outline" id="forfinalmothername">
                    <input type="text" id="finalmothername" class="form-control" name="finalmothername"  required/>
                    <span><label for="finalmothername">Mother's Name</label></span>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-label-group outline" id="forfinalmotherlast">
                    <input type="text" id="finalmotherlast" class="form-control" name="finalmotherlast"  required/>
                    <span><label for="finalmotherlast">Mother's Last</label></span>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-label-group outline" id="forfinalmothermid">
                    <input type="text" id="finalmothermid" class="form-control" name="finalmothermid"  required/>
                    <span><label for="finalmothermid">Mother's Midname</label></span>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-label-group outline" id="forfinalmothercitizen">
                    <input type="text" id="finalmothercitizen" class="form-control" name="finalmothercitizen"  required/>
                    <span><label for="finalmothercitizen">Citizenship</label></span>
                </div>
            </div>

        </div>
        <hr/>

        <div class="row">

            <div class="col-sm-3">
                <div class="form-label-group outline" id="forfinalapptype">
                    <input type="text" id="finalapptype" class="form-control" name="finalapptype"  required/>
                    <span><label for="finalapptype">Application Type</label></span>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-label-group outline" id="forfinalprooftype">
                    <input type="text" id="finalprooftype" class="form-control" name="finalprooftype"  required/>
                    <span><label for="finalprooftype">Proof Type</label></span>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-label-group outline" id="forfinalcontactperson">
                    <input type="text" id="finalcontactperson" class="form-control" name="finalcontactperson"  required/>
                    <span><label for="finalcontactperson">Contact Person</label></span>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-label-group outline" id="forfinalcontactnum">
                    <input type="text" id="finalcontactnum" class="form-control" name="finalcontactnum"  required/>
                    <span><label for="finalcontactnum">Contact Number</label></span>
                </div>
            </div>
            
        </div>
        
        <button type="submit" class="btn btn-primary" onclick="tofinal()" id="nextbutton">Submit</button>
        </form>
    </div>
</div>

@endsection