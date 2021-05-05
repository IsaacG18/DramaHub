<?php
    $userID = ""; 
    if(isset($_COOKIE["user"]) && $_COOKIE["user"] != ''  && $_COOKIE['user'] == true){ // This checks then gets the cookie for the userID
         $userID = $_COOKIE["user"];
     }else{
         $userID = 1; // This sets a default guest number if the user is not login
     }
    $outputB = "";
               

    
        $outputB .= "<div id = 'background'><div class = 'banner'>";
        $outputB .= '<img class = "Logo" src="img/Logo5.png"/>';
            
            if($userID == 1){//Effect the output depending on if the user is login or not
                $outputB .="
                <form action='SignIn.php' method='POST'>
    
                <button class = 'SignIn' type='submit'>Sign In</button>
                </form>
                <form action='SignUp.php' method='POST'>

                <button class = 'SignUp' type='submit'>Sign Up</button>
                </form></div>";//Allows Guest to login, or  sign up
            }else{
                $outputB .="<form action='SignOut.php' method='POST'>
                                <button class = 'SignOut' type='submit'>Sign Out</button>
                            </form>
                            <form action='Delete.php' method='POST'>
                                <button class = 'Delete' type='submit'>Delete</button>
                            </form></div>";//Allows users to delete there accout or sign out
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
             </form></div>";//This is the navbar for the page
            echo $outputB;//Prints output
            ?>
            