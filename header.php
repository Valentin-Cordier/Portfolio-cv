<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Bar nav</title>


  <link rel="stylesheet" href="styles/header.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
  <!--Barre nav avec images-->
  <div class="main">
    <nav id="nav">
      <div class="toggle">
        <i class="fas fa-bars menu"></i>
      </div>
      <!--Icone de connexion et de déconnexion-->
      <ul>
        <li><a href="#">Accueil</a></li>
        <li><a href="#">Présentation</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Compétences</a></li>
        <li><a href="#">Contact</a></li>




      </ul>
    </nav>
  </div>
</body>
<script src="script/script.js"></script>
<script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){

    $(window).scroll(function(){

      if($(window).scrollTop()>600){
        $("nav").addClass('black');
      }
      else{
        $("nav").removeClass('black');
      }
    });
});

  $('document').ready(function() {
    $('.menu').click(function() {
      $('ul').toggleClass('active');
    })
  })
</script>

</html>
