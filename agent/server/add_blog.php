<?php
require '../inc/init.php';

/**
 * Validate blog and store into database
 */

$title=$conn->real_escape_string($_POST['title']);
$content=$conn->real_escape_string($_POST['content']);

$current_time = date("M d, Y");



if($title == ""){
    echo "title_missing";
}else if($content == "<p><br></p>"){
    echo "content_missing";
} else {
    $qry = "INSERT INTO `blog_table`( `b_title`, `b_content`, `b_created_on`) VALUES ('$title','$content','$current_time')";
        $res = $conn->query($qry);
        if($res == true){
            echo 'success';
        }else{
            echo 'error';
    }
}



