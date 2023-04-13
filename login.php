<?php
include('header.php');
?>
<div class="clearfix"></div>
<!-- Header Container / End -->

<section class="headings login_bg">
    <div class="text-heading text-center">
        <div class="container">
            <h1>Login</h1>
            <!-- <h2><a href="index-2.html">Home </a> &nbsp;/&nbsp; login</h2> -->
            <p class="text-white">Welcome to The Mei Team</p>
        </div>
    </div>
</section>
<!-- END SECTION HEADINGS -->

<!-- START SECTION LOGIN -->
<div id="login">
    <div class="container">
        <div class="row align-items-center login_form">
            <div class="col-lg-6 p-0">
                <img class="login_img" src="images/login.jpeg" alt="">
            </div>
            <div class="col-lg-6">
                <div class="login">
                    <div class="text-center">
                        <h2>WELCOME Back!</h2>
                        <p class="mb-lg-5">To keep connected with us please login with your personal information by email address and password.</p>
                    </div>
                    <form id="register">
                        <!-- <div class="access_social">
                                    <a href="#0" class="social_bt facebook">Login with Facebook</a>
                                    <a href="#0" class="social_bt google">Login with Google</a>
                                    <a href="#0" class="social_bt linkedin">Login with Linkedin</a>
                                </div>
                                <div class="divider"><span>Or</span></div> -->
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email_l" id="email_l">
                            <i class="icon_mail_alt"></i>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                            <i class="icon_lock_alt"></i>
                        </div>
                        <div class="fl-wrap filter-tags clearfix add_bottom_30">
                            <div class="checkboxes float-left">
                                <div class="filter-tags-wrap">
                                    <input id="check-b" type="checkbox" name="check">
                                    <label for="check-b">Remember me</label>
                                </div>
                            </div>
                            <div class="float-right mt-1">
                                <a id="forgot" href="./forget_pass.php">Forgot Password?</a>
                            </div>
                        </div>
                        <button type="submit" class="btn_1 rounded full-width">Login to The Mei Team</button>
                        <div class="text-center add_top_10">New to The Mei Team? <strong><a href="register.php">Sign up!</a></strong></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION LOGIN -->
<?php
include('footer.php');
?>