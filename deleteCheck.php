<?php
            include_once 'dbconnection.php';
            
            
           
            $id = $_POST['id'];
            $password = crypt(sha1(md5($_POST['password'])), 'XY');
            
            
            $query = $con ->prepare("SELECT * FROM users WHERE userID = :userID");
            $success = $query->execute([
                ':userID' => $id
                    ]);
            $users = $query->fetch(PDO::FETCH_OBJ);
            
            
            
           if($users->password === $password){
               
             $function = "Delete";
             include_once 'UpLogDel.php';
                 
            }else{
               echo "invalid attempt";
            }
       
        ?>





