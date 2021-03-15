<html>
    <head>
        <title>Dates</title>
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
      include_once 'dbconnection.php';
    $userID = "";
     
     
    ?>
    <body>
        
       <?php include_once 'header.php';?>
          <h1>Drama School Days</h1>
        <?php
            $output = "";
    
        
        $output .="<div class = 'datTab'><table><tr><th><h1>Instatute</h1></th><th><h1>Date</h1></th><th><h1>Type</h1></th><th><h1>Website</h1></th></tr>";
        $query = $con ->prepare("SELECT * FROM dates ORDER BY date");
            $success = $query->execute([
                
                    ]);
            $dates = $query->fetchall(PDO::FETCH_OBJ);
            
        foreach ($dates as $date){
        
             $output .="<tr class='dates'><th>$date->instatute</th><th>$date->date</th><th>$date->type</th><th><a href = '$date->link'>Website</th></tr>";
        }$output .="</table></div>";
        echo $output;
            ?>
         <?php include_once 'footer.php';?>
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

