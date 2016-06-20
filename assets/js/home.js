// int clock
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

});