<?php

include './config.php';

$date = date("j F Y");

if (isset($_POST) && isset($_POST['claimer'])) {
    $claimer =  $_POST['claimer'];
    $id =  $_POST['form_id'];

    $update = $conn->query("UPDATE expert SET `claimed_by`='$claimer' WHERE id='$id' ");
    if ($update) {
        echo "Success";
    } else {
        echo "File upload failed, please try again.";
    }
}

if (isset($_POST) && isset($_POST['neighbourhood'])) {
    $neighbourhood =  $_POST['neighbourhood'];
    $city =  $_POST['city'];
    $id =  $_POST['id'];


    if (!empty($_FILES["file"]["name"])) {
        // File upload path
        $targetDir = "../uploads/";
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
        if (in_array($fileType, $allowTypes)) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                $update = $conn->query("UPDATE neighbourhood SET `name`='$neighbourhood', `image`='$fileName', `date`='$date' WHERE id='$id' ");
                if ($update) {
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
        $update = $conn->query("UPDATE neighbourhood SET `name`='$neighbourhood', `date`='$date' WHERE id='$id' ");
        if ($update) {
            echo "Success";
        } else {
            echo "File upload failed, please try again.";
        }
    }
}


if (isset($_POST) && isset($_POST['cities'])) {
    $cities =  $_POST['cities'];
    $id =  $_POST['id'];

    if (!empty($_FILES["file"]["name"])) {
        // File upload path
        $targetDir = "../uploads/";
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
        if (in_array($fileType, $allowTypes)) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                $insert = $conn->query("UPDATE cities SET `name`='$cities', `image`='$fileName', `updatedAt`='$date' WHERE id='$id'");
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
        $insert = $conn->query("UPDATE cities SET `name`='$cities', `updatedAt`='$date' WHERE id='$id'");
        if ($insert) {
            echo "Success";
        } else {
            echo "File upload failed, please try again.";
        }
    }
}




if (isset($_POST) && isset($_POST['agent'])) {
    $agent =  $_POST['agent'];
    $description =  $_POST['description'];
    $email =  $_POST['email'];
    $address =  $_POST['address'];
    $mobile =  $_POST['mobile'];
    $id =  $_POST['id'];
    $designation =  $_POST['designation'];
    $instagram =  $_POST['instagram'];
    $tiktok =  $_POST['tiktok'];
    $password =  $_POST['password'];




    if (!empty($_FILES["file"]["name"])) {
        // File upload path
        $targetDir = "../uploads/";
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
        if (in_array($fileType, $allowTypes)) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                $insert = $conn->query("UPDATE `agents` SET name='$agent', designation='$designation', image='$fileName', date='$date', description='$description', email='$email', address='$address', mobile='$mobile', instagram='$instagram', tiktok='$tiktok' , password='$password' WHERE id='$id'");
                if ($insert) {
                    echo "Success";
                    // $_SESSION['img'] = $fileName;
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
        $insert = $conn->query("UPDATE `agents` SET name='$agent', designation='$designation', date='$date', description='$description', email='$email', address= '$address', mobile='$mobile', instagram='$instagram', tiktok='$tiktok' , password='$password' WHERE id='$id'");
        if ($insert) {
            echo "Success";
        } else {
            echo "An error occurred, please try again.";
        }
    }
}

if (isset($_POST['p_id'])) {
    $id = $_POST['p_id'];
    $sql = "SELECT * FROM properties  WHERE id='$id'";
    $result = $conn->query($sql);
    $feat = 1;
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $f = $row['featured'];
            if ($f === "0") {
                $feat = 1;
            } else {
                $feat = 0;
            }
        }
    }

    $update = $conn->query("UPDATE `properties` SET featured='$feat' WHERE id='$id'");
    if ($update) {
        echo "Success";
    } else {
        echo "Failed, please try again.";
    }
}
