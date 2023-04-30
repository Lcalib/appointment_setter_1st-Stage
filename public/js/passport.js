function openApp(evt, appName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(appName).style.display = "block";
    evt.currentTarget.className += " active";  
    
  }

var defaulto = document.getElementById("defaultOpen");
defaulto.click();


function totabdate(){
  var click1 = document.getElementById("tab1");
  click1.disabled = false;
  var icon1 = document.getElementById("ic1");
  var openc = document.getElementById("tab1");

  var val = document.getElementById("selectsite");
  var myInput = document.getElementById("selectsite");

  if (myInput.value.length == 0) {
    val.className += " is-invalid";
  } else{
    if(val.className = "custom-select is-valid"){
    val.className = "custom-select is-valid"
  }
  icon1.className = "fa fa-check-double";
  icon1.style.color = "green";
  openc.click();
  }
  $('#sidebar').toggleClass('active');
}


function topersonal(){
  var click1 = document.getElementById("tab2");
  click1.disabled = false;
  var icon1 = document.getElementById("ic2");
  var openc = document.getElementById("tab2");
  
  var val = document.getElementById("datepicker1");
  var myInput = document.getElementById("datepicker1");
  if (myInput.value.length == 0) {
    val.className += " is-invalid";
  } else{
      if(val.className = "form-control is-valid"){
        val.className = "form-control is-valid"
      }
    icon1.className = "fa fa-check-double";
    icon1.style.color = "green";
    openc.click();
  }
}


function tofamily(){
  var click1 = document.getElementById("tab3");
  click1.disabled = false;
  var icon1 = document.getElementById("ic3");
  var openc = document.getElementById("tab3");

  const myInput = document.querySelectorAll("#personal select");

  for (i = 0; i < myInput.length; i++) {
      if (myInput[i].value.length == 0) {
        myInput[i].className += " is-invalid";
      }else{ 
      
        icon1.className = "fa fa-check-double";
        icon1.style.color = "green";
        openc.click();
      }
    }

}




function toapplication(){
  var click1 = document.getElementById("tab4");
  click1.disabled = false;
  var icon1 = document.getElementById("ic4");
  var openc = document.getElementById("tab4");

  const myInput = document.querySelectorAll("#family select");

  for (i = 0; i < myInput.length; i++) {
      if (myInput[i].value.length == 0) {
        myInput[i].className += " is-invalid";
      }else{
      
        icon1.className = "fa fa-check-double";
        icon1.style.color = "green";
        openc.click();
      }
    }
}

function toedit(){
  var click1 = document.getElementById("tab5");
  click1.disabled = false;
  var icon1 = document.getElementById("ic5");
  var openc = document.getElementById("tab5");

  const myInput = document.querySelectorAll("#appdetails select");
  
  var x = document.getElementById("apptypeshow");
  if (window.getComputedStyle(x).display === "none") {
    for (i = 0; i < myInput.length; i++) {
      if (myInput[i].value.length == 0) {
          myInput[i].className += " is-invalid";
      }
      else{
        icon1.className = "fa fa-check-double";
        icon1.style.color = "green";
        openc.click();
      }
    }
    
  }else{
    let input = document.querySelectorAll("#apptypeshow input");
    for (i = 0; i < input.length; i++) {
      if (input[i].value.length == 0) {
        input[i].className += " is-invalid";
    }else{
        icon1.className = "fa fa-check-double";
        icon1.style.color = "green";
        openc.click();
          }
    }
  }
}

function tositeback(){
  document.getElementById("defaultOpen").click();
}

function toback1(){
  document.getElementById("tab1").click();
}

function topersonalback(){
  document.getElementById("tab2").click();
}

function tofamilyback(){
  document.getElementById("tab3").click();
}


// function app_type(){
//   var e = document.getElementById("applicationtype").value;

//   var show = document.getElementById("apptypeshow");
//   if (e === 'R' | e === 'L'){
//     show.style.display = 'block';
//   } 
// }


$(document).ready(function () {
  $("#tab1").prop( "disabled", true);
  $("#tab2").prop( "disabled", true);
  $("#tab3").prop( "disabled", true);
  $("#tab4").prop( "disabled", true);
  $("#tab5").prop( "disabled", true);
  $("#tab6").prop( "disabled", true);
  // $("#formforpassport").hide();
  // $("#btngroup").hide();
  // $("#tagoNatable").hide();

  $("#datepicker1").datepicker({
    format: 'yyyy/mm/dd',
    autoclose: true,
    todayHighlight: true
});
  $("#datepicker2").datepicker({
    format: 'yyyy/mm/dd',
    autoclose: true,
    todayHighlight: true
});
  $("#datepicker3").datepicker({
    format: 'yyyy/mm/dd',
    autoclose: true,
    todayHighlight: true
});

  // $('#apptypeshow').hide();

  // $('#applicationtype').on('change', function() {
  //   if(this.value == 'R' | this.value == 'R'){
  //     $('#apptypeshow').show();;
  //   }
  // });
});




// function tocheck(){

//   var country = document.getElementById("country");
//   var site =  document.getElementById("selectsite");
//   var selectedText = country.options[country.selectedIndex].text;
//   var selectedSite = site.options[site.selectedIndex].text;
//   var con = document.getElementById("finalcountry");
//   var sit = document.getElementById("finalsite");
  
//   con.value = selectedText;
//   sit.value = selectedSite;

// }