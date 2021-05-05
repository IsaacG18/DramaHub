<?php
    include_once 'dbconnection.php';//Access database
    $FN = filter_var($_POST['FN'], FILTER_SANITIZE_STRING);//Get first name sanitized
    $LN = filter_var($_POST['LN'], FILTER_SANITIZE_STRING);//Get last name sanitized
    $UN = filter_var($_POST['UN'], FILTER_SANITIZE_STRING);//Get user name sanitized
    $EM = filter_var($_POST['EM'], FILTER_SANITIZE_EMAIL);//Get email sanitized
    
    $PW = crypt(sha1(md5($_POST['PW'])), 'XY');//Get password encrypted
            try{
                $queryU = $con->prepare(""
                        . "Select * FROM users WHERE username =?"
                        );//Check if username already exist
                $queryU -> execute([$UN]);
                $usersU = $queryU->fetch(PDO::FETCH_OBJ);

                $queryE = $con->prepare(""
                        . "Select * FROM users WHERE email =?"
                        );//Check if email already exist
                $queryE -> execute([$EM]);
                $usersE = $queryE->fetch(PDO::FETCH_OBJ);

                if(!$usersU and !$usersE){//If unquie it will be added
                $function = "Sign-Up";//Set function
                 include_once 'UpLogDel.php';//Add this to login

                }else{
                   echo 'Username or Email is already taken';
                }  
            }catch(PDOException $e){
                echo $sql . "<br>" . $e->getMessage();
            }
                  
?>
