<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="icon" type="img/png" href="img/DSearchBar.png"/>
        <meta charset="UTF-8">
        <title>Uploader</title>
                <meta name="robots" content="noindex, nofollow">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/upload.js"></script>
        <link rel="stylesheet" href="css/Other.css"/>
    </head>
    <body>
    <?php    $userID = ""; 
    if(isset($_COOKIE["user"]) && $_COOKIE["user"] != ''  && $_COOKIE['user'] == true){ // This checks then gets the cookie for the userID
         $userID = $_COOKIE["user"];
     }else{
         $userID = 1; // This sets a default guest number if the user is not login
     }?>
        <!-- Controls the size of the box -->
        <style>
            #box{
               width: 300px;
               height: 575px;
            }
        </style>

        <div id = "box">
            <h1>Uploader</h1>
        <?php
        if($userID != 1){// Check is the users is login
        echo "<form method='POST' id = 'content' enctype='multipart/form-data'>
            <label for = 'title'>Title</label>
            <Input type = 'text' Name ='title' id = 'title'>
            <br><br>
            <label for='User' class = 'RadioType'>User</label>
            <input type='radio' id='User' name='type' value='User'>
            <br>
            <label for='Work' class = 'RadioType'>Activities</label>
            <input type='radio' id='Work' name='type' value='Work'>
            <br>
            <label for='Art' class = 'RadioType'>Artist</label>
            <input type='radio' id='Art' name='type' value='Art'>
            <br>
            <input type='file' id='file'  name='file'>
            <br>
            <label for = 'text'>Text</label>
            <textarea rows='10' name='description' form='content' id = 'descrip'></textarea>
            <input type='hidden' id='userID' name='userID' value='$userID'>
            <p id = 'wrong'></p>
            <input id='submitItem' type='button' class ='mainBut' Name = 'submitItem' value='Upload'>
        </form>";
        }else{
            header("Location: SignIn.php");//If a users if not login it will redirect the to the login page
        }
        ?>     
            <?php include_once 'backButton.php'; ?>
        </div>
    </body>
</html> 

