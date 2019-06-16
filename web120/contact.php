<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Contact Me</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js">
</script>
<link rel="stylesheet" href="css/styles.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
</head>

<body id="contact">
<!-- START WRAPPER -->
<div class="wrapper">
        
<!-- START LEFT COL -->
<section id="inner">
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
<h1>Contact Me</h1>
    <img src="images/balcony-cat.jpeg" alt="cat" id="cat">
    <div class="contact-container">
  <form action="#">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      
    <label for="fname">Email</label>
    <input type="text" id="email" name="email" placeholder="Your email..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="usa">USA</option>
      <option value="canada">Canada</option>
      <option value="australia">Australia</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
</section>
 
<!-- START Footer -->
<footer>
    <ul>
    <li>
  <p><small>&copy; 2018 - <?=date('Y')?> by <a href="http://karolynspage.com/web120/index.php" target="_blank">Karolyn's Page</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a> ~ <a href="http://karolynspage.com/web120/fp/disclaimer.php">Disclaimer</a></small></p>
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
</div>
<!-- END WRAPPER -->

</body>
</html>
