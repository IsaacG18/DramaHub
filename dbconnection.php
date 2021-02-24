<?php
try{
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