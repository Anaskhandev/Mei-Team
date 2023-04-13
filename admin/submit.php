<?php

include './config.php';

$date = date("j F Y");

if (isset($_POST) && isset($_POST['neighbourhood'])) {
    $neighbourhood =  $_POST['neighbourhood'];
    $city =  $_POST['city'];

    if (!empty($_FILES["file"]["name"])) {
        // File upload path
        $targetDir = "../uploads/";
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
        if (in_array($fileType, $allowTypes)) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                $insert = $conn->query("INSERT INTO `neighbourhood` (name, image, date, city) VALUES ('$neighbourhood','$fileName', '$date', '$city')");
                if ($insert) {
                    echo "Success";
                    $_SESSION['img'] = $fileName;
                } else {
                    echo "File upload failed, please try again.";
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }
    } else {
        echo  ' empty';
    }
}


if (isset($_POST) && isset($_POST['cities'])) {
    $cities =  $_POST['cities'];
    echo $cities;

    if (!empty($_FILES["file"]["name"])) {
        // File upload path
        $targetDir = "../uploads/";
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
        if (in_array($fileType, $allowTypes)) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                $insert = $conn->query("INSERT INTO `cities` (name, image, date) VALUES ('$cities','$fileName', '$date')");
                if ($insert) {
                    echo "Success";
                    $_SESSION['img'] = $fileName;
                } else {
                    echo "File upload failed, please try again.";
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }
    } else {
        echo  ' empty';
    }
}


if (isset($_POST) && isset($_POST['testimonials'])) {
    $testimonials =  $_POST['testimonials'];
    $message =  $_POST['message'];

    // exit;

    if (!empty($_FILES["file"]["name"])) {
        // File upload path
        $targetDir = "../uploads/";
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
        if (in_array($fileType, $allowTypes)) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                $insert = $conn->query("INSERT INTO `testimonials` (name, image, date, message) VALUES ('$testimonials','$fileName', '$date', '$message')");
                if ($insert) {
                    echo "Success";
                } else {
                    echo "File upload failed, please try again.";
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }
    } else {
        echo  'image field empty';
    }
}


if (isset($_POST) && isset($_POST['agent'])) {
    $agent =  $_POST['agent'];
    $description =  $_POST['description'];
    $designation =  $_POST['designation'];
    $email =  $_POST['email'];
    $address =  $_POST['address'];
    $mobile =  $_POST['mobile'];
    $instagram =  $_POST['instagram'];
    $tiktok =  $_POST['tiktok'];
    $password =  $_POST['password'];


    // echo $description;
    // exit;

    if (!empty($_FILES["file"]["name"])) {
        // File upload path
        $targetDir = "../uploads/";
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
        if (in_array($fileType, $allowTypes)) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                $insert = $conn->query("INSERT INTO `agents` (name, image, date, description, email, address, mobile, tiktok, instagram, password, designation) VALUES ('$agent','$fileName', '$date', '$description', '$email', '$address', '$mobile', '$tiktok', '$instagram', '$password', '$designation')");
                if ($insert) {
                    echo "Success";
                    $_SESSION['img'] = $fileName;
                } else {
                    echo "File upload failed, please try again.";
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }
    } else {
        echo  'Picture field empty';
    }
}
