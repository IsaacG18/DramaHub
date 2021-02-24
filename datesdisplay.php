<html>
    <head>
       <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans&display=swap" rel="stylesheet">
    </head>
    
     <?php
     include_once 'dbconnection.php';
    $userID = "";
     if(isset($_COOKIE["user"])){
         $userID = $_COOKIE["user"];
     }else{
         $userID = 1;
     }
    ?>
    <body>
        <div class = "banner">
            <img class = "Logo" src="img/Logo5.png"/>
            <?php
            if($userID == 1){
                echo"
                <form action='SignIn.php' method='POST'>
                <input name= 'page' type='hidden' value='index'>
                <button class = 'SignIn' type='submit'>Sign in</button>
                </form>
                <form action='SignUp.php' method='POST'>
                <input name= 'page' type='hidden' value='index'>
                <button class = 'SignUp' type='submit'>Sign Up</button>
                </form>";
            }else{
                echo"<form action='index.php' method='POST'>
                <button class = 'SignOut' type='submit'>Sign Out</button>
                </form>
                <form action='Delete.php' method='POST'>
                <input name= 'UserID' type='hidden' value='$userID'>
                <input name= 'page' type='hidden' value='index'>
                <button class = 'Delete' type='submit'>Delete</button>
                </form>";
            }
            ?>
            
        </div>
       
            
         <div class = "nav">
            <?php echo" <form action='index.php' method='POST'>
                 <input name= 'UserID' type='hidden' value='$userID'>
                <button class = 'first' type='submit'>Home</button>
             </form>
             <form action='Shows.php' method='POST'>
              <input name= 'UserID' type='hidden' value='$userID'>
                <button class = 'other' type='submit'>Shows</button>
             </form>
             <form action='Monologues.php' method='POST'>
              <input name= 'UserID' type='hidden' value='$userID'>
                <button class = 'other' type='submit'>Monologue</button>
             </form>
             <form action='DramaSchool.php' method='POST'>
              <input name= 'UserID' type='hidden' value='$userID'>
                <button class = 'other' type='submit'>Drama School</button>
             </form>
             <form action='getInspired.php' method='POST'>
              <input name= 'UserID' type='hidden' value='$userID'>
                <button class = 'other' type='submit'>Get Inspired</button>
             </form>"; ?>
            
            </div>
          <h1>Drama School Days</h1>
        <?php
            $output = "";
    
        
        $output .="<div class = 'datTab'><table><tr><th><h1>Instatute</h1></th><th><h1>Date</h1></th><th><h1>Type</h1></th><th><h1>Website</h1></th></tr>";
        $query = $con ->prepare("SELECT * FROM dates ORDER BY date");
            $success = $query->execute([
                
                    ]);
            $dates = $query->fetchall(PDO::FETCH_OBJ);
            
        foreach ($dates as $date){
        
             $output .="<tr class='dates'><th>$date->instatute</th><th>$date->date</th><th>$date->type</th><th><a href = '$date->link'>Website</th></tr>";
        }$output .="</table></div>";
        echo $output;
            ?>
         <div class = "footer">
             <div class = "piller">
                 <p>Partnerships</p>
                 <p>National Theatre</p>
                 <p>Drama School</p>
                 <p>Theatre Companies</p> 
             </div>
             <div class = "piller">
                 <p>Mission Statment</p>
                 <p>Covid-19</p>
                 <p>Donate</p>
             </div>
             <div class = "piller">
                 <p>Contact</p>
                 <p>Emailcontact@gmail.com</p>
                 <p>075363451323</p>
                 <p>@DramaHub</p>
             </div>
              <img class = "LogoF" src="img/Logo5.png"/>
         </div>
        <style>
             * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'PT Sans', sans-serif;
}

