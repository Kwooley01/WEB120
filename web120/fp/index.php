<!DOCTYPE html>
<html lang="zxx">
<head>
<title>WooleyWorks Home Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js">
</script>
<link rel="stylesheet" href="css/styles.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
        
<!-- START LEFT COL -->
<section>
    
    <header>
    <ul id="social">
    <li><a href="https://www.facebook.com/" title="Visit Us on Facebook" class="fab fa-facebook-f"></a></li>
    <li><a href="https://www.instagram.com/" title="Visit Us on Instagram" class="fab fa-instagram"></a></li>
    <li><a href="https://twitter.com/" title="Visit Us on Twitter" class="fab fa-twitter"></a></li>
</ul>
  <div class="dropdown">
  <button class="dropbtn">&#9776;</button>
  <div class="dropdown-content">
    <a href="http://karolynspage.com/web120/fp/index.php">Home</a>
    <a href="http://karolynspage.com/web120/fp/gallery.php">Gallery</a>
    <a href="http://karolynspage.com/web120/fp/about_me.php">About Me</a>
    <a href="http://karolynspage.com/web120/fp/contact.php">Contact</a>
  </div>
</div>

</header>
    
    <h1>WooleyWorks	&#128247;</h1>
 
 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      
 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
<!--Slideshow -->
 <div class="slideshow-container">
     
<div class="mySlides fade">
  <img src="images/chair.jpeg" style="width:100%" alt="chair">
</div>

<div class="mySlides fade">
  <img src="images/shadow.jpeg" style="width:100%" alt="shadow">
</div>

<div class="mySlides fade">
  <img src="images/bee-dog.jpeg" style="width:100%" alt="bee-dog">
</div>

<div class="mySlides fade">
  <img src="images/snow-2.jpeg" style="width:100%" alt="snow-2">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>   
</aside>
<!-- END RIGHT COL -->
 
<!-- START Footer -->
<footer>
    <ul>
    <li>
  <small>&copy; 2018 - <?=date('Y')?> by <a href="http://karolynspage.com/web120/index.php" target="_blank">Karolyn's Page</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a> ~ <a href="http://karolynspage.com/web120/fp/disclaimer.php">Disclaimer</a></small>
        </li>
    </ul>
</footer>
<!-- END Footer --> 

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
     </script>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</div>
<!-- END WRAPPER -->

</body>
</html>
