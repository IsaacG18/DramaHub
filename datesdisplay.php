<html>
    <head>
        <title>Dates</title>
        <link rel="icon" type="img/png" href="img/DSearchBar.png"/>
        <link rel="stylesheet" href="css/Main.css">
        <link rel="stylesheet" href="css/DD.css">
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
    ?>
    <body>
        
       <?php include_once 'header.php';?> <!-- Includes the header for the page -->
          <h1>Drama School Days</h1>
        <?php
        $output = "";
        $output .="<div class = 'datTab'><table><tr><th><h1>Instatute</h1></th><th><h1>Date</h1></th><th><h1>Type</h1></th><th><h1>Website</h1></th></tr>";
        try{
        $query = $con ->prepare("SELECT * from dates inner join Instatute on dates.instaID = Instatute.instaID ORDER BY date");//Access dates from the database
            $success = $query->execute([
                    ]);
            $dates = $query->fetchall(PDO::FETCH_OBJ);    
        foreach ($dates as $date){//Loops through each date held
        
             $output .="<tr class='dates'><th>$date->name</th><th>$date->date</th><th>$date->type</th><th><a href = '$date->link'>Website</th></tr>";//Formates the data which is added to output
        }$output .="</table></div>";
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
        echo $output;//Print output
            ?>
         <?php include_once 'footer.php';?><!-- Includes the footer in this page -->
       
    </body>
</html>
