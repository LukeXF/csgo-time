<div class="row" id="betting" style="max-width: 1200px;">

    <div class="col-md-7">
        <div id="clock">
            <div id="circle"></div>
            <li id="hand"></li>
            <div class="timeText"></div>

            <h1>
                <div class="hour-hand"><div class="hour"></div></div>
            </h1>
        </div>
    </div>

    <div class="col-md-5 bet-history">
        <div class="message">Clock History</div>
        <div class="history-icons">
            <i class="btl bt-clock bt-2x red"></i>
            <i class="btl bt-clock bt-2x blue"></i>
            <i class="btl bt-clock bt-2x grey"></i>
            <i class="btl bt-clock bt-2x grey" style="opacity:0.8"></i>
            <i class="btl bt-clock bt-2x red" style="opacity:0.7"></i>
            <i class="btl bt-clock bt-2x gold" style="opacity:0.6"></i>
            <i class="btl bt-clock bt-2x grey" style="opacity:0.5"></i>
            <i class="btl bt-clock bt-2x red" style="opacity:0.4"></i>
            <i class="btl bt-clock bt-2x blue" style="opacity:0.3"></i>
            <i class="btl bt-clock bt-2x blue" style="opacity:0.2"></i>
            <i class="btl bt-clock bt-2x grey" style="opacity:0.1"></i>
        </div>

    </div>
    <div class="col-md-5 place-bets">

        <?php if ($loggedIn) { ?>
        <div class="signed-in">
            <div class="message">
                <div class="row betting-options">
                    <div class="col-md-12">
                        <button class="btn btn-default">Clear</button>
                        <button class="btn btn-default">Last</button>
                        <button class="btn btn-default">10</button>
                        <button class="btn btn-default">100</button>
                        <button class="btn btn-default">100</button>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-default">1000</button>
                        <button class="btn btn-default">10000</button>
                        <button class="btn btn-default">1/2</button>
                        <button class="btn btn-default">x2</button>
                        <button class="btn btn-default">Max</button>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-default betting-balance">15,000 <i class="btl bt-money"></i></button>
                        <input type="email" class="form-control" placeholder="0">
                    </div>
                </div>
            </div>
            <?php } else { ?>
            <div class="not-signed-in">
                <div class="message">Sign in to begin competing.</div>
                <a class='sign-in' href='?user'>Sign In <i class="fab fab-steam-alt"></i></a>
                <?php } ?>
            </div>
        </div>

        <div class="col-md-12">
            <div class="row">
                <?php

                foreach ($betTypes as $colour => $amount) {
                    echo '
                                        <div class="col-xs-3">
                                            <button type="button" class="btn btn-' . $colour . '-outline">' . $amount . 'x</button>
                                                <div id="' . $colour . 'Bets">
                                        ';
                    //if ($colour == "red") {
                    // foreach ($players as $player) {
                    $i = 0;
                    while ($i < rand(5, 20)) {

                        $player = $players[rand(0, count($players) - 1)];

                        if ($player[1] < 10) {
                            $label = "default";
                        } else if ($player[1] < 25) {
                            $label = "primary";
                        } else if ($player[1] < 50) {
                            $label = "info";
                        } else if ($player[1] < 100) {
                            $label = "warning";
                        } else if ($player[1] < 250) {
                            $label = "danger";
                        } else {
                            $label = "default";
                        }
                        echo '
                                                    <div class="player">
                                                        <span class="name" title="Rank ' . $player[1] . '">
                                                            <img src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/' . $player[2] . '_full.jpg">
                                                        ' . $player[0] . '</span>
                                                        <span class="amount ' . $colour . '">' . rand(100, 10000) ,  '</span>
                                                    </div>
                                                ';
                        $i++;
                        //}
                    }
                    echo '
                                                </div>
                                        </div>
                                        ';
                }
                ?>
            </div>
        </div>
    </div>
