<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CUCKOO</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script
	src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script
	src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Karla&display=swap"
	rel="stylesheet">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>
<body>
  <div class="container">

  <?php require_once('views/layouts/customer_menu.php') ?>
  <?php require_once('views/layouts/customer_inform.php') ?>
  <svg viewBox="0 0 960 300">
	<symbol id="s-text">
		<text text-anchor="middle" x="50%" y="80%">CUCKOO</text>
	</symbol>

	<g class = "g-ants">
		<use xlink:href="#s-text" class="text-copy"></use>
		<use xlink:href="#s-text" class="text-copy"></use>
		<use xlink:href="#s-text" class="text-copy"></use>
		<use xlink:href="#s-text" class="text-copy"></use>
		<use xlink:href="#s-text" class="text-copy"></use>
	</g>
</svg>
  
  </div>
  <div class="align-center">
    <h2 class="text-center">PRODUCTS</h2>
    <?php foreach ($newprods as $prod) { ?>
    <div class="line">
      <figure>
        <a href="?controller=customer&action=details&id=<?=$prod->id?>"><img src="data:image/jpg;base64,<?=$prod->image?>" /></a>
        <figcaption class="text-center"><?=$prod->name?><br />Price: <?=$prod->price?>000$</figcaption>
      </figure>
    </div>
    <?php } ?>
  </div>
  <?php if ($hotprods) { ?>
  <div class="align-center">
    <h2 class="text-center">HOT PRODUCTS</h2>
    <?php foreach ($hotprods as $prod) { ?>
    <div class="inline">
      <figure>
        <a href="?controller=customer&action=details&id=<?=$prod->id?>"><img src="data:image/jpg;base64,<?=$prod->image?>" width="300px" height="300px" /></a>
        <figcaption class="text-center"><?=$prod->name?><br />Price: <?=$prod->price?>00$</figcaption>
      </figure>
    </div>
    <?php } ?>
  </div>
  <?php } ?>
  </div>

  <section id="information">
        <img src="images/information-img.png" class="information-img">
        <div class="title-text">
            <p>CONTACT</p>
            <h1>Visit Shop Today</h1>
        </div>
    <div class="information-row">
    <div class="information-left">
        <h1>Opening Hours</h1>
        <p><i class="fa fa-clock"></i> Monday to Friday - 9am to 10pm</p>
        <p><i class="fa fa-clock"></i> Saturday to Sunday - 8am to 11pm </p>
        
    </div>
    <div class="information-right">
        <h1>Get In Touch</h1>
        <p><i class="fa fa-map-marker"></i> 112 Dương Quảng Hàm, phường 5, Gò Vấp, TP HCM</p>
        <p><i class="fa fa-envelope"></i> nguyenvu270901@gmail.com</p>
        <p><i class="fa fa-phone"></i> 0946104100</p>
    </div>  
    </div>  
    <div class="social-link">
       <a href="https://www.facebook.com/nguyenvu270901/"><i class="fab fa-facebook-square"></i></a>
        <a href="#"><i class="fab fa-twitter-square"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-telegram"></i></a>
        <p> NIKE - "JUST DO IT" </p>
        <p>- Established in 2020 -</p>
       
    </div>
    </section>
  
       
    </div>
    </div>
</body>

</html>
