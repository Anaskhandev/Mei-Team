<?php

include './config.php';
session_start();

if(isset($_POST['email_admin'])){
    $email = $_POST['email_admin'];
    $password = $_POST['password'];

        $query = "SELECT * FROM `admin_credentials` WHERE email='$email' AND password='$password'";
     
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_assoc($result);
            $_SESSION['admin_logged'] = $row['name'];
            header('Location: ./dashboard.php');
        }else{
            session_destroy();
            header('Location: ./index.php');
        }
}
