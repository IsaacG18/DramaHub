
$(document).ready(function () {
     
    $("#submit").click(function () {
        var userID = $("#UserID").val();
        var age = document.querySelector('input[name="Age"]:checked').value;
        var genre = document.querySelector('input[name="Genre"]:checked').value;
        var search = $("#SearchB").val();
        var city = $("#SearchC").val();
        var cost = document.querySelector('input[name="Cost"]:checked').value;
        
        var statement = "";
       if(userID !== "1")
           statement =+ "UserID=" + userID;
       if(age !== "")
           statement =+ "age=" + age;
        if(genre !== "")
           statement =+ "genre=" + genre;
        if(search !== "")
           statement =+ "search=" + search;
        if(cost !== "")
           statement =+ "cost=" + cost;
       if(city !== "")
           statement =+ "city=" + city;
       
       

        address = "Monologues.php?" + statement;
                            
        window.location.href = address;
           
        
   
});});

