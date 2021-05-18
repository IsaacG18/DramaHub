<html>
    <head>
        <title>Monologue</title>
        <link rel="icon" type="img/png" href="img/DSearchBar.png"/>       
        <link rel="stylesheet" href="css/Main.css">
        <link rel="stylesheet" href="css/MP.css">
         <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/comment.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans&display=swap" rel="stylesheet">
    </head>
    
     <?php
     include_once 'dbconnection.php'; // include database access ablitiy
    
     $monoID = $_GET['MonoID']; //ID used get indentify the data
     
     
      if(isset($_GET['count'])){ //count used set how many comments to display
            $count = $_GET['count'];
            }else{
            $count = 10; //Default is nothing is set
            }
    ?>
    <body>
        <?php include_once 'header.php';?> <!-- Includes the header for the page -->
        
        <?php
        try{
           $query = $con ->prepare("SELECT * FROM monologue inner join image on image.imgID = monologue.imgID WHERE monoID = :monoID"); //Gets the data from the database based off ID
            $success = $query->execute([
                ':monoID' => $monoID
                    ]);
            $mono = $query->fetch(PDO::FETCH_OBJ);
            
        if($success){//Checks if successful, is so then the data is put onto values
        $Play = $mono->play;
        $Part = $mono->part;
        $Title = $mono->title;
        $author = $mono->author;
        $img = $mono->imgFile;
        $alt = $mono->alt;
        $description = $mono->description;
        $content = $mono->content;
        
        
        
       
        //Formates the data and adds it to output
        $output .= "<div class = 'Pre-Mono'> 
                <div class = 'info'>
                <h1>Play: $Play</h1>
                <h3>Character: $Part</h3>
                <h3>Title: $Title</h3>
                <h3>Author: $author</h3>
                <p>$description</p>
                </div><div class = 'mono-img'>
                <img src='$img' alt='$alt'/>
                </div></div><hr>";
                
                
        $output .= "<article><p>$content</p></article><hr>";
        $output .=  '<div class = "stack">';
            //This section is created based off what kind of period the monologue is
           $query = $con ->prepare("SELECT * FROM tips WHERE period = :period");
            $success = $query->execute([
                ':period' => $mono->period
                    ]);
         $tips = $query->fetch(PDO::FETCH_OBJ);
         $output .= "<h1>$tips->title</h1><p>$tips->text</p>$tips->vid</div>";//This is displayed
        
        echo $output;// All the current output is then added
        }
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        } 
        ?> 
        
                 
        <hr>
        <div class = "comment">
            <h1>Comments</h1>
            <?php
            $outputPost = "";
            try{
            $queryC = $con ->prepare("SELECT * FROM post inner join users on post.userID = users.userID WHERE monoID = :monoID order by upload DESC");// Gets all data about this monologue comment 
            $successC = $queryC->execute([
                ':monoID' => $monoID
                    ]);
            $posts = $queryC->fetchall(PDO::FETCH_OBJ);
  
            
            if($successC){
                $c = 0;// This helps limit the amount of comments
                foreach($posts as $post){//Goes through each comment for the database
                    if($count > $c){//Stop amount of comment surpass count
                            $outputPost .="<div class = 'mess'><p class = 'date'>$post->upload</p><div class = 'nameNMessage'>"; //Formates the data and adds it to output
                        if(strlen($post->content) < 80){ 
                            $outputPost .= "<h3>$post->content</h3>";
                        }else{
                            $temp = substr($post->content,0,80);//Only display the first 80 characters of a comment
                            $outputPost .= "<h3>$temp...</h3>";       
                        }
                            $outputPost .="<p>$post->username</p>"
                                        . "<form action='posts.php' method='GET'>"
                                        . "<input name='postID' type='hidden' value='$post->postID'>"
                                        . "<input name='submit' type='submit' value='See More'>"//This form allows uses to replies to this post as well as the full post
                                        . "</form>"
                                        . "</div></div><hr>";   
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
                echo $outputPost;
                }
            }catch(PDOException $e){
                echo $sql . "<br>" . $e->getMessage();
        } 
                if($userID != 1){//This only allows login users to comments, if not the form that allows users to comment does not appear
                echo"<form action='#' id='formContent'>
                        <textarea rows='10' name='content' id='content' form='formContent'></textarea>
                        <input type='hidden' id='userID' name='userID' value='$userID'>
                        <input type='hidden' id='ID' name='ID' value='$monoID'>
                        <input id='comment' type='button'  Name = 'comment' value='post'>
                        <p id = 'wrong'></p>
                    </form>";
                }else{
                    echo"<form action='SignIn.php' method='POST'>
                            <input id='SignIn' type='submit'  Name = 'SignIn' value='Sign In'>
                        </form>";
                }
            ?>
            
        </div>
   <?php include_once 'footer.php';?><!-- Includes the footer in this page -->
    </body>
</html>