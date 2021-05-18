<html>
    <head>
        <title>Art Work</title>
        <link rel="icon" type="img/png" href="img/DSearchBar.png"/>
        <link rel="stylesheet" href="css/Main.css">
     
         
       <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans&display=swap" rel="stylesheet">
    </head>
    
     <?php
     include_once 'dbconnection.php';//Access the database
    
     if(isset($_GET['artID'])){
        $artID = $_GET['artID'];//ID used get indentify the data
     
    ?>
    <body>
        <?php include_once 'header.php';?><!-- Includes the header for the page -->
        
        <?php
        try{
            $query = $con ->prepare("SELECT * FROM art inner join users on art.userID = users.userID where artID = $artID");//Gets data from the database, based of the artID
            $success = $query->execute([

                ]);
            $art = $query->fetch(PDO::FETCH_OBJ);
            $img = 'uploads/'.($art->upImg);//Adds the location of the image
            echo "<div class = 'art'><h1>$art->title</h1>"
            . "<div class = 'artimg'><img src ='$img'></div>"
            . "<h5>By $art->username</h5>"
            . "<div class = 'stack'><p>$art->description</p></div></div>";//Formates the data and adds it to output
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
        ?>
        <?php include_once 'footer.php';}?> <!-- Includes the footer in this page -->
        <style>
            
        .art img{
            width: 100%;
            height: auto;
        }
        .artimg{
            width: 80%;
            margin: auto;
        }
</style>