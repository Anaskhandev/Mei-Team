<?php
ob_start();
include './config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $title = $_GET['title'];
    $ref =   $_SERVER['HTTP_REFERER'];

    $qry = "UPDATE `$title` SET status='0' WHERE id=$id";
    $res = $conn->query($qry);
    echo $title;
    if ($res == true) {
        // header("location:javascript://history.go(-1)");
        echo '<script>window.location.href="'. $ref .'"</script>';
        exit;
    }else{
        echo 'error';
        // header("location:javascript://history.go(-1)");
        echo '<script>window.location.href="'. $ref .'"</script>';
    }
}
