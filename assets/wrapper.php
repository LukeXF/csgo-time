<div id="sidebar-wrapper">
    <div class="sidebar-nav">
        <div class="chat-box">
            <div class="sidebar-brand">
                <a>
                    <img class="csgotime-logo" src="assets/img/logo.png">
                </a>
            </div>
            <div id="fade"></div>
            <div class="message-wrapper">
            <div class="messages">
            <?php

                $i = 0;
                while ($i < rand(5, 20)) {

                    $message = $chatMessages[rand(0, count($chatMessages) - 1)];
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
                    <div class="message">
                        <div class="player">                       
                            <img src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/' . $player[2] . '_full.jpg">
                            <span class="label label-' . $label . '" title="Rank ' . $player[1] . '">' . $player[1] . '</span>
                            <span class="name">
                                ' . $player[0] . '
                            </span>                            
                        </div>
                        ' . $message . '
                    </div>';
                    $i++;
                }
            ?>
            </div>
            </div>
            <div class="chat">
                <?php if ($loggedIn) { ?>
                    Press enter to send
                <?php } else { ?>
                    Sign in to chat
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand animate">
                <i href="#menu-toggle" id="menu-toggle" class="btl bt-angles-left"></i>
                    <span id="logo">
                        <img class="csgotime-logo" src="assets/img/icon.png">
                        <b>CSGO</b>TIME
                    </span>
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">

                <?php if ($loggedIn) { ?>
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                <li role="presentation"><a href="#shop" aria-controls="shop" role="tab" data-toggle="tab">Shop</a></li>
                <li role="presentation"><a href="#inventory" aria-controls="inventory" role="tab" data-toggle="tab">Inventory</a></li>
                <li role="presentation"><a href="#help" aria-controls="help" role="tab" data-toggle="tab">Help</a></li>
                <li role="presentation"><a class='animate' href="#account" aria-controls="account" role="tab" data-toggle="tab">LukeXF
                        <img src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/c5/c511b42755441d7543fab3b9f0466d03b348539f_full.jpg">
                </li>

                <?php } else { ?>
                    <li class='active end'><a class='animate' href='?user'>Sign In <i class="fab fab-steam-alt"></i></a></li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>