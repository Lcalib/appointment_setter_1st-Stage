<div id="personal" class="tabcontent">
    <div class="container-fluid">
        <!-- <form action="#"> -->
            <!-- @csrf -->
            <div class="row" id="headerpersonal">
                <p>Contact Details</p>
            </div>
            <div class="row" >
                <div class="col-sm-6">
                    <div class="form-label-group outline" id="formobnumber">
                        <input type="text" id="mobnumber" class="form-control" name="mobnumber" placeholder=" " required autocomplete="mobnumber"/>
                        <span><label for="mobnumber">Mobile Number</label></span>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-label-group outline" id="foremail">
                        <input type="email" id="email" class="form-control" name="email" placeholder=" " required autocomplete="email"/>
                        <span><label for="email">Email Address</label></span>
                    </div>
                </div>
                
            </div>
            <div class="row" id="headerpersonal">
                <p>Personal Details</p>
            </div>
            <div class="row" >
                <div class="col-sm-4">
                    <div class="form-label-group outline" id="forlastname">
                        <input type="text" id="lastname" class="form-control" name="lastname" placeholder=" " required autocomplete="lastname"/>
                        <span><label for="lastname">Last Name</label></span>
                    </div>
                </div>

                <div class="col-sm-4">

                    <div class="form-label-group outline" id="forfirstname">
                        <input type="text" id="firstname" class="form-control" name="firstname" placeholder=" " required autocomplete="firstname"/>
                        <span><label for="firstname">First Name</label></span>
                    </div>

                </div>

                <div class="col-sm-4">

                    <div class="form-label-group outline" id="formidname">
                        <input type="text" id="midname" class="form-control" name="midname" placeholder=" " required autocomplete="midname"/>
                        <span><label for="midname">Middle Name</label></span>
                    </div>

                </div>

            </div>

            <div class="row" >

                <div class="col-sm-4">
                    <div class="form-label-group outline" id="datepick2">
                        <input class="form-control" type="text" placeholder=" " id="datepicker2" name="birthdate">
                        <div class="form-label-group-append"></div>
                        <span><label for="datepicker2" >Date of Birth</label></span>
                    </div>
                </div>
                
                <div class="col-sm-8">
                    <label for="genderbut" style="color: #fff">Gender&nbsp;&nbsp;</label>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons" id="genderbut">
                        <label class="btn btn-info active">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked required>&nbsp;&nbsp;Male&nbsp;&nbsp;
                        </label>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <label class="btn btn-info">
                            <input type="radio" name="options" id="option2" autocomplete="off" required> Female
                        </label>
                    </div>
                </div> 

            </div>

            <div class="row" id="underage">

                <div class="col-sm-4">
                    <div class="form-label-group outline" id="forcompanion">
                        <input type="text" id="companionname" class="form-control" name="companionname"  required/>
                        <span><label for="companionname">Companion's Name</label></span>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-label-group outline" id="forrelationship">
                        <input type="text" id="relationship" class="form-control" name="relationship"  required/>
                        <span><label for="relationship">Relationship</label></span>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-label-group outline" id="forcompanioncontact">
                        <input type="text" id="companioncontact" class="form-control" name="companioncontact" required/>
                        <span><label for="companioncontact">Contanct Number</label></span>
                    </div>
                </div>

            </div>

            <script>
                $(document).ready(function () {
                    let input = document.querySelectorAll("#underage input");
                    $('#underage').hide();
                    $('#datepicker2').on('change', function() {
                        var bday = $('#datepicker2').val();
                        var year = bday.slice(0,4);
                        let years = 2022 - year;
                        if(years <= 17 ){
                            $('#underage').show();
                            for(let i = 0;i < input.length; i++) {
                                input[i].disabled = false;
                            }
                        }else{
                            $('#underage').hide();
                            for(let i = 0;i < input.length; i++) {
                                input[i].disabled = true;
                            }
                        }
                    });
                });
            </script>
            <div class="row" >

                <div class="col-sm-6">
                    <div class="form-label-group outline" id="forcivilstatus">
                        <select class="custom-select" id="civilstatus" name="civilstatus" required>
                            <option disabled="disabled" selected="selected" value=""></option>
                            <option value="S">Single</option>
                            <option value="M">Married</option>
                            <option value="W">Widowed</option>
                            <option value="P">Separated</option>
                            <option value="A">Annulled</option>
                        </select>
                        <span><label for="civilstatus">Civil Status</label></span>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-label-group outline" id="forbirthlegit">
                        <select class="custom-select" id="birthlegit" name="birthlegit" required>
                            <option disabled="disabled" selected="selected" value=""></option>
                            <option value="L">Legitimate</option>
                            <option value="I">Illegitimate</option>
                        </select>
                        <span><label for="birthlegit">Birth Legitimacy</label></span>
                    </div>
                </div>
            </div>

            <div class="row" >

                <div class="col-sm-4">
                    <div class="form-label-group outline" id="forbirthcountry">
                        <select class="custom-select" id="birthcountry" name="birthcountry" required>
                        <option disabled="disabled" selected="selected" value="">Select Country of Birth</option>
                        @include('options.country')
                        </select>
                        <span><label for="birthcountry">Birth Country</label></span>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-label-group outline" id="forbirthprovince">
                        <select class="custom-select" id="birthprovince" name="birthprovince" required>
                            <option disabled="disabled" selected="selected" value=""></option>
                            @include('options.province')
                        </select>
                        <span><label for="birthprovince">Province</label></span>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-label-group outline" id="formunicipality">
                        <select class="custom-select" id="birthmunicipality" name="birthmunicipality" required>
                            <option selected>PHILIPPINES</option>
                        </select>
                        <span><label for="birthmunicipality">Municipality</label></span>
                    </div>
                </div>
            </div>
            <div class="row" id="headerpersonal">
                <p>Current Address Details</p>
            </div>
            <div class="row">

                <div class="col-sm-6">
                    <div class="form-label-group outline" id="forcurrentaddress">
                        <input type="text" id="currentaddress" class="form-control" name="currentaddress" placeholder=" " required autocomplete="currentaddress"/>
                        <span><label for="currentaddress">Current Address</label></span>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-label-group outline" id="foroccupation">
                        <input type="text" id="occupation" class="form-control" name="occupation" placeholder=" " required autocomplete="occupation"/>
                        <span><label for="occupation">Occupation</label></span>
                    </div>
                </div>
                
            </div>

            <div class="row">

                <div class="col-sm-6">
                    <div class="form-label-group outline" id="foraddresscity">
                        <input type="text" id="addresscity" class="form-control" name="addresscity" placeholder=" " required autocomplete="addresscity"/>
                        <span><label for="addresscity">City</label></span>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="form-label-group outline" id="forprovandcountry">
                        <input type="text" id="provandcountry" class="form-control" name="provandcountry" placeholder=" " required autocomplete="provandcountry"/>
                        <span><label for="provandcountry">Province/Country</label></span>
                    </div>
                </div>

            </div>

            <button type="button" class="btn btn-primary" onclick="toback1()" id="backbutton">Back</button>
            <button type="button" class="btn btn-primary" onclick="tofamily()" id="nextbutton" disabled>Next</button>
            <script>
                // $("#mobnumber").on("keyup",function(){
                //     var selected = $(this).val();
                //     let button1 = document.querySelector("#personal #nextbutton");
                //     if (selected.length == 0){
                //         button1.disabled = true;
                //     }else{
                //         button1.disabled = false;
                //     }
                // });

                $(document).ready(function() {
                    $('#personal input').keyup(function() {

                        var empty = false;
                        $('#personal input').each(function() {
                            if ($(this).val().length == 0) {
                                empty = true;
                            }
                        });
                        if (empty) {
                            
                            $('#personal #nextbutton').attr('disabled', 'disabled');
                        } else {
                            $('#personal #nextbutton').attr('disabled', false);
                        }
                    });
                });


                // function isEveryInputEmpty() {
                //     var allEmpty = true;

                //     $('.form-control').each(function() {
                //         if ($(this).val() !== '') {
                //             allEmpty = false;
                //             return false;
                //         }
                //     });

                //     return allEmpty;
                //     }
            </script>
        <!-- </form> -->
    </div>
</div>