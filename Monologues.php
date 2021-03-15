<html>
    <head>
        <title>Monologues</title>
        <link rel="stylesheet" href="css/Main.css">
        <link rel="stylesheet" href="css/sidebar.css">
         <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans&display=swap" rel="stylesheet">
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>       
    <script type="text/javascript" src="js/sidebar.js"></script>
    </head>
    
    
     <?php
     include_once 'dbconnection.php';
    $userID = "";
    $statement = "SELECT * FROM monologue";
    $first = true; 
      
     if(isset($_GET['Age'])){
        $age = $_GET['Age'];
        if($first){
          $first = false;
          $statement .= " where age = '$age'";
       } else{
          $statement .= " and age = '$age'"; 
       }
     }
     if(isset($_GET['gender'])){
        $gender = $_GET['gender'];
        if($first){
          $first = false;
          $statement .= " where gender = '$gender'";
       } else{
          $statement .= " and gender = '$gender'"; 
       }
     }
        if(isset($_GET['Period'])){
        $period = $_GET['Period'];
        if($first){
          $first = false;
          $statement .= " where period = '$period'";
       } else{
          $statement .= " and period = '$period'"; 
       }
     }
     if(isset($_GET['Type'])){
        $type = $_GET['Type'];
        if($first){
          $first = false;
          $statement .= " where type = '$type'";
       } else{
          $statement .= " and type = '$type'"; 
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
       
    ?>
    <body>
        <?php include_once 'header.php';?>
       
       
        <div class = "stack">
         <h1>Intro To Monologues</h1>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
              
              <iframe width="100%" height="400" src="https://www.youtube.com/embed/64UW3Gmp5VA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         
        </div>
        <hr>
        <h1 id = "Title">Monologues</h1>
        <img src="img/menu.png" id = "sideShow"/>
          <div class = "column">
              
              <div class = "sideBar">
                  
               <?php echo"<form action='Monologues.php' method='GET'>
                   

                    <h3>Search:</h3>
                    <input type='text' id='SearchB' name='SearchB'>
                    
                
                   <h3>Time Written:</h3>
                   <input type='radio' id='Shakespeare' name='Period' value='Shakespeare'>
                   <label for='Shakespeare'> Shakespeare</label><br>
                   <input type='radio' id='Contemporary' name='Period' value='Contemporary'>
                   <label for='Contemporary'> Contemporary</label><br>
                   <input type='radio' id='19cent' name='Period' value='19cent'>
                   <label for='19cent'>Pre 19 Century</label><br>
                   <input type='radio' id='OtherT' name='Period' value='Other'>
                   <label for='OtherT'> Other</label><br>
                
                    <h3>Age:</h3>
                    <input type='radio' id='16-20' name='Age' value='16-20'>
                    <label for='16-20'>16-20</label><br>
                    <input type='radio' id='21-25' name='Age' value='21-25'>
                    <label for='21-25'>21-25</label><br>
                    <input type='radio' id='25-30' name='Age' value='25-30'>
                    <label for='26-30'>25-30</label><br>
                    <input type='radio' id='31-40' name='Age' value='25-30'>
                    <label for='31-40'>31-40</label><br>
                    <input type='radio' id='41-50' name='Age' value='41-50'>
                    <label for='41-50'>41-50</label><br>
                    <input type='radio' id='51-60' name='Age' value='51-60'>
                    <label for='51-60'>51-60</label><br>
                    <input type='radio' id='60+' name='Age' value='60+'>
                    <label for='60+'>60+</label>
                
                    <h3>Gender:</h3>
                    <input type='radio' id='male' name='gender' value='Male'>
                    <label for='male'>Male</label><br>
                    <input type='radio' id='female' name='gender' value='Female'>
                    <label for='female'>Female</label><br>
                    <input type='radio' id='other' name='gender' value='Other'>
                    <label for='other'>Other</label>
               
                   <h3>Type:</h3>
                   <input type='radio' id='Funny' name='Type' value='Funny'>
                   <label for='Funny'> Funny</label><br>
                   <input type='radio' id='Emotional' name='Type' value='Emotional'>
                   <label for='Emotional'> Emotional </label><br>
                   <input type='radio' id='Cold' name='Type' value='Cold'>
                   <label for='Cold'>Cold</label><br>
                   <input type='radio' id='Other' name='Type' value='Other'>
                   <label for='Other'> Other</label><br>
                   <input name= 'UserID' id= 'UserID' type='hidden' value='$userID'>
                   <input type='submit' id = 'submit' value='Submit'>
                </form>";
             
               ?>   
          </div>
        <?php
        
        $output = "";
        $output .="<div class = 'gallery'>";
        
        
        $query = $con ->prepare("$statement");
            $success = $query->execute([
                
                    ]);
            $monos = $query->fetchall(PDO::FETCH_OBJ);
            $count = 0;
        foreach ($monos as $mono){
            $count++;
             $output .="<div class = 'mono'> <img src ='$mono->img'/> <br> <h3>$mono->play</h3> <h3>$mono->part</h3> <h3>$mono->title</h3>"
                     . "<form action='monoPage.php' method='GET'>
                <input name= 'UserID' type='hidden' value='$userID'>
                <input name= 'MonoID' type='hidden' value='$mono->monoID'>
                <button class = 'mono' type='submit'>Have a Look</button>
                </form></div>";
        }
       
       
            
        
        $output .= "</div>";
        
            echo $output;
        
        ?>
          
         </div>
         <?php include_once 'footer.php';?>
        <style>

            .mono img{
               height: auto;
                width: 250px;
               margin: 3px auto;
            }
            .mono h3{
               margin: 3px auto;
            }
            .mono{
                height: 350px;
            }
            .gallery{
                display: inline-grid;
                grid-template-columns: auto auto auto;
            }
            
            .mono button{
                color: #fefeff;
                background: #555555;
                height: 30px;
                margin: 10px;
            }
              
    @media only screen and (max-width: 1000px) {
         .mono{
            height: 690px;
            margin: 3px auto;
            width: 90%;
        }
        .gallery{
            display:block;
        }
            .mono img{
                width: 100%;
                margin: 3px auto;
            }
    }
     @media only screen and (max-width: 900px) {
            .mono{
                height: 650px;
            }
    }
    @media only screen and (max-width: 800px) {
        
         .mono{
            height: 600px;
        }
    }
            @media only screen and (max-width: 650px) {
              
            .mono{
                width: 90%;
                height: auto;
                margin: 3px auto;
            }  
            }
        </style>
    </body>
</html>