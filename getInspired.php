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
    $userID = "";
     if(isset($_GET['UserID'])){
        $userID = $_GET['UserID'];
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
         <div class = "firstColumn">
         <h1>Intro To Monologues</h1>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
              
              <iframe width="100%" height="300" src="https://www.youtube.com/embed/64UW3Gmp5VA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         
        </div>
        <hr>
            <h1>Artist's Work</h1>
            <div class = "Artist">
            <?php
        $monos = ["<img src = 'img/Drama1.jpg'>", "<img src = 'img/Drama2.jpg'>", "<img src = 'img/Drama3.jpg'>", "<img src = 'img/Drama1.jpg'>", "<img src = 'img/Drama2.jpg'>", "<img src = 'img/Drama3.jpg'>", "<img src = 'img/Drama3.jpg'>"];
        $output = "";
        $output .="<div class = 'blocks'>";
        $count = 0;
        $show = false;
        
        foreach ($monos as $mono){
            
             $output .="<div class = 'art'> $mono <br> <h3>This is something</h3></div>";
             $count++;
             if($count > 5 && $show == false){
                 break;
             }
        }
        $output .= "</div>";
        
            echo $output;
        
        ?>
                </div>
            <hr>
            
            <h1>Activities</h1>
            <div class = "Activities">
                <?php
        $monos = ["<img src = 'img/Drama1.jpg'>", "<img src = 'img/Drama2.jpg'>", "<img src = 'img/Drama3.jpg'>", "<img src = 'img/Drama1.jpg'>", "<img src = 'img/Drama2.jpg'>", "<img src = 'img/Drama3.jpg'>", "<img src = 'img/Drama3.jpg'>"];
        $output = "";
        $output .="<div class = 'blocks'>";
        $count = 0;
        $show = false;
        foreach ($monos as $mono){

             $output .="<div class = 'task'> $mono <br> <h3>This is something</h3></div>";
             $count++;
             if($count > 5 && $show == false){
                 break;
             }
        }
        $output .= "</div>";
        
            echo $output;
        
        ?>
            </div>
            <hr>
            
            <h1>Your Work</h1>
            <div class = "Artist">
                <?php
        $monos = ["<img src = 'img/Drama1.jpg'>", "<img src = 'img/Drama2.jpg'>", "<img src = 'img/Drama3.jpg'>", "<img src = 'img/Drama1.jpg'>", "<img src = 'img/Drama2.jpg'>", "<img src = 'img/Drama3.jpg'>", "<img src = 'img/Drama3.jpg'>"];
        $output = "";
        $output .="<div class = 'blocks'>";
        $count = 0;
        $show = false;
        foreach ($monos as $mono){
             
             $output .="<div class = 'users'> $mono <br> <h3>This is something</h3></div>";
             $count++;
             if($count > 5 && $show == false){
                 break;
             }
        }
        $output .= "</div>";
        
            echo $output;
        
        ?>
            </div>
            
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
  font-size: 50%;
}
            html{
                margin: 0px; 
                background-color: #7c7c7c;
               
            }
            p, h3, h5{
                color: #fefeff; 
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
                min-width: 800px;
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
            h1{
                font-size: 5rem;
            }
            p, h3{
                color: #fefeff; 
                font-size: 3rem;
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
            .blocks{
                width: 90%;
                margin: 10px 0 10px 5%;
                display: inline-grid;
                grid-template-columns: auto auto auto;
            }
            .art img{
               height: 70%;
               display: block;
               width: 90%;
               margin: 3px auto;
            }
            .art h3{
               margin: 3px auto;
            }
            .art{
                height: 250px;
            }
            .art img{
               height: 70%;
               display: block;
               width: 90%;
               margin: 3px auto;
            }
            .task h3{
               margin: 3px auto;
            }
            .task{
                height: 250px;
            } 
            .task img{
               height: 70%;
               display: block;
               width: 90%;
               margin: 3px auto;
            }
            .users h3{
               margin: 3px auto;
            }
            .users{
                height: 250px;
            }
            .users img{
               height: 70%;
               display: block;
               width: 90%;
               margin: 3px auto;
            }
            .firstColumn{
                margin: 5px;
                text-align: center;
                margin: 3px auto;
                width: 70%;
            }
           @media only screen and (max-width: 800px) {
        .blocks{
            display: block;
        }
        .art, .task, .users{
            height: 400px;
            width: 80%;
            margin: 10px auto;
        }
        .blocks h3{
            
            margin: 20px;
        }
        h1{
      
            margin-left: 10%;
        }
        
        .firstColumn{
            width: 90%;
        }
        .firstColumn iframe{
            width:70%;
        }
       
       
    }  
   

        </style>
    </body>
</html>