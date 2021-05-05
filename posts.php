 <html>
    <head>
        <title>Post</title>
        <link rel="icon" type="img/png" href="img/DSearchBar.png"/>
        <link rel="stylesheet" href="css/Main.css">
         <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/comment.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans&display=swap" rel="stylesheet">
    </head>  
    <?php
     include_once 'dbconnection.php'; // include database access ablitiy 
    
     $postID = $_GET['postID']; //ID used get indentify the data
     
     
      if(isset($_GET['count'])){ //count used set how many replies to display
            $count = $_GET['count'];
            }else{
            $count = 10; //Default is nothing is set
            }
    ?>
    <body>
        <?php include_once 'header.php';?> <!-- Includes the header for the page -->
        <?php  $outputPost = "";
        try{
            $query = $con ->prepare("SELECT * FROM post inner join users on post.userID = users.userID WHERE postID = :postID"); //Gets the data from the database based off ID
            $success = $query->execute([
                ':postID' => $postID
                    ]);
            $post = $query->fetch(PDO::FETCH_OBJ);
  
            
            if($success){ //Checks if successful, is so then the data is put onto values
            
        $outputPost .="<div class = 'comment'>" //Formates the data and adds it to output
                . "<h1>$post->content</h1>"
                . "<h3>$post->username</h3>";
            
            
            //This section finds replies to the post
            $queryC = $con ->prepare("SELECT * FROM reply inner join users on reply.userID = users.userID WHERE postID = :postID order by upload DESC"); 
            $successC = $queryC->execute([
                ':postID' => $postID
                    ]);
            $replies = $queryC->fetchall(PDO::FETCH_OBJ);
  
            
            if($successC){ //Checks if successful, is so then the data is put onto values
                $c = 0; // This helps limit the amount of comments
                foreach($replies as $reply){ //Goes through each comment for the database
                    if($count > $c){ //Stop amount of replies surpass count
                            $outputPost .="<hr><div class = 'mess'>"; //Formates the data and adds it to output
                        
                            $outputPost .= "<h3>$reply->content</h3>";
                        
                            $outputPost .="<p>$reply->username</p>"
                                        . "</div>";   
                        }
                        $c++;
                    }
                
            
            if(count($posts) > $count){ //This allows users to load more comments by increasing count
            $count += 10;
            $outputPost .= "<div class = 'loadmore'><form action='monoPage.php' method='GET'>"
                . "<input name='count' type='hidden' value='$count'>"
                . "<input name='MonoID' type='hidden' value='$monoID'>"
                . "<input name = 'submit' type='submit' value='Load More'>"
                . "</form></div>";
            }
            echo $outputPost; // prints the output
            }
            
            if($userID != 1){ //This only allows login users to comments, if not the form that allows users to comment does not appear
            echo"<form action='#' id='formContent'>
                    <textarea rows='10' name='content' id='content' form='formContent'></textarea>
                    <input type='hidden' id='userID' name='userID' value='$userID'>
                    <input type='hidden' id='ID' name='ID' value='$postID'>
                    <input id='comment' type='button'  Name = 'comment' value='reply'>
                    <p id = 'wrong'></p>
                </form>";
            }
            }
            }catch(PDOException $e){
                echo $sql . "<br>" . $e->getMessage();
            } 
            ?>
        </div>
        <?php include_once 'footer.php';?><!-- Includes the footer in this page -->
    </body>
</html>
