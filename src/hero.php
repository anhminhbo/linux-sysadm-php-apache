<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
* {box-sizing: border-box; font-family: 'Montserrat', sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: none;
  height: 500px;
  overflow: hidden;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
  z-index: 10; /* Increase the z-index value to overlay the dots */
  position: relative; /* Add position: relative to enable z-index */
}

.dot-container {
  position: absolute;
  top: 600px;
  right: 47%;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (min-width: 1900px) {
}
</style>
</head>
<body>
  <div class="slideshow-container">
    <div class="mySlides fade">
      <img src="/src/img/house-1.jpg" style="width:150%">
    </div>

    <div class="mySlides fade">
      <img src="/src/img/house-2.jpg" style="width:150%">
    </div>

    <div class="mySlides fade">
      <img src="/src/img/house-3.jpg" style="width:150%">
    </div>
    <div class="overlay">
      <p>The Most Trusted Real Estate Agent in Moscow</p>
    </div>
  </div>
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html> 