<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign In</title>
        <link rel="icon" type="img/png" href="img/DSearchBar.png"/>
        <meta name="robots" content="noindex, nofollow">
        <link rel="stylesheet" href="css/Other.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/login.js"></script>
    </head>
    <body>
        <!-- Controls the size of the box -->
        <style>    
            #box{
               width: 300px;
               height: 340px;
            }
        </style>

        
        <div id = "box">
            <h1>Login</h1>
        <form method="POST">
            <label for = "username">Username</label>
            <Input type = 'text' Name ='user_name' id = "username">
            <p id = "usernameWrong"></p>
            <label for = "PW">Password</label>
            <Input type = 'password' Name ='PW' id = "PW">
            <p id = "passwordWrong"></p>
            <input id="buttonlogin" type="button" class = "mainBut" Name = "Check" value="Login"> <!-- Send the data to the sign in process -->
        </form>
            <div id = "username"></div>
        <form action="SignUp.php">
        <input id="buttonSU" class = "otherBut" type="submit" Name = "SignUp" value="Create an Account"><!-- Sends the user to the sign-up page -->
        </form>
        
        <form action="forgottenPass.php">
        <input id="buttonFP" class = "otherBut" type="submit" Name = "forgottenPass" value="Forgotten Pass"><!-- Sends the user to the forgotten password page -->
        </form> 
        <?php include_once 'backButton.php'; ?>
            </div>
        
           
    </body>
</html>
