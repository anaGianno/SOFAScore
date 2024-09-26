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

  var map = document.getElementByName("map");
  var dopamine = document.getElementByName("dopamine");
  var dobutamine = document.getElementByName("dobutamine");
  var epinephrine = document.getElementByName("epinephrine");
  var norepinephrine = document.getElementByName("norepinephrine");

  // put them all in an array for indexing using pagenumber variable
  let cardiovascularContainerArray = [mapContainer,dopamineContainer,dobutamineContainer,epinephrineContainer,norepinephrineContainer];
  // use cardiovascularValue on this to return the name of the dropdown required
  let cardiovascularArray = [map,dopamine,dobutamine,epinephrine,norepinephrine];
  let cardiovascularValue;
  var cardiovascular = document.getElementsByName("cardiovascularRadio");
  let cardiovascularID;
  for(var i = 0; i < cardiovascular.length; i++){
      if(cardiovascular[i].checked){
        cardiovascularValue = cardiovascular[i].value;
        cardiovascularID = cardiovascular[i].na
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
}


