<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'mei_team');

// define('HOST','localhost');
// define('USER','');
// define('PASSWORD','');
// define('DATABASE','thewpked_Mei Team_db');



$conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
$conn->set_charset('utf8');
if ($conn->connect_errno > 0) {
    die('Error in database connection: ' . $conn->connect_errno);
}
date_default_timezone_set('Asia/Karachi');