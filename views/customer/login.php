
<head>
<link rel="stylesheet" type="text/css" href="assets/css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>

</head>
<style>
  body{
    background-image: url("assets/css/background.jpg");
    background-size: cover;
  }
</style>
<body class="customer">
  <div class="container-home">
	  <div class="logo">
		  <img src="assets/img/backgroundlogin.png" alt="">
	  </div>
	<div class="container">
		<div class="logohome"><img src="assets/img/logo.png" alt=""></div>
	<div class="screen">
		<div class="screen__content">
			<form class="login" action="?controller=customer&action=login" method="POST">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" name="txtUsername" class="login__input" required placeholder="Username">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" name="txtPassword" required placeholder="Password" class="login__input" >
				</div>
				<button class="button login__submit" type="submit" name="btnSubmit" value="LOGIN" >
					<span class="button__text">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>
				<div class="signup">
					<a href="?controller=customer&action=signup">Register</a>	
				</div>	
						
			</form>
			<div class="social-login">
				<h3>log in via</h3>
				<div class="social-icons">
					<a href="#" class="social-login__icon fab fa-instagram"></a>
					<a href="#" class="social-login__icon fab fa-facebook"></a>
					<a href="#" class="social-login__icon fab fa-twitter"></a>
				</div>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
<div class="logo2">
		  <img src="assets/img/backgroundlogin.png" alt="">
	  </div>
        </div>
</body>
