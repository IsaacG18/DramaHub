var show = false;

$(document).ready(function () {
     
    $("#sideShow").click(function () {
      
    if(show === false){                        
        $('.sideBar').css("width", "100%");
        $('.sideBar').css("visibility", "visible");
        $('.monologues').css("width", "80%");
        show = true;
    }else if(show === true){
         $('.monologues').css("width", "90%");;
        $('.sideBar').css("width", "0");
        $('.sideBar').css("visibility", "hidden");
        show = false;
    }
   

});
 function changeSize(x) {
  if (x.matches) {
      console.log("Change");
      $('.monologues').css("width", "90%");
      $('.sideBar').css("width", "0");
      $('.sideBar').css("visibility", "hidden");
      show = false;
    
  } else {
      console.log("Change");
      $('.monologues').css("width", "79%");
     // $('.monologues').css("visibility", "visible");
      $('.sideBar').css("width", "20%");
      $('.sideBar').css("visibility", "visible");
  }
}
const smallDevice = window.matchMedia("(max-width: 650px)");    
changeSize(smallDevice);
smallDevice.addListener(changeSize);


});
