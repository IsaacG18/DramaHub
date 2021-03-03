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
        <meta name="robots" content="noindex, nofollow">
        <link rel="stylesheet" href="css/Login.css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/login.js"></script>
    </head>
    <body>
        <style>
            body{
                margin: 0;
                background-image: url("img/Banner.jpg");
                background-repeat: no-repeat;
                background-position: 52% 35%;
            }
            #box{
               width: 280px;
               height: 280px;
               border: 5px black solid;
               background-color: rgba(255, 255, 255, 0.8);
               margin: 100px auto;
            }
            h1{
                text-align: center;
                color: black;
                font-family: sans-serif;
            }
            input[type=text], input[type=password]{
                margin-bottom: 20px;
                color: black;
                background-color: rgba(255, 255, 255, 0.7);
                
            }
            input[type=submit]{
                
                cursor:pointer;
                -webkit-border-radius: 5px;
                border-radius: 5px; 
                padding: 5px;
                color:black;
                background-color: #fefeff;
               margin: 10px 0 10px 11%;
            }
            label{
                margin-left: 8px;
                color: black;
                min-width: 75px;
                display: inline;
                float: left;
                font-size: 15px;
                font-family: sans-serif 
            }
            form #buttonlogin{
                font-size: 20px;
                font-family: sans-serif; 
                display: block;
                margin: auto;
                cursor:pointer;
                -webkit-border-radius: 5px;
                border-radius: 5px; 
                padding: 5px;
                color:black;
                background-color: #fefeff;
                
            }
            form, #buttonSU{
                font-size: 10px;
                font-family: sans-serif;
                display: inline
            }form, #buttonFP{
                font-size: 10px;
                font-family: sans-serif;
                display: inline
            }
            p{
                color: #ff0429;
            }
            
            
        </style>
        <?php
//          $page = $_POST['page'];
        ?> 
        
        <div id = "box">
            <h1>Login</h1>
        <form method="POST">
            <label for = "username">Username</label>
            <Input type = 'text' Name ='user_name' id = "username">
            <p id = "usernameWrong"></p>
            <label for = "PW">Password</label>
            <Input type = 'password' Name ='PW' id = "PW">
            <p id = "passwordWrong"></p>
            <input id="buttonlogin" type="button" Name = "Check" value="Login">
        </form>
            <div id = "username"></div>
        <form action="SignUp.php">
        <input id="buttonSU" type="submit" Name = "SignUp" value="Create an Account">
        </form>
        
        <form action="forgottenPass.php">
        <input id="buttonFP" type="submit" Name = "forgottenPass" value="Forgotten Pass">
        </form>
        
            </div>
        
           
    </body>
</html>
