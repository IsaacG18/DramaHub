<?php
            include_once 'dbconnection.php';
            
            
           
            $id = $_POST['id'];
            $password = $_POST['password'];
             
            $query = $con ->prepare("SELECT * FROM users WHERE userID = :userID and  password = :password");
            $success = $query->execute([
                ':userID' => $id,
                ':password' => $password
                    ]);
            $users = $query->fetch(PDO::FETCH_OBJ);
            
            
            
           if($success){
               
             $function = "delete";
             include_once 'UpLogDel.php';
                   
                     if($successes){
                         echo "Account was deleted successfully";
                     }
                     
                      echo "Account was deleted failed";
            }else{
               echo "invalid attempt";
            }
       
        ?>





