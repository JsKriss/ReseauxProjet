$(document).ready(function(){
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
// modal register
$("#register").modal({
    escapeClose: false,
    clickClose: false,
    showClose: false
});

});