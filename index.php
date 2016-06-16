<?php require 'assets/header.php'; ?>
<?php require 'assets/wrapper.php'; ?>

    <div id="inner-content">
        <a href="#show-chat" class="btn btn-default" id="show-chat">Show Chat</a>
        <div class="container-fluid">


            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade" id="home">

                    <div class="row" style="max-width: 1200px;">
                        <div class="col-md-9">
                            <div class="row" id="betting">
                                <div class="col-md-12 place-bets">
                                    <div class="not-signed-in">


                                        <?php if ($loggedIn) { ?>
                                            <div class="message">You're in ;) Content coming soon.</div>
                                        <?php } else { ?>
                                            <div class="message">Sign in to begin competing.</div>
                                            <a class='sign-in' href='?user'>Sign In <i class="fab fab-steam-alt"></i></a>
                                        <?php } ?>
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
                    </div>

                </div>
                <div role="tabpanel" class="tab-pane pages fade" id="shop">
                    <h2>Shop</h2>
                </div>
                <div role="tabpanel" class="tab-pane pages fade" id="inventory">
                    <h2><span>Your</span> Inventory</h2>

                    <div class="row" style="max-width: 960px;">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="row">
                                    <div class="col-md-8 deposit-line">
                                        <div class="deposit-info">Click below to add items</div>
                                    </div>
                                    <div class="col-md-4">
                                        <div type="submit" id="total">Deposit for <i class="btl bt-money"></i></div>
                                        <div style="display:none" id="total-counter">0</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <?php gunTile("StatTrak™ M4A4 | Howl (Minimal Wear)", "https://csgostash.com/img/skins/s355.png", 92000); ?>
                            <?php gunTile("MAC-10 | Nuclear Garden (Factory New)", "https://csgostash.com/img/skins/s486.png", 200); ?>
                            <?php gunTile("Negev | Man-o'-war (Minimal Wear)", "https://csgostash.com/img/skins/s563mw.png", 1000); ?>
                            <?php gunTile("Flip Knife | Doppler (Factory New)", "https://csgostash.com/img/skins/s531fn.png", 12500); ?>
                            <?php gunTile("StatTrak™ M4A4 | Howl (Minimal Wear)", "https://csgostash.com/img/skins/s355.png", 92000); ?>
                            <?php gunTile("MAC-10 | Nuclear Garden (Factory New)", "https://csgostash.com/img/skins/s486.png", 200); ?>
                            <?php gunTile("StatTrak™ M4A4 | Howl (Minimal Wear)", "https://csgostash.com/img/skins/s355.png", 92000); ?>
                            <?php gunTile("Negev | Man-o'-war (Minimal Wear)", "https://csgostash.com/img/skins/s563mw.png", 1000); ?>
                            <?php gunTile("Flip Knife | Doppler (Factory New)", "https://csgostash.com/img/skins/s531fn.png", 12500); ?>    
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane pages fade" id="help">
                    <div class="row" style="max-width: 960px;">
                        <div class="col-md-12">
                            <h2>How much is each <i class="btl bt-money"></i> worth?</h2>
                            <h4>Each <i class="btl bt-money"></i> or coin is the equivalents to $1.00.</h4>
                        </div>
                        <div class="col-md-12">
                            <h2>How do I level up?</h2>
                            <h4>Keep playing on the clock to level up. Each <i class="btl bt-money"></i> that you bet you earn 1 XP.
                                <br>Track your progress on the accounts tab at the top of the page.</h4>
                        </div>
                        <div class="col-md-12">
                            <h2>What is the point of my level?</h2>
                            <h4>Levels help the competitive nature of players.<br>
                                Also, the higher your level, the bigger your daily reward is.<br>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane pages fade" id="account">
                    <div class="row" style="max-width: 960px;">
                        <div class="col-md-12">
                            <h2><span>Your</span> account</h2>
                            <h4>Keep playing on the clock to level up. Each <i class="btl bt-money"></i> that you bet you earn 1 XP.</h4>
                            <div class="box box-profile">
                                <img src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/c5/c511b42755441d7543fab3b9f0466d03b348539f_full.jpg">
                                <div class="name">LukeXF</div>
                                <div class="logout" data-toggle="tooltip" data-placement="bottom" title="Sign Out"><i class="btl bt-sign-in"></i></div>
                                <div class="level">
                                    <div class="level-xp">2,469xp until next level</div>
                                    <div class="level-text">Level 50</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h2><span>Your</span> Trade URL</h2>
                            <h4>For us to view your inventory and send trade offer, we need your
                                <a href="https://steamcommunity.com/id/me/tradeoffers/privacy#trade_offer_access_url" target="_blank">trade url</a>.
                            </h4>
                            <div class="box box-trade">
                                <div class="row">
                                    <div class="col-md-10">
                                        <input placeholder="Your full trade URL" value="https://steamcommunity.com/tradeoffer/new/?partner=71400563&token=PRwHAE3Q">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="submit" value="Save">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h2><span>Your</span> Transaction History</h2>
                            <h4>The last 10 transactions between our website and your steam inventory.
                            </h4>
                            <div class="box box-transactions">
                                <div class="row">
                                    <div class="col-md-12"><div class="bs-example" data-example-id="hoverable-table">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th>Type</th>
                                                    <th>Trade ID</th>
                                                    <th>Date</th>
                                                    <th>Value</th>
                                                    <th>Skins</th>
                                                    <th>Verify Code</th>
                                                    <th>Status</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th><i data-toggle="tooltip" data-placement="bottom" title="Deposited to our site" class="btl bt-sign-in"></i></th>
                                                    <td scope="row">2947492842</td>
                                                    <td>8:15pm, 8th June 2016</td>
                                                    <td><i class="btl bt-money"></i> 5,760</td>
                                                    <td class="skins">
                                                        <img src="https://csgostash.com/img/skins/s530fn.png" data-toggle="tooltip" data-placement="bottom" title="StatTrack Doppler Flip Knife (Factory New)">
                                                        <img src="https://csgostash.com/img/skins/s530fn.png" data-toggle="tooltip" data-placement="bottom" title="StatTrack Doppler Flip Knife (Factory New)">
                                                    </td>
                                                    <td>klj42s</td>
                                                    <td style="color:yellow">Pending</td>
                                                </tr>
                                                <tr>
                                                    <th><i data-toggle="tooltip" data-placement="bottom" title="Deposited to our site" class="btl bt-sign-in"></i></th>
                                                    <td scope="row">12319283190</td>
                                                    <td>10:49am, 5th June 2016</td>
                                                    <td><i class="btl bt-money"></i> 102,000</td>
                                                    <td class="skins">
                                                        <img src="https://csgostash.com/img/skins/s355.png" data-toggle="tooltip" data-placement="bottom" title="Kill Confirmed USP-S (Factory New)">
                                                        <img src="https://csgostash.com/img/skins/s529fn.png" data-toggle="tooltip" data-placement="bottom" title="Reflected Flip Knife (Damaged)">
                                                    </td>
                                                    <td>l2kljn</td>
                                                    <td style="color:darkgreen">Complete</td>
                                                </tr>
                                                <tr>
                                                    <th><i data-toggle="tooltip" data-placement="bottom" title="Withdrawn to your Steam account" class="btl bt-sign-out" style="padding-left: 5px"></i></th>
                                                    <td scope="row">3034539085</td>
                                                    <td>4:20am, 20th April 2016</td>
                                                    <td><i class="btl bt-money"></i> 42,000</td>
                                                    <td class="skins">
                                                        <img src="https://csgostash.com/img/skins/s531fn.png" data-toggle="tooltip" data-placement="bottom" title="StatTrack Yellow Shit Knife (Factory New)">
                                                        <img src="https://csgostash.com/img/skins/s540fn.png" data-toggle="tooltip" data-placement="bottom" title="Silver Bayonet (Minimum Wear)">
                                                        <img src="https://csgostash.com/img/skins/s549fn.png" data-toggle="tooltip" data-placement="bottom" title="StatTrack Doppler Karambit (Damaged)">
                                                    </td>
                                                    <td>aslm43</td>
                                                    <td style="color:darkred">Failed</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>



<?php require 'assets/footer.php'; ?>