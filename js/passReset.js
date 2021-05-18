$(document).ready(function () {
   $("#button").click(function () {//Waits until buttonlogin has been clicked
        var code = $("#code").val();
        var PW = $("#PW").val();
     
      var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;//Set of restiction the password need to meet
       

        if (code === ''|| PW === '') {//Check that all the variables has been input
            $('#code').css({"border": "2px solid red", "box-shadow": "0 0 3px red"});
            $('#PW').css({"border": "2px solid red", "box-shadow": "0 0 3px red"});
           document.getElementById("pReset").innerHTML = "*Fill in infomation";
        }else if(!re.test(PW)){//Check that the password meets the requirements in re
            $('#code').css({"border": "1px solid black", "box-shadow": "none"});
            $('#PW').css({"border": "2px solid red", "box-shadow": "0 0 3px red"});
           document.getElementById("pReset").innerHTML = "*Password must contain 6 Characters, 1 Number, 1 Lowercase and 1 Uppercase letter";
        }else{
            $.post("codeCheck.php", {code:code, PW:PW},//Sends to codeCheck.php with each variable
                    function (data) {  //  data is passed back from the echo statement in the php
                        if (data.includes('incorrect')) {//If php echo response contains incorrect
                            $('input[type="text"]').css({"border": "2px solid red", "box-shadow": "0 0 3px red"});
                            $('input[type="password"]').css({"border": "2px solid red", "box-shadow": "0 0 3px red"});
                            document.getElementById("pReset").innerHTML = "*Some infomation is incorrect";
                        } else if (data.includes('again')) {//If php echo response contains again
                            document.getElementById("pReset").innerHTML = (data);
                        } else if (data.includes('correctly')) {//If php echo response contains correctly
                              window.location.href =  "SignIn.php";//Redirents to the sign in page
                        } else {
                            alert('Check with system admin (Admin@email.com), report this message '+ data);//Send response back if there is an error as an alert
                        }
                    });
        }
    });
   
    $("#reset").click(function () {
        var email = $("#email").val();
       
        
      
       

        if (email === '') {
            $('#email').css("border", "2px solid red");
            $('#email').css("box-shadow", "0 0 3px red");
           document.getElementById("emailAccount").innerHTML = "*Fill in email";
        }else {
            $.post("email.php", {email: email},
                    function (data) {  //  data is passed back from the echo statement in the php
                        if (data.includes('opening')) {
                            
                            window.location.href = "PasswordReset.php";
                             
                        }else if(data.includes('Invalid address')){
                            $('#email').css("border", "2px solid red");
                            $('#email').css("box-shadow", "0 0 3px red");
                            document.getElementById("emailAccount").innerHTML = "*Invalid Email";
                        }  else {
                            alert('Check with system admin (Admin@email.com), report this message'+ data);
                        }
                    });
        }
    });
});
