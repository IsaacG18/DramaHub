$(document).ready(function () {
    $("#buttonSP").click(function () {
        var UN = $("#UN").val();
        var FN = $("#FN").val();
        var LN = $("#LN").val();
        var EM = $("#EM").val();
        var PW = $("#PW").val();
        

       

        if (UN === '' || FN === ''|| LN === '' || EM === ''|| PW === '') {
            $('input[type="text"],input[type="password"]').css("border", "2px solid red");
            $('input[type="text"],input[type="password"]').css("box-shadow", "0 0 3px red");
            document.getElementById("wrong").innerHTML = "*Fill in password";
        } else {
            $.post("Create.php", {UN: UN, FN: FN, LN: LN, EM: EM, PW: PW},
                    function (data) {  //  data is passed back from the echo statement in the php
                        if (data.includes('invalid')) {
                            $('input[type="text"]').css({"border": "2px solid red", "box-shadow": "0 0 3px red"});
                            $('input[type="password"]').css({"border": "2px solid #00F5FF", "box-shadow": "0 0 5px #00F5FF"});
                            alert(data); 
                        } else if (data.includes('taken')) {
                            $('input[type="text"]').css({"border": "2px solid red", "box-shadow": "0 0 3px red"});
                            alert(data);
                        } else if (data.includes('free')) {
                            var num = data.slice(-1);
                            window.location.href = "index.php?UserID=" + num;
                        } else {
                            alert('Check with system admin, report this message login.js 26 '+ data);
                        }
                    });
        }
    });
});

