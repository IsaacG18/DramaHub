$(document).ready(function () {
    $("#buttonSign").click(function () {
        document.cookie = "user= ; expires = Thu 01 Jan 00:00:00 GMT";
        window.location.href =  "index.php";
    });
});




