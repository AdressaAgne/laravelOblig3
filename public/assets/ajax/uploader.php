<?php

$dir = "../img";

if(!file_exists($dir)){
    mkdir($dir);
}
$extension = explode(".", $_FILES['file']['name']);
$fname = $dir."/".uniqid().".".($extension[count($extension) - 1]);
$_FILES['file']['name'] = $fname;

if(explode("/", $_FILES['file']['type'])[0] === 'image'){
    if(move_uploaded_file($_FILES['file']['tmp_name'], $fname)){
        echo json_encode($_FILES['file']);
    } 
} else {
    echo json_encode(['error' => 'not an image']);
}