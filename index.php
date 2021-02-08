<html>
    <head>
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
    $userID = "";
//     if(isset( $_COOKIE["UserID"])){
//         echo $_COOKIE["UserID"];
//         $userID = $_COOKIE["UserID"];
//
//     }else{
//         $userID = 1;
//     }
    if(isset( $_GET["UserID"])){
         $userID = $_GET["UserID"];
     }else{
         $userID = 1;
     }
    ?>
    <body>
        <div class = "banner">
            <img class = "Logo" src="img/Logo5.png"/>
            <?php
            if($userID == 1){
                echo"
                <form action='SignIn.php' method='POST'>
                <input name= 'page' type='hidden' value='index'>
                <button class = 'SignIn' type='submit'>Sign in</button>
                </form>
                <form action='SignUp.php' method='POST'>
                <input name= 'page' type='hidden' value='index'>
                <button class = 'SignUp' type='submit'>Sign Up</button>
                </form>";
            }else{
                echo"<form action='index.php' method='POST'>
                <button class = 'SignOut' type='submit'>Sign Out</button>
                </form>
                <form action='Delete.php' method='POST'>
                <input name= 'UserID' type='hidden' value='$userID'>
                <input name= 'page' type='hidden' value='index'>
                <button class = 'Delete' type='submit'>Delete</button>
                </form>";
            }
            ?>
            
        </div>
        
         <div class = "nav">
            <?php echo" <form action='index.php' method='GET'>
                 <input name= 'UserID' type='hidden' value='$userID'>
                <button class = 'first' type='submit'>Home</button>
             </form>
             <form action='Shows.php' method='GET'>
              <input name= 'UserID' type='hidden' value='$userID'>
                <button class = 'other' type='submit'>Shows</button>
             </form>
             <form action='Monologues.php' method='GET'>
              <input name= 'UserID' type='hidden' value='$userID'>
                <button class = 'other' type='submit'>Monologue</button>
             </form>
             <form action='DramaSchool.php' method='GET'>
              <input name= 'UserID' type='hidden' value='$userID'>
                <button class = 'other' type='submit'>Drama School</button>
             </form>
             <form action='getInspired.php' method='GET'>
              <input name= 'UserID' type='hidden' value='$userID'>
                <button class = 'other' type='submit'>Get Inspired</button>
             </form>"; ?>
            </div>
        <div class = "Welcome">
            <h1>Welcome To Drama Hub</h1>
            
            <iframe width= "600px" height="300px" src="https://www.youtube.com/embed/EQFwooZpbOc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <hr>
        <div class = "goal">
            <h1>Drama Hub's mission</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
        </div>
        <hr>
       
        <div class = "firstColumn">
          <div class="container">
      <div class="calendar">
        <div class="month">
          <i class="fas fa-angle-left prev"></i>
          <div class="date">
            <h1></h1>
            <p></p>
          </div>
          <i class="fas fa-angle-right next"></i>
        </div>
        <div class="weekdays">
          <div>Sun</div>
          <div>Mon</div>
          <div>Tue</div>
          <div>Wed</div>
          <div>Thu</div>
          <div>Fri</div>
          <div>Sat</div>
        </div>
        <div class="days"></div>
      </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>       
    <script src="js/index.js"></script>
    <div class = "show">
              <img src="img/homeAdd.jpg" width ="100%" height="300px" alt="alt"/>
              
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
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
         <div class = "footer">
             <div class = "piller">
                 <p>Partnerships</p>
                 <p>National Theatre</p>
                 <p>Drama School</p>
                 <p>Theatre Companies</p> 
             </div>
             <div class = "piller">
                 <p>Mission Statment</p>
                 <p>Covid-19</p>
                 <p>Donate</p>
             </div>
             <div class = "piller">
                 <p>Contact</p>
                 <p>Emailcontact@gmail.com</p>
                 <p>075363451323</p>
                 <p>@DramaHub</p>
             </div>
             <img class = "LogoF" src="img/Logo5.png"/>
         </div>
        <style>
            html{
                margin: 0px;
                padding: 0px;
                background-color: #7c7c7c;
            }
            p, h3{
                color: #fefeff; 
                font-size: 2rem;
            }
            h1, h3{
                font-size: 4rem;
            }
            h1{
                color: #ead700;
                text-shadow: 0 0.15rem 0.15rem rgba(200, 200, 200, 0.5);
                text-align: center;
            }
            body{
                margin: 0px;
                padding: 0px;
                max-width: 1200px;
                min-width: 800px;
                margin: auto;
                background-color: #08080c;
                border: solid 4px #ff0429;
            }
            .banner{
                width: 100%;
                height: 550px;
                margin: 0px auto;
                background-image: url("img/Banner.jpg");
                background-repeat: no-repeat; 
                background-size: cover;
                background-position: bottom;
            }
            
            
            .Logo{
                width: 480px;
                height: 160px;
                float: left;
                position: relative;
                margin: 0;
                bottom: 52px;
                
                
            }
            .LogoF{
                width: 180px;
                height: 60px;
                
                position: relative;
                margin: 0;
                bottom: 11px;
                
            }
            
            .banner button{
                float: right;
                margin: 5px;
                background-color: #08080c;
                color: #fefeff;
                text-align: center;
                border-radius: 10px;
            }
            .nav{
               background-color: #ff0429;
                margin: 0;
                
            }
            .first{
               border: none; 
            }
            .other{
                 border: none;
               border-left: solid 2.5px #ead700;
            }
            .nav form{
               width: 19%;
              background-color: #ff0429;
              color: #fefeff;
              margin: auto;
              display:inline-flex;
            }
            .nav [type=submit]{
              width: 100%;
              background-color: #ff0429;
              color: #fefeff;
              text-align: center;
               text-decoration: none;
               cursor: pointer;
                 
            }
            
            .firstColumn{
                display: inline-flex;
            }
            .container{
                width: 45%;
                height: 400px;
                color: #fefeff;
                display: flex;
                justify-content: center;
                align-items: center;
               
                margin-left: 4%;
            }
            .show{
                width: 45%;
                margin: 0px auto;
                
            }
            .show p, .show img{
                display: block;
            }
            .welcome iframe{
                margin: auto;
                display:block;
            }
            .welcome h1{
                text-align: center;
            }
            
            .welcome{
                margin: 5px;
            }
            
            .goal h1, .goal p{
                text-align: center;
            }
            
            .goal{
                margin: 5px auto;
                width: 80%
            }
            hr{
                width: 90%;
                margin: 20px auto;

                background-color: #ff0429;
                height: 3px;
                border: none;
            }
            .secondColumn{
                margin: 3px auto;
                width: 90%;
                
            }
            
            .highlights{
                width: 100%;
                margin: 3px auto;
                display: inline-flex;
               
            }
            
            .highlights image{
                margin: 10px auto;
                
            }
            .piller{
                width: 32%;
                margin: 3px auto;
                display: inline-block;
               
            }
            .footer{
                background-color: #ff0429;
                height: 200px;
                font-size: 2rem;
            }
            .footer p{
                margin: 10px;
            }
            * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'PT Sans', sans-serif;
}

