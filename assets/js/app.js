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