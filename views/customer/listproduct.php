<style>
    body{
    background-image: url("assets/css/background.jpg");
    background-size: cover;
    }
    
</style>

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SMCARIT</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/home.css">
</head>
<body>
  <?php require_once('views/layouts/customer_menu.php') ?>
  <?php require_once('views/layouts/customer_inform.php') ?>
  <div class="text-center">
    <h2 class="text-center">LIST PRODUCTS</h2>
    <?php foreach ($prods as $prod) { ?>
    <div class="inline">
      <figure>
        <a href="?controller=customer&action=details&id=<?=$prod->id?>"><img src="data:image/jpg;base64,<?=$prod->image?>" width="300" height="300" /></a>
        <figcaption class="text-center"><?=$prod->name?><br />Price: <?=$prod->price?>00$</figcaption>
      </figure>
    </div>
    <?php } ?>
  </div>


</div>
</div>
</body>