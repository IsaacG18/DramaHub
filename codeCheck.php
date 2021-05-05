<?php
            include_once 'dbconnection.php';//Access the database
            
            $code = $_POST['code'];//Get the code
            $pass = crypt(sha1(md5($_POST['PW'])), 'XY');//Takes the password and encrypts it
            
            
           try{
                $query = $con ->prepare("SELECT * FROM users WHERE CODE = :code");//Searches database based on the cde
                $success = $query->execute([
                    ':code' => $code
                        ]);
                 $users = $query->fetch(PDO::FETCH_OBJ);
                if($success and $users){
                    $function = "Update";//Sets the function
                    include_once  'UpLogDel.php';//Add this to update password
                }else{
                    echo "Enter is incorrect";//Send this as a response
                }
            }catch(PDOException $e){
                echo $sql . "<br>" . $e->getMessage();
            }
        ?>