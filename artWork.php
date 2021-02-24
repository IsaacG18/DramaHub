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
     if(isset($_GET['artID'])){
        $artID = $_GET['artID'];
     }else{
         $artID = 1;
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
        
        <?php  $query = $con ->prepare("SELECT * FROM art inner join users on art.userID = users.userID where artID = $artID");
            $success = $query->execute([
                
                    ]);
            $art = $query->fetch(PDO::FETCH_OBJ);
            
        echo "<div class = art><h1>$art->title</h1>"
        . "<div class = artimg><img src ='$art->img'></div>"
        . "<h5>By $art->username</h5>"
        . "<div class = artdes><p>$art->description</p></div></div>";
        
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
            html{
                margin: 0px;
                padding: 0px;
                background-color: #7c7c7c;
            }
            p, h3{
                color: #fefeff; 
                font-size: 2rem;
            }
            h1, h3{
                font-size: 4rem;
    
            }
            h5{
                color: #7c7c7c; 
                font-size: 2.5rem;
                margin: 5px 0 10px 5%;
            }
            h1{
                color: #ead700;
                text-shadow: 0 0.15rem 0.15rem rgba(200, 200, 200, 0.5);
                text-align: center;
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
            
            
            .Logo{
                width: 450px;
                height: 150px;
                float: left;
                position: relative;
                margin: 0;
                bottom: 49px;
                
                
            }
            .LogoF{
                width: 180px;
                height: 60px;
                
                position: relative;
                margin: 0;
                bottom: 11px;
                
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
            * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'PT Sans', sans-serif;
}
.art img{
    width: 100%;
    height: auto;
}
.artimg{
    width: 80%;
    margin: auto;
}
.artdes{
    width: 80%;
    margin: 20px auto;
}

html {
  font-size: 50%;
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
            
           
        }
        @media only screen and (max-width: 550px) {
           
           .nav [type=submit]{
                    font-size: 95%;
                }
                .Logo{
                width: 300px;
                height: 100px;
                bottom: 30px;  
            }
               
            .footer p{
           font-size: 1.3rem;
        }
        }
        @media only screen and (max-width: 400px) {
           
           .nav [type=submit]{
                    font-size: 95%;
                }
                .Logo{
                width: 240px;
                height: 80px;
                bottom: 25px;  
            }
               
            .footer p{
           font-size: 1.3rem;
        }
        }

 
</style>