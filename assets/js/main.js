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
// modal connexion
$("#connexion").modal({
    fadeDuration: 250,
    fadeDelay: 1.50 // Will fade in 750ms after the overlay finishes.
});

});