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
     if(isset($_GET['Acount'])){
            $Acount = $_GET['Acount'];
            }else{
            $Acount = 6; 
            }
     if(isset($_GET['Ucount'])){
            $Ucount = $_GET['Ucount'];
            }else{
            $Ucount = 6; 
            }
     if(isset($_GET['Wcount'])){
            $Wcount = $_GET['Wcount'];
            }else{
            $Wcount = 6; 
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
              
              <iframe src="https://www.youtube.com/embed/64UW3Gmp5VA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <br>
              <?php
              echo' <div class = "search"><form action="getInspired.php" method="GET">
                    <input type="text" id="Search" name="Search">
                    <input id ="subSide" type="submit" value="Submit">
                    </form></div>';
              ?></div>
            <br>
            <br>
            <br>
               <?php
                    $search = trim($_GET['Search']);
                    if(!empty($search)){
                      $output = "";
                   $output .="<h1>Search Results</h1>";   
        $output .="<div class = 'blocks'>";
        $query = $con ->prepare("SELECT * FROM art where title LIKE  '%$search%'");
            $success = $query->execute([
                
                    ]);
            $Items = $query->fetchall(PDO::FETCH_OBJ);
            
            
            if($success){
                
                foreach($Items as $Item){
                    
                  
                  $output .="<div class = 'art'> <img src='$Item->img'/> <br> "
                          . "<form form action='artWork.php' method='GET'>"
                          . "<input name='artID' type='hidden' value='$Item->artID'>"
                          . "<input name = 'submit' type='submit' value='$Item->title'>"
                          . "</form>"
                          . "</div>";
                  $u++;
            }
         }
     
        $output .= "</div>";
            
        
            echo $output; 
                    }
              ?>
        
        
        <hr>
            <h1>Your's Work</h1>
            <div class = "Your Work">
            <?php
        $output = "";
        $output .="<div class = 'blocks'>";
        $query = $con ->prepare("SELECT * FROM art WHERE type = 'User'");
            $success = $query->execute([
                
                    ]);
            $users = $query->fetchall(PDO::FETCH_OBJ);
            
            $u = 0;
            if($success){
                
                foreach($users as $user){
                    
                if($Ucount > $u){    
                  $output .="<div class = 'art'> <img src='$user->img'/> <br> "
                          . "<form form action='artWork.php' method='GET'>"
                          . "<h3>$user->title</h3>"
                          . "<input name='artID' type='hidden' value='$user->artID'>"
                          . "<input name = 'submit' type='submit' value='Click for more'>"
                          . "</form></div>";
                  $u++;
                }
            }
         }
     
        $output .= "</div>";
            $Ucount += 6;
        $output .= "<div class = 'loadmore'><form action='getInspired.php' method='GET'>"
                . "<input name='Ucount' type='hidden' value='$Ucount'>"
                . "<input name = 'submit' type='submit' value='Load More'>"
                . "</form></div>";
            echo $output;
        
        ?>
                </div>
            <hr>
            
            <h1>Activities</h1>
            <div class = "Activities">
                 <?php
        $output = "";
        $output .="<div class = 'blocks'>";
        $query = $con ->prepare("SELECT * FROM art WHERE type = 'Work'");
            $success = $query->execute([
                
                    ]);
            $works = $query->fetchall(PDO::FETCH_OBJ);
            
            $w = 0;
            if($success){
                foreach($works as $work){
                    if($Wcount > $w){
                  $output .="<div class = 'art'> <img src='$work->img'/> <br>"
                          . "<h3>$work->title</h3>"
                          . "<form form action='artWork.php' method='GET'>"
                          . "<input name='artID' type='hidden' value='$work->artID'>"
                          . "<input name = 'submit' type='submit' value='Click for more'>"
                          . "</form></div>";
                  $w++;
                    }
            }
         }
         $Wcount += 6;
         $output .= "</div>";
        $output .= "<div class = 'loadmore'><form action='getInspired.php' method='GET'>"
                . "<input name='Wcount' type='hidden' value='$Wcount'>"
                . "<input name = 'submit' type='submit' value='Load More'>"
                . "</form></div>";
        
        
            echo $output;
        
        ?>
            </div>
            <hr>
            
            <h1>Artist</h1>
            <div class = "Artist">
                 <?php
        $output = "";
        $output .="<div class = 'blocks'>";
        $query = $con ->prepare("SELECT * FROM art WHERE type = 'Artist'");
            $success = $query->execute([
                
                    ]);
            $artist = $query->fetchall(PDO::FETCH_OBJ);
            
            $a = 0;
            if($success){
                foreach($artist as $art){
                    if($Acount > $a){
                  $output .="<div class = 'art'> <img src='$art->img'/> <br> "
                          . "<h3>$art->title</h3>"
                          . "<form form action='artWork.php' method='GET'>"
                          . "<input name='artID' type='hidden' value='$art->artID'>"
                          . "<input name = 'submit' type='submit' value='Click for more'>"
                          . "</form></div>";
                  $a++;
                    }
            }
         }
         $Acount += 6;
         $output .= "</div>";
        $output .= "<div class = 'loadmore'><form action='getInspired.php' method='GET'>"
                . "<input name='Acount' type='hidden' value='$Acount'>"
                . "<input name = 'submit' type='submit' value='Load More'>"
                . "</form></div>";
        
        
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
                height: 290px;
            }
         
            
            
            .firstColumn{
                margin: 5px;
                text-align: center;
                margin: 3px auto;
                width: 70%;
            }
            .loadmore form{

                text-align: center;  
                margin: 10px;
            }
            .loadmore input[type=submit], .search input[type=submit]{
                color: #fefeff;
                background-color: #ff0429;
                border:#ead700 2px solid;
                border-radius: 15px;
                padding: 5px;
            }
            .search{
                float: left;
                margin: 10px 2px;
                
            }
            iframe{
                width: 600px;
                height: 450px;
            }
            .art input[type=submit]{
                color: #fefeff;
                font-size: 2rem;
                border: none;
                cursor: pointer;
                outline: none;
                background-color: #ff0429;
                padding: 2px;
                border-radius: 5px;
                margin: 5px 0;
            }
            
           @media only screen and (max-width: 800px) {
        .blocks{
            display: block;
        }
        .art{
            height: 550px;
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
        .art img{
               height: 400px;
               width: 500px;
               
            }
            p{
                font-size: 2.5rem;
            }
            iframe{
                width: 450px;
                height: 337.5px;
            }
            
           }
        @media only screen and (max-width: 650px) {
            .art{
            height: 480px;
            width: 80%;
            margin: 10px auto;
        }
        .art img{
               height: 360px;
               width: 450px;    
            }
            p{
                font-size: 2rem;
            }
            Logo{
                width: 360px;
                height: 120px;
                bottom: 40px;  
            }
            iframe{
                width: 400px;
                height: 300px;
            }
            
           
        }
        @media only screen and (max-width: 550px) {
            .art{
            height: 450px;
            width: 80%;
            margin: 10px auto;
        }
        .art img{
               height: 280px;
               width: 350px;    
            }
            iframe{
                width: 300px;
                height: 225px;
            }
           .nav [type=submit]{
                    font-size: 95%;
                }
                .Logo{
                width: 300px;
                height: 100px;
                bottom: 30px;  
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
    
    @media only screen and (max-width: 550px) {
            .art{
            height: 400px;
            width: 80%;
            margin: 10px auto;
        }
        .art img{
               height: 280px;
               width: 300px;    
            }
        }
    @media only screen and (max-width: 500px) {
            .art{
            height: 350px;
            width: 80%;
            margin: 10px auto;
        }
        .art img{
               height: 200px;
               width: 250px;    
            }
        
        iframe{
                width: 250px;
                height: 187.5px;
            }
    }
       
       
     
   

        </style>
    </body>
</html>