<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Uploader</title>
                <meta name="robots" content="noindex, nofollow">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/upload.js"></script>
    </head>
    <body>
    <?php    $userID = ""; 
    if(isset($_COOKIE["user"]) && $_COOKIE["user"] != ''  && $_COOKIE['user'] == true){
         $userID = $_COOKIE["user"];
     }else{
         $userID = 1;
     }?>
        <style>
            
            body{
                margin: 0;
                background-image: url("img/Banner.jpg");
                background-repeat: no-repeat;
                background-position: 52% 35%;
            }
            #box{
               width: 300px;
               height: 500px;
               border: 5px black solid;
               background-color: rgba(255, 255, 255, 0.8);
               margin: 100px auto;
            }
            h1{
                text-align: center;
                color: black;
                font-family: sans-serif;
            }
            input[type=text], input[type=password], textArea{
                
                color: black;
                background-color: rgba(255, 255, 255, 0.7);
                
            }
            input[type=submit],input[type=button]{
                
                cursor:pointer;
                -webkit-border-radius: 5px;
                border-radius: 5px; 
                padding: 5px;
                color:black;
                background-color: #fefeff;
                margin-left: 30px;
                margin-top: 10px;
            }
            label{
                margin-left: 10px;
                margin-right: 3px;
                color: black;
                min-width: 75px;
                display: inline;
                float: left;
                font-size: 15px;
                font-family: sans-serif 
            }
            #buttonSP{
                font-size: 20px;
                font-family: sans-serif; 
            }
            input, #buttonLI{
                font-size: 10px;
                font-family: sans-serif;
            }
            p{
                color: #ff0429;
                margin: 0;
                font-size: 13px;
            }
            textarea{
                width: 265px;
                margin: 15px;;
            }
            input[type=file]{
                margin: 15px 10px;
            }
            
        </style>

        <div id = "box">
            <h1>Uploader</h1>
        <form method="POST" action="#" id = "content" enctype="multipart/form-data">
            <label for = "title">Title</label>
            <Input type = 'text' Name ='title' id = "title">
            <br><br>
            <label for='User'>User</label>
            <input type='radio' id='User' name='type' value='User'>
            <br>
            <label for='Work'>Activities</label>
            <input type='radio' id='Work' name='type' value='Work'>
            <br>
            <label for='Art'>Artist</label>
            <input type='radio' id='Art' name='type' value='Art'>
            <br>
            <input type="file" id='file'  name="file">
            <br>
            <label for = "text">Text</label>
            <textarea rows="10" name="description" form="content" id = "descrip"></textarea>
            <?php echo "<input type='hidden' id='userID' name='userID' value='$userID'>"?>
            <p id = "wrong"></p>
            <input id="submitItem" type="submit" Name = "submitItem" value="Upload">
        </form>
            
             
        </div>
       
    </body>
</html> 

