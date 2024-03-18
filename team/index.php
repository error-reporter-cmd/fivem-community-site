include '../config.php'; ?><!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title><?php echo $cname  ?> - Team</title>
  <link rel="icon" type="image/x-icon" href="<?php echo $clogo  ?>">
  <meta name="description" content="<?php echo $cabout  ?>">
      <meta property="og:title" content="Home - <?php echo $cname  ?>">
      <meta property="og:description" content="<?php echo $cabout  ?>">
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>  

<style>
  
@import url('https://fonts.googleapis.com/css2?family=Gentium+Plus:ital@1&family=Kdam+Thmor+Pro&family=Lobster&family=Russo+One&display=swap');
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card h2 {
    font-family: 'Kdam Thmor Pro', sans-serif;
    font-size: 30px;
  color: whitesmoke;
}
  
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    background-color: black; 
    center no-repeat; /*Setting a background image via url. The position of the background will be center and the image will be set so that it does not repeat. */
    background-size: cover; /*Setting the size of the background to cover will scale the image to fill the entire space of the container while preserving it's ratio.*/
    border: 2px solid whitesmoke;
    border-radius: 4px;
    position: relative; /*Position of relative is set because of the title that we will have inside of here with position of absolute.*/
    transform-style: preserve-3d; /*This will make the children of the card remain in a 3D space (the title). */
    will-change: transform; /*Tells the user agent to expect a change on the transform property and prepares it for rendering. */
    transition: transform .5s; /*Makes the animation smooth over .5 seconds. */
}

.card:hover{
    transform: translateZ(10px)
    rotateX(20deg) rotateY(30deg);
    /*
        The translateZ function repositions the element along the z-axis in 3D space, for example, closer to or farther away from the viewer.
        The rotateX function will rotate the element in the X axis, rotateY on the Y axis.
    */
}
  
.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
      font-family: 'Russo One', sans-serif;
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
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

body {
  background: url('<?php echo $backgroundimg  ?>') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  margin: 0;
}

.itali{
font-family: 'Lobster', cursive;

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

</style>

  
<body>
    <div class="header">
  <a href="#default" class="logo"> <img src="<?php echo $clogo  ?>">
  <div class="header-right">
    <a href="<?php echo $domain  ?>">Home</a>
    <a class="active" href="<?php echo $domain  ?>/team">Team</a>
  </div>
</div>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="<?php echo $mem1pic  ?>" alt="<?php echo $mem1name  ?>" style="width:100%">
      <div class="container">
        <h2><?php echo $mem1name  ?></h2>
        <p class="title"><?php echo $mem1tile  ?></p>
        <p><span class="itali"><?php echo $mem1desc  ?></span></p>

      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="<?php echo $mem2pic  ?>" alt="<?php echo $mem2name  ?>" style="width:100%">
      <div class="container">
        <h2><?php echo $mem2name  ?></h2>
        <p class="title"><?php echo $mem2tile  ?></p>
        <p><span class="itali"><?php echo $mem2desc  ?></span></p>

      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="<?php echo $mem3pic  ?>" alt="<?php echo $mem3name  ?>" style="width:100%">
      <div class="container">
        <h2><?php echo $mem3name  ?></h2>
        <p class="title"><?php echo $mem3tile  ?></p>
        <p><span class="itali"><?php echo $mem3desc  ?></span></p>

      </div>
    </div>
  </div>
</div>
<p id="footer"> <a href="https://discord.gg/XZPsrNpzsW" target="_blank">Website by Unified Modifications</a></p>

  <script src="script.js"></script>
</body>  
</html>
