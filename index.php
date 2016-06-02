<?php require 'assets/header.php'; ?>
<body>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <div class="sidebar-nav">
            <div class="chat-box">
                <div class="sidebar-brand">
                    <a>
                        <img class="csgotime-logo" src="assets/img/logo.png">
                    </a>
                </div>
                <div class="chat">
                    Login to chat
                </div>
            </div>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->

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
                <a class="navbar-brand animate" href="//localhost:8888/shadowgram/index.php">
                    <img class="csgotime-logo" src="assets/img/logo.png">
                    CSGO TIME </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                </ul>
                <ul class="nav navbar-nav navbar-right">

                    <li class=''><a class='animate' href='support.php'>Support</a></li>
                    <!--<li class='active end'><a class='animate' href='register.php'>Register</a></li>-->
                    <li class='active end'><a class='animate' href='login.php'>Sign In <i class="fab fab-steam-alt"></i></a></li>

                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
    <div id="page-content-wrapper">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Clock</h1>
                    <p>-</p>
                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>

