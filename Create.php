<?php
    include_once 'dbconnection.php';
    $FN = $_POST['FN'];
    $LN = $_POST['LN'];
    $UN = $_POST['UN'];
    $EM = $_POST['EM'];
    $PW = $_POST['PW'];
    
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
          
           $query = $con->prepare(""
                . "INSERT INTO users(firstName, lastName, username, email, password, Attemps)"
                . " VALUES (:firstName, :lastName, :username, :email, :password, 0)");
           
           $success = $query-> execute([
                'firstname' => $FN,
                'lastName' => $LN,
                'username' => $UN,
                'email' => $EM,
                'password' => $PW
                
           ]);
           $user_id = $con -> lastInsertId();
           echo "Username and Email are free $user_id";
            }else{
               echo 'Username or Email is already taken';
           }   
                  
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Account create</title>
    </head>
</html>