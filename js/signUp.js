$(document).ready(function () {
    $("#buttonSP").click(function () {//Waits until buttonSP has been clicked
        var UN = $("#UN").val();
        var FN = $("#FN").val();
        var LN = $("#LN").val();
        var EM = $("#EM").val();
        var PW = $("#PW").val();
        

       var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;//Set of restiction the password need to meet
       
        if (UN === '' || FN === ''|| LN === '' || EM === ''|| PW === '') {//Check that all the variables has been input
            $('input[type="text"],input[type="password"]').css("border", "2px solid red");
            $('input[type="text"],input[type="password"]').css("box-shadow", "0 0 3px red");
            document.getElementById("wrong").innerHTML = "*Fill in all values";
        }else if(!re.test(PW)){//Check that the password meets the requirements in re
             $('input[type="password"]').css({"border": "2px solid red", "box-shadow": "0 0 5px red"});
             document.getElementById("wrong").innerHTML = "*Password must contain 6 Characters, 1 Number, 1 Lowercase and 1 Uppercase letter";
        } else {
            $.post("Create.php", {UN: UN, FN: FN, LN: LN, EM: EM, PW: PW},//Sends to Create.php with each variable
                    function (data) {  //  data is passed back from the echo statement in the php
                        if (data.includes('invalid')) {//If php echo response contains invalid
                            $('input[type="text"]').css({"border": "2px solid red", "box-shadow": "0 0 3px red"});
                            $('input[type="password"]').css({"border": "2px solid red", "box-shadow": "0 0 5px red"});
                            alert(data); 
                        } else if (data.includes('taken')) {//If php echo response contains taken
                            $('input[type="text"]').css({"border": "2px solid red", "box-shadow": "0 0 3px red"});
                             $('input[type="password"]').css({"border": "2px solid red", "box-shadow": "0 0 5px red"});
                            document.getElementById("wrong").innerHTML = data;
                        } else if (data.includes('free')) {//If php echo response contains free
                            window.location.href = "SignIn.php";//Redirents to the sign in page
                        } else {
                            alert('Check with system admin (Admin@email.com), report this message '+ data);//Send response back if there is an error as an alert
                        }
                    });
        }
    });
});

