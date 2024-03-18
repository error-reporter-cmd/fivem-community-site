include 'config.php';$decode=json_decode($file,false);$clients=$decode->clients;$svmaxclients=$decode->sv_maxclients; ?><!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title><?php echo $cname  ?> - Home</title>
  <link rel="icon" type="image/x-icon" href="<?php echo $clogo  ?>">
  <meta name="robots" content="index,follow">
  <meta name="description" content="<?php echo $cabout  ?>">
      <meta property="og:title" content="Home - <?php echo $cname  ?>">
      <meta property="og:description" content="<?php echo $cabout  ?>">
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>  

<style>

@import url('https://fonts.googleapis.com/css2?family=Gentium+Plus:ital@1&family=Kdam+Thmor+Pro&family=Lobster&family=Russo+One&display=swap');

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

#footer {
  opacity: 30%;
  text-align: center;
   position:fixed;
   left:0px;
   bottom:0px;
   height:30px;
   width:100%;
    font-family: 'Russo One', sans-serif;
}

#footer:hover{
  opacity: 100%;
}

/* IE 6 */
* html #footer {
   position:absolute;
   top:expression((0-(footer.offsetHeight)+(document.documentElement.clientHeight ? document.documentElement.clientHeight : document.body.clientHeight)+(ignoreMe = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop))+'px');
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

h1{
  color: whitesmoke;
}

p{
    color: whitesmoke;
}

a{
  text-decoration: none;
  font-family: 'Russo One', sans-serif;
  color: #1e90ff;
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
}

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

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
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}


body {
  background: url('<?php echo $backgroundimg  ?>') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  margin: 0;
}

.maincon{
    padding: 0;
    margin: 0;
  text-align: center;
}

.maincon p{
font-family: 'Russo One', sans-serif;
    padding: 0;
    margin: 0;
    font-size: 30px;
}



.itali{
font-family: 'Lobster', cursive;

}
.maincon h1{
  font-family: 'Kdam Thmor Pro', sans-serif;
    padding: 0;
    margin: 0;
    font-size: 60px;
}

.man2{
  padding: 0;
  margin: 0;
  margin-left: 45px;
  text-align: left;
  font-size: 2.5vw;
}

.man2{
  padding: 0;
  margin: 0;
  margin-left: 45px;
  text-align: left;
  font-size: 2.5vw;
}

/* Style the header with a grey background and some padding */
.header {
  overflow: hidden;
  padding: 20px 10px;
}

/* Style the header links */
.header a {
  float: left;
  color: black;
  text-align: center;
  margin-top: 10px;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  margin-top: -10px;
  max-width: 20px;
}

.logo img{
  max-height: 100px;
  max-width: 100px;
}

/* Change the background color on mouse-over */
.header a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the active/current link*/
.header a.active {
  background-color: dodgerblue;
  color: white;
}

/* Float the link section to the right */
.header-right {
  float: right;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header{
  background:rgba(199, 194, 197, 0.8);
    font-family: 'Russo One', sans-serif;
  }
  .header a {
    float: none;
    display: block;
    text-align: left;
    font-family: 'Russo One', sans-serif;
  }
  .header-right {
    float: none;
  }
  
  .logo img{
  display: none;
}
}


* {
  box-sizing: border-box;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.cont {
  height: 200px;
  position: relative;
}

.vertical-center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.active,
.demo:hover {
  opacity: 1;
}


.button{
  size: 50%;
  position:relative;
  display:inline-block;
  margin:20px;
}

.button a{
  color:white;
  font-family:Helvetica, sans-serif;
  font-weight:bold;
  font-size:36px;
  text-align: center;
  text-decoration:none;
  background-color:dodgerblue;
  display:block;
  position:relative;
  padding:20px 40px;
  
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  text-shadow: 0px 1px 0px #000;
  filter: dropshadow(color=#000, offx=0px, offy=1px);
  
  -webkit-box-shadow:inset 0 1px 0 #828282, 0 10px 0 #0d6fd9;
  -moz-box-shadow:inset 0 1px 0 #828282, 0 10px 0 #0d6fd9;
  box-shadow:inset 0 1px 0 #828282, 0 10px 0 #0d6fd9;
  
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}

.button a:active{
  top:10px;
  background-color:green;
  
  -webkit-box-shadow:inset 0 1px 0 #65e290, inset 0 -3px 0 #149f24;
  -moz-box-shadow:inset 0 1px 0 #65e290, inset 0 -3pxpx 0 #149f24;
  box-shadow:inset 0 1px 0 #65e290, inset 0 -3px 0 #149f24;
}

.button:after{
  content:"";
  height:100%;
  width:100%;
  padding:4px;
  position: absolute;
  bottom:-15px;
  left:-4px;
  z-index:-1;
  background-color:#2B1800;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}

</style>


<body>
    <div class="header">
  <a href="#default" class="logo"> <img src="<?php echo $clogo  ?>" >
  <div class="header-right">
    <a class="active" href="<?php echo $domain  ?>">Home</a>
    <a href="<?php echo $domain  ?>team">Team</a>
  </div>
</div>

<div class="maincon">

<h1><?php echo $cname  ?></h1>
  <p><span class="itali">"<?php echo $cslogan  ?>"</span></p>
  <p>Players Online: <?php echo $clients ?>/<?php echo $svmaxclients  ?></p>
  
</div>
  
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"><?php echo $cname  ?></div>
  <img src="<?php echo $gimg1  ?>" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext"><?php echo $cname  ?></div>
  <img src="<?php echo $gimg2  ?>" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext"><?php echo $cname  ?></div>
  <img src="<?php echo $gimg3  ?>" style="width:100%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
  
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3500); // Change image every 2 seconds
}
</script>

  <div class="cont">
      <div class="vertical-center">
  <div ontouchstart="">
  <div class="button">
    <a href="<?php echo $bttnlink  ?>" target="_blank"><?php echo $buttname  ?></a>
  </div>
  </div>
</div>
  </div>


  <p id="footer"> <a href="https://discord.gg/XZPsrNpzsW" target="_blank">Website by Unified Modifications</a></p>


  
  <script src="script.js"></script>
</body>  
</html>
