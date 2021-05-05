<?php
    include_once 'dbconnection.php';//Access the database
    $content = filter_var($_POST['content'], FILTER_SANITIZE_STRING);//This takes the content and sanitizes it
    $userID = $_POST['userID'];//Gets userID
    $comment = $_POST['comment'];//Gets type
    $ID = $_POST['ID'];//Get ID of element above it
   
    
        if($comment === "post"){//If type is a post
            try{
                $Pquery = $con->prepare(""
                    . "INSERT INTO post(monoID, userID, content)"
                    . " VALUES (:monoID, :userID, :content);");//Inserts the data into the post table

                $created = $Pquery-> execute([
                     'monoID' => $ID,
                     'userID' => $userID,
                     'content' => $content
                ]);
                $postID = $con -> lastInsertId();//Get the ID of the last post
                $queryID = $con->prepare(""
                        . "Select * FROM post WHERE postID = $postID;"//Checks the if the last post has been added 
                        );
                $queryID -> execute([]);
                $post_ID = $queryID->fetch(PDO::FETCH_OBJ);
                if($post_ID){
                    echo "$ID successfully add";//If the item exists, it is sent sends the ID 
                }else{
                    echo "Post failed to send";//If the item does not exist
                }
            }catch(PDOException $e){
                echo $sql . "<br>" . $e->getMessage();
            }
        }else if($comment === "reply"){//If type is a reply
            try{
                $Pquery = $con->prepare(""
                    . "INSERT INTO reply(postID, userID, content)"
                    . " VALUES (:postID, :userID, :content);");//Inserts the data into the reply table

                $created = $Pquery-> execute([
                    'postID' => $ID,
                    'userID' => $userID,
                    'content' => $content
                ]);
                $replyID = $con -> lastInsertId();//Get the ID of the last post
                $queryID = $con->prepare(""
                        . "Select * FROM reply WHERE replyID = $replyID"//Checks the if the last post has been added 
                        );
                 $queryID -> execute([]);
               $reply_ID = $queryID->fetch(PDO::FETCH_OBJ);
               if($reply_ID){
                    echo "$ID successfully add";//If the item exists, it is sent with the ID 
                }else{
                    echo "Reply failed to send";//If the item does not exist
                }
            }catch(PDOException $e){
                echo $sql . "<br>" . $e->getMessage();
            }
        }
                  
?>
