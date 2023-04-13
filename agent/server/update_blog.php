<?php
require '../inc/init.php';

/**
 * Validate blog and update into database
 */

$title=$conn->real_escape_string($_POST['title']);
$content=$conn->real_escape_string($_POST['content']);
$id = $_POST['blog_id'];

if($title == ""){
    echo "title_missing";
}else if($content == "<p><br></p>"){
    echo "content_missing";
} else{
        $qry = "UPDATE `blog_table` SET `b_title`='$title',`b_content`='$content' WHERE b_id=$id";
            $res = $conn->query($qry);
            if($res == true){
                echo 'updated';
            }else{
                echo 'error';
            } 
}