<!DOCTYPE html>   
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/forgottenPassword.js"></script>
    </head>
    <body> <style>
        body{
                margin: 0;
                background-image: url("img/Banner.jpg");
                background-repeat: no-repeat;
                background-position: 52% 35%;
            }
            #box{
               width: 250px;
               height: 250px;
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
            }
            label{
                margin-left: 3px;
                color: black;
                min-width: 50px;
                display: inline;
                float: left;
                font-size: 15px;
                font-family: sans-serif 
            }
            form #reset{
                font-size: 20px;
                font-family: sans-serif; 
                display: block;
                margin-left: 33%;
                
            }
            p{
            color: #ff0429;
            margin: 0px;
            }</style>
        <div id ="box">
        <h1>Forgotten Password</h1>
        <form method="POST">
            <label for = "email">Email</label>
            <Input type = 'text' Name ='email' id = "email">
            <p id = "emailAccount"></p>
            <input id="reset" type="button" Name = "Check" value="Send email">            
        </form>
       
        </div>
    </body>
</html>

