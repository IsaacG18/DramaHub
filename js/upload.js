$(document).ready(function () {

    $("#submitItem").click(function () {
        var description = $("#descrip").val();
        var Type = $("#User").val();
        var title = $("#title").val();
        var file = $("#file").val().files[0];;
        var userID = $("#userID").val();
        
            $.post("GetUploader.php", {Type:Type, title:title, file:file, userID:userID, description:description},
                    function (data) {  
                        if (data.includes('invalid')) {
                            alert(data); 
                        } else if (data.includes('taken')) {
                             alert(data);
                        } else if (data.includes('Successful')) {
                            window.location.href = "artWork.php?artID=2";
                        } else {
                            alert('Check with system admin, report this message'+ data);
                        }
                    });
        
    });
});

