
        var slideIndex = 0;
showSlides();//Calls the side show function

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  //hides each slide
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; //Shows current slide 
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); //Re runs the function after 2 seconds
}

