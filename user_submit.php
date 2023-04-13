<?php

require './admin/config.php';
session_start();

if (isset($_POST) && isset($_POST['c_password'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];

    // echo $c_password;
    if ($c_password != $password) {
        echo 'Passwords do not match';
    } else {

        $password_hash = md5($password);

        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($sql);
        if ($result->num_rows === 0) {

            $sql = "INSERT INTO users (name,  email, password) VALUES ( '$name', '$email', '$password_hash')";
            if ($conn->query($sql)) {
                echo 'success';
            } else {
                echo 'An Error Occurred While Submitting!';
            }
        } else {
            echo 'Email already in use';
        }
    }
}

if (isset($_POST) && isset($_POST['email_l'])) {
    $email = $_POST['email_l'];
    $password = $_POST['password'];

    $password_hash = md5($password);

    // echo $password;

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password_hash'";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        echo 'login success';
        $_SESSION['email'] = $email;
    } else {
        echo ' Wrong email or password';
        session_destroy();
    }
}
