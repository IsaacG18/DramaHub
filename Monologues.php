<html>
    <head>
         <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans&display=swap" rel="stylesheet">
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>       
    <!-- comment  <script type="text/javascript" src="js/monologues.js"></script>-->
    </head>
    
    
     <?php
     include_once 'dbconnection.php';
    $userID = "";
    $statement = "SELECT * FROM monologue";
    $first = true; 
     if(isset($_GET['UserID'])){
        $userID = $_GET['UserID'];
     }else{
         $userID = 1;
     }
     if(isset($_GET['Age'])){
        $age = $_GET['Age'];
        if($first){
          $first = false;
          $statement .= " where age = '$age'";
       } else{
          $statement .= " and age = '$age'"; 
       }
     }
     if(isset($_GET['Gender'])){
        $gender = $_GET['Gender'];
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
        $search = $_GET['SearchB'];
        if($first){
          $first = false;
          $statement .= " where play LIKE  '%$search%'";
       } else{
          $statement .= " and play LIKE  '%$search%'"; 
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
        <h1 id = "monoTitle">Monologues</h1>
          <div class = "column">
              <div class = "sideBar">
               <?php echo"<form action='Monologues.php' method='GET>
                   

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
        $output .="<div class = 'monologues'>";
        
        
        $query = $con ->prepare("$statement");
            $success = $query->execute([
                
                    ]);
            $monos = $query->fetchall(PDO::FETCH_OBJ);
            $count = 0;
        foreach ($monos as $mono){
            $count++;
             $output .="<div class = 'mono'> $mono->img <br> <h3>$mono->play</h3> <h3>$mono->part</h3> <h3>$mono->title</h3>"
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
            p, h3{
                color: #fefeff; 
            }
            #monoTitle{
                text-align: center;
            }
            body{
                margin: 0px;
                padding: 0px;
                max-width: 1200px;
                min-width: 600px;
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
            html{
                margin: 0px;
                padding: 0px;
                background-color: #7c7c7c;
            }
            
            h1{
                font-size: 5rem;
            }
            p, h3{
                color: #fefeff; 
                font-size: 3rem;
            }
            .sideBar h1, .sideBar h3{
                font-size: 2.5rem;
                margin: 5px 0 2px 3px;
            }
            
            h1{
                color: #ead700;
                text-shadow: 0 0.15rem 0.15rem rgba(200, 200, 200, 0.5);
                text-align: center;
            }
            body{
                margin: 0px;
                padding: 0px;
                width: 1080px;
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
          
            .piller{
                width: 32%;
                margin: 3px auto;
                display: inline-block;
               
            }
            .footer{
                background-color: #ff0429;
                height: 200px;
            }
           
            .firstColumn{
                margin: 5px;
                text-align: center;
                margin: 3px auto;
                width: 70%;
            }
            .mono img{
               height: 55%;
               display: block;
               width: auto;
               margin: 3px auto;
            }
            .mono h3{
               margin: 3px auto;
            }
            .mono{
                height: 350px;
                
            }
            .monologues{
               
                width: 79%;
                margin: 0 0 0 1%;
                display: inline-grid;
                grid-template-columns: auto auto auto;
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
            .column{
                width: 100%;
                display: flex;
            }
            label{
                color: #fefeff;
                font-size: 1.5rem;
            }
            form{
                width: 100%;
            }
            input{
                background-color: #fefeff;
                color: #08080c;
                max-width: 90%;
                margin: 2px 3px;
            }
            .mono button{
                color: #fefeff;
                background: #555555;
                height: 30px;
                margin: 10px;
            }
    @media only screen and (max-width: 800px) {
        .monologues{
            display: block;
            
        }
        .mono{
            height: 800px;
        }
        .mono h3{
            font-size: 4rem;
            margin: 5px 20px;
        }
      .sideBar{
                width: 25%;
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