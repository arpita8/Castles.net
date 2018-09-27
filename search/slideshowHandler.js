var slideIndex = 1;

function plusSlides(n) {
  clearInterval(interval);
  interval = setInterval(plusSlides, time, 1);
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  clearInterval(interval);
  interval = setInterval(plusSlides, time, 1);
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = $(".mySlides");
  var dots = $(".dot");
  if (n > slides.length) slideIndex = 1;
  if (n < 1) slideIndex = slides.length;
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  $(".numbertext").html(slideIndex + " / " + (listing.imagesDir.length));
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
function slideshow(){
  interval = setInterval(plusSlides, time, 1);
  showSlides(slideIndex);
}

function toggleInterval(target, time, interval){
  $(target).mouseover(function(){
    clearInterval(interval);
  });
  $(target).mouseleave(function(){
    interval = setInterval(plusSlides, time, 1);
  });
}