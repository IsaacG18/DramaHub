$(document).ready(function () {

    $("#submitItem").click(function (e) {//Waits until submitItem has been clicked
        e.preventDefault();

            var form = $('#content')[0];
            var formData = new FormData(form);
            
            var title = $("#title").val().trim();
            var ele = document.getElementsByName('type');
            var type = "";
            for(i = 0; i < ele.length; i++) { //Loop through each option for type
                if(ele[i].checked) 
                type= ele[i].value; 
            } 
            var file = $("#file").val();
            var userID = $("#userID").val();
            var descrip = $("#descrip").val().trim();
        if(userID === "" || userID === 1){
            document.getElementById("wrong").innerHTML = "*User may not be login";
        }else if(title === ""){//Check that title is inputted
            $('input[type="text"]').css("border", "2px solid red");
            $('input[type="text"]').css("box-shadow", "0 0 3px red");
            $('input[type=file]').css("color", "black");
            document.getElementById("wrong").innerHTML = "*Need a title";
        }else if(type === ""){//Check that type is inputted
            $('.RadioType').css("color", "red");
            $('input[type="text"]').css("border", "1px solid black");
            $('input[type="text"]').css("box-shadow", "none");
            $('input[type=file]').css("color", "black");
            document.getElementById("wrong").innerHTML = "*Need a type";
        }else if(file === ""){//Check that file is inputted
            $('input[type=file]').css("color", "red");
            $('.RadioType').css("color", "black");
            $('input[type="text"]').css("border", "1px solid black");
            $('input[type="text"]').css("box-shadow", "none");
            document.getElementById("wrong").innerHTML = "*Need an image";
        }else if(descrip === ""){//Check that descrip is inputted
            $('.RadioType').css("color", "black");
            $('textarea').css("border", "2px solid red");
            $('textarea').css("box-shadow", "0 0 3px red");
            $('input[type="text"]').css("border", "1px solid black");
            $('input[type="text"]').css("box-shadow", "none");
            $('input[type=file]').css("color", "black");
            document.getElementById("wrong").innerHTML = "*Need a description";
        }else{    
             $.ajaxSetup({//Set up for ajax
        headers: {
            'X-CSRF-TOKEN': $('meta[name="token"]').attr('value')
        }
        });
        $.ajax({
              url: '../GetUploader.php',//Sends to GetUploader.php
              type: 'POST',//Send as a post
              data:formData,//formData is what is being sent
                 
              
              contentType: false,
               cache: false,
              processData: false,
              
              success: function(response){//  data is passed back from the echo statement in the php
                 if(response.includes('Unable')){//If php echo response contains Unable
                    document.getElementById("wrong").innerHTML = data;
                    $('.RadioType').css("color", "black");
                    $('textarea').css("border", "1px solid black");
                    $('textarea').css("box-shadow", "none");
                    $('input[type="text"]').css("border", "1px solid black");
                    $('input[type="text"]').css("box-shadow", "none");
                    $('input[type=file]').css("color", "black");
                 }
                 else if(response.includes('Sorry')){//If php echo response contains Sorry
                    document.getElementById("wrong").innerHTML = '*Image file cannot be read';
                    $('input[type=file]').css("color", "red");
                    $('.RadioType').css("color", "black");
                    $('textarea').css("border", "1px solid black");
                    $('textarea').css("box-shadow", "none");
                    $('input[type="text"]').css("border", "1px solid black");
                    $('input[type="text"]').css("box-shadow", "none");
                 }
                 else if(response.includes('Successful')){//If php echo response contains Successful
                    var data = response.split("`");//Get the ID of the add data
                    window.location.href =  "artWork.php?artID=" + data[0];//Send you to the created page
                 }
                 else {
                    alert('Check with system admin, report this message '+ response);//Send response back if there is an error as an alert
                 }
                }
           });
       }
        
    });
});

