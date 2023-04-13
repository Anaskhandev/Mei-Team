<?php
require './admin/config.php';
$error = "";
$status = '';
if (isset($_POST["email"]) && (!empty($_POST["email"]))) {
    $email = $_POST["email"];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!$email) {
        $status .= "Invalid email address please type a valid email address!";
        header('location: ./forget.php?status=' . $status);
    } else {
        $sel_query = "SELECT * FROM `users` WHERE email='" . $email . "'";
        $results = mysqli_query($conn, $sel_query);
        $row = mysqli_num_rows($results);
        if ($row == "") {
            $error .= "<p>No user is registered with this email address!</p>";
        }
    }
    if ($error != "") {
        echo "<div class='error'>" . $error . "</div><br /><a href='javascript:history.go(-1)'>Go Back</a>";
    } else {
        $expFormat = mktime(
            date("H"),
            date("i"),
            date("s"),
            date("m"),
            date("d") + 1,
            date("Y")
        );
        $expDate = date("Y-m-d H:i:s", $expFormat);
        $key = md5(2418 * 2 . $email);
        $addKey = substr(md5(uniqid(rand(), 1)), 3, 10);
        $key = $key . $addKey;
        // Insert Temp Table
        mysqli_query(
            $conn,
            "INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`) VALUES ('" . $email . "', '" . $key . "', '" . $expDate . "');"
        );


        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        $output = '<div align="center" style="background-color: #3d160e;padding: 50px; min-height: 300px; width: 350px;">
        <img style="height: 100px;" src="https://thewebions.com/demos/mei_team/images/mei_logo.png" alt="">
        <p style="color: white;">Dear user,</p>
        <p style="color: white;">Please click on the following link to reset your password.</p>
        <p style="color: white;">-------------------------------------------------------------</p>
        <a style="color: black; text-decoration: none; cursor:pointer"
            href="https://thewebions.com/demos/mei_team/reset-password.php?key=' . $key . '&email=' . $email . '&action=reset"><button
                style=" padding: 10px; cursor: pointer;">Reset Password</button></a>
        <p style="color: white;">If you did not request this forgotten password email, no action is needed, your
            password will not be reset. However, you may want to log into your account and change your security password
            as someone may have guessed it.</p>
        </div>';
        $body = $output;
        $subject = "Password Recovery ";

        $to = $email;

        if (!(mail($to, $subject, $output, $headers))) {
            $status =  "Mailer Error: " . $mail->ErrorInfo;
        } else {
            $status = 'An email has been sent to you with instructions on how to reset your password';
        }
    }
} else if (isset($_POST["pass1"]) && (!empty($_POST["pass1"]))) {
    $pass1 = $_POST["pass1"];
    $pass2 = $_POST["pass2"];
    $email = $_POST["email_hid"];

    $curDate = date("Y-m-d H:i:s");
    if ($pass1 != $pass2) {
        $error .= "<p>Password do not match, both password should be same.<br /><br /></p>";
    }
    if ($error != "") {
        echo "<div class='error'>" . $error . "</div><br />";
    } else {
        $pass1 = md5($pass1);
        mysqli_query(
            $conn,
            "UPDATE `users` SET `password`='" . $pass1 . "', `trn_date`='" . $curDate . "' WHERE `email`='" . $email . "';"
        );

        mysqli_query($conn, "DELETE FROM `password_reset_temp` WHERE `email`='" . $email . "';");

        $status = 'Password Successfully updated';
    }
} else {
    $status = 'try again! Some error occurred';
}
echo $status;
