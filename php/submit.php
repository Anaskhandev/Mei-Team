<?php

include '../admin/config.php';
session_start();



if (isset($_POST) && isset($_POST['Area2_sale'])) {
    $Area2 = $_POST['Area2'];
    $Area = $_POST['Area'];
    $Price2 = $_POST['Price2'];
    $Price = $_POST['Price'];
    $Area2_sale = $_POST['Area2_sale'];
    $Area_sale = $_POST['Area_sale'];
    $Price2_sale = $_POST['Price2_sale'];
    $Price_sale = $_POST['Price_sale'];
    $unique_id = $_POST['unique_id'];

    // echo $unique_id;


    $sql = "UPDATE expert SET Area2='$Area2', Area='$Area',Price='$Price',Price2='$Price2',Area2_sale='$Area2_sale', Area_sale='$Area_sale',Price_sale='$Price_sale',Price2_sale='$Price2_sale' WHERE unique_id='$unique_id'";


    if ($conn->query($sql)) {
        echo 'success';
    } else {
        echo 'error';
    }
}
if (isset($_POST) && isset($_POST['uname'])) {
    $uname = $_POST['uname'];
    $lname = $_POST['lname'];
    $unique_id = $_POST['unique_id'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // echo $unique_id;


    $sql = "INSERT INTO expert (uname, lname, unique_id, phone, email) VALUES ( '$uname', '$lname', '$unique_id', '$phone', '$email')";


    if ($conn->query($sql)) {
        echo 'success';
    } else {
        echo 'error';
    }
}

if (isset($_POST) && isset($_POST['city'])) {
    $city = $_POST['city'];
    $neighborhoods_multi = json_encode($_POST['neighborhoods_multi']);
    $unique_id = $_POST['unique_id'];

    echo $neighborhoods_multi;
    echo $unique_id;


    $sql = "UPDATE expert SET city='$city', neighborhoods_multi='$neighborhoods_multi' WHERE unique_id='$unique_id'";


    if ($conn->query($sql)) {
        echo 'success';
    } else {
        echo 'error';
    }
}

if (isset($_POST) && isset($_POST['bed'])) {
    $bed = json_encode($_POST['bed']);
    $bath = $_POST['bath'];
    $unique_id = $_POST['unique_id'];

    // echo $bed;
    // echo $unique_id;


    $sql = "UPDATE expert SET bed='$bed', bath='$bath' WHERE unique_id='$unique_id'";


    if ($conn->query($sql)) {
        echo 'success';
    } else {
        echo 'error';
    }
}


if (isset($_POST) && isset($_POST['dated'])) {
    $dated = $_POST['dated'];
    $unique_id = $_POST['unique_id'];

    // echo $dated;
    // echo $unique_id;


    $sql = "UPDATE expert SET dated='$dated' WHERE unique_id='$unique_id'";


    if ($conn->query($sql)) {
        echo 'success';
    } else {
        echo 'error';
    }
}



if (isset($_POST) && isset($_POST['Amenities'])) {
    $Amenities = json_encode($_POST['Amenities']);
    $Features =  json_encode($_POST['Features']);
    $Pets =  json_encode($_POST['Pets']);
    $Parking =  json_encode($_POST['Parking']);
    $unique_id = $_POST['unique_id'];

    // echo $Amenities;
    // echo $unique_id;


    $sql = "UPDATE expert SET    Amenities='$Amenities', Features='$Features',Parking='$Parking',Pets='$Pets' WHERE unique_id='$unique_id'";


    if ($conn->query($sql)) {
        echo 'success';
    } else {
        echo 'error';
    }
}

if (isset($_POST) && isset($_POST['Background'])) {
    $Background = json_encode($_POST['Background']);
    $credit_score = json_encode($_POST['credit_score']);
    $unique_id = $_POST['unique_id'];

    // echo $credit_score;
    // echo $unique_id;


    $sql = "UPDATE expert SET credit_score='$credit_score',Background='$Background' WHERE unique_id='$unique_id'";


    if ($conn->query($sql)) {
        $get = "SELECT * FROM expert WHERE unique_id='$unique_id'";
        $result = $conn->query($get);
        while ($row = $result->fetch_assoc()) {
            $email = $row['email'];
            $name = $row['uname'];

            $to = $email;
            $subject = "HTML email";


            $message = '<div align="center" style="background-color: #3d160e;padding: 50px; min-height: 300px; width: 350px;">
            <img style="height: 100px;" src="https://thewebions.com/demos/mei_team/images/mei_logo.png" alt="">
            <p style="color: white;">Dear ' . $name . ',</p>
            <p style="color: white;">Your request to connect with an expert is submitted. An expert will contact you soon.</p>
            <p style="color: white;">-------------------------------------------------------------</p>';

            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


            if (mail($to, $subject, $message, $headers)) {

                $get2 = "SELECT * FROM agents ";
                $result2 = $conn->query($get2);
                while ($row2 = $result2->fetch_assoc()) {
                    $email2 = $row2['email'];
                    $name2 = $row2['name'];

                    $to2 = $email2;
                    $subject2 = "MEI TEAM ~ Connect with an expert request";

                    $message2 = '<div align="center" style="background-color: #3d160e;padding: 50px; min-height: 300px; width: 350px;">
                    <img style="height: 100px;" src="https://thewebions.com/demos/mei_team/images/mei_logo.png" alt="">
                    <p style="color: white;">Dear ' . $name2 . ',</p>
                    <p style="color: white;">' . $name . ' submitted a request to connect with an expert.</p>
                    <p style="color: white;">-------------------------------------------------------------</p>';

                    // Always set content-type when sending HTML email
                    $headers2 = "MIME-Version: 1.0" . "\r\n";
                    $headers2 .= "Content-type:text/html;charset=UTF-8" . "\r\n";


                    if (mail($to2, $subject2, $message2, $headers2)) {
                        echo 'success';
                    } else {
                        echo 'mail not sent';
                    }
                }
            } else {
                echo 'mail not sent';
            }
        }
    } else {
        echo 'error';
    }
}


if (isset($_POST) && isset($_POST['f_id'])) {
    $f_id = $_POST['f_id'];
    // echo $f_id;
    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        // echo $email;

        $qry2 = "SELECT * FROM users WHERE email='$email'";
        $result2 = $conn->query($qry2);
        if ($result2->num_rows > 0) {
            while ($row2 = $result2->fetch_assoc()) {
                // echo $row2['fav'];
                $fav = json_decode($row2['fav'], true);
                if (in_array($f_id, $fav)) {
                    $array = array_diff($fav, [$f_id]);
                    $fav2 = json_encode($array);
                    $qry3 = "UPDATE users SET fav='$fav2' WHERE email='$email'";
                    $result3 = $conn->query($qry3);
                    echo 'already';
                } else {
                    array_push($fav, $f_id);
                    // echo print_r($fav);
                    $fav2 = json_encode($fav);
                    $qry3 = "UPDATE users SET fav='$fav2' WHERE email='$email'";
                    $result3 = $conn->query($qry3);
                    echo 'success';
                }
            }
        }
    } else {
        echo 'no user';
    }
}