html {
  font-size: 50%;
}


.calendar {
  width: 45rem;
  height: 52rem;
  background-color: #555555;
  box-shadow: 0 0.2rem 3rem rgba(0, 0, 0, 0.4);
}

.month {
  width: 100%;
  height: 12rem;
  background-color: #ff0429;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 2rem;
  text-align: center;
  text-shadow: 0 0.5rem 0.5rem rgba(0, 0, 0, 0.5);
}

.month i {
  font-size: 2.5rem;
  cursor: pointer;
}

.month h1 {
  font-size: 3rem;
  font-weight: 400;
  text-transform: uppercase;
  letter-spacing: 0.2rem;
  margin-bottom: 1rem;
}

.month p {
  font-size: 1.6rem;
}

.weekdays {
  width: 100%;
  height: 5rem;
  padding: 0 0.4rem;
  display: flex;
  align-items: center;
}

.weekdays div {
  font-size: 1.5rem;
  font-weight: 400;
  letter-spacing: 0.1rem;
  width: calc(44.2rem / 7);
  display: flex;
  justify-content: center;
  align-items: center;
  text-shadow: 0 0.3rem 0.5rem rgba(0, 0, 0, 0.5);
}

.days {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  padding: 0.2rem;
}

.days div {
  font-size: 1.4rem;
  margin: 0.3rem;
  width: calc(40.2rem / 7);
  height: 5rem;
  display: flex;
  justify-content: center;
  align-items: center;
  text-shadow: 0 0.3rem 0.5rem rgba(0, 0, 0, 0.5);
  transition: background-color 0.2s;
}

.days div:hover:not(.today) {
  background-color: #262626;
  border: 0.2rem solid #ff0429;
  cursor: pointer;
}

.prev-date,
.next-date {
  opacity: 0.5;
}

.today {
  background-color: #ff0429;
}
.flip-box {
  
  width: 100%;
  height: 300px;
  perspective: 1000px;
  
}
.highlights img{
                min-height: 225px;
        }

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 225px;
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

@media only screen and (max-width: 800px) {
  .highlights{
                display: block;
                width: 80%;
       
            }
            .highlights img{
                height: 400px;
                width: auto;
                width: 95%;
                margin: auto;
            }
            .flip-box-front, .flip-box-back,.flip-box {

            height: 400px;
            width: 100%;
            margin: 0;
            }
            
            .goal p{
                font-size: 1.5rem;
            }
            .flip-box-inner p{
                font-size: 3rem;
            }
            .firstColumn{
                display: block;
            }
            .container{
                width: 100%;
                height: 500px;
                margin-bottom: 20px;
                margin: 10px 0px 20px 0px;
            }
            html{
                font-size: 60%;
                
            }
            .show{
                width: 80%;
                
            }
            .show img{
                height: 400px;
            }
            
}


        </style>
    </body>
</html>