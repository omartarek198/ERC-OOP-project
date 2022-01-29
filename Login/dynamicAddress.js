var lastid = 0;
var whichS = 0;
function func(xd){
if(xd.value == "add another"){
lastid = 0;
whichS = 0;
document.getElementById("newI").style.display = "block";
document.getElementById("newB").style.display = "block";
}else{
// document.getElementById("registerCount").style.display = "block";
// document.getElementById("registerCount").disabled = true;
$.ajax({
url: 'countSearch.php',
type:'POST',
data:{
    cid : xd.value
},
success: (response)=> {
    lastid = xd.value;
    //alert(response);
    document.getElementById("registerCount").innerHTML = response;
    //alert(xd.value);
    
}
});
}
}
function funcC(xd){
if(xd.value == "add another"){
whichS = 1;
document.getElementById("newI").style.display = "block";
document.getElementById("newB").style.display = "block";
}else{
// document.getElementById("registerCount").style.display = "block";
// document.getElementById("registerCount").disabled = true;
$.ajax({
url: 'countSearch.php',
type:'POST',
data:{
    cid : xd.value
},
success: (response)=> {
    lastid = xd.value;
    //alert(response);
    document.getElementById("registerGov").innerHTML = response;
    //alert(xd.value);
    
}
});
}
}
function funcG(xd){
if(xd.value == "add another"){
whichS = 2;
document.getElementById("newI").style.display = "block";
document.getElementById("newB").style.display = "block";
}else{
// document.getElementById("registerCount").style.display = "block";
// document.getElementById("registerCount").disabled = true;
$.ajax({
url: 'countSearch.php',
type:'POST',
data:{
    cid : xd.value
},
success: (response)=> {
    lastid = xd.value;
    //alert(response);
    document.getElementById("registerCity").innerHTML = response;
    //alert(xd.value);
    
}
});
}
}
function funcD(xd){
if(xd.value == "add another"){
whichS = 3;
document.getElementById("newI").style.display = "block";
document.getElementById("newB").style.display = "block";
}else{
// document.getElementById("registerCount").style.display = "block";
// document.getElementById("registerCount").disabled = true;
$.ajax({
url: 'countSearch.php',
type:'POST',
data:{
    cid : xd.value
},
success: (response)=> {
    lastid = xd.value;
    whichS = 4;
    //alert(response);
    document.getElementById("registerDist").innerHTML = response;
    //alert(xd.value);
    
}
});
}
}
function addD(xd){
if(xd.value == "add another"){
whichS = 4;
document.getElementById("newI").style.display = "block";
document.getElementById("newB").style.display = "block";
}
}
function funcAdd(xd){
$.ajax({
url: 'registerNew.php',
type:'POST',
data:{
    lid: lastid, name: xd
},
success: (response)=> {
    // alert(lastid);
    switch(whichS){
        case 0:
            document.getElementById("registerCont").innerHTML +=response;
            break;
        case 1:
            document.getElementById("registerCount").innerHTML +=response;
            break;
        case 2:
            document.getElementById("registerGov").innerHTML +=response;
            break;
        case 3:
            document.getElementById("registerCity").innerHTML +=response;
            break;
        case 4:
            document.getElementById("registerDist").innerHTML +=response;
            break;
        default:
            break;
    }
}
});
document.getElementById("newI").style.display = "none";
document.getElementById("newI").value = "";
document.getElementById("newB").style.display = "none";
}