$(document).ready(function () {
   $("#button").click(function () {
        var code = $("#code").val();
        var PW = $("#PW").val();
     
      
       

        if (code === ''|| PW === '') {
            $('#code').css({"border": "2px solid red", "box-shadow": "0 0 3px red"});
            $('#PW').css({"border": "2px solid red", "box-shadow": "0 0 3px red"});
           document.getElementById("pReset").innerHTML = "*Fill in infomation";
        }else {
            $.post("codeCheck.php", {code:code, PW:PW},
                    function (data) {  //  data is passed back from the echo statement in the php
                        if (data.includes('incorrect')) {
                            $('input[type="text"]').css({"border": "2px solid red", "box-shadow": "0 0 3px red"});
                            $('input[type="password"]').css({"border": "2px solid red", "box-shadow": "0 0 3px red"});
                            document.getElementById("pReset").innerHTML = "*Some infomation is incorrect";
                        } else if (data.includes('again')) {
                            document.getElementById("pReset").innerHTML = (data);
                        } else if (data.includes('correctly')) {
                              window.location.href =  "SignIn.php";
                        } else {
                            alert('Check with system admin, report this message '+ data);
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
                            
                            window.location.href = "passwordReset.php";
                             
                        }  else {
                            alert('Check with system admin, report this message'+ data);
                        }
                    });
        }
    });
});
