<?php

function upload_blog_image($blog_image){
    $upload_dir = "../uploads/";
        $random_num=rand(10,100);
        $file_name = $random_num.basename($blog_image["name"]);
        $target_file=$upload_dir.$file_name;
        if (move_uploaded_file($blog_image["tmp_name"], $target_file)) {
            return $file_name;
        } else {
          return "error_in_uploading";
        }
}