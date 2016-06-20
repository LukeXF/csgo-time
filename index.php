<?php require 'assets/header.php'; ?>
<?php require 'assets/wrapper.php'; ?>

    <div id="inner-content">
        <a href="#show-chat" class="btn btn-default" id="show-chat">Show Chat</a>
        <div class="container-fluid">


            <div class="tab-content">

                <div role="tabpanel" class="tab-pane fade" id="home">
                    <?php require_once("pages/home.php"); ?>
                </div>
                
                <div role="tabpanel" class="tab-pane pages fade" id="shop">
                    <?php require_once("pages/shop.php"); ?>
                </div>

                <div role="tabpanel" class="tab-pane pages fade" id="inventory">
                    <?php require_once("pages/inventory.php"); ?>
                </div>

                <div role="tabpanel" class="tab-pane pages fade" id="help">
                    <?php require_once("pages/help.php"); ?>
                </div>

                <div role="tabpanel" class="tab-pane pages fade" id="account">
                    <?php require_once("pages/account.php"); ?>
                </div>

            </div>


        </div>

    </div>



<?php require 'assets/footer.php'; ?>