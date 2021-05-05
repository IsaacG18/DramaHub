<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
        <link rel="icon" type="img/png" href="img/DSearchBar.png"/>
        <meta name="robots" content="noindex, nofollow">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/signUp.js"></script>
        <link rel="stylesheet" href="css/Other.css"/>
    </head>
    <body>
        <!-- Controls the size of the box -->
        <style>
            

            #box{
               width: 300px;
               height: 390px;
            }

        </style>
        
        <div id = "box">
            <h1>Sign Up</h1>
        <form method="POST" action="#">
            <label for = "FN">First Name</label>
            <Input type = 'text' Name ='FN' id = "FN">
            <label for = "LN">Last Name</label>
            <Input type = 'text' Name ='LN' id = "LN">
            <label for = "UN">Username</label>
            <Input type = 'text' Name ='UN' id = "UN">
            <label for = "EM">Email</label>
            <Input type = 'text' Name ='EM' id = "EM">
            <label for = "PW">Password</label>
            <Input type = 'password' Name ='PW' id = "PW">
            <p id = "wrong"></p>
            <input id="buttonSP" type="button" class = "mainBut" Name = "buttonSP" value="Sign Up"><!-- Send the data to the sign up process -->
        </form>
            <form action="SignIn.php">
           <input id="buttonLI" type="submit" class = "otherBut" Name = "login" value="To instead Login"><!-- Sends the user to the sign-in page -->
        </form>
        <?php include_once 'backButton.php'; ?>     
        </div>
       
    </body>
</html> 

