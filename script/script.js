var nhi = document.getElementById("nhi");
var nhianswer = document.getElementById("nhianswer");
// var fname = document.getElementById("fname");
// var sname = document.getElementById("sname");

function checknhi(){
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