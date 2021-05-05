$(document).ready(function () {
    $("#reset").click(function () {//Waits until reset has been clicked
        var email = $("#email").val();
        if (email === '') {//Checks if email is input
            $('input[type="text"]').css("border", "2px solid red");
            $('input[type="text"]').css("box-shadow", "0 0 3px red");
           document.getElementById("emailAccount").innerHTML = "*Fill in email";
        }else {
            $.post("email.php", {email: email},//Sends to email.php with each variable
                    function (data) {  //  data is passed back from the echo statement in the php
                        if (data.includes('opening')) {//If php echo response contains opening
                            window.location.href = "passwordReset.php";//Redirect user passwordReset.php
                             
                        }else if(data.includes('Invalid address')){//If php echo response contains Invalid address
                            $('input[type="text"]').css("border", "2px solid red");
                            $('input[type="text"]').css("box-shadow", "0 0 3px red");
                            document.getElementById("emailAccount").innerHTML = "*Invalid Email";
                        }else {
                            alert('Check with system admin, report this message '+ data);//Send response back if there is an error as an alert
                        }
                    });
        }
    });
});

