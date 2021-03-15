<?php
    $userID = ""; 
    if(isset($_COOKIE["user"]) && $_COOKIE["user"] != ''  && $_COOKIE['user'] == true){
         $userID = $_COOKIE["user"];
     }else{
         $userID = 1;
     }
    $outputB = "";
               

    
        $outputB .= "<div class = 'banner'>";
        $outputB .= '<img class = "Logo" src="img/Logo5.png"/>';
            
            if($userID == 1){
                $output .="
                <form action='SignIn.php' method='POST'>
                <input name= 'page' type='hidden' value='index'>
                <button class = 'SignIn' type='submit'>Sign In</button>
                </form>
                <form action='SignUp.php' method='POST'>
                <input name= 'page' type='hidden' value='index'>
                <button class = 'SignUp' type='submit'>Sign Up</button>
                </form>";
            }else{
                $outputB .="<form action='SignOut.php' method='POST'>
                <button class = 'SignOut' type='submit'>Sign Out</button>
                </form>
                <form action='Delete.php' method='POST'>
                <input name= 'UserID' type='hidden' value='$userID'>
                <input name= 'page' type='hidden' value='index'>
                <button class = 'Delete' type='submit'>Delete</button>
                </form></div>";
            }
           
            
        
            $outputB .= "<div class = 'nav'><form action='index.php' method='GET'>
                <button class = 'first' type='submit'>Home</button>
             </form>
             <form action='Shows.php' method='GET'>
                <button class = 'other' type='submit'>Shows</button>
             </form>
             <form action='Monologues.php' method='GET'>
                <button class = 'other' type='submit'>Monologue</button>
             </form>
             <form action='DramaSchool.php' method='GET'>
                <button class = 'other' type='submit'>Drama School</button>
             </form>
             <form action='getInspired.php' method='GET'>
                <button class = 'other' type='submit'>Get Inspired</button>
             </form></div>";
            echo $outputB ?>
            