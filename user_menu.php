<?php
session_start();
include './admin/config.php';
$email = $_SESSION['email'];
if(!isset($_SESSION['email'])){
    header('location: login.php');
}
?>
<!DOCTYPE php>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="author" content="">
    <title>Find Your Dream Home | The Mei Team</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <!-- GOOGLE FONTS -->
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="font/flaticon.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.1/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.1/css/sharp-solid.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- LEAFLET MAP -->
    <link rel="stylesheet" href="css/leaflet.css">
    <link rel="stylesheet" href="css/leaflet-gesture-handling.min.css">
    <link rel="stylesheet" href="css/leaflet.markercluster.css">
    <link rel="stylesheet" href="css/leaflet.markercluster.default.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="css/timedropper.css">
    <link rel="stylesheet" href="css/datedropper.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" id="color" href="css/default.css">
    <link rel="stylesheet" href="./css/user_sidebar.css">
    <script src="./js/jquery-3.5.1.min.js"></script>


</head>

<body>

    <div id="wrapper" class="toggled">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand mb-5">
                    <a href="./index.php">
                        <img src="./images/mei_logo.png" alt="" class="img-fluid">
                    </a>
                </li>
                <li>
                    <a href="./user.php">Dashboard</a>
                </li>
                <!-- <li>
                    <a href="./favourite_properties.php">Favourite Properties</a>
                </li> -->
                <!-- <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li> -->
            </ul>
        </div>
    </div>
    <button id="u_menu-toggle" class="left_scale m-3 p-2"><span class="navbar-toggler-icon"></span></button>