<?php
include_once 'dbconnection.php';
$statusMsg = '';
$targetDir = "uploads/";
$fileName = $_FILES["file"]["name"];//Gets the file 
$title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);//Gets title after being sanitized 
$description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);//Gets description after being sanitized 
$type = $_POST['type'];//Get the post type
$userID = $_POST['userID'];//Get the userID
$targetFilePath = $targetDir . $fileName;//Creates a file path
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


    $allowTypes = array('jpg','png','jpeg','gif','PNG');//The file types that are allowed
    if(in_array($fileType, $allowTypes)){//Check if the file includes the selected file type
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            $statusMsg = $targetFilePath;
            try{
                $insert = $con->query("INSERT into art (title, userID, description, type, upImg) VALUES ('$title',$userID ,'$description' , '$type','".$fileName."')");//Inserts the data into the database
                if($insert){
                    $artID = $con->lastInsertId();//Gets the last inserted ID
                    $statusMsg = "$artID` Successful worked uploaded"; //Send the ID and a success
                }else{
                    $statusMsg = "Unable to upload file, please try again.";//Sends are failer
                }
            }catch(PDOException $e){
                echo $sql . "<br>" . $e->getMessage();
            }
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";//Sends are failer
        }
    }else{
        $statusMsg = 'Sorry, files type failed.';//Sends are failer
    }



echo $statusMsg;//Prints a message
?>
