
<div id="datetime" class="tabcontent">
    <div class="tabcontent-header">
        <p>Select Your Date</p>
        <div class="container-fluid" id="infoheader">
            <p> Note: Schedule will be based on the available date at DFA website</p>
        </div>
        <!-- <form> -->
            <div class="container-fluid" id="pickdate">
                <div class="form-label-group outline" id="datepick">
                    <input class="form-control" type="text" placeholder=" " id="datepicker1" name="dateapp">
                    <div class="form-label-group-append"></div>
                    <span><label for="datepicker1" >Date</label></span>
                </div>
            </div>    
            <button type="button" class="btn btn-primary" onclick="tositeback()" id="backbutton">Back</button>
            <button type="button" class="btn btn-primary" onclick="topersonal()" id="nextbutton" disabled>Next</button>
            <script>
                
                $("#datepicker1").on("change",function(){
                    var selected = $(this).val();
                    let button1 = document.querySelector("#datetime #nextbutton");
                    if (selected.length == 0){
                        button1.disabled = true;
                    }else{
                        button1.disabled = false;
                    }
                });
            </script>
        <!-- </form> -->
    </div>  
</div>