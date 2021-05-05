<?php
            include_once 'dbconnection.php';//Access the database
            
         
            
            $username = strtolower($_POST['username']);//Get Username
           
            $password = crypt(sha1(md5($_POST['password'])), 'XY');//Get encypted password
            
            try{
            $query = $con ->prepare("SELECT * FROM users WHERE LOWER(username) = :username");//Access the database, use usersname to search for values
            $success = $query->execute([
                'username' => $username
                    ]);
            $users = $query->fetch(PDO::FETCH_OBJ);
            
            
           if(isset ($users->username) && $users-> Attemps < 3 && $users->userID != 1){//if account exist, has not been locked out and is not a guest
                
              if($users->password === $password){//checks inputed password with users password
                  $attemps = 0;
                   $query = $con->prepare(""
                            . "UPDATE users SET Attemps = $attemps"
                            . " WHERE username = :username");//Attemps and setting them to 0
                   $success = $query-> execute([
                        ':username' => $username
                            ]);
                            
                $function  = 'Login';//Set fucntion login
                include_once  'UpLogDel.php';//Add code
              }else{
                   
                   $attemps = $users-> Attemps;
                   $attemps = $attemps + 1;//Get user attempts and adds one to them
                   $query = $con->prepare(""
                            . "UPDATE users SET Attemps = $attemps"
                            . " WHERE username = :username");//updates the attempts number
                   
                   $success = $query-> execute([
                        ':username' => $username
                            ]);
                   echo "Wrong password";//Send back wrong password
              }  
              
            }else{
               echo "Account is invalid or does not exist";//Send back that account does not exist
            }
            }catch(PDOException $e){
                echo $sql . "<br>" . $e->getMessage();
            }
        
        ?>




