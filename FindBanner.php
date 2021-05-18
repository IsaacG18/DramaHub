<?php
 include_once 'dbconnection.php';//Access the database
        $Bcount = $_POST['banners'];
        $output= "success~";
 $query = $con ->prepare("SELECT count(*)as num FROM advert");//Checks if there is enough adverts
            $num = $query->execute([]);
             $count = $query->fetch(PDO::FETCH_OBJ);
             $amount = $count->num;
             $arr = [0,0,0,0,0];
             if($amount < $Bcount){
                 echo("Error Not enough posters");//Sends that there is an issue if it does not work
             }
            for($i = 1; $i<= $Bcount; $i++){
                 $check = false;
                 while($check == false){//Make sure the number is unqiue
                     $check = true;
                     $search = rand(1, $amount);//Creates a random value 
                     for($j = 1; $j<= $Bcount; $j++){//Checks that number does not already exist
                        if($search == $arr[$j]){
                         $check = false;
                        } 
                     }
                 }
                $arr[$i] = $search;//Adds value
                try{
                    $query = $con ->prepare("SELECT * FROM advert inner join image on advert.imgID = image.imgID WHERE adID =:adID"); //Gets the advert based on the value
                    $success = $query->execute([
                    ':adID' => $search
                        ]);
                    $banner= $query->fetch(PDO::FETCH_OBJ);
                    if($success){
                        $output .= "url($banner->imgFile) ` .split$i ~"; //Addes the image to the database 
                    }
                }catch(PDOException $e){
                    echo $sql . "<br>" . $e->getMessage();
                }
            }
             echo $output;//Send the databack
             

            