<div id="application" class="tabcontent">
    <div class="tabcontent-header">
        <p>Application Details</p>
        <div class="container-fluid" id="infoheader">
            <p> Note: Please bring your proof of Philippine citizenship by election, naturalization, re-acquisition on the date of your personal appearance. </p>
        </div>

        <div class="row" id="appdetails">

            <div class="col-sm-6">
                <div class="form-label-group outline" id="forapplicationtype">
                    <select class="custom-select" id="applicationtype" name="applicationtype" required>
                        <option disabled="disabled" selected="selected" value="">Application Type</option>
                        <option value="N">New</option>
                        <option value="R">Renewal</option>
                        <option value="L">Lost</option>
                    </select>
                    <span><label for="applicationtype">Application Type</label></span>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-label-group outline" id="forproofcitizen">
                    <select class="custom-select" id="proofcitizen" name="proofcitizen" required>
                    <option disabled="disabled" selected="selected" value="">Basis of Philippine Citizenship</option>
                    <option value="B">Birth</option>
                    <option value="E">Election</option>
                    <option value="M">Marriage</option>
                    <option value="N">Naturalization</option>
                    <option value="R">R.A. 9225</option>
                    <option value="O">Others</option>
                    </select>
                    <script>
                        $(document).ready(function () {
                            let input = document.querySelectorAll("#apptypeshow input");
                            $('#apptypeshow').hide();
                            $('#applicationtype').on('change', function() {
                                if(this.value == 'R' | this.value == 'L'){
                                    $('#apptypeshow').show();
                                    for(let i = 0;i < input.length; i++) {
                                    input[i].disabled = false;
                                    }
                                }else{
                                    $('#apptypeshow').hide();
                                    for(let i = 0;i < input.length; i++) {
                                    input[i].disabled = true;
                            }
                                    }
                            });
                        });
                    </script>
                    <span><label for="proofcitizen">Proof Type</label></span>
                </div>
            </div>
        </div>

        <div class="row" id="apptypeshow">

            <div class="col-sm-4">
                <div class="form-label-group outline" id="foroldpassport">
                    <input type="text" id="oldpassport" class="form-control" name="oldpassport" placeholder=" " required autocomplete="oldpassport"/>
                    <span><label for="oldpassport">Old Passport #</label></span>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-label-group outline" id="datepick3">
                    <input class="form-control" type="text" placeholder=" " id="datepicker3">
                    <div class="form-label-group-append"></div>
                    <span><label for="datepicker3">Date Issued</label></span>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-label-group outline" id="forissuingautho">
                    <input type="text" id="issuingautho" class="form-control" name="issuingautho" placeholder=" " required autocomplete="oldpassport"/>
                    <span><label for="issuingautho">Issuing Authority</label></span>
                </div>
            </div>
        </div>
        
        <div class="row">

            <div class="col-sm-6">
                <label for="passportholder" style="color: #fff">Foreign Passport Holder?</label>
                <div class="btn-group btn-group-toggle" data-toggle="buttons" id="passportholder">
                    <label class="btn btn-info active">
                    <input type="radio" name="foreign" id="option1" autocomplete="off" value="Yes" required>Yes</label><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <label class="btn btn-info">
                    <input type="radio" name="foreign" id="option2" autocomplete="off" value="No"  checked required>No</label>
                </div>
                
            </div>

            <div class="col-sm-6" id="colforiegnholder">
                <div class="form-label-group outline" id="forforiegnholder">
                    <select class="custom-select" id="foriegnholder" required>
                    <option disabled="disabled" selected="selected" value="">Filipino</option>
                    @include('options.country')
                    </select>
                    <span><label for="foriegnholder">Confirm Country</label></span>
                </div>
            </div>

            <script>
                $(document).ready(function () {
                    $('#colforiegnholder').disabled = true;
                    $('#colforiegnholder').hide();
                    $('input:radio[name="options"]').change(
                    function(){
                        if ($(this).is(':checked') && $(this).val() == 'Yes') {
                            $('#colforiegnholder').show();
                            $('#colforiegnholder').disabled = false;
                        }else{
                            $('#colforiegnholder').hide();
                        }
                    });
                });
            </script>
        </div>
        
        <div class="row" id="headeremergency">
            <p>Emergency Contact Details</p>
        </div>

        <div class="row" id="emergcontact">
            
            <div class="col-sm-6">
                <div class="form-label-group outline" id="forcontactperson">
                    <input type="text" id="contactperson" class="form-control" name="contactperson" placeholder=" " required autocomplete="contactperson"/>
                    <span><label for="contactperson">Contact Person</label></span>
                </div>
            </div>
            
            <div class="col-sm-6">
                <div class="form-label-group outline" id="forcontactnumber">
                    <input type="text" id="contactnumber" class="form-control" name="contactnumber" placeholder=" " required autocomplete="contactnumber"/>
                    <span><label for="contactnumber">Contact Number</label></span>
                </div>
            </div>

        </div>

        <button type="button" class="btn btn-primary" onclick="tofamilyback()" id="backbutton">Back</button>
        <button type="submit" class="btn btn-primary" onclick="toedit()" id="nextbutton" disabled>Next</button>
        <script>
            
            $(document).ready(function() {

                $('#emergcontact input').keyup(function() {

                    var empty = false;
                    $('#emergcontact input').each(function() {
                        if ($(this).val().length == 0) {
                            empty = true;

                        }
                    });
                    if (empty) {
                        
                        $('#application #nextbutton').attr('disabled', 'disabled');
                    } else {
                        $('#application #nextbutton').attr('disabled', false);
                    }
                });
            });
        </script>
    </div>
</div>