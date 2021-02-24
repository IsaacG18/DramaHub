<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="robots" content="noindex, nofollow">
        <link rel="stylesheet" href="css/Login.css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/Delete.js"></script>
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
               width: 300px;
               height: 225px;
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
                background-color: #ffffff;
                margin-left: 20px;
                margin-top: 10px;
            }
            label{
                margin-left: 3px;
                color: black;
                min-width: 100px;
                display: inline;
                float: left;
                font-size: 15px;
                font-family: sans-serif 
            }
            form #buttondelete{
                font-size: 20px;
                font-family: sans-serif; 
                display: block;
                margin-left: 33%;
                
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
            margin: 0px;
            }
        </style>     
           <?php if(isset($_POST['UserID'])){
               $userID = $_POST['UserID'];
               echo ("<div id = 'box'>
            <h1>Delete</h1>
            <form method='POST'>
            <input name= 'UserID' id ='UserID' type='hidden' value='$userID'>
            <label for = 'PW'>Password</label>
            <Input type = 'password' Name ='PW' id = 'PW'>
            <label for = 'PW2'>Re-Password</label>
            <Input type = 'password' Name ='PW2' id = 'PW2'>
            <p id = 'passwordWrong'></p>
            <input id='buttondelete' type='button' Name = 'Delete' value='Delete'>"
           . " </form>");} 
           ?> 
       
            
      
           
    </body>
</html>
