<ul id="clock">
    <li id="hand"></li>
</ul>
<div class="timeText"></div>

<script type="text/javascript" src="assets/js/jquery.min.js"></script>

<script src="//use.typekit.net/fde1nzp.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<script>

    spinClock(rand(0, 360));

    function spinClock(ran) {
        var deg = ((360 * 40.5) + ran);

        setTimeout(function () {
            $('.timeText').hide().html("Landed at " + ran + " Degrees.").fadeIn('slow');
        }, 5000);
        $("#hand").css({"transform": "rotate(" + deg + "deg)"});
    }

    function rand(min, max) {
        return Math.round(Math.random() * (max - min) + min);
    }
</script>
<style>
    #clock {
        position: relative;
        width: 200px;
        height: 200px;
        background: #333;
        border-radius: 500px;
        margin: 0 auto 0 auto;
        list-style: none;
        padding: 0;
        background: url(assets/img/clock.png);
    }

    .timeText {
        position: fixed;
        top: 0;
        font-size: 40px;
        font-family: "proxima-nova", sans-serif;
        letter-spacing: 1.22px;
    }

    #hand {
        background: url(assets/img/hand.png);
        z-index: 2;
        position: absolute;
        width: 15px;
        height: 200px;
        top: 0;
        left: 92.5px;
        transition: all 5s ease-in-out;
        -moz-transition: all 5s ease-in-out;
        -webkit-transition: all 5s ease-in-out;
    }

</style>