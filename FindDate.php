<?php
 include_once 'dbconnection.php';
        
            
            $month = $_POST["month"];         
            $day = $_POST["day"];  
            
$query = $con ->prepare("SELECT * FROM dates  WHERE MONTH(date)= :month and DAY(date) = 5");
            $success = $query->execute([
                ':month' => $month
                    ]);
            $dates = $query->fetch(PDO::FETCH_OBJ);
            if($success){
                if(isset($dates->date)){
                echo "Successful";
                }
            }
                echo("Wrong");
            