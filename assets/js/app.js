// when chat hide is clicked
$("#menu-toggle").click(function(e) {
    e.preventDefault();

    $(this).fadeOut();
    setTimeout(function() {
        $("#wrapper").toggleClass("toggled");
        $("#show-chat").delay(1100).fadeIn();
    }, 500);
    $("#logo").delay(1100).fadeIn();
});

// when chat show is clicked
$("#show-chat").click(function(e) {
    e.preventDefault();
    setTimeout(function() {
        $("#wrapper").delay(400).toggleClass("toggled");
    }, 400);
    $(this).fadeOut();
    $("#logo").fadeOut();
    $("#menu-toggle").delay(800).fadeIn();
});

$( document ).ready(function() {
    
    $(".inv-move").click(function() {

        $(this).fadeOut();
        $('.deposit-info').fadeOut();
        var img = $('img', this).attr('src');
        var text = $("h4", this).text() + " - " + $(this).attr('value');

        $('<div class="ready-to-deposit"><div data-toggle="tooltip" ' +
            'data-placement="bottom"' +
            'style="background: url(' + img + ') center #222"></div></div>').hide().appendTo('.deposit-line')
            .attr('data-original-title', text).tooltip('hide')
            .tooltip('fixTitle');

        var newValue = (parseInt($(this).attr('value')) +  parseInt($('#total-counter').html()));
        $('#total').html('Deposit for <i class="btl bt-money"></i> ' + newValue);
        $('#total-counter').html(newValue);
        $('.deposit-line div:last-of-type').delay(400).fadeIn();


    });

});


function moveToDeposit(){
    $(this).fadeOut();
}

// wrapper functionality
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

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});


function rand(min, max) {
    return Math.round(Math.random() * (max - min) + min);
}
