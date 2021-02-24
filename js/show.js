var show = false;

$(document).ready(function () {
     
    $("#sideShow").click(function () {
      
    if(show === false){                        
        $('.sideBar').css("width", "100%");
        $('.sideBar').css("visibility", "visible");
        $('.showsArea').css("width", "80%");
        $('.show').css("display", "block");
        $('.show').css("margin", "0");
        $('.show h3').css("font-size", "1em");
        show = true;
    }else if(show === true){
         $('.showsArea').css("width", "90%");
        $('.sideBar').css("width", "0");
        $('.sideBar').css("visibility", "hidden");
         $('.show').css("display", "inline-flex");
         $('.show').css("margin", "10px");
        $('.show h3').css("font-size", "1.17em");
        show = false;
    }
   

});
 function changeSize(x) {
  if (x.matches) {
      console.log("Change");
      $('.showsArea').css("width", "90%");
      $('.show').css("display", "inline-flex");
      $('.sideBar').css("width", "0");
      $('.sideBar').css("visibility", "hidden");
      $('.show h3').css("font-size", "1.17em");
      $('.show').css("margin", "10px");
      show = false;
    
  } else {
      console.log("Change");
      $('.showsArea').css("width", "79%");
      $('.show').css("display", "inline-flex");
      $('.sideBar').css("width", "20%");
      $('.sideBar').css("visibility", "visible");
      $('.show h3').css("font-size", "1.17em");
      $('.show').css("margin", "10px");
  }
}
const smallDevice = window.matchMedia("(max-width: 650px)");    
changeSize(smallDevice);
smallDevice.addListener(changeSize);


});