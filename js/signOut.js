$(document).ready(function () {
    $("#buttonSign").click(function () {//Waits until buttonSign has been clicked
        document.cookie = "user= ; expires = Thu 01 Jan 00:00:00 GMT";//Deletes cookie
        window.location.href =  "index.php";//Redirect user to index page
    });
});