html {
  font-size: 135%;
}
            th{
                font-size: 2.5rem;
            }
            p{
                color: #fefeff; 
                font-size: 2rem;
            }
            h1, h3{
                font-size: 4rem;
            }
            html{
                margin: 0px; 
                background-color: #7c7c7c;
               
            }
            p, h3, h5, th{
                color: #fefeff; 
            }
            a{
                text-decoration: none;
                color: #fefeff;
            }
            a:hover {
                color: #feea00;
            }
            h1{
                color: #ead700;
                text-shadow: 0 0.15rem 0.15rem rgba(200, 200, 200, 0.5);
                text-align: center;
            }
            .Logo{
                width: 480px;
                height: 160px;
                float: left;
                position: relative;
                margin: 0;
                bottom: 52px;
                
                
            }
            .LogoF{
                width: 180px;
                height: 60px;
                
                position: relative;
                margin: 0;
                bottom: 11px;
             
            }
           
            body{
                margin: 0px;
                padding: 0px;
                max-width: 1200px;
                min-width: 350px;
                margin: auto;
                background-color: #08080c;
                border: solid 4px #ff0429;
            }
            .banner{
                width: 100%;
                height: 550px;
                margin: 0px auto;
                background-image: url("img/Banner.jpg");
                background-repeat: no-repeat; 
                background-size: cover;
                background-position: bottom;
            }
            .banner h1{
                padding-left: 10%;
                color: #fefeff;
                display: inline-flex;
                margin: 3px;
            }
            .banner button{
                float: right;
                margin: 5px;
                background-color: #08080c;
                color: #fefeff;
                text-align: center;
                border-radius: 10px;
            }
            .nav{
               background-color: #ff0429;
                margin: 0;
                font-size: 65%;
                
            }
            
            .first{
               border: none; 
            }
            .other{
                 border: none;
               border-left: solid 2.5px #ead700;
            }
            .nav form{
               width: 19%;
              background-color: #ff0429;
              color: #fefeff;
              margin: auto;
              display:inline-flex;
            }
            .nav [type=submit]{
              width: 100%;
              background-color: #ff0429;
              color: #fefeff;
              text-align: center;
               text-decoration: none;
               cursor: pointer;
                 
            }
           
            hr{
                width: 90%;
                margin: 20px auto;

                background-color: #ff0429;
                height: 3px;
                border: none;
            }
          
           
             .piller{
                width: 32%;
                margin: 3px auto;
                display: inline-block;
               
            }
            .footer{
                background-color: #ff0429;
                height: 200px;
                font-size: 2rem;
            }
            .footer p{
                margin: 10px;
            }
            table{
                margin: 20px auto;
                border-collapse: collapse;
                width: 90%;
                border:#ff0429 solid 2px;
                
            }
            
            th{
                width: 25%;
                height: 50px;
            }
            th, tr{
                border-left:#ff0429 solid 2px;
                border-right:#ff0429 solid 2px;
            }
            tr:nth-child(odd){
                background-color: #7c7c7c;
            }
            tr:nth-child(even){background-color: #555555;}
            tr:hover {background-color: #08080c;}
            
            * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'PT Sans', sans-serif;
}

html {
  font-size: 50%;
}
        
@media only screen and (max-width: 800px) {
    th{
        font-size: 2rem;
    }
}
@media only screen and (max-width: 700px) {
            
            p{
                font-size: 2rem;
            }
            Logo{
                width: 360px;
                height: 120px;
                bottom: 40px;  
            }
            html {
            font-size: 40%;
        }
            
           
        }
        @media only screen and (max-width: 550px) {
           
           
                .Logo{
                width: 300px;
                height: 100px;
                bottom: 30px;  
            }
               
            .footer p{
           font-size: 1.5rem;
        }
        }
        @media only screen and (max-width: 400px) {
           
           .nav [type=submit]{
                    font-size: 100%;
                }
                .Logo{
                width: 240px;
                height: 80px;
                bottom: 25px;  
            }
               
            .footer p{
           font-size: 1.4rem;
        }
        }
        </style>

