<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign Out</title>
        <meta name="robots" content="noindex, nofollow">
        <link rel="stylesheet" href="css/Login.css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/signOut.js"></script>
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
               width: 150px;
               height: 150px;
               border: 5px black solid;
               background-color: rgba(255, 255, 255, 0.8);
               margin: 100px auto;
            }
            h1{
                text-align: center;
                color: black;
                font-family: sans-serif;
            }
          
           
            form #buttonSign{
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
            
            
            
        </style>
        <?php
//          $page = $_POST['page'];
        ?> 
        
        <div id = "box">
            <h1>Sign Out</h1>
        <form method="POST">
            <input id="buttonSign" type="button" Name = "Check" value="Sign Out">
        </form>
        
            </div>
        
           
    </body>
</html>
