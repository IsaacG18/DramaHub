<html>
    <head>
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
     $monoID = $_GET['MonoID'];
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
        
        <?php
           $query = $con ->prepare("SELECT * FROM monologue WHERE monoID = :monoID");
            $success = $query->execute([
                ':monoID' => $monoID
                    ]);
            $mono = $query->fetch(PDO::FETCH_OBJ);
            
        if($success){
            $Play = $mono->play;
        $Part = $mono->part;
        $Title = $mono->title;
        $author = $mono->author;
        $img = $mono->img;
        $description = $mono->description;
        $content = $mono->content;
        
        
        
       
        
        $output .= "<div class = 'Pre-Mono'>
                <div class = 'info'>
                <h1>Play: $Play</h1>
                <h3>Character: $Part</h3>
                <h3>Title: $Title</h3>
                <h3>Author: $author</h3>
                <p>$description</p>
                </div><div class = 'mono-img'>
                <img src='$img'/>
                </div></div><hr>";
        
        
        $output .= "<article><p>$content</p></article><hr>";
        echo $output;
        }
        ?> 
        <div class = "tip">
         <h1>How to start learning a Shakespeare Monologue</h1>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
              
              <iframe src="https://www.youtube.com/embed/64UW3Gmp5VA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         
        </div>
        <hr>
        <div class = "forms"></div>
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

            
            h1, h3{
                font-size: 3rem;
            }
            
            html{
                margin: 0px; 
                background-color: #7c7c7c;
               
            }
            p, h3, h1{
                color: #fefeff; 
            }
            h1{
                color: #ead700;
                text-shadow: 0 0.15rem 0.15rem rgba(200, 200, 200, 0.5);
                text-align: center;
            }
           
            body{
                margin: 0px;
                max-width: 1200px;
                min-width: 350px;
                margin: auto;
                background-color: #08080c;
                border: solid 3px #ff0429;
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
             iframe{
           height: 400px;
           width: 500px; 
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
            }
            .Pre-Mono{
                width: 95%;
                margin: 20px auto;
                display: flex;
            }
            .mono-img{
                width: 60%;
                margin: 0 20px;
            }
            .mono-img img{
                width: 100%;
                height: auto;
            }
            article{
                font-size: 25px;
                margin-left: auto;
                margin-right: auto;
                display: block;
                vertical-align: middle;
                width: 80%;
                
            }
            iframe{
                height: 400px;
                width: 500px;
            }
            
            .tip{
                margin: 5px;
                text-align: center;
                margin: 3px auto;
                width: 80%;
            }
            .tip p{
                font-size: 25px;
            }
            .forms{
                
                
                margin: 20px auto;
                width: 80%;
                height: 400px;
                background-color: #feea00;
                
            }
            @media only screen and (max-width: 800px) {
                .tip p, article p , .tip p{
                    font-size: 23px;
                }
            }
            .info h1{
                font-size: 2rem;
            }
            .info h3{
                font-size: 1.6rem;
            }
            .info p{
                font-size: 1.4rem;
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
            
            @media only screen and (max-width: 700px) {
            iframe{
                height: 320px;
                width: 400px;
            }
            p{
                font-size: 2rem;
            }
            Logo{
                width: 360px;
                height: 120px;
                bottom: 40px;  
            }
            html{
            font-size: 80%;
        }
        article, article p, .tip p {
                font-size: 20px;
                width: 90%;
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
            iframe{
                height: 200px;
                width: 300px;
            }
               
            .footer p{
           font-size: 1.3rem;
        } 
        article, article p, .tip p{
                font-size: 18px;
                width: 90%;
            }
             html{
            font-size: 50%;
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
            article, article p{
                font-size: 12px;
                width: 90%;
            }
            iframe{
                height: 200px;
                width: 250px;
            }
            
            
               
            .footer p{
           font-size: 1.3rem;
        }
        }
            
            

        </style>
    </body>
</html>