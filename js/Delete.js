$(document).ready(function () {
    $("#buttondelete").click(function () {
        var id = $("#UserID").val();
        var password = $("#PW").val();
        var password2 = $("#PW2").val();
        
      
       

        if (password2 === '' || password === '') {
            $('input[type="password"]').css("border", "2px solid red");
            $('input[type="password"]').css("box-shadow", "0 0 3px red");
           document.getElementById("passwordWrong").innerHTML = "*Fill in passwords";
        }else if(password !== password2){
             $('input[type="password"]').css("border", "2px solid red");
            $('input[type="password"]').css("box-shadow", "0 0 3px red");
             document.getElementById("passwordWrong").innerHTML = "*Password must be the same";
        }else if(id === ""){
            alert("Try login back in");
        }else {
            $.post("deleteCheck.php", {password: password, id: id},
                    function (data) {  //  data is passed back from the echo statement in the php
                        if (data.includes('invalid')) {
                            alert(data); 
                            $('input[type="password"]').css({"border": "2px solid red", "box-shadow": "0 0 5px "});
                            
                        }  else if (data.includes('successfully')) {
                            window.location.href = "index.php";;
                        } else {
                            alert('Check with system admin, report this message'+ data);
                        }
                    });
        }
    });
});

