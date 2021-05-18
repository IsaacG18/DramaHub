function createCookie(name, value, days) {
        var expires; 
        var date = new Date(); 
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000)); //Create a cookie for a week to expire
        expires = "; expires=" + date.toGMTString();
    document.cookie = name + "=" +  
        value + expires + "; path=index.php"; //Create a cookie with all the details
}

$(document).ready(function () {
    $("#buttonlogin").click(function () {//Waits until buttonlogin has been clicked
        var username = $("#username").val();
        var password = $("#PW").val();
       
        if (username === '') {//Check that username is inputted
            document.getElementById("usernameWrong").innerHTML = "*Fill in username";
            $('input[type="text"]').css("border", "2px solid red");
            $('input[type="text"]').css("box-shadow", "0 0 3px red");                       
        }else if(password === '') {//Check that password is inputted
            document.getElementById("passwordWrong").innerHTML = "*Fill in password";
            document.getElementById("usernameWrong").innerHTML = "";
            $('input[type="password"]').css("border", "2px solid red");
            $('input[type="password"]').css("box-shadow", "0 0 3px red");
            $('input[type="text"]').css("border", "1px solid black");
            $('input[type="text"]').css("box-shadow", "none"); 
            
        } else { $('input[type="text"]').css("border", "1px solid black");
                 $('input[type="text"]').css("box-shadow", "none"); 
                 $('input[type="password"]').css("border", "1px solid black");
                 $('input[type="password"]').css("box-shadow", "none"); 
                 document.getElementById("usernameWrong").innerHTML = "";
                 document.getElementById("passwordWrong").innerHTML = "";
            $.post("Check.php", {username: username, password: password},//Sends to Check.php with each variable
                    function (data) {  //  data is passed back from the echo statement in the php
                        if (data.includes('invalid')) {//If php echo response contains invalid
                            $('input[type="text"]').css({"border": "2px solid red", "box-shadow": "0 0 3px red"});
                            $('input[type="password"]').css({"border": "2px solid red", "box-shadow": "0 0 3px red"});
                            document.getElementById("passwordWrong").innerHTML = data; 
                        } else if (data.includes('Wrong')) {//If php echo response contains Wrong
                            $('input[type="text"],input[type="password"]').css({"border": "2px solid red", "box-shadow": "0 0 3px red"});
                            document.getElementById("passwordWrong").innerHTML = data;
                        } else if (data.includes('successfully')) {//If php echo response contains successfully
                            var num = data.split(" ");//Split to get the users ID
                            createCookie("user", num[0], "7"); 
                            window.location.href = document.cookie;//Sends user with cookie
                        } else {
                            alert('Check with system admin (Admin@email.com), report this message '+ data);//Send response back if there is an error as an alert
                        }
                    });
        }
    });
});

