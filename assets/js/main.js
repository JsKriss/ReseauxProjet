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
// modal login
$("#connexion").modal({
    fadeDuration: 250,
    fadeDelay: 1.50 // Will fade in 750ms after the overlay finishes.
});
// modal forgotpassword & modal modifpassword
$('#sub-modal').modal({
    closeExisting: false
});
$('.text').on('click',function(){
    console.log('fvjfvjf')
    var txt1 = 'fuhfkfkd fjdkfdk';
    var txt2 = 'hfjdhgfjkghfj hfjgfjkdnv'
    var txt3 = 'yf fehfghef eujhdj fu'
    if($('.target')){
        $(this).fadeOut(1000,function() {
            $('.target').append('<p>' + txt1 + '</p>');
        })
            if ($('.work')){
                $(this).fadeOut(1000,function() {
                    $('.work').after('<p>' + txt2 + '</p>');
                })
                if ($('.entreprise')) {
                    $(this).fadeOut(1000, function () {
                        $('.entreprise').after('<p>' + txt3 + '</p>');
                    })
                }
            }
        };
    });
});