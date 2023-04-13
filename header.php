<?php
session_start();
include './admin/config.php';

?>
<!DOCTYPE php>
<html lang="en">

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
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://rawgithub.com/dimsemenov/Magnific-Popup/master/dist/magnific-popup.css">

    <link rel="stylesheet" href="css/lightcase.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/search.css">
    <!-- <link rel="stylesheet" href="./css/nice-select.css"> -->
    <link rel="stylesheet" id="color" href="css/default.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">

    <script src="./js/jquery-3.5.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <script src="js/leaflet.js"></script>
    <script src="js/leaflet-gesture-handling.min.js"></script>
    <script src="js/leaflet-providers.js"></script>
    <script src="js/leaflet.markercluster.js"></script>
    <!-- <script src="./js/map4.js"></script> -->

</head>

<body>
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <header id="header-container" <?php echo $header ?? ''; ?>>
            <!-- Header -->
            <div id="header" class="main_head <?php echo isset($class_bb) ? '' : 'classbb'; ?>">
                <div class="container container-header">
                    <div class="alert alert-warning alerts" style="display: none;" role="alert">
                        Please LogIn First
                    </div>
                    <!-- Left Side Content -->
                    <div class="left-side">
                        <!-- Logo -->
                        <div id="logo">
                            <a href="index.php"><img <?php echo $data ?? 'src="images/Black.png"'; ?> alt=""></a>
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
                        <nav id="navigation" <?php echo $link ?? 'class="style-1"'; ?>>
                            <ul id="responsive">
                                <li><a href="connect_expert.php">Connect</a>
                                </li>
                                <li><a href="blog.php">Blog</a>
                                    <!-- <ul>
                                        <li><a href="#">Listing Grid</a>
                                            <ul>
                                                <li><a href="properties-grid-1.php">Grid View 1</a></li>
                                                <li><a href="properties-grid-2.php">Grid View 2</a></li>
                                                <li><a href="properties-grid-3.php">Grid View 3</a></li>
                                                <li><a href="properties-grid-4.php">Grid View 4</a></li>
                                                <li><a href="properties-full-grid-1.php">Grid Fullwidth 1</a></li>
                                                <li><a href="find_home.php">Grid Fullwidth 2</a></li>
                                                <li><a href="properties-full-grid-3.php">Grid Fullwidth 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Listing List</a>
                                            <ul>
                                                <li><a href="properties-full-list-1.php">List View 1</a></li>
                                                <li><a href="properties-list-1.php">List View 2</a></li>
                                                <li><a href="properties-full-list-2.php">List View 3</a></li>
                                                <li><a href="properties-list-2.php">List View 4</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Listing Map</a>
                                            <ul>
                                                <li><a href="properties-half-map-1.php">Half Map 1</a></li>
                                                <li><a href="properties-half-map-2.php">Half Map 2</a></li>
                                                <li><a href="properties-half-map-3.php">Half Map 3</a></li>
                                                <li><a href="properties-top-map-1.php">Top Map 1</a></li>
                                                <li><a href="properties-top-map-2.php">Top Map 2</a></li>
                                                <li><a href="properties-top-map-3.php">Top Map 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Agent View</a>
                                            <ul>
                                                <li><a href="agents.php">Agent View 1</a></li>
                                                <li><a href="agents-listing-row.php">Agent View 2</a></li>
                                                <li><a href="agents-listing-row-2.php">Agent View 3</a></li>
                                                <li><a href="agent-details.php">Agent Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Agencies View</a>
                                            <ul>
                                                <li><a href="agencies-listing-1.php">Agencies View 1</a></li>
                                                <li><a href="agencies-listing-2.php">Agencies View 2</a></li>
                                                <li><a href="agencies-details.php">Agencies Details</a></li>
                                            </ul>
                                        </li>
                                    </ul> -->
                                </li>
                                <li><a href="#">Resources</a>
                                    <ul class="dropdown">
                                        <li><a href="Neighborhoods.php">Neighborhoods</a></li>
                                        <li><a href="#">Renting Tips</a></li>
                                        <li><a href="#">What is a Locator</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="faq.php">FAQ</a></li>
                                        <!-- <li><a href="single-property-6.php">Single Property 6</a></li> -->
                                    </ul>
                                </li>
                                <li>
                                    <a href="about.php">About Us</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Our Story</a></li>
                                        <li><a href="agents.php">Meet the Team</a></li>
                                        <li><a href="testimonial.php">Testimonials</a></li>
                                        <li><a href="contact-us.php">Contact Us</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="find_home.php">Browse Properties</a>
                                </li>
                                <?php
                                if (!isset($_SESSION['email'])) { ?>
                                    <li class="d-none d-xl-none d-block d-lg-block"><a href="./login.php">Login</a></li>
                                    <li class="d-none d-xl-none d-block d-lg-block"><a href="./register.php">Register</a>
                                    </li>
                                <?php
                                } else {
                                ?>
                                    <li class="d-none d-xl-none d-block d-lg-block"><a href="./user.php"><i class="fa fa-user mr-2"></i><?= $_SESSION['email']; ?></a></li>
                                <?php
                                }
                                ?>
                                <!-- <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-3 border-bottom-0">
                                        <a href="#" class="button border btn-lg btn-block text-center">Add
                                            Listing<i class="fas fa-laptop-house ml-2"></i></a>
                                    </li> -->
                            </ul>
                        </nav>
                        <!-- Main Navigation / End -->
                    </div>
                    <!-- Left Side Content / End -->

                    <?php
                    if (!isset($_SESSION['email'])) { ?>

                        <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                            <!-- Header Widget -->
                            <div class="header-widget sign-in">
                                <div class="show-reg-form"><a href="./register.php">Sign Up</a></div>
                            </div>

                            <!-- Header Widget / End -->
                        </div>

                        <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                            <!-- Header Widget -->
                            <div class="header-widget sign-in">
                                <div class="show-reg-form"><a href="./login.php">Login</a></div>
                            </div>
                            <!-- Right Side Content / End -->
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="right-side d-none d-none d-lg-none d-xl-flex ml-0">
                            <!-- Header Widget -->

                            <div class="header-user-menu user-menu add">
                                <div class="header-user-name">
                                    <?php echo $_SESSION['email']; ?>
                                </div>
                                <ul>
                                    <li><a href="user.php">Dashboard</a></li>
                                    <li><a href="add-property.php"> Add Property</a></li>
                                    <li><a href="payment-method.php"> Payments</a></li>
                                    <li><a href="change-password.php"> Change Password</a></li>
                                    <li><a href="admin/logout.php">Log Out</a></li>
                                </ul>
                            </div>

                            <!-- Header Widget / End -->
                        </div>

                    <?php
                    }
                    ?>
                </div>
                <!-- Header / End -->

        </header>