<html>
    <head>
        <title>Get Inspired</title>
        <link rel="stylesheet" href="css/Main.css">
         <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans&display=swap" rel="stylesheet">
    </head>
    
    <?php
    include_once 'dbconnection.php';
   
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
        <?php include_once 'header.php';?>
         <?php if($userID != 1){
            echo"<form action='Uploader.php' method='POST'>
                    <button class = 'upload' type='submit'>Up-load</button>
                </form>";
            }else{
            echo"<form method='POST'>
                    <button class = 'upload' type='submit'>Up-load</button>
                </form>";    
            }
        ?> 
         <div class = "stack">
         <h1>Get Inspired</h1>
        
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
                    
                  $img = 'uploads/'.($Item->upImg);
                  $output .="<div class = 'art'> <img src='$img'/> <br> "
                          . "<form form action='artWork.php' method='GET'>"
                          . "<h3>$Item->title</h3>"
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
                    $img = 'uploads/'.($user->upImg);
                  $output .="<div class = 'art'> <img src='$img'/> <br> "
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
        if(count($users) > $Ucount){
            $Ucount += 6;
        $output .= "<div class = 'loadmore'><form action='getInspired.php' method='GET'>"
                . "<input name='Ucount' type='hidden' value='$Ucount'>"
                . "<input name = 'submit' type='submit' value='Load More'>"
                . "</form></div>";
        }
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
                        $img = 'uploads/'.($work->upImg);
                  $output .="<div class = 'art'> <img src='$img'/> <br>"
                          . "<h3>$work->title</h3>"
                          . "<form form action='artWork.php' method='GET'>"
                          . "<input name='artID' type='hidden' value='$work->artID'>"
                          . "<input name = 'submit' type='submit' value='Click for more'>"
                          . "</form></div>";
                  $w++;
                    }
            }
         }
         
         $output .= "</div>";
         if(count($works) > $Wcount){
             $Wcount += 6;
        $output .= "<div class = 'loadmore'><form action='getInspired.php' method='GET'>"
                . "<input name='Wcount' type='hidden' value='$Wcount'>"
                . "<input name = 'submit' type='submit' value='Load More'>"
                . "</form></div>";
        }
        
        
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
                        $img = 'uploads/'.($art->upImg);
                  $output .="<div class = 'art'> <img src='$img' <br> "
                          . "<h3>$art->title</h3>"
                          . "<form form action='artWork.php' method='GET'>"
                          . "<input name='artID' type='hidden' value='$art->artID'>"
                          . "<input name = 'submit' type='submit' value='Click for more'>"
                          . "</form></div>";
                  $a++;
                    }
            }
         }
         
         $output .= "</div>";
         if(count($artist) > $Acount){
             $Acount += 6;
        $output .= "<div class = 'loadmore'><form action='getInspired.php' method='GET'>"
                . "<input name='Acount' type='hidden' value='$Acount'>"
                . "<input name = 'submit' type='submit' value='Load More'>"
                . "</form></div>";
         }
         
         
        
        
            echo $output;
        
        ?>
            </div>
            
          <?php include_once 'footer.php';?>
        <style>
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
            .loadmore form{
                text-align: center;  
                margin: 10px;
            }
            .loadmore input[type=submit], .search input[type=submit], .upload{
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
            .upload{
               float: left; 
               margin: 10px;
            }
            
           @media only screen and (max-width: 900px) {
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
        .art img{
               height: 400px;
               width: 500px;
               
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
    }
       
       
     
   

        </style>
    </body>
</html>