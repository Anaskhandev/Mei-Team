<?php
session_start();
require('../config/config.php');
if (isset($_GET['logout'])) {
    session_destroy();
    header('location: ../login.php');
}
if (isset($_POST)) {
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM agents WHERE name='$username' AND password='$pass'";
    $res = $conn->query($sql);
    if ($res->num_rows > 0) {
        echo 'success';
        $_SESSION['user_login'] = 'loggedIn';
        while ($row = $res->fetch_assoc()) {
            $_SESSION['email'] = $row['email'];
        }
    } else {
        echo 'error';
        session_destroy();
    }
}
