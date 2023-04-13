<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "mei_team";

// $servername = "localhost";
// $username = "";
// $password = "";
// $db = "thewpked_mei_team";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  echo "Connection failed: " . mysqli_connect_error();
}
