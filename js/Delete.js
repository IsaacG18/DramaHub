$(document).ready(function () {
    $("#buttondelete").click(function () {//Waits until buttondelete has bee clicked
        var id = $("#UserID").val();//Get login in userID
        var password = $("#PW").val();//Get user enter passsword 1
        var password2 = $("#PW2").val();//Get user enter passsword 2
        
      
       

        if (password2 === '' || password === '') {//Check that both passwords exist
            $('input[type="password"]').css("border", "2px solid red");
            $('input[type="password"]').css("box-shadow", "0 0 3px red");
           document.getElementById("passwordWrong").innerHTML = "*Fill in passwords";//Send response to user
        }else if(password !== password2){//Check that passwords match
             $('input[type="password"]').css("border", "2px solid red");
            $('input[type="password"]').css("box-shadow", "0 0 3px red");
             document.getElementById("passwordWrong").innerHTML = "*Password must be the same";//Send response to user
        }else if(id === "" || id === 1){//Check if user is logged in
            alert("Try login back in");
        }else {
            $.post("deleteCheck.php", {password: password, id: id},//Send data to deleteCheck file
                    function (data) {  //The data echo response from the php file
                        if (data.includes('invalid')) {//If php echo response includes invalid
                            document.getElementById("passwordWrong").innerHTML = "";
                            alert(data);
                            $('input[type="password"]').css({"border": "2px solid red", "box-shadow": "0 0 5px "});
                        }  else if (data.includes('successfully')) {//If php echo response includes successfully
                            alert(data);
                            document.cookie = "user= ; expires = Thu 01 Jan 00:00:00 GMT";//Creates a empty cookie reseting current one
                            window.location.href =  "index.php";
                            
                        } else {
                            alert('Check with system admin(Admin@email), report this message'+ data);//Alerts send and deals with an error from the php file 
                        }
                    });
        }
    });
});

