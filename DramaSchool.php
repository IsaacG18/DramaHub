<html>
    <head>
        <title>Drama School</title>
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
    
     <?php
    $userID = "";
      if(isset($_COOKIE["user"])&& $_COOKIE["user"] != ''){
         $userID = $_COOKIE["user"];
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
                <button class = 'SignIn' type='submit'>Sign In</button>
                </form>
                <form action='SignUp.php' method='POST'>
                <input name= 'page' type='hidden' value='index'>
                <button class = 'SignUp' type='submit'>Sign Up</button>
                </form>";
            }else{
                echo"<form action='SignOut.php' method='POST'>
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
            <?php echo" <form action='index.php' method='POST'>
                 <input name= 'UserID' type='hidden' value='$userID'>
                <button class = 'first' type='submit'>Home</button>
             </form>
             <form action='Shows.php' method='POST'>
              <input name= 'UserID' type='hidden' value='$userID'>
                <button class = 'other' type='submit'>Shows</button>
             </form>
             <form action='Monologues.php' method='POST'>
              <input name= 'UserID' type='hidden' value='$userID'>
                <button class = 'other' type='submit'>Monologue</button>
             </form>
             <form action='DramaSchool.php' method='POST'>
              <input name= 'UserID' type='hidden' value='$userID'>
                <button class = 'other' type='submit'>Drama School</button>
             </form>
             <form action='getInspired.php' method='POST'>
              <input name= 'UserID' type='hidden' value='$userID'>
                <button class = 'other' type='submit'>Get Inspired</button>
             </form>"; ?>
            </div>
       <h1>Drama School</h1>
       
        <div class = "firstColumn">
            
    <div class="container">
      <div class="calendar">
        <div class="month">
          <i class="fas fa-angle-left prev"></i>
          <div class="date">
              <h1><a href="datesdisplay.php"></a></h1>
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
     
    <script src="js/calendar.js"></script>
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
           <div class = "Welcome">
            <h1>Audition Prep</h1>
            <iframe  src="https://www.youtube.com/embed/EQFwooZpbOc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="split2"></div>
         <div class = "secondColumn">
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
        <div class = "thirdColumn">
         <h1>Warming up</h1>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
              
              <iframe src="https://www.youtube.com/embed/64UW3Gmp5VA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         
        </div>
        <div class="split4"></div>
        <div class = "secondColumn">
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
                 <p>Email@gmail.com</p>
                 <p>075363451323</p>
                 <p>@DramaHub</p>
             </div>
             <img class = "LogoF" src="img/Logo5.png"/>
         </div>
        <style>
             * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'PT Sans', sans-serif;
}

