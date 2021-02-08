<?php
            include_once 'dbconnection.php';
            
            if(isset ($_POST['Check'])){
            $function = $_POST['Check'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            
            $query = $con ->prepare("SELECT * FROM users WHERE username = :username");
            $success = $query->execute([
                'username' => $username
                    ]);
            $users = $query->fetch(PDO::FETCH_OBJ);
            
            
           if(isset ($users->username) && $users-> Attemps < 3 && $users->userID != 1){
               
              if($users->password == $password){
                  $attemps = 0;
                   $query = $con->prepare(""
                            . "UPDATE users SET Attemps = $attemps"
                            . " WHERE username = :username");
                   $success = $query-> execute([
                        ':username' => $username
                            ]);
                   
                include_once  'UpLogDel.php';
              }else{
                   echo "Wrong password";
                   $attemps = $users-> Attemps;
                   $attemps = $attemps + 1;
                   $query = $con->prepare(""
                            . "UPDATE users SET Attemps = $attemps"
                            . " WHERE username = :username");
                   
                   $success = $query-> execute([
                        ':username' => $username
                            ]);
              }  
              
            }else{
               echo "Account is invalid or does not exist";
            }
        }
        ?>




