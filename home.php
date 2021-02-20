<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location:login.php');
}

?>

<html>
<head>
<title>Auto Time</title>
    <link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Passion+One" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/home_style.css">
    <link rel="icon" href="icon.png">
</head>
<body>
<ul>
  <img src="icon.png" class="icon">
  <a href="home.php" class="logo">AUTO TIME</a>
  <li class="li"><a href="logout.php">Logout</a></li>
  <li style="color: black"><div class="but"><img src="glass.png"></div></li>
  <li><a href="#advisors">Advisors</a></li>
  <li><a href="#store">Store</a></li>
  <li><a href="#videos">Videos</a></li>
  <li><a href="#photos">Photos</a></li>
  <li><a href="#racing">Racing</a></li>
  <li><a href="#reviews">Reviews</a></li>
  <li><a href="#buyers guide">Buyers Guide</a></li>
  <li><a href="#news">News</a></li>
</ul>
    <div class="search">
    <input type="text" name="search" placeholder="Search For"><br><br>
    <input type="submit" value="SEARCH" class="searchbut">  
    </div>

<div class="latestnews">Latest News</div>

<div class="vertical-menu">
  <a href="#" class="active">TOP STORIES</a>
  <a href="#">INDY 500</a>
  <a href="#" style="color: red">WATCH NASCAR VIDEOS</a>
  <a href="#">RECALLS</a>
  <a href="#">CLASSIC CARS</a>
  <a href="#">CAR LIFE</a>
  <a href="#">AUTO SHOWS</a>
  <a href="#">AUTOTIME PODCAST</a>
  <a href="#">RESEACRH NEW CARS AND TRUCKS</a>
  <a href="#">FIND A DRIVING SCHOOL</a>
  <a href="#">F1 RACING NEWS</a>
  <a href="#">RACING ON TV</a>
  <a href="#">GREEN CARS</a>
  <a href="#">SUPERCARS</a>
  <a href="#">BUT WAIT, THERE'S MORE</a>
</div>

<div class="news_container">
  <?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "auto_database";

  $conn = mysqli_connect($servername,$username,$password,$db);

  $sql = "SELECT * FROM news ORDER BY id DESC";

  $result = mysqli_query($conn,$sql);

  while($row = mysqli_fetch_assoc($result)) {
    echo "<div class='news'><a href='#news' class='newslink'>" . "<img src='images/" . $row['image'] . "' class='news_image'><br><br>" . $row['news_text'] . "</a></div>";
  }

  ?>
</div>

<div class="footer">
  <a href="home.php" class="footer_logo" style="color: white">AUTO TIME</a>
  <a href="#link" class="hearstautos">Hearst Autos</a>
  <a href="#link" class="aboutus">About Us</a>
  <a href="#link" class="newsletter">Newsletter</a>
  <a href="#fb"><img src="fb.webp" class="fb"></a>
  <a href="#twitter"><img src="twitter.png" class="twitter"></a>
  <a href="#instagram"><img src="instagram.webp" class="instagram"></a>
</div>

<script> 
  $(document).ready(function(){
    $(".but").click(function(){
      $(".search").slideToggle("slow");
    });
  });
</script>

</body>
</html>