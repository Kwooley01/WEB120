<!DOCTYPE html>
<html>
<head>
<title>Karolyn's Portal</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa fa-home"></i> Karolyn Wooley's SCC WEB120 Portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Karolyn</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Welcome</h2>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 <img src="images/me.jpg" class="desktop" alt="me" />
 <img src="images/dd.jpg" class="phone" alt="snake" />
 <p>Hello! and welcome to my website. My name is Karolyn Wooley and I am a student at Seattle Central College. I am 19 years old and living on my own. Over the summer I graduated from Vashon Island Highschool as a part of the Class of 2018! Although I just graduated from High school, this isn't my first experience at college. I was a Running Start student at South Seattle College for 2 years.</p>
      
 <p>My main interests are cooking, baking, and my pet snake! I started cooking for myself in Sophmore year so that I would know how to make more than instant ramen when I left my home for College. I think I've improved a lot. My baking started when I was little, it all started when I learned how to make brownies from a box with my mom. Ever since then I've been baking many different things. My favorite thing to make is cupcakes from scratch because I love to decorate them. I got my pet snake in winter 2016. He is a ball python name DD. DD is so big that I need to keep him in a tank the size of a desk! </p>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Right Column</h3>
 <img src="images/okay.jpg" class="tablet" alt="just-a-cool-dude" />
    <p>I think so far my favorite languages have been working with HTML and CSS. I've taken a little bit of python and am currently in a javascript and java class. I'm hoping to get a better understanding of the languages and hopefully use my little experience to really enjoy coding. I can alreayd tell this is going to be a great quarter!</p>
</aside>
<!-- END RIGHT COL -->
 
<!-- START Footer -->
<footer>
  <p><small>&copy; 2018 - <?=date('Y')?> by <a href="#" target="_blank">Karolyn's Page</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
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
