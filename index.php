<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="styles/index.css">
  <title>Portofolio</title>
</head>

<body>
  <?php require_once 'header.php';?>

  <section id="slideshow">

    <div class="container">
      <div class="c_slider"></div>
      <div class="slider">
        <figure>
          <img src="img/dev.jpg" alt="" width="1800px" height="850px" />
          <figcaption>The mirror of soul</figcaption>

        </figure>
        <!--<
  			-->
        <figure>
          <img src="img/images.jpg" alt="" width="1800px" height="850px" />
          <figcaption>Let's cross that bridge when we come to it</figcaption>
        </figure>
        <!--
  			-->
        <figure>
          <img src="img/a.jpg" alt="" width="1800px" height="850px" />
          <figcaption>Sushi<em>(do)</em> time</figcaption>

        </figure>
        <!--
  			-->
        <figure>
          <img src="img/b.jpg" alt="" width="1800px" height="850px" />
          <figcaption>Waking Life</figcaption>
        </figure>
      </div>
    </div>

    <span id="timeline"></span>
  </section>

  <div class="img"><img src="img/dev.jpg" style="width: 150px; height: 150px;"></div>
  <div class="main1">
    <div class="presentation"><a href="#">Présentation</a></div>
    <div class="portfolio"><a href="#">Portfolio</a></div>
    <div class="portfolio"><a href="#">Compétences</a></div>
    <div class="contact"><a href="#">Contact</a></div>
  </div>

  <?php include 'footer.php'; ?>
</body>

</html>
