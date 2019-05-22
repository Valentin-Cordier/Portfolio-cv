<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">

  <link rel="stylesheet" href="styles/index.css">
  <title>Portofolio</title>
</head>

<body>
  <?php include 'header.php';?>
  <span id="sl_play" class="sl_command"></span>
<span id="sl_pause" class="sl_command"></span>

<span id="sl_i1" class="sl_command sl_i"></span>
<span id="sl_i2" class="sl_command sl_i"></span>
<span id="sl_i3" class="sl_command sl_i"></span>
<span id="sl_i4" class="sl_command sl_i"></span>
  <section id="slideshow">
    <a class="play_commands pause" href="#sl_pause" title="Maintain paused">Pause</a>
    <a class="play_commands play" href="#sl_play" title="Play the animation">Play</a>
  	<div class="container">
  		<div class="c_slider"></div>
  		<div class="slider">
  			<figure>
          <div class=images>
  				<img src="img/1.jpg" alt="" height="850" />
        </div>
  				<figcaption>The mirror of soul</figcaption>

  			</figure><!--
  			--><figure>
        <div class=images>
  				<img src="img/2.jpg" alt="" height="850" />
        </div>
  				<figcaption>Let's cross that bridge when we come to it</figcaption>
  			</figure><!--
  			--><figure>
        <div class=images>
  				<img src="img/3.jpg" alt="" height="850" />
        </div>
  				<figcaption>Sushi<em>(do)</em> time</figcaption>

  			</figure><!--
  			--><figure>
        <div class=images>
  				<img src="img/4.jpg" alt="" height="850" />
        </div>
  				<figcaption>Waking Life</figcaption>
  			</figure>
  		</div>
  	</div>

  	<span id="timeline"></span>
  </section>
  <div class="img"><img src="img/d.png"></div>
  <div class="main1">
    <div class="presentation"><a href="#">Présentation</a></div>
    <div class="portfolio"><a href="#">Portfolio</a></div>
    <div class="portfolio"><a href="#">Compétences</a></div>
    <div class="contact"><a href="#">Contact</a></div>
  </div>
  <script src="script/index.js"></script>
</body>

</html>
