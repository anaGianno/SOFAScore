var nhi = document.getElementById("nhi");
var nhianswer = document.getElementById("nhianswer");
// var fname = document.getElementById("fname");
// var sname = document.getElementById("sname");

function checknhi(){
    let nhipattern = /[A-Z][A-Z][A-Z][0-9][0-9][0-9][0-9]/;
    if(nhipattern.test(nhi.value)){
        nhianswer.innerHTML = "good nhi pattern"
        return true;
    }
    else{
        nhianswer.innerHTML = "bad nhi pattern"
        return false;
    }
}