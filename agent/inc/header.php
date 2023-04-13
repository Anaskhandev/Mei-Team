<?php
session_start();
if (!isset($_SESSION['user_login'])) {
    header('location: login.php');
}

require 'config/config.php';
require 'function/functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mei Team | Admin</title>
    <!-- DataTable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.0/css/boxicons.min.css">
    <!--  -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css">

    <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.3.0/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>


    <!-- Modal -->
    <div class="modal fade userDetailsModal" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="userModalLabel">User Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- User details appear here -->
                </div>

            </div>
        </div>
    </div>
    <!--  -->
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <!--<div class="logo-src"></div>-->
                <h3></h3>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="scrollbar-sidebar ps">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu metismenu">
                            <li class="app-sidebar__heading  mx-auto my-3 " ><img src="../images/mei_logo.png" alt="" class="img-fluid admin_img   "></li>
                            <li class="app-sidebar__heading">Dashboards</li>
                            <li class="">
                                <a href="#" aria-expanded="false">
                                    <i class="metismenu-icon fa-solid fa-gem"></i>
                                    Leads
                                    <i class="metismenu-state-icon fa-solid fa-chevron-down caret-left"></i>
                                </a>
                                <ul class="mm-collapse" style="height: 7.04px;">
                                    <!-- <li>
                                        <a href="blog.php">
                                            <i class="metismenu-icon"></i>
                                            Create Blog
                                        </a>
                                    </li> -->
                                    <li>
                                        <a href="leads.php">
                                            <i class="metismenu-icon"></i>
                                            All Leads
                                        </a>
                                    </li>
                                    <li>
                                        <a href="own_leads.php">
                                            <i class="metismenu-icon"></i>
                                            Claimed Leads
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="server/auth.php?logout">
                                    <i class="metismenu-icon fa-solid fa-rocket"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="fa-solid fa-house icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div>Mei Team Agents Dashboard
                                    <div class="page-title-subheading"><?php echo $_SESSION['email']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>