function createCookie(name, value, days) {
    
        var expires; 
        var date = new Date(); 
        
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000)); 
        expires = "; expires=" + date.toGMTString(); 
   
    document.cookie = escape(name) + "=" +  
        escape(value) + expires + "; path=/"; 
}

$(document).ready(function () {
    $("#buttonlogin").click(function () {
        var username = $("#username").val();
        var password = $("#PW").val();
        var funct = $("#buttonlogin").val();
        
    

        if (username === '') {
            document.getElementById("usernameWrong").innerHTML = "*Fill in username";
            $('input[type="text"]').css("border", "2px solid red");
            $('input[type="text"]').css("box-shadow", "0 0 3px red");                       
        }else if(password === '') {
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
            $.post("Check.php", {username: username, password: password, Check: funct},
                    function (data) {  //  data is passed back from the echo statement in the php
                        if (data.includes('invalid')) {
                            $('input[type="text"]').css({"border": "2px solid red", "box-shadow": "0 0 3px red"});
                            $('input[type="password"]').css({"border": "2px solid red", "box-shadow": "0 0 3px red"});
                            alert(data); 
                        } else if (data.includes('Wrong')) {
                            $('input[type="text"],input[type="password"]').css({"border": "2px solid red", "box-shadow": "0 0 3px red"});
                            alert(data);
                        } else if (data.includes('successfully')) {
                            var num = data.charAt(0);
//                            createCookie("index", num, "7"); 
//                            window.location.href = document.cookie;
                            window.location.href =  "index.php?UserID=" + num;
                        } else {
                            alert('Check with system admin, report this message login.js 26 '+ data);
                        }
                    });
        }
    });
});

