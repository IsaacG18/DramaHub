<?php
include_once 'dbconnection.php';
$statusMsg = '';


$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$title = $_POST['title'];
$description = $_POST['description'];
$type = $_POST['type'];
$userID = $_POST['userID'];
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            
            $insert = $con->query("INSERT into art (title, userID, description, type, upImg) VALUES ('$title',$userID ,'$description' , '$type','".$fileName."')");
            if($insert){
                $artID = $con->lastInsertId();
                $statusMsg = "$artID' Successful worked uploaded";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }



echo $statusMsg;
?>
