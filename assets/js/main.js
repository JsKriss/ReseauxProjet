
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
$('a[data-modal]').on('click', function() {
    $($(this).data('modal')).modal();
    return false;
});