<?php
$nav_home_class = 'active_page';
$nav_college_class = '';
$nav_contact_class = '';
$nav_highschool_class = '';
$nav_club_class = '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Home - Mary's Portfolio</title>
  <link rel="stylesheet" type="text/css" href="/public/styles/site.css" />
</head>

<body>
<div class ="indexbody">

<div class = "main">
  <div class = "title"><h1>Mary's</h1></div>
  <div class = "title2"><h1>Portfolio</h1></div>

  <?php include('includes/nav-bar.php'); ?>

 <!-- Citation for both arrow images: https://www.vhv.rs/viewpic/hJwiTJw_transparent-rustic-arrow-png-icon-right-arrow-svg/-->
  <img id= "next-button" src="/public/images/arrow-right.png" alt="arrow-right">
  <img id= "prev-button" src="/public/images/arrow-left.png" alt="arrow-left">

   <!-- Source: (original artwork) Mary Zhang -->
  <img class="slider" src="/public/images/hh5.jpg" alt="Slide 1">
   <!-- Source: (original artwork) Mary Zhang -->
  <img class="slider" src="/pages/" alt="Slide 2">
   <!-- Source: (original artwork) Mary Zhang -->
  <img class="slider" src="/public/images/3.jpg" alt="Slide 3">

  <div class="bottomtext">
     <p>Welcome to my portfolio website! I will be showcasing my creative works throughout the years here including art pieces, digital media, and videography. </p>
  </div>
</div>

</div>
<script src = "/public/scripts/jquery-3.6.1.js"></script>
<script src = "/public/scripts/carousel.js"></script>

</body>

</html>
