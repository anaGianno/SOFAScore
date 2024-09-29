// var fname = document.getElementById("fname");
// var sname = document.getElementById("sname");

function checknhi(){
    var nhi = document.getElementById("nhi");
    var nhianswer = document.getElementById("nhianswer");
    let nhipattern = /^[A-Z]{3}\d{4}$/;
    if(nhipattern.test(nhi.value)){
        return checkName();
    }
    else{
        alert("NHI number should conform to the pattern AAANNNN where A=uppercase letter and N=digit");
        return false;
    }
}

function checkName(){
  var fname = document.getElementById("fname");
  var sname = document.getElementById("sname");
  if(fname.value === "" | sname.value === ""){
      alert("Please enter a first name/surname");
      return false;
  }
  else{
    return true;
  }
}

function checkCardiovascularResult(){
  var cardiovascular = document.getElementsByName("cardiovascularRadio");
  //let cardiovascularID;
  for(var i = 0; i < cardiovascular.length; i++){
      if(cardiovascular[i].checked){
        return checkCpapResult();
      }
  }
  alert("Please enter an input for cardiovascular system");
  return false;
}

function checkCpapResult(){
  var cpap = document.getElementsByName("cpap");
  for(var i = 0; i < cpap.length; i++){
      if(cpap[i].checked){
        return true;
      }
  }
  alert("Please enter an input for CPAP");
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
