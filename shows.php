<html>
    <head>
        <title>Shows</title>
         <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans&display=swap" rel="stylesheet">
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>       
    <script type="text/javascript" src="js/show.js"></script>
    </head>
    
    <?php
    include_once 'dbconnection.php';
    $userID = "";
    $statement = "SELECT * FROM shows";
    $first = true; 
      if(isset($_COOKIE["user"])&& $_COOKIE["user"] != ''){
         $userID = $_COOKIE["user"];
     }else{
         $userID = 1;
     }
      if(isset($_GET['Age']) and $_GET['Age'] !== "AnyAge" ){
        $age = $_GET['Age'];
       if($first){
          $first = false;
          $statement .= " where age <= $age";
       } else{
          $statement .= " and age <= $age"; 
       }
      }
     if(isset($_GET['Cost'])){
        $cost = $_GET['Cost'];
        if($first){
          $first = false;
          $statement .= " where cost <= '$cost'";
       } else{
          $statement .= " and cost <= '$cost'"; 
       }
     }
     
     if(isset($_GET['Genre'])){
         $genre = $_GET['Genre'];
        if($first){
          $first = false;
          $statement .= " where genre = '$genre'";
       } else{
          $statement .= " and genre = '$genre'"; 
       }
     }
     if(isset($_GET['SearchB'])){
     $search = trim($_GET['SearchB']);
     }
     if(!empty($search)){
        if($first){
          $first = false;
          $statement .= " where play LIKE  '%$search%'";
       } else{
          $statement .= " and play LIKE  '%$search%'"; 
       }
     }
     if(isset($_GET['SearchC'])){
     $city = trim($_GET['SearchC']);
     }
     if(!empty($city)){
        
        if($first){
          $first = false;
          $statement .= " where city LIKE '%$city%'";
       } else{
          $statement .= " and city LIKE '%$city%'"; 
       }
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
                <button class = 'SignIn' type='submit'>Sign In</button>
                </form>
                <form action='SignUp.php' method='POST'>
                <input name= 'page' type='hidden' value='index'>
                <button class = 'SignUp' type='submit'>Sign Up</button>
                </form>";
            }else{
                echo"<form action='SignOut.php' method='POST'>
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
            </div>
        
        <div class = "BannerAd">
            
        </div>
        <h1 id = "showTitle">Shows</h1>
                      <img src="img/menu.png" id = "sideShow"/>
          <div class = "column">
 
         <div class = "sideBar">
             <?php echo'  <form action="shows.php" method="GET">
                    <h3>Search:</h3>
                    <input type="text" id="SearchB" name="SearchB">
                    
                
                    <h3>City:</h3>
                   <input type="text" id="SearchC" name="SearchC">
                    
                
                    <h3>Genre:</h3>
                    <input type="radio" id="Tragedy" name="Genre" value="Tragedy">
                    <label for="Tragedy">Tragedy</label><br>
                    <input type="radio" id="Drama" name="Genre" value="Drama">
                    <label for="Drama">Drama</label><br>
                    <input type="radio" id="Musical-theatre" name="Genre" value="Musical-theatre">
                    <label for="Musical-theatre">Musical theatre</label><br>
                    <input type="radio" id="Comedy" name="Genre" value="Comedy">
                    <label for="Comedy">Comedy</label><br>
                    <input type="radio" id="Contemporary" name="Genre" value="Contemporary">
                    <label for="Contemporary">Contemporary</label><br>
                    <input type="radio" id="Other" name="Genre" value="Other">
                    <label for="Other">Other</label>
                
                    <h3>Cost:</h3>
                    <input type="radio" id="Free" name="Cost" value="0">
                    <label for="Free">Free</label><br>
                    
                    <input type="radio" id="£10" name="Cost" value="10">
                    <label for="£10">£10</label><br>
                    <input type="radio" id="£20" name="Cost" value="20">
                    <label for="£20">£20</label><br>
                    <input type="radio" id="£30" name="Cost" value="30">
                    <label for="£30">£30</label><br>
                    <input type="radio" id="£40" name="Cost" value="40">
                    <label for="£40">£40</label>
                    
                
                    <h3>Minium Age:</h3>
                    <input type="radio" id="AnyAge" name="Age" value="AnyAge">
                    <label for="AnyAge">Any Age</label><br>
                    <input type="radio" id="5" name="Age" value="5">
                    <label for="5+">5</label><br>
                    <input type="radio" id="10+" name="Age" value="10">
                    <label for="10+">10</label><br>
                    <input type="radio" id="12+" name="Age" value="12">
                    <label for="12+">12</label><br>
                    <input type="radio" id="15+" name="Age" value="15">
                    <label for="15+">15</label><br>
                    <input type="radio" id="18+" name="Age" value="18">
                    <label for="18+">18</label>
                    <br>
                    <input id ="subSide" type="submit" value="Submit">
                </form>'; ?>
                  
          </div>
              <div class ="showsArea">
              <?php
     
              $output = "";
        
        
        $query = $con ->prepare("$statement");
            $success = $query->execute([
                
                    ]);
            $shows = $query->fetchall(PDO::FETCH_OBJ);
            
        foreach ($shows as $show){

             
             
              $output .= '<div class ="show">';
              $output .= "<div class = 'playImg'>$show->img</div>";
              $output .= "<div class = 'playText'>"
                      . "<h3>$show->play</h3>"
                      . "<h5>$show->author<h5>"
                      . "<h5>$show->author<h5>"                      
                      . "<h5>$show->cost</h5>"
                      . "<h5>$show->city<h5>"
                      . "</div>";
              $output .= "</div>";
        }
       
            
        
        $output .= "</div>";
             echo $output;
             
              ?>
                </div>   
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
                 <p>Email@gmail.com</p>
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
                
            }
            .BannerAd{
                width: 100%;
                height: 250px;
                margin: 10px auto;
                background-image: url("img/Drama1.jpg");
                background-repeat: no-repeat; 
                background-size: cover;
                background-position: bottom;
                    
            }
            .sideBar{
               background-color: #555555;
                margin: 0;
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                height: 120vh;
                width: 20%;
            }
            
            label{
                color: #fefeff;
                font-size: 0.8rem;
            }
            form{
                width: 100%;
            }
            input{
                background-color: #fefeff;
                color: #08080c;
                max-width: 90%;
                margin: 3px 4px;
            }
            
            #showTitle{
                text-align: center;
            }
            .playImg img{
                width: 100%;
                height: auto;
            }
            .playImg{
                width: 100%;
               
            }
            .showsArea{
                width: 79%;
                margin: 0 0 0 1%;
                display: block;
                
                
            }
             #sideShow{
                width: 0%;
                visibility: hidden;
              }
              
            .show{
                display: inline-flex;
                margin: 10px;
            }
            .column{
                width: 100%;
                display: flex;
                
            }
            .playText{
                width:60%;
                margin-left: 10px;
            }
            input[type=submit]{
                cursor:pointer;
                -webkit-border-radius: 5px;
                border-radius: 5px; 
                padding: 5px;
                color:black;
                background-color: #fefeff;
               margin: 10px 0 10px 11%;
            }
            
            @media only screen and (max-width: 800px) {
            .footer{
               font-size: 80%; 
            }
            
            }
            @media only screen and (max-width: 600px) {
              .sideBar{
                width: 0%;
                visibility: hidden;
            
              }
              #sideShow{
                width: auto;
                height: 30px;
                visibility: visible;
              }
              .Logo{
                width: 360px;
                height: 120px;
                bottom: 40px;  
            }
            html{
                font-size: 90%;
            }
            .showsArea{
                width: 90%;
            }
                
            }
            @media only screen and (max-width: 470px) {
                .nav [type=submit]{
                    font-size: 90%;
                }
                .Logo{
                width: 270px;
                height: 90px;
                bottom: 30px;  
            }
            }
           
    
            
       @media (min-aspect-ratio: 2/1) {
        sidebar label{
            font-size: 20px;
        }
        sidebar h3{
            font-size: 30px;
        }
    }
    
    @media (min-aspect-ratio: 15/6) {
       sidebar label{
            font-size: 15px;
        }
        sidebar h3{
            font-size: 25px;
        }
    }
    
    

        </style>
    </body>
</html>