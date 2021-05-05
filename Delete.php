<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Delete Account</title>
        <meta name="robots" content="noindex, nofollow">
        <link rel="stylesheet" href="css/Login.css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/Delete.js"></script>
        <link rel="stylesheet" href="css/Other.css"/>
    </head>
    <body>
        <!-- Controls the size of the box -->
        <style>
          
            #box{
               width: 300px;
               height: 260px;
            }
            
        </style>     
           <?php    $userID = ""; 
    if(isset($_COOKIE["user"]) && $_COOKIE["user"] != ''  && $_COOKIE['user'] == true){ // This checks then gets the cookie for the userID
         $userID = $_COOKIE["user"];
         echo ("<div id = 'box'>
            <div class = 'big'>
            <h1>Delete</h1>
            <form method='POST'>
            <input name= 'UserID' id ='UserID' type='hidden' value='$userID'>
            <label for = 'PW'>Password</label>
            <Input type = 'password' Name ='PW' id = 'PW'>
            <label for = 'PW2'>Re-Password</label>
            <Input type = 'password' Name ='PW2' id = 'PW2'>
            <p id = 'passwordWrong'></p>
            <input id='buttondelete' class = 'mainBut' type='button' Name = 'Delete' value='Delete'>
            </form>");
            include_once 'backButton.php';
            echo ("</div></div>");//Form that allow the users to enter there password twice to delete there accoun
     }else{
         $userID = 1; // This sets a default guest number if the user is not login
     }?>
                
           
       
            
      
           
    </body>
</html>
