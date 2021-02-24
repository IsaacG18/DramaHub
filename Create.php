<?php
    include_once 'dbconnection.php';
    $FN = $_POST['FN'];
    $LN = $_POST['LN'];
    $UN = $_POST['UN'];
    $EM = $_POST['EM'];
    //$PW = $_POST['PW'];
    $PW = $password = crypt(sha1(md5($_POST['PW'])), 'XY');
    
            $queryU = $con->prepare(""
                    . "Select * FROM users WHERE username =?"
                    );
            $queryU -> execute([$UN]);
            $usersU = $queryU->fetch(PDO::FETCH_OBJ);
            
            $queryE = $con->prepare(""
                    . "Select * FROM users WHERE email =?"
                    );
            $queryE -> execute([$EM]);
            $usersE = $queryE->fetch(PDO::FETCH_OBJ);
            
            if(!$usersU and !$usersE){
            $function = "Sign-Up";
             include_once 'UpLogDel.php';
                     
            }else{
               echo 'Username or Email is already taken';
           }   
                  
?>
