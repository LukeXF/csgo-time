<?php

$betTypes = array("grey" => 2, "red" => 5, "blue" => 10, "gold" => 50);

$players = array(
    array("LukeXF", 24, "c5/c511b42755441d7543fab3b9f0466d03b348539f"),
    array("Jacob29", 75, "c5/c511b42755441d7543fab3b9f0466d03b348539f"),
    array("Xeng0s", 1, "94/94822443af6d010a1e4a15c365231ff72b31290a"),
    array("98oi", 3, "94/94822443af6d010a1e4a15c365231ff72b31290a"),
    array("Thankz", 6, "94/94822443af6d010a1e4a15c365231ff72b31290a"),
    array("You", 1, "d5/d55a2c6c09bcb093ea94036ae05f7365b6520173"),
    array("Craig29", 2, "d5/d55a2c6c09bcb093ea94036ae05f7365b6520173"),
    array("Reanda#", 129, "d5/d55a2c6c09bcb093ea94036ae05f7365b6520173")
);

$chatMessages = array(
    "Going big on red!",
    "I'm feeling good about this one",
    "This is a cool site",
    "Ugh I can't believe blue won again",
    "So what's up",
    "That web designer is pretty cool",
    "The cake is a lie"
);

if (isset($_GET['user'])) {
    $loggedIn = true;
    $type = 'user';
} else if (isset($_GET['user'])) {
    $loggedIn = true;
    $type = 'admin';
} else {
    $loggedIn = false;
}
// var_dump($loggedIn);
// var_dump($type);
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CSGO Time, deposit skins, play against the clock and win big.">

    <title>CSGO TIME</title>

    <script src="//use.typekit.net/fde1nzp.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <link rel="stylesheet"  type="text/css"     href="assets/css/bootstrap.min.css">
    <link rel="stylesheet"  type="text/css"     href="assets/css/black-tie.min.css">
    <link rel="icon"        type="image/png"    href="assets/img/icon.png">
    <link rel="stylesheet"  type="text/css"     href="assets/css/style.css">

    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/circle-progress.js"></script>
    <!--<script type="text/javascript" src="assets/js/jquery.timeago.js"></script>-->
</head>
<body>

<div id="wrapper">
