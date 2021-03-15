<?php
 include_once 'dbconnection.php';
        
            $year = $_POST["year"];
            $month = $_POST["month"];         
            $days = $_POST["days"];  
            
$query = $con ->prepare("SELECT * FROM dates  WHERE YEAR(date) =:year and MONTH(date)= :month");
            $success = $query->execute([
                ':year' => $year,
                ':month' => $month,
                  
                    ]);
            $dates = $query->fetchall(PDO::FETCH_OBJ);
            $output = "";
            for($i = 1; $i < $days + 1; $i++){
                $state = false;
                foreach($dates as $date){
                    $d = (string)date("d", strtotime($date->date));
                    $c = (string)$i;
                    if($i< 10){
                        $c = "0{$i}";
                    }
                    if($c === $d){
                      $state = true;
                    }
                }
                if($state == false){
                    if($year == date("Y") && $month == date("m") && $i == date("d")){
                        $output .= "<div class='today'>$i</div>";
                    }else{
                        $output .= "<div>$i</div>";        
                    }
                }else if($state == true){
                    $output .= "<div class='today'>$i</div>";
                }
            }
            echo $output;
            
            
           
            