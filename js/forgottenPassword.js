$(document).ready(function () {
   
    $("#reset").click(function () {
        var email = $("#email").val();
       

      
       

        if (email === '') {
            $('input[type="text"]').css("border", "2px solid red");
            $('input[type="text"]').css("box-shadow", "0 0 3px red");
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

