
$(document).ready(function () {
     
    $("#submit").click(function () {
        var userID = $("#UserID").val();
        var age = document.querySelector('input[name="Age"]:checked').value;
        var gender = document.querySelector('input[name="gender"]:checked').value;
        var searchB = $("#SearchB").val();
        var type = document.querySelector('input[name="Type"]:checked').value;
        var period = document.querySelector('input[name="Period"]:checked').value;
        var statement = "";
       if(userID !== "1")
           statement =+ "UserID=" + userID;
       if(age !== "")
           statement =+ "Age=" + age;
       if(gender !== "")
           statement =+ "Gender=" + gender;
        if(searchB !== "")
           statement =+ "Search=" + searchB;
        if(type !== "")
           statement =+ "Type=" + type;
        if(period !== "")
           statement =+ "Period=" + period;
       
       
       

        address = "Monologues.php?" + statement;
                            
        window.location.href = address;
           
        
   
});});

