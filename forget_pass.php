<?php
include('header.php');
?>
<div class="clearfix"></div>
<!-- Header Container / End -->

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
                        <h2>Forgot Password?</h2>
                        <p class="mb-lg-5">Enter Your Email Address To Recieve Email Regarding How To Change Your Password!</p>
                    </div>
                    
                    <form id="forget">
                        <!-- <div class="access_social">
                                    <a href="#0" class="social_bt facebook">Login with Facebook</a>
                                    <a href="#0" class="social_bt google">Login with Google</a>
                                    <a href="#0" class="social_bt linkedin">Login with Linkedin</a>
                                </div>
                                <div class="divider"><span>Or</span></div> -->
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>


                        <button type="submit" class="btn_1 rounded full-width">Submit</button>
                        <div class="text-center add_top_10">New to The Mei Team? <strong><a href="register.html">Sign up!</a></strong></div>
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