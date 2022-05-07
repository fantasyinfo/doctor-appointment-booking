<?php

// filter real data
function getSafeData ($arr) { 
    global $conn;
    return mysqli_real_escape_string($conn, htmlspecialchars(stripslashes($arr)));
  
}

// for testing purpose of a array
function prx($arr)
{
    echo "<pre>";
    print_r($arr);
}

// upload pic to uploads folder
function uploadPic($picarr)
{
    $msg = "";
    $status = '';
    $rand = rand(1111,9999);
    $allowedExtention = ['jpg', 'png', 'JPG', 'PNG', 'jpeg', 'JPEG'];
    $allowedMaxSize = 2097152; // 1 mb = 1024*1024
    $picSize = $picarr['size'];
    $picName = $picarr['name'];
    $picTmpName = $picarr['tmp_name'];
    $picExtention = strtolower(end(explode('.',$picName)));
    $fileNewName = $rand .$picName;
    if($picSize > $allowedMaxSize)
    {
        $msg = "Please Upload Max 2MB File";
        $status = 400;
    }else
    {
        $status = 200;
    }
    if(!in_array($picExtention, $allowedExtention) && $status != 200)
    {
        $msg = "Please Upload jpg / png file only";
    }else
    {
        move_uploaded_file($picTmpName,'uploads/' .$fileNewName);
        
       return $fileNewName;
    }
    //return $msg;
}

?>