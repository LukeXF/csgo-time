<?php require 'assets/header.php'; ?>
<?php require 'assets/navbar.php'; ?>

    <div id="inner-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div id="clock">
                        <div id="circle"></div>
                        <h1>
                            <div class="hour-hand"><div class="hour"></div></div>
                        </h1>
                    </div>
                </div>
                <a href="#show-chat" class="btn btn-default" id="show-chat">Show Chat</a>
            </div>

            <div class="row" id="betting">
                <div class="col-xs-3">
                    <button type="button" class="btn btn-grey-outline">2x</button>
                </div>
                <div class="col-xs-3">
                    <button type="button" class="btn btn-red-outline">3x</button>
                </div>
                <div class="col-xs-3">
                    <button type="button" class="btn btn-blue-outline">6x</button>
                </div>
                <div class="col-xs-3">
                    <button type="button" class="btn btn-gold-outline">60x</button>
                </div>
            </div>
        </div>

    </div>



<?php require 'assets/footer.php'; ?>