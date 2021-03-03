<?php
 include_once 'dbconnection.php';
        $Bcount = $_POST['banners'];
        $output= "success~";
 $query = $con ->prepare("SELECT count(*)as num FROM advert");
            $num = $query->execute([]);
             $count = $query->fetch(PDO::FETCH_OBJ);
             $amount = $count->num;
             $arr = [0,0,0,0,0];
             if($amount < $Bcount){
                 echo("Error Not enough posters");
             }
             for($i = 1; $i<= $Bcount; $i++){
                 
                 $check = false;
                 while($check == false){
                     $check = true;
                     $search = rand(1, $amount);
                     for($j = 1; $j<= $Bcount; $j++){
                        if($search == $arr[$j]){
                         $check = false;
                        } 
                     }
                 }
                 $arr[$i] = $search;
                $query = $con ->prepare("SELECT * FROM advert WHERE adID =:adID"); 
                $success = $query->execute([
                ':adID' => $search
                    ]);
            $banner= $query->fetch(PDO::FETCH_OBJ);
            if($success){
             $output .= "url($banner->image) ` .split$i ~";  
            }
             }
             echo $output;
             

            