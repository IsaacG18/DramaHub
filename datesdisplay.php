<html>
    <head>
        <title>Dates</title>
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
    ?>
    <body>
        
       <?php include_once 'header.php';?> <!-- Includes the header for the page -->
          <h1>Drama School Days</h1>
        <?php
        $output = "";
        $output .="<div class = 'datTab'><table><tr><th><h1>Instatute</h1></th><th><h1>Date</h1></th><th><h1>Type</h1></th><th><h1>Website</h1></th></tr>";
        try{
        $query = $con ->prepare("SELECT * FROM dates ORDER BY date");//Access dates from the database
            $success = $query->execute([
                    ]);
            $dates = $query->fetchall(PDO::FETCH_OBJ);    
        foreach ($dates as $date){//Loops through each date held
        
             $output .="<tr class='dates'><th>$date->instatute</th><th>$date->date</th><th>$date->type</th><th><a href = '$date->link'>Website</th></tr>";//Formates the data which is added to output
        }$output .="</table></div>";
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
        echo $output;//Print output
            ?>
         <?php include_once 'footer.php';?><!-- Includes the footer in this page -->
        <style>
             

            a{
                text-decoration: none;
                color: #fefeff;
            }
            a:hover {
                color: #feea00;
            }
            
            table{
                margin: 20px auto;
                border-collapse: collapse;
                width: 90%;
                border:#ff0429 solid 2px;
                
            }
            
            th{
                width: 25%;
                height: 50px;
            }
            th, tr{
                border-left:#ff0429 solid 2px;
                border-right:#ff0429 solid 2px;
            }
            tr:nth-child(odd){
                background-color: #7c7c7c;
            }
            tr:nth-child(even){background-color: #555555;}
            tr:hover {background-color: #08080c;}
        </style>

