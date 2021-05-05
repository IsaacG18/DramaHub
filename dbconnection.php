<?php
try{
            $host = 'studentnet.dundeeandangus.ac.uk';
            $dbname =   'db_1415244';
            $username = '1415244';
            $password = 'Password1!';
//             $host = 'localhost';//Host name for database
//             $dbname = 'dramahub';//Database name
//             $username = 'root';//Username for the database
//             $password = '';//Password for the database

 
          $con = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8',$username,$password);//Attempts to connect to database

          $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }catch(PDOException $e){
        echo $e->getMessage();//If this data is sent fails
        die("Connection Failed");
    }
    
?>
