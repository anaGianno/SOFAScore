// make sure nhi number is in the correct format
function checknhi(){
    var nhi = document.getElementById("nhi");
    var nhianswer = document.getElementById("nhianswer");
    // AAANNNN where A=uppercase letter and N=digit
    let nhipattern = /^[A-Z]{3}\d{4}$/;
    if(nhipattern.test(nhi.value)){
        return checkName();
    }
    else{
        alert("NHI number should conform to the pattern AAANNNN where A=uppercase letter and N=digit");
        return false;
    }
}

// make sure user entered a first and surname
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

// make sure user entered an input for cardiovascular
function checkCardiovascularResult(){
  var cardiovascular = document.getElementsByName("cardiovascularRadio");
  for(var i = 0; i < cardiovascular.length; i++){
    if(cardiovascular[i].checked){
      return checkCpapResult();
    }
  }
  alert("Please enter an input for cardiovascular system");
  return false;
}

// make sure user entered an input for cpap
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

// check which radio button was selected; display the corresponding dropdown box
function checkCardiovascular(){
  // get all containers for the dropdown boxes 
  var mapContainer = document.getElementById("map-container");
  var dopamineContainer = document.getElementById("dopamine-container");
  var dobutamineContainer = document.getElementById("dobutamine-container");
  var epinephrineContainer = document.getElementById("epinephrine-container");
  var norepinephrineContainer = document.getElementById("norepinephrine-container");

  // put them all in an array for indexing
  let cardiovascularContainerArray = [mapContainer,dopamineContainer,dobutamineContainer,epinephrineContainer,norepinephrineContainer];
  // get all radio buttons
  var cardiovascular = document.getElementsByName("cardiovascularRadio");
  let cardiovascularValue;
  //get the value of the selected radio button
  for(var i = 0; i < cardiovascular.length; i++){
      if(cardiovascular[i].checked){
        cardiovascularValue = cardiovascular[i].value;
      }
  }

  // use the value of the selected radio button as an index to hide/display the dropdown boxes
  for(let i = 0; i<cardiovascularContainerArray.length;i++){
    // show the dropdown box if it is corresponding to the radio button
    if(i==cardiovascularValue){
        cardiovascularContainerArray[i].style.display = "block";
    }
    // hide the dropdown box if its not the chosen option
    else{
        cardiovascularContainerArray[i].style.display = "none";
    }
  }
}

// get the value of the dropdown box option 
function getCardiovascular(){
  // get the dropdown box for all cardiovascular options
  var map = document.getElementById("map");
  var dopamine = document.getElementById("dopamine");
  var dobutamine = document.getElementById("dobutamine");
  var epinephrine = document.getElementById("epinephrine");
  var norepinephrine = document.getElementById("norepinephrine");

  /// put them all in an array for indexing
  let cardiovascularArray = [map,dopamine,dobutamine,epinephrine,norepinephrine];
  // put the original values of the dropdown boxes in an array
  let cardiovascularNamesArray = ["map","dopamine","dobutamine","epinephrine","norepinephrine"];
  // get all radio buttons
  var cardiovascular = document.getElementsByName("cardiovascularRadio");
  let cardiovascularValue;
  for(var i = 0; i < cardiovascular.length; i++){
    if(cardiovascular[i].checked){
      cardiovascularValue = cardiovascular[i].value;
    }
  }

  // set the chosen dropdown box's name to cardiovascularSystem for PUT
  for(var i = 0; i<cardiovascularArray.length;i++){
    if(i==cardiovascularValue){
        cardiovascularArray[i].setAttribute("name","cardiovascularSystem");
    }
    // set unselected dropdown box name to its default value
    else{
      cardiovascularArray[i].setAttribute("name",cardiovascularNamesArray[i]);
    }
  }
}
