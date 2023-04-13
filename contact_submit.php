<?php

include './admin/config.php';

if (isset($_POST) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $query = "INSERT INTO `contact` (name, lastname, email, message) VALUES ('$name', '$lastname', '$email', '$message') ";


    if (mysqli_query($conn, $query)) {
        echo 'Success';
    } else {
        echo 'error';
    }
}
