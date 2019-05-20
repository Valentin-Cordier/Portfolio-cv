<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="styles/index.css">
  <title>Portofolio</title>
</head>

<body>
  <?php require_once 'header.php';?>
  <div class="w3-content w3-display-container">
  <img class="mySlides" src="img/dev.jpg" style="width:100%">
  <img class="mySlides" src="img/images.jpg" style="width:100%">
  <img class="mySlides" src="img/dev.jpg" style="width:100%">
  <img class="mySlides" src="img/images.jpg" style="width:100%">
  <button class="button display-left" onclick="plusDivs(-1)">&#10094;</button>
<button class="button display-right" onclick="plusDivs(+1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
</script>
<div class="img"><img src="images/logo.png"></div>
  <div class="main1">
    <div class="presentation"><a href="#">Présentation</a></div>
    <div class="portfolio"><a href="#">Portfolio</a></div>
    <div class="portfolio"><a href="#">Compétences</a></div>
    <div class="contact"><a href="#">Contact</a></div>
  </div>
</body>

</html>
