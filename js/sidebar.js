var show = false;

$(document).ready(function () {
     
    $("#sideShow").click(function () {
      
    if(show === false){                        
        $('.sideBar').css("width", "100%");
        $('.sideBar').css("visibility", "visible");
        $('.sideBar form').css("visibility", "visible");
        $('.gallery').css("width", "80%");
        $('.show').css("display", "block");
        $('.show h3').css("font-size", "2rem");
        $('.show h5').css("font-size", "1.8rem");
        $('.show').css("margin", "0");
       
        show = true;
    }else if(show === true){
         $('.gallery').css("width", "90%");
        $('.sideBar').css("width", "0");
        $('.sideBar form').css("visibility", "hidden");
        $('.sideBar').css("visibility", "hidden");
         $('.show').css("display", "inline-flex");
         $('.show h3').css("font-size", "3.2rem");
         $('.show h5').css("font-size", "3.0rem");
         $('.show').css("margin", "10px");
        
        show = false;
    }
   

});
 function changeSize(x) {
  if (x.matches) {
      console.log("Change");
      $('.gallery').css("width", "90%");
      $('.show').css("display", "inline-flex");
      $('.sideBar').css("width", "0");
      $('.sideBar form').css("visibility", "hidden");
      $('.sideBar').css("visibility", "hidden");
      $('.show h3').css("font-size", "3.2rem");
      $('.show h5').css("font-size", "3.0rem");
      $('.show').css("margin", "10px");
      show = false;
    
  } else {
      console.log("Change");
      $('.gallery').css("width", "79%");
      $('.show').css("display", "inline-flex");
      $('.sideBar').css("width", "20%");
      $('.sideBar form').css("visibility", "visible");
      $('.sideBar').css("visibility", "visible");
      $('.show h3').css("font-size", "3.2rem");
      $('.show h5').css("font-size", "3.0rem");
      $('.show').css("margin", "10px");
  }
}
const smallDevice = window.matchMedia("(max-width: 650px)");    
changeSize(smallDevice);
smallDevice.addListener(changeSize);


});