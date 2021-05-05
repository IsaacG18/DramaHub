<!DOCTYPE html>   
<html>
    <head>
        <meta charset="UTF-8">
        <title>Forgotten Password</title>
        <link rel="icon" type="img/png" href="img/DSearchBar.png"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/forgottenPassword.js"></script>
        <link rel="stylesheet" href="css/Other.css"/>
    </head>
    <body>
         <!-- Controls the size of the box -->
        <style>

            #box{
               width: 275px;
               height: 275px; 
            }

            </style>
        <div id ="box">
        <h1>Forgotten Password</h1>
        <form method="POST">
            <label for = "email">Email</label>
            <Input type = 'text' Name ='email' id = "email">
            <p id = "emailAccount"></p>
            <!-- This sends the inputted email to the reset process  -->
            <input id="reset" type="button" class = "mainBut" Name = "Check" value="Send email">            
        </form>
        <?php include_once 'backButton.php'; ?>
        </div>
    </body>
</html>

