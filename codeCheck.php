<?php
            include_once 'dbconnection.php';
            
            $code = $_POST['code'];
            $pass = crypt(sha1(md5($_POST['PW'])), 'XY');
            
            
           
            $query = $con ->prepare("SELECT * FROM users WHERE CODE = :code");
            $success = $query->execute([
                ':code' => $code
                    ]);
             $users = $query->fetch(PDO::FETCH_OBJ);
             
            
           if($success){
              
               $function = "Update";
             include_once  'UpLogDel.php';
                  
                   
                            
                   
                   
                
            }else{
               echo "Enter is incorrect";
            }
           
        ?>