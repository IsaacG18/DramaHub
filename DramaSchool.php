<html>
    <head>
        <title>Drama School</title>
        <link rel="stylesheet" href="css/calendar.css">
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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/DramaSchool.js"></script>
    </head>
    
    
    <body>
        <?php include_once 'header.php';?>
       <h1>Drama School</h1>
       
        <div class = "firstColumn">
           <?php include_once 'calendar.php';?> 
    
          <div class = "details">
            <ul>
              <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li> 
              <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li> 
              <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li> 
              <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li> 
            </ul>
          </div>
        </div>
        <div class="split1"></div>
           <div class = "stack">
            <h1>Audition Prep</h1>
            <iframe  src="https://www.youtube.com/embed/EQFwooZpbOc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="split2"></div>
         <div class = "leftVid">
         <h1>Before Audition</h1>

           <div class = "advice2">
              <iframe src="https://www.youtube.com/embed/64UW3Gmp5VA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           </div>
         <div class = "advice1">
              <ul>
              <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li> 
              <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li> 
              <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li> 
            </ul>
              
         </div>
        
        </div>
         <div class="split3"></div>
        <div class = "stack">
         <h1>Warming up</h1>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
              
              <iframe src="https://www.youtube.com/embed/64UW3Gmp5VA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         
        </div>
        <div class="split4"></div>
        <div class = "leftVid">
         <h1>Doing your Audition</h1>
            <div class = "advice2">
              <iframe  src="https://www.youtube.com/embed/64UW3Gmp5VA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           </div>
          
          <div class = "advice1">
            <ul>
              <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li> 
              <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li> 
              <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li> 
            </ul>
           </div>
           
           
        </div>
         <?php include_once 'footer.php';?>
        <style>

            .details{
                width: 42.5%;
                margin: 10px auto;
            }
            .advice1{
                width: 40%;
                display: inline-block; 
                margin: 8px;
            }
            .advice2{
                width: 55%;
                display: inline-block; 
                margin: 8px;
            }
            .leftVid{
                margin: 3px auto;
                width: 95%;
            }
            .firstColumn{
                display: inline-flex;
            }
            .split1, .split2, .split3, .split4{
                 width: 100%;
                height: 200px;
                margin: 10px auto;
                background-repeat: no-repeat; 
                background-size: cover;
                background-position: center;
            }
            .split1{
                background-image: url("img/Drama2.jpg");
            }
            .split2{
                background-image: url("img/Drama2.jpg");
            }
            .split3{
                background-image: url("img/Drama2.jpg");
            }
            .split4{
                background-image: url("img/Drama2.jpg");
            }
@media only screen and (max-width: 1100px) {
            
            .leftVid li{
                font-size:2.75rem;
            }
}
@media only screen and (max-width: 1000px) {
            .leftVid li{
                font-size:2.5rem;
            }
            
}
@media only screen and (max-width: 900px) {
        .advice1, .advice2{
            display: block;
            width: 95%;
            margin: 10px auto;
        }
        .leftVid li{
            font-size:3rem;
        }
    
}  
@media only screen and (max-width: 800px) {
        .firstColumn{
                display: block;
                margin: 10px auto;
        }
        .details{
                width: 90%;
        }
}
@media only screen and (max-width: 650px) {
            .firstColumn,.leftVid{
                width: 95%;
            }   
}        
        </style>
    </body>
</html>