<?php
 include_once 'dbconnection.php';//Access the database
        
            $year = $_POST["year"];//Get Year
            $month = $_POST["month"];//Get Month         
            $days = $_POST["days"];//Get days  
            try{
                $query = $con ->prepare("SELECT * FROM dates  WHERE YEAR(date) =:year and MONTH(date)= :month");//Get all highlighted dates in the selected month
                $success = $query->execute([
                    ':year' => $year,
                    ':month' => $month,

                        ]);
                $dates = $query->fetchall(PDO::FETCH_OBJ);
                $output = "";
                for($i = 1; $i < $days + 1; $i++){//Checks each number in day
                    $state = "none";
                    foreach($dates as $date){//Loops throug each important date
                        $date1 = (string)date("d", strtotime($date->date));//Formates date
                        $date2 = (string)$i;//Formates day
                        if($i< 10){
                            $date1 = "0{$i}";
                        }
                        if($date1 === $date2){//Compare day and date
                            $type=$date->type ;//Get type
                          if($type == "Open Day"){
                              $state = "open";
                          }else if($type == "Deadline"){
                              $state = "dead";
                          }else{
                              $state = "other";
                          }
                        }
                    }


                    if($state == "none"){//check if it is an highlighted date
                        if($year == date("Y") && $month == date("m") && $i == date("d")){//Check is today appears
                            $output .= "<div class='today'>$i</div>";
                        }else{
                            $output .= "<div>$i</div>";//Adds standard        
                        }
                    }else if($state == "open"){//Checks what type and add to output the day with a link and a div
                        $output .= "<div class='open'><a href='$date->link'>$i</a></div>";
                    }else if($state == "dead"){
                        $output .= "<div class='deadline'><a href='$date->link'>$i</a></div>";
                    }else if($state == "other"){
                        $output .= "<div class='other'><a href='$date->link'>$i</a></div>";
                    }
                }
            }catch(PDOException $e){
                echo $sql . "<br>" . $e->getMessage();
            }
            echo $output;//Prints the output
            
            
           
            