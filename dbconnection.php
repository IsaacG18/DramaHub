<?php
try{
//        $host = 'studentnet.dundeeandangus.ac.uk';
//        $dbname = "db_1415244";
//        $username = "1415244";
//        $password = "TDPassword1";


             $host = 'localhost';
             $dbname = 'dramahub';
             $username = 'root';
             $password = '';

 
          $con = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8',$username,$password);


    
    }catch(PDOException $e){
        echo $e->getMessage();
          die("Connection Failed");
    }
    
?>