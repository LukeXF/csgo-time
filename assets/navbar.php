<div id="sidebar-wrapper">
    <div class="sidebar-nav">
        <div class="chat-box">
            <div class="sidebar-brand">
                <a>
                    <img class="csgotime-logo" src="assets/img/logo.png">
                </a>
            </div>
            <div class="messages">
            <?php
                foreach ($chatMessages as $message) {

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
                                                <span class="label label-' . $label . '" title="Rank ' . $player[1] . '">' . $player[1] . '</span>
                                                <span class="name">
                                                    <img src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/' . $player[2] . '_full.jpg">
                                                ' . $player[0] . '</span>
                                            </div>
                    ' . $message . '
                    </div>';
                }
            ?>
            </div>
            <div class="chat">
                Sign in to chat
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

                <li class=''><a class='animate' href='support.php'>Support</a></li>
                <li class='active end'><a class='animate' href='login.php'>Sign In <i class="fab fab-steam-alt"></i></a></li>

            </ul>
        </div>
    </div>
</nav>