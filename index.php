<html>
    <head>
        <title>Home</title>
        <link rel="icon" type="img/png" href="img/DSearchBar.png"/>
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/Main.css">
        <link rel="stylesheet" href="css/calendar.css">
       <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans&display=swap" rel="stylesheet">
    </head>
    <body>
     <?php include_once 'header.php';?> <!-- Includes the banner for the website -->
        
    
        <div class = "stack"> <!-- First Area Block -->
            <h1>Welcome To Drama Hub</h1>
            <iframe src="https://www.youtube.com/embed/EQFwooZpbOc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <hr>
        <div class = "stack"> <!-- Second Area Blocked out -->
            <h1>Drama Hub's mission</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
        </div>
        <span id="Cal"><hr></span>
        
       
        <div class = "firstColumn"> <!-- Third Area Blocked out -->
            
           <?php include_once 'calendar.php';?> 
            <!-- Include the calendar -->
          
    <div class = "show">
              <img src="img/homeAdd.jpg"  alt="Lorem ipsum dolor"/>
              
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
          </div>
          </div>
         
    
            
        <hr>
         <div class = "secondColumn"> <!-- Forth Area Blocked out -->
         <h1>Highlights</h1>
            
          
            <div class = "highlights"> <!-- Each box shows an Image then when mouse hovers it show the text -->
              <div class="flip-box">
              <div class="flip-box-inner">
                <div class="flip-box-front">
                 <img src="img/homeAdd.jpg" width ="100%" height="auto" alt="Lorem ipsum dolor"/>
                </div>
                <div class="flip-box-back">
                  <h3>Dave's Art</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
           </div>
           
              <div class="flip-box">
              <div class="flip-box-inner">
                <div class="flip-box-front">
                 <img src="img/homeAdd.jpg" width ="100%" height="auto" alt="Lorem ipsum dolor"/>
                </div>
                <div class="flip-box-back">
                  <h3>Kyle's Art</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
           </div>
           
           
              <div class="flip-box">
              <div class="flip-box-inner">
                <div class="flip-box-front">
                 <img src="img/homeAdd.jpg" width ="100%" height="auto" alt="Lorem ipsum dolor"/>
                </div>
                <div class="flip-box-back">
                  <h3>Mary's Art</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
           </div>
         </div> 
        </div>
          <?php include_once 'footer.php';?> <!-- Includes the footer -->

    </body>
    
</html>