<html>
    <head>
        <title>Monologue</title>
        <link rel="stylesheet" href="css/Main.css">
         <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans&display=swap" rel="stylesheet">
    </head>
    
     <?php
     include_once 'dbconnection.php';
    
     $monoID = $_GET['MonoID'];
    ?>
    <body>
        <?php include_once 'header.php';?>
        
        <?php
           $query = $con ->prepare("SELECT * FROM monologue WHERE monoID = :monoID");
            $success = $query->execute([
                ':monoID' => $monoID
                    ]);
            $mono = $query->fetch(PDO::FETCH_OBJ);
            
        if($success){
            $Play = $mono->play;
        $Part = $mono->part;
        $Title = $mono->title;
        $author = $mono->author;
        $img = $mono->img;
        $description = $mono->description;
        $content = $mono->content;
        
        
        
       
        
        $output .= "<div class = 'Pre-Mono'>
                <div class = 'info'>
                <h1>Play: $Play</h1>
                <h3>Character: $Part</h3>
                <h3>Title: $Title</h3>
                <h3>Author: $author</h3>
                <p>$description</p>
                </div><div class = 'mono-img'>
                <img src='$img'/>
                </div></div><hr>";
        
        
        $output .= "<article><p>$content</p></article><hr>";
        $output .=  '<div class = "tip">';
            
           $query = $con ->prepare("SELECT * FROM tips WHERE period = :period");
            $success = $query->execute([
                ':period' => $mono->period
                    ]);
            $tips = $query->fetch(PDO::FETCH_OBJ);
         $output .= "<h1>$tips->title</h1><p>$tips->text</p>$tips->vid</div>";
        
        echo $output;
        }
        ?> 
        
                 
        <hr>
        <div class = "forms"></div>
   <?php include_once 'footer.php';?>
        <style>
            iframe{
                height: 400px;
                width: 500px; 
            }
            .Pre-Mono{
                width: 95%;
                margin: 20px auto;
                display: flex;
            }
            .mono-img{
                width: 60%;
                margin: 0 20px;
            }
            .mono-img img{
                width: 100%;
                height: auto;
            }
            article{
                font-size: 25px;
                margin-left: auto;
                margin-right: auto;
                display: block;
                vertical-align: middle;
                width: 80%;  
            }
            .tip{
                margin: 5px;
                text-align: center;
                margin: 3px auto;
                width: 80%;
            }
            .tip p{
                font-size: 25px;
            }
            .forms{
                margin: 20px auto;
                width: 80%;
                height: 400px;
                background-color: #feea00;
                
            }
            @media only screen and (max-width: 800px) {
                .tip p, article p , .tip p{
                    font-size: 23px;
                }
                .info h1{
                    font-size: 2rem;
                }
                .info h3{
                    font-size: 1.6rem;
                }
                .info p{
                    font-size: 1.4rem;
                }
            }
            @media only screen and (max-width: 700px) {
                iframe{
                    height: 320px;
                    width: 400px;
                }
                article, article p, .tip p {
                    font-size: 20px;
                    width: 90%;
                }
            }
            @media only screen and (max-width: 550px) {
                iframe{
                    height: 200px;
                    width: 300px;
                }
            article, article p, .tip p{
                    font-size: 18px;
                    width: 90%;
                }
            }
            @media only screen and (max-width: 400px) {
                article, article p{
                    font-size: 12px;
                    width: 90%;
                }
                iframe{
                    height: 200px;
                    width: 250px;
                }
            }
        
            
            

        </style>
    </body>
</html>