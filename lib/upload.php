<?php
$dir = '../asset/upload/';
if ($_FILES["music"]["error"] == UPLOAD_ERR_OK)
{
    $file = $_FILES["upload"]["tmp_name"];
    move_uploaded_file( $file, $dir . $file);
}