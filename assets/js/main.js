function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
ScrollReveal().reveal('.aboutus', {
    rotate: {
        x: 120,
        y: 220
    },
    delay: 2000
});
ScrollReveal().reveal('.text1', { delay: 1000 });
ScrollReveal().reveal('.text2', { delay: 1500 });
ScrollReveal().reveal('.text3', { delay: 2000 });



$(document).ready(function(){

// modal login
$("#connexion").modal({
    fadeDuration: 250,
    fadeDelay: 1.50 // Will fade in 750ms after the overlay finishes.
});
$("#register").modal({
    fadeDuration: 250,
    fadeDelay: 1.50 // Will fade in 750ms after the overlay finishes.
});

// modal forgotpassword & modal modifpassword
    $('#sub-modal').modal({
        closeExisting: false
    });

});

// function supplémentaire pour la validation des CGU si jamais le navigateur n'a pas de "required" intégré
function checkForm(form)
{
    if(!form.terms.checked) {
        alert("Merci d'indiquer que vous acceptez nos Conditions Générales d'Utilisation.");
        form.terms.focus();
        return false;
    }
    return true;
}


document.getElementById("subscribeCGU").setCustomValidity("Merci d'indiquer que vous acceptez nos Conditions Générales d'Utilisation.");

window.addEventListener("DOMContentLoaded", function(e) {

    var myForm = document.getElementById("register");
    var checkForm = function(e) {
        if(!this.terms.checked) {
            alert("Merci d'indiquer que vous acceptez nos Conditions Générales d'Utilisation.");
            this.terms.focus();
            e.preventDefault(); // equivalent to return false
            return;
        }
    };

    // attach the form submit handler
    myForm.addEventListener("submit", checkForm, false);

    var myCheckbox = document.getElementById("subscribeCGU");
    var myCheckboxMsg = "Please indicate that you accept the Terms and Conditions";

    // set the starting error message
    myCheckbox.setCustomValidity(myCheckboxMsg);

    // attach checkbox handler to toggle error message
    myCheckbox.addEventListener("change", function(e) {
        this.setCustomValidity(this.validity.valueMissing ? myCheckboxMsg : "");
    }, false);

}, false);
