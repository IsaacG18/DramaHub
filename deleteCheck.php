<?php
            include_once 'dbconnection.php';//Includes access to the database
            
            
           
            $id = $_POST['id'];//Users ID
            $password = crypt(sha1(md5($_POST['password'])), 'XY');//This encrypts the data matching the database
            
            try{
                $query = $con ->prepare("SELECT * FROM users WHERE userID = :userID");//Access the database with the userID
                $success = $query->execute([
                    ':userID' => $id
                        ]);
                $users = $query->fetch(PDO::FETCH_OBJ);
               if($users->password === $password){//Checks if entered password matchs entities password
                $function = "Delete"; //Set what will happen to this account
                include_once 'UpLogDel.php';//Add this to delete
                }else{
                   echo "invalid attempt";//Check fails this is what is sent
                }
            }catch(PDOException $e){
                echo $sql . "<br>" . $e->getMessage();
            }
       
        ?>





