$(document).ready(function () {
    $("#buttonSP").click(function () {
        var UN = $("#UN").val();
        var FN = $("#FN").val();
        var LN = $("#LN").val();
        var EM = $("#EM").val();
        var PW = $("#PW").val();
        

       var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
       
        if (UN === '' || FN === ''|| LN === '' || EM === ''|| PW === '') {
            $('input[type="text"],input[type="password"]').css("border", "2px solid red");
            $('input[type="text"],input[type="password"]').css("box-shadow", "0 0 3px red");
            document.getElementById("wrong").innerHTML = "*Fill in all values";
        }else if(!re.test(PW)){
             $('input[type="password"]').css({"border": "2px solid red", "box-shadow": "0 0 5px red"});
             document.getElementById("wrong").innerHTML = "*Password must contain 6 Characters, 1 Number, 1 Lowercase and 1 Uppercase letter";
        } else {
            $.post("Create.php", {UN: UN, FN: FN, LN: LN, EM: EM, PW: PW},
                    function (data) {  //  data is passed back from the echo statement in the php
                        if (data.includes('invalid')) {
                            $('input[type="text"]').css({"border": "2px solid red", "box-shadow": "0 0 3px red"});
                            $('input[type="password"]').css({"border": "2px solid red", "box-shadow": "0 0 5px red"});
                            alert(data); 
                        } else if (data.includes('taken')) {
                            $('input[type="text"]').css({"border": "2px solid red", "box-shadow": "0 0 3px red"});
                             $('input[type="password"]').css({"border": "2px solid red", "box-shadow": "0 0 5px red"});
                            document.getElementById("wrong").innerHTML = data;
                        } else if (data.includes('free')) {
                            
                            window.location.href = "SignIn.php";
                        } else {
                            alert('Check with system admin, report this message'+ data);
                        }
                    });
        }
    });
});

