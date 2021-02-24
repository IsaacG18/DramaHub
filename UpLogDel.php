<?php
switch ($function) {
                    case "Login":
                        $userID = $users->userID;
                        echo "$userID successfully login in";
                        break;
                    
                    case "Delete":
                       
                   
                    $Dquery = $con->prepare(""
                            . "DELETE FROM users WHERE userID = :userID;");
                   $successes = $Dquery-> execute([
                        'userID' => $id
                            ]);
                    
                    
                    $queryU = $con->prepare(""
                    . "Select * FROM users WHERE userID = :userID;"
                    );
                    $queryU -> execute(['userID' =>$id]);
                    $users = $queryU->fetch(PDO::FETCH_OBJ);
                    
                        if(!$users){
                          echo "Account was deleted successfully $id";
                           
                        }else{
                          echo "Account deleted was in invalid $id";
                        }
                    
                        break;
            case "Sign-Up":
                    $Cquery = $con->prepare(""
           . "INSERT INTO users(firstName, lastName, username, email, password, Attemps)"
           . " VALUES (:firstName, :lastName, :username, :email, :password, :attemps);");
           
           $created = $Cquery-> execute([
                'firstName' => $FN,
                'lastName' => $LN,
                'username' => $UN,
                'password' => $PW,
                'email' => $EM,
                'attemps' => 0
           ]);
           $user_id = $con -> lastInsertId();
            $queryID = $con->prepare(""
                    . "Select * FROM users WHERE userID = $user_id"
                    );
             $queryID -> execute([$user_id]);
            $usersID = $queryID->fetch(PDO::FETCH_OBJ);
           if($usersID){
           echo "$user_id Username and Email are free";
            }else{
                echo "Account failed to update";
            }
                        break;
                    case "Update":

                        $query = $con->prepare(""
                            . "UPDATE users SET Attemps = :attemps, password = :password, CODE = :code1"
                            . " WHERE CODE = :code");
                   
                   $successes = $query-> execute([
                       ':password' => $pass,
                       ':attemps' => 0,
                       ':code1' => null,
                       ':code' => $code
                            ]);
               
                    if($successes){
                        echo 'Update correctly worked';
                    }else{
                    echo 'Failed try again later';
                    }
                    
                            
                            
                            
                    break;
                }
?>

