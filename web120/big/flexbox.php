<!DOCTYPE html>
<html>
<head>
<title>Flex Box</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/big.css" />
<link rel="stylesheet" href="css/form.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<script src="js/script.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa fa-home"></i> Karolyn Wooley's SCC WEB120 Big</a></h1>
<nav id="cssmenu">
  <ul>
     <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> WEB120 Portal</span></a></li>
     <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> Home</span></a></li>
     <li><a href="flexbox.php"><span>Flexbox</span></a></li>
     <li><a href="galleries.php"><span>Galleries</span></a></li>
     <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a>
        <ul>
           <li><a href="map.php"><span>Map</span></a></li>
           <li><a href="calendar.php"><span>Calendar</span></a></li>
           <li><a href="youtube.php"><span>YouTube</span></a></li>
        </ul>
     </li>
     <li><a href="parallax.php"><span>Parallax</span></a></li>
     <li><a href="shoppingcarts.php"><span>Shopping Carts</span></a></li>
     <li><a href="siteapp.php"><span>Site vs App</span></a></li>
     <li><a href="webcam.php"><span>Web Cam</span></a></li>
  </ul>
</nav>
</header>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Flex Box</h2>
 <h3><strong>Before the Flexbox Layout module, there were four layout modes:</strong></h3>
    <ul>
        <li>Block, for sections in a webpage</li>
        <li>Inline, for text</li>
        <li>Table, for two-dimensional table data</li>
        <li>Positioned, for explicit position of an element</li>
    </ul>
    <p>The Flexible Box Layout Module, makes it easier to design flexible responsive layout structure without using float or positioning.</p>
    
    <h3><strong>Steps:</strong></h3>
    <ol>
        <li>define a flex container.</li>
        <li>set the display property to flex (this makes it flexible)</li>
    </ol>
    
    <h3><strong>The Flex Container Properties:</strong></h3>
    <ul>
        <li>Flex Direction Property
            <ul>
                <li>The flex-direction property defines in which direction the container wants to stack the flex items.
                    <ul>
                        <li>Ex: The column value stacks the flex items vertically (from top to bottom)</li>
                        <li>Ex: The column-reverse value stacks the flex items vertically (but from bottom to top)</li>
                        <li>Ex: The row value stacks the flex items horizontally (from left to right)</li>
                        <li>Ex: The row-reverse value stacks the flex items horizontally (but from right to left)</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>The Flex Wrap Property 
            <ul>
                <li>The flex-wrap property specifies whether the flex items should wrap or not.
                    <ul>
                        <li>Ex: The wrap value specifies that the flex items will wrap if necessary</li>
                        <li>Ex: The nowrap value specifies that the flex items will not wrap (this is default)</li>
                        <li>Ex: The wrap-reverse value specifies that the flexible items will wrap if necessary, in reverse order</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>The Flex-Flow Property
            <ul>
                <li>The flex-flow property is a shorthand property for setting both the flex-direction and flex-wrap properties.</li>
            </ul>
        </li>
        <li>The Justify Content Property
            <ul>
                <li>The justify-content property is used to align the flex items
                    <ul>
                        <li>Ex: The center value aligns the flex items at the center of the container</li>
                        <li>Ex: The flex-start value aligns the flex items at the beginning of the container (this is default)</li>
                        <li>Ex: The flex-end value aligns the flex items at the end of the container</li>
                        <li>Ex: The space-around value displays the flex items with space before, between, and after the lines</li>
                        <li>Ex: The space-between value displays the flex items with space between the lines</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>The Align-Items Property
            <ul>
                <li>The align-items property is used to align the flex items vertically.
                    <ul>
                        <li>Ex: The center value aligns the flex items in the middle of the container</li>
                        <li>Ex: The flex-start value aligns the flex items at the top of the container</li>
                        <li>Ex: The flex-end value aligns the flex items at the bottom of the container</li>
                        <li>Ex: The stretch value stretches the flex items to fill the container (this is default)</li>
                        <li>Ex: The baseline value aligns the flex items such as their baselines aligns</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>Align-Content Property
            <ul>
                <li>The align-content property is used to align the flex lines.
                    <ul>
                        <li>Ex: The space-between value displays the flex lines with equal space between them</li>
                        <li>Ex: The space-around value displays the flex lines with space before, between, and after them</li>
                        <li>Ex: The stretch value stretches the flex lines to take up the remaining space (this is default)</li>
                        <li>Ex: The center value displays display the flex lines in the middle of the container</li>
                        <li>Ex: The flex-start value displays the flex lines at the start of the container</li>
                        <li>Ex: The flex-end value displays the flex lines at the end of the container</li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
    <h3><strong>Child Elements:</strong></h3>
    <ul>
        <li>The Order Property
        <ul>
            <li>The order property specifies the order of the flex items.</li>    
        </ul>
        </li>
        <li>The flex-grow property
        <ul>
            <li>The flex-grow property specifies how much a flex item will grow relative to the rest of the flex items.</li>    
        </ul>
        </li>
        <li>The flex-shrink property
        <ul>
            <li>The flex-shrink property specifies how much a flex item will shrink relative to the rest of the flex items.</li>    
        </ul>
        </li>
        <li>The flex-basis property
        <ul>
            <li>The flex-basis property specifies the initial length of a flex item.</li>    
        </ul>
        </li>
        <li>The flex Property
        <ul>
            <li>The flex property is a shorthand property for the flex-grow, flex-shrink, and flex-basis properties.</li>    
        </ul>
        </li>
        <li>The align self Property
        <ul>
            <li>The align-self property specifies the alignment for the selected item inside the flexible container. The align-self property overrides the default alignment set by the container's align-items property.</li>    
        </ul>
        </li>
    </ul>
      
<form>add client form here</form>
 <p></p>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Citations</h3>
    <p><i>“CSS Flexbox.” CSS Flexbox (Flexible Box), www.w3schools.com/css/css3_flexbox.asp.</i></p>
</aside>
<!-- END RIGHT COL -->
 
<!-- START Footer -->
<footer>
  <p><small>&copy; 2018 - <?=date('Y')?> by <a href="#" target="_blank">Karolyn's Page</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer -->

</div>
<!-- END WRAPPER -->

</body>
</html>
