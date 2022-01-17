<head>
<link rel="stylesheet" type="text/css" href="assets/css/signup.css">
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
</body>
	<div class="container">
		<div class="slogan">
		<h3 contenteditable spellcheck="false">CUCKOO</h3>
			
		</div>
		<div class="login-content">
			<form action="?controller=customer&action=signup" method="POST">
				<img src="assets/img/logo.png">
				<h2 class="title">RESIGTER</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		
					  <input type="text" name="txtUsername" required placeholder="Username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    
					  <input type="password" name="txtPassword" pattern=".{3,}" placeholder="Password">
            	   </div>
                 </div>
           		<div class="input-div pass">
           		   <div class="i"> 
                  <i class="fas fa-signature"></i>
           		   </div>
           		   <div class="div">
           		    
           		    	<input type="text" name="txtName" required placeholder="Name">
            	   </div>
                 
            	</div>
              <div class="input-div pass">
           		   <div class="i"> 
                  <i class="fas fa-phone"></i>
           		   </div>
           		   <div class="div">
           		    
           		    	<input type="tel" name="txtPhone" pattern="0[0-9]{9}" required  placeholder="Phone">
            	   </div>
                 
            	</div>
              <div class="input-div pass">
           		   <div class="i"> 
                  <i class="fas fa-envelope"></i>
           		   </div>
           		   <div class="div">
           		    
           		    	<input type="email" name="txtEmail" required  placeholder="Email">
            	   </div>
                 
            	</div>
            	<a href="?controller=customer&action=login">Login</a>
              <input class='btn' type="submit" name="btnSubmit" value="RESIGTER" >
              
            </form>
        </div>
    </div>
  </div>
  