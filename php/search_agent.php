<?php
include_once "../admin/config.php";
session_start();

$searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);

if (empty($searchTerm)) {
    $sql = "SELECT * FROM agents ORDER BY RAND()";
} else if (!empty($searchTerm)) {
    $sql = "SELECT * FROM agents WHERE (name LIKE '%{$searchTerm}%') ";
}

$output = "";
$query = mysqli_query($conn, $sql);
if (mysqli_num_rows($query) > 0) {
    include_once "data_agent.php";
} else {
    $output .= 'No Agents found related to your search term';
}
echo $output;
