<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Password Reset</title>
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/passReset.js"></script>
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
               width: 310px;
               height: 430px;
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
            input[type=button]{
               
                cursor:pointer;
                -webkit-border-radius: 5px;
                border-radius: 5px; 
                padding: 5px;
                color:black;
                background-color: #ffffff;
                margin-left: 20px;
                margin-top: 10px;
                width: 120px;
                height: 40px;
            }
            label{
                margin-left: 15px;
                color: black;
                min-width: 110px;
                display: inline;
                float: left;
                font-size: 15px;
                font-family: sans-serif 
            }
            form #button, #reset{
                font-size: 20px;
                font-family: sans-serif; 
                display: block;
                margin-left: 33%;
                
            }
            h5{
                text-align: center;
            }
            p{
            color: #ff0429;
            margin: 0px;
            }
        </style>
        
        
        <div id = "box">
            <h1>Reset Password</h1>
        <form method="POST">
            
            <label for = "code">Enter Code</label>
            <Input type = 'text' Name ='code' id = "code">
            <label for = "pass">New Password</label>
            <Input type = 'password' Name ='pass' id = "PW">
            <p id = "pReset"></p>
            <input id="button" type="button" Name = "submit" value="Submit">
        </form>
            <h5>Check your inbox if nothing appears in a few minutes resend the email</h5>
             <form method="POST">
            <label for = "email">Re-send Email</label>
            <Input type = 'text' Name ='email' id = "email">
            <p id = "emailAccount"></p>
            <input id="reset" type="button" Name = "Check" value="Send email">            
        </form>
        </div>
        
       
    </body>
</html>
