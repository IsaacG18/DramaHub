<html>
    <head>
        <title>Shows</title>
        <link rel="icon" type="img/png" href="img/DSearchBar.png"/>
        <link rel="stylesheet" href="css/Show.css">
        <link rel="stylesheet" href="css/Main.css">
        <link rel="stylesheet" href="css/sidebar.css">
        <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans&display=swap" rel="stylesheet">
    <script type="text/javascript" src="js/Show.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>       
    <script type="text/javascript" src="js/sidebar.js"></script>
    
    </head>

    
    <?php
    include_once 'dbconnection.php'; // include database access ablitiy
    $userID = "";
    $statement = "SELECT * FROM shows inner join image on shows.imgID = image.imgID";
    $first = true; 
      //Gets the values from sidebar submits if used then if true adds to the statement
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
        <?php include_once 'header.php';?> <!-- Includes the header for the page -->
    <div class="slideshow-container"> <!-- This contains the 3 slides which rotate automatically every 3 seconds -->

    <div class="mySlides fade"><!-- First Image in slideshow -->
        <div class="S1">
            <div class="numbertext">1 / 3</div>
            <div class="text">Othello</div>
        </div>
    </div>

    <div class="mySlides fade"><!-- Second Image in slideshow -->
      <div class="S2">
        <div class="numbertext">2 / 3</div>
        <div class="text">Merchant Of Venice's</div>
      </div>
    </div>

    <div class="mySlides fade"><!-- Third Image in slideshow -->
     <div class="S3">
      <div class="numbertext">3 / 3</div>
      <div class="text">Cat on a Hot Tin Roof</div>
     </div>
    </div>

</div>
        

<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
    <script type="text/javascript" src="js/Show.js"></script><!-- This adds the script for the slideshow -->

        <h1 id = "Title">Shows</h1>
        <img src="img/menu.png" id = "sideShow"/> <!-- Only appears when reaching a certain screen size -->
          <div class = "column">
 
         <div class = "sideBar">
             <?php // This form allows users to narrow down there search for items 
             echo'  <form action="shows.php" method="GET">
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
              <div class ="gallery">
              <?php
     
              $output = "";
        
        try{
        $query = $con ->prepare("$statement");//This uses the statement created at the top of the page to get all the monologue that meet the requirements
            $success = $query->execute([
                
                    ]);
            $shows = $query->fetchall(PDO::FETCH_OBJ);
            
        foreach ($shows as $show){//Loops through all the items found

             
             
              $output .= "<div class ='show' onclick='location.href=`$show->link`;' style='cursor: pointer;'>"; //Formates the data and adds it to output
              $output .= "<div class = 'playImg'><img src ='$show->imgFile' alt='$show->alt'/></div>";
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
             echo $output;//Prints out output
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }      
              ?>
                </div>   
        </div>      
        
         <?php include_once 'footer.php';?> <!-- Includes the footer in this page -->
    </body>
</html>