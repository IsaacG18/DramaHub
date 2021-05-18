$(document).ready(function () {
    $("#comment").click(function () {//Waits until comment has been clicked
        var content = $("#content").val();
        var userID = $("#userID").val();
        var comment = $("#comment").val();
        var ID = $("#ID").val();
        content = content.trim();//Get trims the white space either side of the content
        
        if (content === '' || userID === '' || comment === ''|| ID === '') {//Check if any values are not input
            document.getElementById("wrong").innerHTML = "*Fill in box";
            $('textarea').css("border", "2px solid red");
            $('textarea').css("box-shadow", "0 0 3px red");                       
        }else { 
                $('textarea').css("border", "solid 2px #ead700;");
                $('textarea').css("box-shadow", "none"); 
                 document.getElementById("wrong").innerHTML = "";
            $.post("comment.php", {content: content, userID: userID, comment:comment, ID:ID},//Sends to comment.php with each variable
                    function (data) {  //  data is passed back from the echo statement in the php
                        if (data.includes('invalid')) {
                            $('textarea').css("border", "2px solid red");
                            $('textarea').css("box-shadow", "0 0 3px red"); 
                            document.getElementById("wrong").innerHTML = data; //Send response back if there is an issue on the page
                        } else if (data.includes('successfully')) {
                            location.reload(true);//Refreshes page
                        } else {
                            alert('Check with system admin (Admin@email.com), report this message:'+ data);//Send response back if there is an error as an alert
                        }
                    });
        }
    });
});


