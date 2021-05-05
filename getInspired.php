<html>
    <head>
        <title>Get Inspired</title>
        <link rel="icon" type="img/png" href="img/DSearchBar.png"/>
        <link rel="stylesheet" href="css/Main.css">
        <link rel="stylesheet" href="css/getInspired.css">
         <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans&display=swap" rel="stylesheet">
    </head>
    
    <?php
    include_once 'dbconnection.php';//Allows access to the database
   
     if(isset($_GET['Acount'])){ //acount used set how many Artist pieces have been show to display
            $Acount = $_GET['Acount'];
            }else{
            $Acount = 6;  //Set acount to default if does not exist
            }
     if(isset($_GET['Ucount'])){ //ucount used set how many users pieces have been show to display
            $Ucount = $_GET['Ucount'];
            }else{
            $Ucount = 6; //Set ucount to default if does not exist
            }
     if(isset($_GET['Wcount'])){ //wcount used set how many Activities pieces have been show to display
            $Wcount = $_GET['Wcount'];
            }else{
            $Wcount = 6; //Set wcount to default if does not exist
            }
     
            
    ?>
    <body>
        <?php include_once 'header.php';?> <!-- Includes the header for the page -->
         <?php if($userID != 1){//This checks if the user is login and displays it t
            echo"<form action='Uploader.php' method='POST'>
                    <button class = 'upload' type='submit'>Upload</button>
                </form>";//This sends users to be allowed to upload work
            }else{
            echo"<form method='POST' action='SignIn.php'>
                    <button class = 'upload' type='submit'>Upload</button>
                </form>";//This send guest to login    
            }
        ?> 
         <div class = "stack"><!-- This is the first block on the page -->
         <h1>Get Inspired</h1>
        
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
              
              <iframe src="https://www.youtube.com/embed/64UW3Gmp5VA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <br>
              <?php
              echo' <div class = "search"><form action="getInspired.php" method="GET">
                    <input type="text" id="Search" name="Search">
                    <input id ="subSide" type="submit" value="Submit">
                    </form></div>';//This allows users to search for content
              ?></div>
            <br>
            <br>
            <br>
               <?php
                    $search = trim($_GET['Search']);//This gets the search value and trims the black spaces ever side
                    if(!empty($search)){//Checks if it is not empty
                      $output = "";
                   $output .="<h1>Search Results</h1>";   
        $output .="<div class = 'blocks'>";
        try{
            $query = $con ->prepare("SELECT * FROM art where title LIKE  '%$search%'");//Access the database and check what is similir
            $success = $query->execute([
                
                    ]);
            $Items = $query->fetchall(PDO::FETCH_OBJ);
            
            
            if($success){//Checks if it was successfull
                
                foreach($Items as $Item){//Goes through every artwork loaded from the database
                    
                  $img = 'uploads/'.($Item->upImg);//Adds the location to the image
                  $output .="<div class = 'art'> <img src='$img'/> <br> "//Formates that data and then adds it to output
                          . "<form form action='artWork.php' method='GET'>"
                          . "<h3>$Item->title</h3>"
                          . "<input name='artID' type='hidden' value='$Item->artID'>"
                          . "<input name = 'submit' type='submit' value='$Item->title'>"
                          . "</form>"
                          . "</div>";
            }
         }
         }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
         }
     
        $output .= "</div>";
            
        
            echo $output; //Prints the output
                    }
              ?>
        
        
        <hr>
            <h1>Your's Work</h1><!-- This is the User generated content block on the page -->
            <div class = "Your Work">
            <?php
        $output = "";
        $output .="<div class = 'blocks'>";
        try{
            $query = $con ->prepare("SELECT * FROM art WHERE type = 'User'");//This loads all data with the take User in type
            $success = $query->execute([
                
                    ]);
            $users = $query->fetchall(PDO::FETCH_OBJ);
            
            $u = 0;
            if($success){
                
                foreach($users as $user){//Goes through every artwork loaded from the database
                    
                if($Ucount > $u){//Limits the amount by ucount  
                    $img = 'uploads/'.($user->upImg);//Adds the location to the image
                  $output .="<div class = 'art'> <img src='$img'/> <br> "//Formates that data and then adds it to output
                          . "<form form action='artWork.php' method='GET'>"
                          . "<h3>$user->title</h3>"
                          . "<input name='artID' type='hidden' value='$user->artID'>"
                          . "<input name = 'submit' type='submit' value='Click for more'>"
                          . "</form></div>";
                  $u++;//Iterates u
                }
            }
         }
         
     
        $output .= "</div>";
        if(count($users) > $Ucount){//Only appears if there is more to load
            $Ucount += 6;
        $output .= "<div class = 'loadmore'><form action='getInspired.php' method='GET'>"
                . "<input name='Ucount' type='hidden' value='$Ucount'>"
                . "<input name = 'submit' type='submit' value='Load More'>"
                . "</form></div>";//Allows users to load more user generated content by increasing ucout
        }
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        } 
            echo $output;//Prints data inside of output
        
        ?>
                </div>
            <hr>
            
            <h1>Activities</h1><!-- This is Activities content block on the page -->
            <div class = "Activities">
                 <?php
        $output = "";
        $output .="<div class = 'blocks'>";
        try{
            $query = $con ->prepare("SELECT * FROM art WHERE type = 'Work'");//This loads all data with the take Work in type
            $success = $query->execute([
                
                    ]);
            $works = $query->fetchall(PDO::FETCH_OBJ);
            
            $w = 0;
            if($success){
                foreach($works as $work){//Goes through every artwork loaded from the database
                    if($Wcount > $w){//Limits the amount by wcount
                        $img = 'uploads/'.($work->upImg);//Adds the location to the image
                  $output .="<div class = 'art'> <img src='$img'/> <br>"//Formates that data and then adds it to output
                          . "<h3>$work->title</h3>"
                          . "<form form action='artWork.php' method='GET'>"
                          . "<input name='artID' type='hidden' value='$work->artID'>"
                          . "<input name = 'submit' type='submit' value='Click for more'>"
                          . "</form></div>";
                  $w++;//Iterates w
                    }
            }
         }
         
         $output .= "</div>";
         if(count($works) > $Wcount){//Only appears if there is more to load
             $Wcount += 6;
        $output .= "<div class = 'loadmore'><form action='getInspired.php' method='GET'>"
                . "<input name='Wcount' type='hidden' value='$Wcount'>"
                . "<input name = 'submit' type='submit' value='Load More'>"
                . "</form></div>";//Allows users to load more user generated content by increasing wcount
        }
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
        
            echo $output;//Prints data inside of output
        
        ?>
            </div>
            <hr>
            
            <h1>Artist</h1><!-- This is the Artist content block on the page -->
            <div class = "Artist">
                 <?php
        $output = "";
        $output .="<div class = 'blocks'>";
        try{
            $query = $con ->prepare("SELECT * FROM art WHERE type = 'Art'");
            $success = $query->execute([
                
                    ]);
            $artist = $query->fetchall(PDO::FETCH_OBJ);
            
            $a = 0;
            if($success){
                foreach($artist as $art){//Goes through every artwork loaded from the database
                    if($Acount > $a){//Limits the amount by acount
                        $img = 'uploads/'.($art->upImg);//Adds the location to the image
                  $output .="<div class = 'art'> <img src='$img' <br> "//Formates that data and then adds it to output
                          . "<h3>$art->title</h3>"
                          . "<form form action='artWork.php' method='GET'>"
                          . "<input name='artID' type='hidden' value='$art->artID'>"
                          . "<input name = 'submit' type='submit' value='Click for more'>"
                          . "</form></div>";
                  $a++;//Iterates a
                    }
            }
         }
         
         $output .= "</div>";
         if(count($artist) > $Acount){//Only appears if there is more to load
             $Acount += 6;
        $output .= "<div class = 'loadmore'><form action='getInspired.php' method='GET'>"
                . "<input name='Acount' type='hidden' value='$Acount'>"
                . "<input name = 'submit' type='submit' value='Load More'>"
                . "</form></div>";//Allows users to load more user generated content by increasing acount
         }
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }  
         
         
        
        
            echo $output;//Prints data inside of output
        
        ?>
            </div>
            
          <?php include_once 'footer.php';?><!-- Includes the footer in this page -->
    </body>
</html>