html {
  font-size: 50%;
}
            html{
                margin: 0px; 
                background-color: #7c7c7c;
            }
           
            p, h3{
                color: #fefeff; 
                font-size: 2rem;
            }
            li{
                color: #fefeff; 
                font-size: 2.5rem; 
            }
            h1, h3{
                font-size: 4rem;
            }
            .sideBar h1, .sideBar h3{
                font-size: 2rem;
                margin: 5px 0 2px 3px;
            }
            h1{
                color: #ead700;
                text-align: center;
                text-shadow: 0 0.15rem 0.15rem rgba(200, 200, 200, 0.5);
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
           body{
                margin: 0px;
                padding: 0px;
                max-width: 1200px;
                min-width: 350px;
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
            .banner h1{
                padding-left: 10%;
                color: #fefeff;
                display: inline-flex;
                margin: 3px;
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
            
            
            
            .details{
                width: 50%;
                margin: 10px auto;
            }
            .details p{
                display: block;
            }
            hr{
                width: 90%;
                margin: 20px auto;

                background-color: #ff0429;
                height: 3px;
                border: none;
            }
          
            
            .advice1{
                width: 32%;
                margin: 3px 15px;
                display: inline-block;  
            }
            .advice2{
                width: 60%;
                margin: 3px 15px;
                display: inline-block;  
            }
            
            .secondColumn{
                margin: 3px auto;
                width: 90%;
            }
            .piller{
                width: 32%;
                margin: 3px auto;
                display: inline-block;
               
            }
            .footer{
                background-color: #ff0429;
                height: 200px;
            }
            
            .welcome iframe{
                margin: auto;
                display:block;
                width: 700px;
                height: 400px;
            }
            .welcome h1{
                
            }
            
            .welcome{
                
            }
            .thirdColumn{
                margin: 5px;
                text-align: center;
                margin: 3px auto;
                width: 70%;
            } 
            .split1{
                 width: 100%;
                height: 200px;
                margin: 10px auto;
                background-image: url("img/Drama1.jpg");
                background-repeat: no-repeat; 
                background-size: cover;
                background-position: center;
            }
            iframe{
           height: 400px;
           width: 500px; 
        }
        
            .split2{
                 width: 100%;
                height: 200px;
                margin: 10px auto;
                background-image: url("img/Drama2.jpg");
                background-repeat: no-repeat; 
                background-size: cover;
                background-position: center;
            }
            .split3{
                 width: 100%;
                height: 200px;
                margin: 10px auto;
                background-image: url("img/Drama3.jpg");
                background-repeat: no-repeat; 
                background-size: cover;
               background-position: center;
            }
            .split4{
                 width: 100%;
                height: 200px;
                margin: 10px auto;
                background-image: url("img/Drama4.jpg");
                background-repeat: no-repeat; 
                background-size: cover;
               background-position: center;
            }
            
            
            
            .firstColumn{
                display: inline-flex;
            }
            .container{
                width: 38%;
                height: 400px;
                color: #fefeff;
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 20px 0px 20px 50px;
            }
            .calendar {
                width: 45rem;
                height: 52rem;
                background-color: #555555;
                box-shadow: 0 0.5rem 3rem rgba(0, 0, 0, 0.4);
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
                    text-shadow: 0 0.3rem 0.5rem rgba(0, 0, 0, 0.5);
                  }

                  .month i {
                    font-size: 2.5rem;
                    cursor: pointer;
                  }

                  .month a {
                    font-size: 3rem;
                    font-weight: 400;
                    text-transform: uppercase;
                    letter-spacing: 0.2rem;
                    margin-bottom: 1rem;
                    color: #ead700;
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
            html {
                font-size: 50%;
            } 
            
 * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'PT Sans', sans-serif;
}
li{
    margin-bottom: 5px;
}
@media only screen and (max-width: 1000px) {
    iframe{
                margin-bottom: 90px;
            }
}
@media only screen and (max-width: 950px) {
        .firstColumn{
                display: block;
                margin: 10px auto;
        }
        .thirdColumn{
            width: 90%;
        }
        
        .container{
            width: 90%;
            margin: 10px auto;
        }
        .details{
            width: 90%;
            
        }
        .li{
            font-size: 1.5rem;
        }
        iframe, .welcome iframe{
           height: 400px;
           width: 500px; 
        }
        .mono{
            height: 500px;
        }
        .mono h3{
            font-size: 3rem;
            margin: 20px;
        }
        h1{
            font-size: 4rem;
        }
        .advice1{
            display: block;
            width: 90%;
            margin: 10px auto;
        }
        
        .advice2{
            display: block;
            width: 90%;
            margin: 10px auto; 
        }
        
        iframe{margin: 0;}    
}   
@media only screen and (max-width: 650px) {
    .advice2{
        width: 80%;
    }
              .Logo{
                width: 360px;
                height: 120px;
                bottom: 40px;  
            }
            html{
                font-size: 40%;
            }
            .container{
                height: 350px;
                margin: 10px auto;
            }
            iframe, .welcome iframe{
                height: 320px;
                width: 400px;
            }
            .thirdColumn, .firstColumn,.Welcome, .secondColumn{
                width: 95%;
                
            }   
}        
            @media only screen and (max-width: 500px) {
                .nav [type=submit]{
                    font-size: 90%;
                }
                .footer p{
                    font-size: 1.5rem;
                }
                .footer{height: 125px;}
                
            iframe, .welcome iframe{
                height: 200px;
                width: 300px;
            }
            .thirdColumn, .firstColumn,.Welcome, .secondColumn{
                width: 99%;
            }
                .advice2{
            width: 70%;
            }
          
                .Logo{
                width: 300px;
                height: 100px;
                bottom: 30px;  
            }
            }
            @media only screen and (max-width: 400px) {
            .Logo{
                width: 270px;
                height: 90px;
                bottom: 30px;  
            }
            iframe, .welcome iframe{
                height: 200px;
                width: 250px;
            }
            .footer p{
                    font-size: 1.4rem;
                }
                p, li{
                   font-size:2rem; 
                }
            }
            @media only screen and (max-width: 350px) {
            .Logo{
                width: 270px;
                height: 90px;
                bottom: 30px;  
            }
            iframe, .welcome iframe{
                height: 160px;
                width: 200px;
            }
            .footer p{
                    font-size: 1.4rem;
                }
            }






        </style>
    </body>
</html>