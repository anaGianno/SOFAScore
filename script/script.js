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

  // put them all in an array for indexing using pagenumber variable
  let cardiovascularArray = [mapContainer,dopamineContainer,dobutamineContainer,epinephrineContainer,norepinephrineContainer];
  let cardiovascularValue;
  var cardiovascular = document.getElementsByName("cardiovascularRadio");
  for(var i = 0; i < cardiovascular.length; i++){
      if(cardiovascular[i].checked){
           cardiovascularValue = cardiovascular[i].value;
      }
  }

  // hide/display pages based on pagenumber index
  for(let i = 0; i<cardiovascularArray.length;i++){
    if(i==cardiovascularValue){
        cardiovascularArray[i].style.display = "block";
    }
    else{
        cardiovascularArray[i].style.display = "none";
    }
  }
}


