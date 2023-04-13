<?php
include_once "../admin/config.php";
session_start();

$searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
$city = mysqli_real_escape_string($conn, $_POST['city']);
$property = mysqli_real_escape_string($conn, $_POST['property']);
$amenities =  $_POST['amenities'];
$beds =  array();
if (isset($_POST['beds'])) {
    $beds = $_POST['beds'];
}
$bath =  $_POST['bath'];
$slider_area12 =  $_POST['slider_area1'];
$slider_area22 =  $_POST['slider_area2'];
$unit_f =  $_POST['unit_f'];
$date_pick =  $_POST['date_pick'];
$neigborhoodarray =  $_POST['neigborhood'];

// echo print_r($beds);

if ($date_pick === date("d/m/Y") . " - " . date("d/m/Y", strtotime("+100 week")) || $date_pick === 'MM/DD - MM/DD') {
    $date_pick = '';
}
// echo $date_pick;

$slider_area1 =  (int)ltrim($slider_area12, 'A..z: ');
$slider_area2 =  (int)ltrim($slider_area22, 'A..z: ');
// echo $slider_area2;


if (!empty($unit_f)) {
    echo 'No properties found with unit feature';
    exit;
}


$output = "";
if (!empty($neigborhoodarray)) {
    $mm = 0;
    $nei_look = '';
    $neigborhoodarray = json_decode($neigborhoodarray);
    foreach ($neigborhoodarray as $neigborhood) {
        // echo $neigborhood;
        $neigborhood = str_replace(">>", "&", $neigborhood);
        $nei_look .= "neighborhood='$neigborhood' OR ";
        // }
        // while ($mm < count($neigborhoodarray)) {
        // echo print_r($neigborhoodarray[$mm]);



        // echo $neigborhood;

    }
    // echo $nei_look;

    // echo $neigborhood;
    if (!empty($city) && empty($searchTerm) && !empty($neigborhood)) {
        $sql = "SELECT * FROM properties WHERE city='$city' AND $nei_look  neighborhood='$neigborhood'";
    } else if (!empty($city) && !empty($searchTerm) && !empty($neigborhood)) {
        $sql = "SELECT * FROM properties WHERE city='$city' AND $nei_look neighborhood='$neigborhood' AND (name LIKE '%{$searchTerm}%' OR city LIKE '%{$searchTerm}%' OR neighborhood LIKE '%{$searchTerm}%' )";
    }

    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        include_once "data.php";
    } else {
        $output .= 'No Properties found related to your search term';
    }

    $mm++;
    echo $output;
} else {


    if (empty($searchTerm) && empty($city) && empty($neigborhood)) {
        $sql = "SELECT * FROM properties ORDER BY RAND()";
    } else if (!empty($searchTerm) && empty($city) && empty($neigborhood)) {
        $sql = "SELECT * FROM properties WHERE (name LIKE '%{$searchTerm}%' OR city LIKE '%{$searchTerm}%' OR neighborhood LIKE '%{$searchTerm}%') ";
    } else if (!empty($city) && empty($searchTerm) && empty($neigborhood)) {
        $sql = "SELECT * FROM properties WHERE city='$city' ";
    } else if (!empty($city) && !empty($searchTerm) && empty($neigborhood)) {
        $sql = "SELECT * FROM properties WHERE city='$city' AND (name LIKE '%{$searchTerm}%' OR city LIKE '%{$searchTerm}%' OR neighborhood LIKE '%{$searchTerm}%')";
    }

    // if (!empty($searchTerm)) {
    //     $sql = "SELECT * FROM properties WHERE (name LIKE '%{$searchTerm}%' OR city LIKE '%{$searchTerm}%' OR neighborhood LIKE '%{$searchTerm}%') ";
    // } else {
    //     $sql = "SELECT * FROM properties ORDER BY RAND() LIMIT 30";
    // }

    $output = "";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        include_once "data.php";
    } else {
        $output .= 'No Properties found related to your search term';
    }
    echo $output;
}
