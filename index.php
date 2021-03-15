<html>
    <head>
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans&display=swap" rel="stylesheet">
    </head>
    <body>
     <?php include_once 'header.php';?>
    
        <div class = "stack">
            <h1>Welcome To Drama Hub</h1>
            
            <iframe src="https://www.youtube.com/embed/EQFwooZpbOc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <hr>
        <div class = "stack">
            <h1>Drama Hub's mission</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
        </div>
        <span id="Cal"><hr></span>
        
       
        <div class = "firstColumn">
           <?php include_once 'calendar.php';?>
          
    <div class = "show">
              <img src="img/homeAdd.jpg"  alt="alt"/>
              
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
          </div>
          </div>
         
    
            
        <hr>
         <div class = "secondColumn">
         <h1>Highlights</h1>
            
          
            <div class = "highlights">
              <div class="flip-box">
              <div class="flip-box-inner">
                <div class="flip-box-front">
                 <img src="img/homeAdd.jpg" width ="100%" height="auto" alt="alt"/>
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
                 <img src="img/homeAdd.jpg" width ="100%" height="auto" alt="alt"/>
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
                 <img src="img/homeAdd.jpg" width ="100%" height="auto" alt="alt"/>
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
          <?php include_once 'footer.php';?>
        <style>
            .firstColumn{
                display: inline-flex;
            }
           
            .show{
                width: 45%;
                margin: 0px auto;
                
            }
            .show img{
                width: 100%;
                margin: 0px auto;
                height: auto;
            } 
            .show p, .show img{
                display: block;
            }
            .secondColumn{
                margin: 3px auto;
                width: 95%;
                height: 300px;
                
            }
            .highlights{
                width: 100%;
                margin: 3px auto;
                display: inline-flex;
            }
            .flip-box-inner p{
                font-size: 1.5rem;
            }           
            .highlights img{
                width: 300px;
                height: 200px;
            }
            .flip-box-front, .flip-box-back,.flip-box {   
                width: 300px;
                height: 200px;
            }
            .flip-box {
              margin: auto;
              perspective: 1000px;
            }
            .flip-box-inner {
              position: relative;

              text-align: center;
              transition: transform 0.8s;
              transform-style: preserve-3d;
            }
            .flip-box:hover .flip-box-inner {
              transform: rotateY(180deg);
            }
            .flip-box-front, .flip-box-back {
              position: absolute;
              -webkit-backface-visibility: hidden;
              backface-visibility: hidden;
            }
            .flip-box-front {

            }
            .flip-box-back {
              background-color: #555555;
              color: #fefeff;
              transform: rotateY(180deg);
            }
            
            
@media only screen and (max-width: 1000px) {
    .highlights img{
               
                width: 240px;
                height: 160px;
                
            }
            .flip-box-front, .flip-box-back,.flip-box {
                width: 240px;
                height: 160px;
            }
}
@media only screen and (max-width: 800px) {
  .highlights{
                display: block;
                width: 80%;
                margin: auto;
                
            }
            
            .highlights img{
                height: 400px;
                width: auto;
                width: 100%;
                margin: auto;
            }
            .flip-box-front, .flip-box-back,.flip-box {
            height: 400px;
            width: 100%;
            margin: 0;
            }
            
            
            .flip-box-inner p{
                font-size: 3rem;
            }
            .firstColumn{
                display: block;
            }
            
           
            .show{
                width: 80%;
                
            }
            .secondColumn{
                height: 1300px
            }
            
            
}
            
            @media only screen and (max-width: 700px) {
                .highlights img{
                height: 350px;
                width: 435px;
            }
            .flip-box-front, .flip-box-back,.flip-box {
            width: 435px;
            height: 350px;
            }
            .secondColumn{
                width: 100%;
                height: 930px
            }
            .flip-box {
                margin: auto;
            }
            
            }

            @media only screen and (max-width: 650px) {
              
              
            
            .highlights img{
                height: 290px;
                width: 370px;
            }
            .flip-box-front, .flip-box-back,.flip-box {
            width: 370px;
            height: 290px;
            
            }
            
            
}           @media only screen and (max-width: 550px) {
                .highlights img{
                width: 340px;
                height: 265px;
                margin-bottom: 30px;
            }
            .flip-box-front, .flip-box-back,.flip-box {
            width: 340px;
            height: 270px;
            margin-bottom: 30px;
            }
            

            }
            
             
            
            @media only screen and (max-width: 500px) {
                
            .highlights img{
                width: 330px;
                height: 260px;
            }
            .flip-box-front, .flip-box-back,.flip-box {
            width: 330px;
            height: 255px;
            }
  
            .flip-box-inner p{
                font-size: 2.5rem;
            }
            .secondColumn {
                margin: 0;
            }
            }
            @media only screen and (max-width: 400px) {
           
                
            .highlights img{
                height: 200px;
                width: 290px;
            }
            .flip-box-front, .flip-box-back,.flip-box {
            height: 200px;
            width: 290px;
            }
            .secondColumn {
                margin: 0;
                height: 750px
            }
           
            }


        </style>
    </body>
</html>