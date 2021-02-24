<?php
            include_once 'dbconnection.php';
            
         
            
            $username = $_POST['username'];
           
            $password = crypt(sha1(md5($_POST['password'])), 'XY');
            
            
            $query = $con ->prepare("SELECT * FROM users WHERE username = :username");
            $success = $query->execute([
                'username' => $username
                    ]);
            $users = $query->fetch(PDO::FETCH_OBJ);
            
            
           if(isset ($users->username) && $users-> Attemps < 3 && $users->userID != 1){
                
              if($users->password === $password){
                  $attemps = 0;
                   $query = $con->prepare(""
                            . "UPDATE users SET Attemps = $attemps"
                            . " WHERE username = :username");
                   $success = $query-> execute([
                        ':username' => $username
                            ]);
                            
                $function  = 'Login';
                include_once  'UpLogDel.php';
              }else{
                   
                   $attemps = $users-> Attemps;
                   $attemps = $attemps + 1;
                   $query = $con->prepare(""
                            . "UPDATE users SET Attemps = $attemps"
                            . " WHERE username = :username");
                   
                   $success = $query-> execute([
                        ':username' => $username
                            ]);
                   echo "Wrong password";
              }  
              
            }else{
               echo "Account is invalid or does not exist";
            }
        
        ?>




