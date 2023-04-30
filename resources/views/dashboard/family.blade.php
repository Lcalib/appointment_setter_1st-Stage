
<div id="family" class="tabcontent">
    <!-- <form action="#">
        @csrf -->
        <div class="row m-0" id="headerfamily">
            <p>Father's Information</p>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-label-group outline" id="forfathername">
                    <input type="text" id="fathername" class="form-control" name="fathername" placeholder=" " required autocomplete="fathername"/>
                    <span><label for="fathername">Father's Name</label></span>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-label-group outline" id="forfatherlast">
                    <input type="text" id="fatherlast" class="form-control" name="fatherlast" placeholder=" " required autocomplete="fatherlast"/>
                    <span><label for="fatherlast">Father's Last</label></span>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-label-group outline" id="forfathermid">
                    <input type="text" id="fathermid" class="form-control" name="fathermid" placeholder=" " required autocomplete="fathermid"/>
                    <span><label for="fathermid">Father's Middle</label></span>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-sm-4">
                <div class="form-label-group outline" id="forfathercitizen">
                    <select class="custom-select" id="fathercitizen" name="fathercitizen" required>
                    <option disabled="disabled" selected="selected" value="">Filipino</option>
                    @include('options.country')
                    </select>
                    <span><label for="fathercitizen">Citizenship</label></span>
                </div>
            </div>

            <div class="col-sm-4">
                
            </div>

            <div class="col-sm-4">
                
            </div>
        </div>
        <div class="row m-0" id="headerfamily">
            <p>Mother's Information</p>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-label-group outline" id="formothername">
                    <input type="text" id="mothername" class="form-control" name="mothername" placeholder=" " required autocomplete="mothername"/>
                    <span><label for="mothername">Mother's Name</label></span>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-label-group outline" id="formotherlast">
                    <input type="text" id="motherlast" class="form-control" name="motherlast" placeholder=" " required autocomplete="motherlast"/>
                    <span><label for="motherlast">Mother's Last</label></span>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-label-group outline" id="formothermid">
                    <input type="text" id="mothermid" class="form-control" name="mothermid" placeholder=" " required autocomplete="mothermid"/>
                    <span><label for="mothermid">Mother's Middle</label></span>
                </div>
            </div> 
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-label-group outline" id="formothercitizen">
                    <select class="custom-select" id="mothercitizen" name="mothercitizen" required>
                    <option disabled="disabled" selected="selected" value="">Filipino</option>
                    @include('options.country')
                    </select>
                    <span><label for="mothercitizen">Citizenship</label></span>
                </div>
            </div>

            <div class="col-sm-4">
                
            </div>

            <div class="col-sm-4">
                
            </div>
        </div>

        <button type="button" class="btn btn-primary" onclick="topersonalback()" id="backbutton">Back</button>
        <button type="button" class="btn btn-primary" onclick="toapplication()" id="nextbutton" disabled>Next</button>
    <!-- </form> -->
        <script>
            $(document).ready(function() {
                    $('#family input').keyup(function() {

                        var empty = false;
                        $('#family input').each(function() {
                            if ($(this).val().length == 0) {
                                empty = true;
                            }
                        });
                        if (empty) {
                            
                            $('#family #nextbutton').attr('disabled', 'disabled');
                        } else {
                            $('#family #nextbutton').attr('disabled', false);
                        }
                    });
                });
        </script>
</div>
