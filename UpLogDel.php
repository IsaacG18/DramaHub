<?php
switch ($function) {
                    case "Login":
                        $userID = $users->userID;
                        echo "$userID successfully login in";
                        break;
                    
                    case "Delete":
                       
                        
                    $query = $con->prepare(""
                            . "DELETE FROM users WHERE userID = :userID;");
                   $successes = $query-> execute([
                        ':userID' => $userID
                            ]);
                    
                    
                    $queryU = $con->prepare(""
                    . "Select * FROM users WHERE userID = :userID;"
                    );
                    $queryU -> execute([$username]);
                    $users = $queryU->fetch(PDO::FETCH_OBJ);
                    
                        if(!$users){
                          echo "Account was deleted successfully";
                           
                        }else{
                          echo "Account was deleted failed";
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

