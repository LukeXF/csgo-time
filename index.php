<?php require 'assets/header.php'; ?>
<?php require 'assets/navbar.php'; ?>

    <div id="inner-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="row" id="betting">
                        <div class="col-md-12 place-bets">
                            <div class="not-signed-in">
                                <div class="message">Sign in to begin competing.</div>
                                <a class='sign-in' href='login.php'>Sign In <i class="fab fab-steam-alt"></i></a>
                            </div>
                        </div>
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
                                                <span class="label label-' . $label . '" title="Rank ' . $player[1] . '">' . $player[1] . '</span>
                                                <span class="name">
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
                <div class="col-md-3">
                    <div id="clock">
                        <div id="circle"></div>
                        <h1>
                            <div class="hour-hand"><div class="hour"></div></div>
                        </h1>

                        <div class="col-md-12 bet-history">
                            <div class="message">Clock History</div>
                            <div class="history-icons">
                                <i class="btl bt-clock red"></i>
                                <i class="btl bt-clock blue"></i>
                                <i class="btl bt-clock grey"></i>
                                <i class="btl bt-clock grey" style="opacity:0.8"></i>
                                <i class="btl bt-clock red" style="opacity:0.7"></i>
                                <i class="btl bt-clock gold" style="opacity:0.6"></i>
                                <i class="btl bt-clock grey" style="opacity:0.5"></i>
                                <i class="btl bt-clock red" style="opacity:0.4"></i>
                                <i class="btl bt-clock blue" style="opacity:0.3"></i>
                                <i class="btl bt-clock blue" style="opacity:0.2"></i>
                                <i class="btl bt-clock grey" style="opacity:0.1"></i>
                            </div>
                        </div>
                    </div>


                </div>
                <a href="#show-chat" class="btn btn-default" id="show-chat">Show Chat</a>
            </div>

        </div>

    </div>



<?php require 'assets/footer.php'; ?>