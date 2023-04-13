<?php
include('./admin/config.php');
if (
    isset($_GET["key"]) && isset($_GET["email"]) && isset($_GET["action"])
    && ($_GET["action"] == "reset") && !isset($_POST["action"])
) {
    $key = $_GET["key"];
    $email = $_GET["email"];
    $curDate = date("Y-m-d H:i:s");
    $query = mysqli_query(
        $conn,
        "SELECT * FROM `password_reset_temp` WHERE `key`='$key' and `email`='$email';"
    );
    $row = mysqli_num_rows($query);
    if ($row == "") {
        $error .= '<h2>Invalid Link</h2>
            <p>The link is invalid/expired. Either you did not copy the correct link
            from the email, or you have already used the key in which case it is 
            deactivated.</p>
            <p><a href="https://thewebions.com/demos/mei_team/">
            Click here</a> to reset password.</p>';
    } else {
        $row = mysqli_fetch_assoc($query);
        $expDate = $row['expDate'];
        if ($expDate >= $curDate) {
            include './header1.php';
?>

            <div id="login">
                <div class="container">
                    <div class="row align-items-center login_form">
                        <div class="col-lg-6 p-0">
                            <img class="login_img" src="images/login.jpeg" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="login">
                                <div class="text-center">
                                    <h2>Reset Password!</h2>
                                </div>
                                <form id="reset_pass">

                                    <div class="form-group">
                                        <label>password</label>
                                        <input type="password" class="form-control" name="pass1" id="pass1">
                                        <i class="icon_mail_alt"></i>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control" name="pass2" id="pass2">
                                        <i class="icon_lock_alt"></i>
                                    </div>
                                    <input type="text" name="email_hid" value="<?php echo $email; ?>" hidden>
                                    <button type="submit" class="btn_1 rounded full-width">Submit</button>
                                    <div class="text-center add_top_10">New to The Mei Team? <strong><a href="register.html">Sign up!</a></strong></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php
            include './footer.php';
        } else {
            $error .= "<h2>Link Expired</h2>
                    <p>The link is expired. You are trying to use the expired link which 
                    as valid only 24 hours (1 days after request).<br /><br /></p>";
        }
    }
    if ($error != "") {
        echo "<div class='error'>" . $error . "</div><br />";
    }
}
