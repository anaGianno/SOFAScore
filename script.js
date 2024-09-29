// var fname = document.getElementById("fname");
// var sname = document.getElementById("sname");

function checknhi(){
    var nhi = document.getElementById("nhi");
    var nhianswer = document.getElementById("nhianswer");
    let nhipattern = /^[A-Z]{3}\d{4}$/;
    if(nhipattern.test(nhi.value)){
        nhianswer.innerHTML = "good nhi pattern"
        return true;
    }
    else{
        nhianswer.innerHTML = "bad nhi pattern"
        alert("bad nhi pattern");
        return false;
    }
}

function checkCardiovascularResult(){
  var cardiovascular = document.getElementsByName("cardiovascularRadio");
  //let cardiovascularID;
  for(var i = 0; i < cardiovascular.length; i++){
      if(cardiovascular[i].checked){
        alert("cardiovascular true");
        return checkCpapResult();
      }
  }
  alert("cardiovascular false");
  return false;
}

function checkCpapResult(){
  var cpap = document.getElementsByName("cpap");
  //let cardiovascularID;
  for(var i = 0; i < cpap.length; i++){
      if(cpap[i].checked){
        alert("cpap true");
        return true;
      }
  }
  alert("cpap false");
  return false;
}

// get slider and output by Id 
var slider = document.getElementById("centralNervousSystem");
var output = document.getElementById("agenumber");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
  output.innerHTML = this.value;
}

//inputs: textboxes are okay
//input measurements: its nice to add
//dobutamine: textbox
//renal function urine output:add that


// var cardiovascularDropdown = document.getElementById("cardiovascularDropdown");
// var cardiovascular = document.getElementsByName("cardiovascularRadio");
// var cardiovascularValue;
// for(var i = 0; i < cardiovascular.length; i++){
//     if(cardiovascular[i].checked){
//         cardiovascularValue = cardiovascular[i].value;
//     }
// }


function checkCardiovascular(){
  // get all page html from Id
  var mapContainer = document.getElementById("map-container");
  var dopamineContainer = document.getElementById("dopamine-container");
  var dobutamineContainer = document.getElementById("dobutamine-container");
  var epinephrineContainer = document.getElementById("epinephrine-container");
  var norepinephrineContainer = document.getElementById("norepinephrine-container");

  var map = document.getElementById("map");
  var dopamine = document.getElementById("dopamine");
  var dobutamine = document.getElementById("dobutamine");
  var epinephrine = document.getElementById("epinephrine");
  var norepinephrine = document.getElementById("norepinephrine");

  // put them all in an array for indexing using pagenumber variable
  let cardiovascularContainerArray = [mapContainer,dopamineContainer,dobutamineContainer,epinephrineContainer,norepinephrineContainer];
  // use cardiovascularValue on this to return the name of the dropdown required
  let cardiovascularArray = [map,dopamine,dobutamine,epinephrine,norepinephrine];
  let cardiovascularValue;
  var cardiovascular = document.getElementsByName("cardiovascularRadio");
  //let cardiovascularID;
  for(var i = 0; i < cardiovascular.length; i++){
      if(cardiovascular[i].checked){
        cardiovascularValue = cardiovascular[i].value;
        // cardiovascularID = cardiovascular[i].na
      }
  }

  // hide/display pages based on pagenumber index
  for(let i = 0; i<cardiovascularContainerArray.length;i++){
    if(i==cardiovascularValue){
        cardiovascularContainerArray[i].style.display = "block";
    }
    else{
        cardiovascularContainerArray[i].style.display = "none";
    }
  }
  //xampp or moodle or email. might need to show value and score in result.php
}

function getCardiovascular(){
  var map = document.getElementById("map");
  var dopamine = document.getElementById("dopamine");
  var dobutamine = document.getElementById("dobutamine");
  var epinephrine = document.getElementById("epinephrine");
  var norepinephrine = document.getElementById("norepinephrine");

  // use cardiovascularValue on this to return the name of the dropdown required
  let cardiovascularArray = [map,dopamine,dobutamine,epinephrine,norepinephrine];
  let cardiovascularNamesArray = ["map","dopamine","dobutamine","epinephrine","norepinephrine"];
  let cardiovascularValue;
  var cardiovascular = document.getElementsByName("cardiovascularRadio");
  let cardiovascularID;

  for(var i = 0; i < cardiovascular.length; i++){
    if(cardiovascular[i].checked){
      cardiovascularValue = cardiovascular[i].value;
      // cardiovascularID = cardiovascular[i].na
    }
  }

  //alert("teeeeest");
  //alert("cardio value" + cardiovascularValue);
  // hide/display pages based on pagenumber index
  for(var i = 0; i<cardiovascularArray.length;i++){
    name1 = cardiovascularArray[i].getAttribute("name");
    // alert("test1" + cardiovascularArray[i].getAttribute("name"));

    if(i==cardiovascularValue){
        //alert("beforeMain" + cardiovascularArray[i].getAttribute("name"));
        cardiovascularArray[i].setAttribute("name","cardiovascularSystem");
        //alert("afterMain" + cardiovascularArray[i].getAttribute("name"));
        prevName = name1;
        cardiovascularExist = true;
    }
    else{
     // alert("beforeSub" + cardiovascularArray[i].getAttribute("name"));
      cardiovascularArray[i].setAttribute("name",cardiovascularNamesArray[i]);
      //alert("afterSub" + cardiovascularArray[i].getAttribute("name"));
    }
  }
 
 
  //xampp or moodle or email. might need to show value and score in result.php
}
