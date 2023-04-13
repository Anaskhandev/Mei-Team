<?php

session_start();

if(!isset($_SESSION['admin_logged'])){
    
}
else{
    header("location: ./dashboard.php");
}

?>

<!DOCTYPE php>
<php lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="author" content="">
    <title>Find Your Dream Home | The Mei Team</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <!-- GOOGLE FONTS -->
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="../font/flaticon.css">
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
        <!-- LEAFLET MAP -->
        <link rel="stylesheet" href="../css/leaflet.css">
    <link rel="stylesheet" href="../css/leaflet-gesture-handling.min.css">
    <link rel="stylesheet" href="../css/leaflet.markercluster.css">
    <link rel="stylesheet" href="../css/leaflet.markercluster.default.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="../css/timedropper.css">
    <link rel="stylesheet" href="../css/datedropper.css">
    <link rel="stylesheet" href="../css/search.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/lightcase.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/slick.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" id="color" href="../css/default.css">
    
</head>

<body>
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <header id="header-container">
            <!-- Header -->
            <div id="header" class="main_head">
                <div class="container container-header">
                    <!-- Left Side Content -->
                    <div class="left-side">
                        <!-- Logo -->
                        <div id="logo">
                            <a href="index.php"><img src="../images/Black.png" alt=""></a>
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
                        <nav id="navigation" class="style-1">
                        <ul id="responsive">
                                <li><a href="#">Connect</a>
                                    <ul>
                                        <!-- <li><a href="#">Home Map</a>
                                            <ul>
                                                <li><a href="index-9.php">Home Map Style 1</a></li>
                                                <li><a href="index-12.php">Home Map Style 2</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li><a href="#">Home Image</a>
                                            <ul>
                                                <li><a href="index.php">Modern Home</a></li>
                                                <li><a href="index-2.php">Home Boxed Image</a></li>
                                                <li><a href="index-3.php">Home Modern Image</a></li>
                                                <li><a href="index-5.php">Home Minimalist Style</a></li>
                                                <li><a href="index.php">Home Parallax Image</a></li>
                                                <li><a href="index-8.php">Home Search Form</a></li>
                                                <li><a href="index-10.php">Modern Full Image</a></li>
                                                <li><a href="index-15.php">Home Typed Image</a></li>
                                                <li><a href="index-17.php">Modern Parallax Image</a></li>
                                                <li><a href="index-18.php">Image Filter Search</a>
                                                </li>
                                                <li><a href="index-21.php">Parallax Image video</a></li>
                                                <li><a href="index-23.php">Home Image</a></li>
                                                <li><a href="index-24.php">Image and video</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li><a href="#">Home Video</a>
                                            <ul>
                                                <li><a href="index-4.php">Home Video Image</a></li>
                                                <li><a href="index-7.php">Home Video</a></li>
                                                <li><a href="index-20.php">Home Modern Video</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Home Slider</a>
                                            <ul>
                                                <li><a href="index-11.php">Slider Presentation 2</a></li>
                                                <li><a href="index-16.php">Slider Presentation 3</a></li>
                                                <li><a href="index-19.php">Home Modern Slider</a></li>
                                                <li><a href="index-22.php">Home Image Slider</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Home Styles</a>
                                            <ul>
                                                <li><a href="index-13.php">Home Style Dark</a></li>
                                                <li><a href="index-14.php">Home Style White</a></li>
                                            </ul>
                                        </li> -->
                                    </ul>
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
                                        <li><a href="#">Our Story</a>
                                            <!-- <ul>
                                                <li><a href="shop-with-sidebar.php">Product Sidebar</a></li>
                                                <li><a href="shop-full-page.php">Product Fullpage</a></li>
                                                <li><a href="shop-single.php">Product Single</a></li>
                                                <li><a href="shop-checkout.php">Checkout Page</a></li>
                                                <li><a href="shop-order.php">Order Page</a></li>
                                            </ul> -->
                                        </li>
                                        <!-- <li><a href="about.php">About Us</a>
                                            <ul>
                                                <li><a href="dashboard.php">Dashboard</a></li>
                                                <li><a href="user-profile.php">User Profile</a></li>
                                                <li><a href="my-listings.php">My Properties</a></li>
                                                <li><a href="favorited-listings.php">Favorited Properties</a></li>
                                                <li><a href="add-property.php">Add Property</a></li>
                                                <li><a href="payment-method.php">Payment Method</a></li>
                                                <li><a href="invoice.php">Invoice</a></li>
                                                <li><a href="change-password.php">Change Password</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li><a href="about.php">TESTIMONIALS</a></li>
                                        <li><a href="faq.php">Faq</a></li>
                                        <li><a href="pricing-table.php">Pricing Tables</a></li>
                                        <li><a href="404.php">Page 404</a></li>
                                        <li><a href="login.php">Login</a></li>
                                        <li><a href="register.php">Register</a></li>
                                        <li><a href="coming-soon.php">Coming Soon</a></li>
                                        <li><a href="under-construction.php">Under Construction</a></li>
                                        <li><a href="ui-element.php">UI Elements</a></li>
                                    </ul>
                                </li> -->
                                <li><a href="agents.php">Meet the Team</a></li>
                                <li><a href="testimonial.php">Testimonials</a>
                                    <!-- <ul>
                                        <li><a href="#">Grid Layout</a>
                                            <ul>
                                                <li><a href="blog.php">Full Grid</a></li>
                                                <li><a href="blog-grid-sidebar.php">With Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">List Layout</a>
                                            <ul>
                                                <li><a href="blog-full-list.php">Full List</a></li>
                                                <li><a href="blog-list-sidebar.php">With Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog-details.php">Blog Details</a></li>
                                    </ul> -->
                                </li>
                                <!-- <li><a href="contact-us.php">Contact</a></li> -->
                                <li class="d-none d-xl-none d-block d-lg-block"><a href="./login.php">Login</a></li>
                                <li class="d-none d-xl-none d-block d-lg-block"><a href="#">Register</a>
                                </li>
                                <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-3 border-bottom-0">
                                    <a href="#" class="button border btn-lg btn-block text-center">Add
                                        Listing<i class="fas fa-laptop-house ml-2"></i></a>
                                    </li>
                            </ul>
                        </nav>
                        <!-- Main Navigation / End -->
                    </div>
                    <!-- Left Side Content / End -->

                    <!-- Right Side Content / End -->
                    <!-- <div class="right-side d-none d-none d-lg-none d-xl-flex">
                        
                        <div class="header-widget">
                            <a href="add-property.php" class="button border">Add Listing<i
                                    class="fas fa-laptop-house ml-2"></i></a>
                        </div>
                        
                    </div> -->
                    <!-- Right Side Content / End -->

                    <!-- Right Side Content / End -->
                    <!-- <div class="header-user-menu user-menu add">
                        <div class="header-user-name">
                            <span><img src="../images/testimonials/ts-1.jpg" alt=""></span>Hi, Mary!
                        </div>
                        <ul>
                            <li><a href="user-profile.php"> Edit profile</a></li>
                            <li><a href="add-property.php"> Add Property</a></li>
                            <li><a href="payment-method.php"> Payments</a></li>
                            <li><a href="change-password.php"> Change Password</a></li>
                            <li><a href="#">Log Out</a></li>
                        </ul>
                    </div> -->
                    <!-- Right Side Content / End -->

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

                    <!-- lang-wrap-->
                    <!-- <div class="header-user-menu user-menu add d-none d-lg-none d-xl-flex">
                        <div class="lang-wrap">
                            <div class="show-lang"><span><i
                                        class="fas fa-globe-americas"></i><strong>ENG</strong></span><i
                                    class="fa fa-caret-down arrlan"></i></div>
                            <ul class="lang-tooltip lang-action no-list-style">
                                <li><a href="#" class="current-lan" data-lantext="En">English</a></li>
                                <li><a href="#" data-lantext="Fr">Francais</a></li>
                                <li><a href="#" data-lantext="Es">Espanol</a></li>
                                <li><a href="#" data-lantext="De">Deutsch</a></li>
                            </ul>
                        </div>
                    </div> -->
                    <!-- lang-wrap end-->

                </div>
            </div>
            <!-- Header / End -->

        </header>
        <div class="clearfix"></div>
    

        <!-- START SECTION LOGIN -->
        <div id="login">
            <div class="container">
                <div class="row align-items-center login_form">
                    <div class="col-lg-6 p-0">
                        <img  class="login_img" src="../images/login.jpeg" alt="">
                    </div>
                    <div class="col-lg-6">
                        <div class="login">
                            <div class="text-center">
                                <h2>Welcome To Admin Dashboard!</h2>
                                <!-- <p class="mb-lg-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quidem rerum illum eaque maiores cupiditate, modi labore temporibus voluptatibus quia</p> -->
                            </div>
                            <form method="POST" action="./form_submit.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email_admin" id="email">
                                    <i class="icon_mail_alt"></i>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" id="password" value="">
                                    <i class="icon_lock_alt"></i>
                                </div>
                               
                                <button name="" class="btn_1 rounded full-width">Login As Admin</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION LOGIN -->
        <?php 
        include ('./inc/footer.php');
        ?>
