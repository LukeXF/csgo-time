$("#menu-toggle").click(function(e) {
    e.preventDefault();

    $(this).fadeOut();
    setTimeout(function() {
        $("#wrapper").toggleClass("toggled");
        $("#show-chat").delay(1100).fadeIn();
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
    size: 350,
    thickness: 7,
    animation: {
        duration: 20000
    },
    startAngle: -Math.PI / 2,
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


    spinClock(rand(0, 360), 1);

    function spinClock(ran, i) {
        var deg = (((360 * 20.5) * i) + ran);


        setTimeout(function () {


            $('#circle').circleProgress({
                value: 0,
                size: 350,
                thickness: 7,
                animation: {
                    duration: 20000
                },
                startAngle: -Math.PI / 2,
                fill: {
                    gradient: ["#07A4B3", "#00E9FF"]
                }
            });


            setTimeout(function () {
                $('.timeText').hide().html("Landed at " + ran + " Degrees.").fadeIn('slow');

                $('#circle').circleProgress({
                    value: 1,
                    size: 350,
                    thickness: 7,
                    animation: {
                        duration: 20000
                    },
                    startAngle: -Math.PI / 2,
                    fill: {
                        gradient: ["#07A4B3", "#00E9FF"]
                    }
                });

                spinClock(rand(0, 360), i + 1);

            }, 5000);
            $("#hand").css({"transform": "rotate(" + deg + "deg)"});
        }, 20000);
    }

    function rand(min, max) {
        return Math.round(Math.random() * (max - min) + min);
    }
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

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});

function moveToDeposit(){
    $(this).fadeOut();
}