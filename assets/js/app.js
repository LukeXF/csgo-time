$("#menu-toggle").click(function(e) {
    e.preventDefault();

    $(this).fadeOut();
    setTimeout(function() {
        $("#wrapper").toggleClass("toggled");
        $("#show-chat").fadeIn();
    }, 500);
    $("#logo").delay(1100).fadeIn();
});
$("#show-chat").click(function(e) {
    e.preventDefault();
    setTimeout(function() {
        $("#wrapper").delay(400).toggleClass("toggled");
    }, 400);
    $(this).fadeOut();
    $("#logo").fadeOut();
    $("#menu-toggle").delay(800).fadeIn();
});


$('#circle').circleProgress({
    value: 1,
    size: 200,
    thickness: 3,
    animation: {
        duration: 20000
    },
    fill: {
        gradient: ["#07A4B3", "#00E9FF"]
    }
});

$( document ).ready(function() {
    /*
    var wrapper = '.message-wrapper';
    console.log($(wrapper).prop("scrollHeight"));

    var height = 0;
    $(".messages .message").each(function(i, value){
        console.log(this);
        height += parseInt($(this).height());
    });
    $(wrapper).animate({scrollTop: height}, 1000);

    */

});

var hash = document.location.hash;
var prefix = "tab_";
if (hash) {
    $('.tab-content ' +hash.replace(prefix,"")).addClass('active in');
    $(".navbar-right > *").removeClass('active');
    $(".navbar-right a[href='" + hash.replace(prefix,"") + "']").addClass("active").parents('li').addClass('active');
} else {
    $('.tab-content #home').addClass('active in');

}

// Change hash for page-reload
$('.navbar-right a').on('shown', function (e) {
    window.location.hash = e.target.hash.replace("#", "#" + prefix);
});
