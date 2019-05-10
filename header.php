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
      <div class="img"><img src="images/logo.png" style="width:110px; height:70px; margin-top: 0.2em;"></div>
      <div class="toggle">
        <i class="fas fa-bars menu"></i>
      </div>
      <!--Icone de connexion et de déconnexion-->
      <ul>
        <li><a href="#">Accueil</a></li>
        <li><a href="#">Carte Interactive</a></li>
        <li><a href="#">Répertoire</a></li>
        <li><a href="#">Espace Suivi</a></li>


        <li><a><i class="fas fa-sign-in-alt"></i></a></li>
        <!--<li><a><i class="fas fa-sign-out-alt"></i></a></li>-->

      </ul>
    </nav>
  </div>
</body>

<script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
<script>
  $('document').ready(function() {
    $('.menu').click(function() {
      $('ul').toggleClass('active');
    })
  })
</script>

</html>
