<?php
switch ($function) {//switch based off which function is selected
                    case "Login":
                        $userID = $users->userID;
                        echo "$userID successfully login in";//Returns the id and this text
                        break;
                    
                    case "Delete":
                       
                   try{
                    $Dquery = $con->prepare(""
                            . "DELETE FROM users WHERE userID = :userID;");//Delete the user from the database based on userID
                   $successes = $Dquery-> execute([
                        'userID' => $id
                            ]);
                    
                    
                    $queryU = $con->prepare(""
                    . "Select * FROM users WHERE userID = :userID;"//Try to find the ID that was deleted on the database
                    );
                    $queryU -> execute(['userID' =>$id]);
                    $users = $queryU->fetch(PDO::FETCH_OBJ);
                   
                        if(!$users){
                          echo "Account was deleted successfully $id";//Sends that the account it was deleted and send the ID
                           
                        }else{
                          echo "Account deleted was in invalid $id";//Sends that the account was not deleted and send the ID
                        }
                    }catch(PDOException $e){
                       echo $sql . "<br>" . $e->getMessage();
                   }
                        break;
            case "Sign-Up":
                try{
                    $Cquery = $con->prepare(""
           . "INSERT INTO users(firstName, lastName, username, email, password, Attemps)"
           . " VALUES (:firstName, :lastName, :username, :email, :password, :attemps);");// Insert using values users to database
           
           $created = $Cquery-> execute([
                'firstName' => $FN,
                'lastName' => $LN,
                'username' => $UN,
                'password' => $PW,
                'email' => $EM,
                'attemps' => 0
           ]);
           $user_id = $con -> lastInsertId();//gets the ID of the added item
            $queryID = $con->prepare(""
                    . "Select * FROM users WHERE userID = $user_id" //Use the new ID to search the database
                    );
             $queryID -> execute([$user_id]);
            $usersID = $queryID->fetch(PDO::FETCH_OBJ);
            
           if($usersID){
            echo "$user_id Username and Email are free";//This sends the user ID and this text to the back
            }else{
                echo "Account failed to insert";//This send that account fails
            }
            }catch(PDOException $e){
                       echo $sql . "<br>" . $e->getMessage();
                   }
                        break;
                    case "Update":
                    try{    
                        $query = $con->prepare(""
                            . "UPDATE users SET Attemps = :attemps, password = :password, CODE = :code1"
                            . " WHERE CODE = :code");// This updates the password in the database with the code
                   
                   $successes = $query-> execute([
                       ':password' => $pass,
                       ':attemps' => 0,
                       ':code1' => null,
                       ':code' => $code
                            ]);
                    if($successes){
                        echo 'Update correctly worked';//This send that the it is succesfully updated
                    }else{
                    echo 'Failed try again later';//This sends that is failed
                    }
                }catch(PDOException $e){
                    echo $sql . "<br>" . $e->getMessage();
                }
                    break;
                }
?>

