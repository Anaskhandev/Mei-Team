<?php

require('../config/config.php');

if (isset($_POST['de_claimer'])) {
    $id = $_POST['id'];
    $claimer = $_POST['de_claimer'];

    $sql =  "SELECT * FROM expert WHERE id='$id'";
    $res = $conn->query($sql);
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            if ($row['claimed'] === "0") {
                echo 'already de-claimed';
            } else {
                $update = "UPDATE expert SET claimed='0', claimed_by=' ' WHERE id='$id'";
                $res2 = $conn->query($update);
                if ($res2 == true) {
                    echo 'success';
                } else {
                    echo 'error';
                }
            }
        }
        exit;
    } else {
        echo 'not found';
    }
}


if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $claimer = $_POST['claimer'];

    $sql =  "SELECT * FROM expert WHERE id='$id'";
    $res = $conn->query($sql);
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            if ($row['claimed'] === "1") {
                echo 'already claimed';
            } else {
                $update = "UPDATE expert SET claimed='1', claimed_by='$claimer' WHERE id='$id'";
                $res2 = $conn->query($update);
                if ($res2 == true) {
                    echo 'success';
                } else {
                    echo 'error';
                }
            }
        }
    } else {
        echo 'not found';
    }
}
