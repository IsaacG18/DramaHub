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
        <title>Sign Out</title>
        <meta name="robots" content="noindex, nofollow">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/signOut.js"></script>
        <link rel="stylesheet" href="css/Other.css"/>
    </head>
    <body>
        <!-- Controls the size of the box -->
        <style>
            #box{
               width: 150px;
               height: 175px;
            }
        </style>
        
        <div id = "box">
            <h1>Sign Out</h1>
        <form method="POST">
            <input id="buttonSign" type="button" class ="mainBut" Name = "Check" value="Sign Out"><!-- This button sends users to be signed out -->
        </form>
        <?php include_once 'backButton.php'; ?>
            </div>
        
           
    </body>
</html>
