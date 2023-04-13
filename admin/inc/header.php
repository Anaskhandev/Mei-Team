<?php

session_start();
include './config.php';

if (isset($_SESSION['admin_logged'])) {
} else {
    header("location: ./index.php");
}

?>

<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>ADMIN PANEL | MEI-TEAM</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="../css/search.css">
    <link rel="stylesheet" href="../css/dashbord-mobile-menu.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/swiper.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/lightcase.css">
    <link rel="stylesheet" href="../css/owl-carousel.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/slick.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" id="color" href="../css/default.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs-3.3.6/jqc-1.12.3/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.12/af-2.1.2/b-1.2.2/b-colvis-1.2.2/b-html5-1.2.2/b-print-1.2.2/cr-1.3.2/fc-3.2.2/fh-3.1.2/kt-2.1.3/r-2.1.0/rr-1.1.2/sc-1.4.2/se-1.2.0/datatables.min.css">

</head>

<body class="maxw1600 m0a dashboard-bd">
    <!-- Wrapper -->
    <div id="wrapper" class="int_main_wraapper">
        <div class="dash-content-wrap">
            <header id="header-container" class="db-top-header">
                <!-- Header -->
                <div id="header" class="pb-2">
                    <div class="container-fluid">
                        <!-- Left Side Content -->
                        <div class="left-side">
                            <!-- Logo -->
                            <div id="logo">
                                <a href="index.html"><img src="../images/Black.png" alt=""></a>
                            </div>
                            <!-- Mobile Navigation -->
                            <div class="mmenu-trigger">
                                <button class="hamburger hamburger--collapse" type="button">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                            <!-- Main Navigation -->
                            <nav id="navigation" class="d-xl-none style-1">
                                <ul id="responsive">
                                    <li>
                                        <a class="" href="dashboard.php">
                                            <i class="fa mx-2 fa-map-marker"></i> Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Neighborhood.php">
                                            <i class="fa mx-2 fa-map"></i>Neighborhood
                                        </a>
                                    </li>
                                    <li>
                                        <a href="cities.php">
                                            <i class="fa mx-2 fa-map"></i>Cities
                                        </a>
                                    </li>
                                    <li>
                                        <a href="properties.php">
                                            <i class="fa mx-2 fa-map"></i>Properties
                                        </a>
                                    </li>
                                    <li>
                                        <a href="agents.php">
                                            <i class="fa mx-2 fa-list" aria-hidden="true"></i>Agents / Team
                                        </a>
                                    </li>
                                    <li>
                                        <a href="testimonials.php">
                                            <i class="fa mx-2 fa-cloud"></i>Testimonials
                                        </a>
                                    </li>
                                    <li>
                                        <a href="users.php">
                                            <i class="fa mx-2 fa-user"></i>Users
                                        </a>
                                    </li>
                                    <li>
                                        <a href="inquiry.php">
                                            <i class="fa mx-2 fa-comment"></i>Connect With Expert
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact.php">
                                            <i class="fa mx-2 fa-comment" aria-hidden="true"></i>Contact
                                        </a>
                                    </li>
                                    <!-- <li>
                                        <a href="add-property.html">
                                            <i class="fa mx-2 fa-list" aria-hidden="true"></i>Add Property
                                        </a>
                                    </li>
                                    <li>
                                        <a href="payment-method.html">
                                            <i class="fa mx-2 fa-credit-card"></i>Payments
                                        </a>
                                    </li>
                                    <li>
                                        <a href="invoice.html">
                                            <i class="fa mx-2 fa-paste"></i>Invoices
                                        </a>
                                    </li>
                                    <li>
                                        <a href="change-password.php">
                                            <i class="fa mx-2 fa-lock"></i>Change Password
                                        </a>
                                    </li> -->
                                    <li>
                                        <a href="logout.php">
                                            <i class="fas mx-2 fa-sign-out-alt"></i>Log Out
                                        </a>
                                    </li>

                                </ul>
                            </nav>
                            <div class="clearfix"></div>
                            <!-- Main Navigation / End -->
                        </div>
                        <!-- Left Side Content / End -->
                        <!-- Right Side Content / -->
                        <!-- <div class="header-user-menu user-menu">
                            <div class="header-user-name">
                                <span><img src="../images/testimonials/ts-1.jpg" alt=""></span>Hi, Mary!
                            </div>
                            <ul>
                                <li><a href="user-profile.php"> Edit profile</a></li>
                                <li><a href="add-property.html"> Add Property</a></li>
                                <li><a href="payment-method.html"> Payments</a></li>
                                <li><a href="change-password.php"> Change Password</a></li>
                                <li><a href="#">Log Out</a></li>
                            </ul>
                        </div> -->
                        <!-- Right Side Content / End -->
                    </div>
                </div>
                <!-- Header / End -->
            </header>
        </div>
        <div class="clearfix"></div>
        <!-- Header Container / End -->
        <!-- START SECTION DASHBOARD -->
        <section class="user-page section-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-xs-12 pl-0 pr-0 user-dash">
                        <div class="user-profile-box mb-0">
                            <div class="sidebar-header d-flex"><img src="../images/mei_logo.png" alt="header-logo2.png"> </div>
                            <!-- <div class="header clearfix"> -->
                            <!-- <img src="../images/testimonials/ts-1.jpg" alt="avatar" class="img-fluid profile-img"> -->
                            <!-- </div> -->
                            <div class="active-user">
                                <h2><?php echo $_SESSION['admin_logged']; ?></h2>
                            </div>
                            <div class="detail clearfix">
                                <ul class="mb-0">
                                    <li>
                                        <a class="" href="dashboard.php">
                                            <i class="fa mx-2 fa-map-marker"></i> Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Neighborhood.php">
                                            <i class="fa mx-2 fa-map"></i>Neighborhood
                                        </a>
                                    </li>
                                    <li>
                                        <a href="cities.php">
                                            <i class="fa mx-2 fa-map"></i>Cities
                                        </a>
                                    </li>
                                    <li>
                                        <a href="properties.php">
                                            <i class="fa mx-2 fa-map"></i>Properties
                                        </a>
                                    </li>
                                    <li>
                                        <a href="agents.php">
                                            <i class="fa mx-2 fa-list" aria-hidden="true"></i>Agents / Team
                                        </a>
                                    </li>
                                    <li>
                                        <a href="testimonials.php">
                                            <i class="fa mx-2 fa-cloud"></i>Testimonials
                                        </a>
                                    </li>
                                    <li>
                                        <a href="users.php">
                                            <i class="fa mx-2 fa-user"></i>Users
                                        </a>
                                    </li>
                                    <li>
                                        <a href="inquiry.php">
                                            <i class="fa mx-2 fa-comment"></i>Connect With Expert
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact.php">
                                            <i class="fa mx-2 fa-comment" aria-hidden="true"></i>Contact
                                        </a>
                                    </li>
                                    <!-- <li>
                                        <a href="add-property.html">
                                            <i class="fa mx-2 fa-list" aria-hidden="true"></i>Add Property
                                        </a>
                                    </li>
                                    <li>
                                        <a href="payment-method.html">
                                            <i class="fas mx-2 fa-credit-card"></i>Payments
                                        </a>
                                    </li>
                                    <li>
                                        <a href="invoice.html">
                                            <i class="fas mx-2 fa-paste"></i>Invoices
                                        </a>
                                    </li>
                                    <li>
                                        <a href="change-password.php">
                                            <i class="fa mx-2 fa-lock"></i>Change Password
                                        </a>
                                    </li> -->
                                    <li>
                                        <a href="logout.php">
                                            <i class="fas mx-2 fa-sign-out-alt"></i>Log Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="user-dash2 col-lg-9 col-md-6 col-xs-6 widget-boxed mt-33 mt-0">
                        <div class="app-page-title">
                            <div class="page-title-wrapper mb-3">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="fa fa-home icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div class="admin_heading">Mei Team Dashboard
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mobile-dashbord dashbord">
                            <div class="dashboard_navigationbar dashxl">
                                <div class="dropdown">
                                    <button onclick="myFunction()" class="dropbtn"><i class="fa mx-2 fa-bars pr10 mr-2"></i> Dashboard Navigation</button>
                                    <ul id="myDropdown" class="dropdown-content">
                                        <li>
                                            <a class="active" href="dashboard.php">
                                                <i class="fa mx-2 fa-map-marker mr-3"></i> Dashboard
                                            </a>
                                        </li>
                                        <li>
                                            <a href="user-profile.php">
                                                <i class="fa mx-2 fa-user mr-3"></i>Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="agents.php">
                                                <i class="fa mx-2 fa-list mr-3" aria-hidden="true"></i>Agents / Team
                                            </a>
                                        </li>
                                        <li>
                                            <a href="contact.php">
                                                <i class="fa mx-2 fa-heart mr-3" aria-hidden="true"></i>Contact
                                            </a>
                                        </li>
                                        <!-- <li>
                                            <a href="add-property.html">
                                                <i class="fa mx-2 fa-list mr-3" aria-hidden="true"></i>Add Property
                                            </a>
                                        </li>
                                        <li>
                                            <a href="payment-method.html">
                                                <i class="fas mx-2 fa-credit-card mr-3"></i>Payments
                                            </a>
                                        </li>
                                        <li>
                                            <a href="invoice.html">
                                                <i class="fas mx-2 fa-paste mr-3"></i>Invoices
                                            </a>
                                        </li>
                                        <li>
                                            <a href="change-password.php">
                                                <i class="fa mx-2 fa-lock mr-3"></i>Change Password
                                            </a>
                                        </li> -->
                                        <li>
                                            <a href="index-2.html">
                                                <i class="fas mx-2 fa-sign-out-alt mr-3"></i>Log Out
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>