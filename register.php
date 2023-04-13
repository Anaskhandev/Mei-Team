<?php
include('header.php');
?>
<div class="clearfix"></div>
<!-- Header Container / End -->

<section class="headings login_bg">
    <div class="text-heading text-center">
        <div class="container">
            <h1>REGISTER Now</h1>
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
                <img class="login_img" src="images/register_bg.jpeg" alt="">
            </div>
            <div class="col-lg-6">
                <div class="login">
                    <div class="text-center">
                        <h2>Get Started!</h2>
                        <p class="mb-lg-5">Please enter your detail to sign up and be part of our comunity.</p>
                    </div>
                    <form id="register">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                            <i class="icon_mail_alt"></i>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                            <i class="icon_mail_alt"></i>
                        </div>
                        <div class="form-group">
                            <label>Your Password</label>
                            <input type="password" class="form-control" name="password" id="password" required>
                            <i class="icon_mail_alt"></i>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="c_password" id="c_password" required>
                            <i class="icon_lock_alt"></i>
                        </div>

                        <button type="submit" class="btn_1 rounded full-width">Register Now</button>
                        <div class="text-center add_top_10">Already a Member? <strong><a href="register.html">Log in!</a></strong></div>
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