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
        <link rel="icon" type="img/png" href="img/DSearchBar.png"/>
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/passReset.js"></script>
        <link rel="stylesheet" href="css/Other.css"/>
    </head>
    <body>
        <!-- Controls the size of the box -->
        <style>
           
            #box{
               width: 310px;
               height: 450px;
            }
            
        </style>
        
        
        <div id = "box">
            <div class = "big">
            <h1>Reset Password</h1>
        <form method="POST">
            
            <label for = "code">Enter Code</label>
            <Input type = 'text' Name ='code' id = "code">
            <label for = "pass">New Password</label>
            <Input type = 'password' Name ='pass' id = "PW">
            <p id = "pReset"></p>
            <input id="button" type="button" class ="mainBut" Name = "submit" value="Submit"> <!-- Send the data to the Password Reset process -->
        </form>
            <h5>Check your inbox if nothing appears in a few minutes resend the email</h5>
             <form method="POST">
            <label for = "email">Re-send Email</label>
            <Input type = 'text' Name ='email' id = "email">
            <p id = "emailAccount"></p>
            <input id="reset" type="button" class ="mainBut" Name = "Check" value="Send email">  <!-- Send the data to the email code process -->          
        </form>
            </div>
            <?php include_once 'backButton.php'; ?>
        </div>
        
       
    </body>
</html>
