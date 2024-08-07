<?php 
require_once '../../Controller/logincont.php';

              $data= new logincont();


?>

<!DOCTYPE html>
<html lang="eng">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<title>Login/sign up</title>
	<style>
		*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-familt: 'Poppins' , sans-serif;
}
body{
	display: flex;
	align-items: center;
	justify-content: center;
	min-height: 100vh;
	background: #333;
}
.container{
	position: relative;
	width: 700vw;
	height: 100vh;
	background: #FFF;

	box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.3),0 6px 20px 0 rgba(0, 0, 0, 0.3);
	overflow: hidden;
}
.container::before{
content: "";
position: absolute;
top: 0;
left: -50%;
width: 100%;
height: 100%; 
background: linear-gradient(-45deg, #FAD7A0, #E67E22);
z-index: 6;
transform: translateX(100%);
transition: 1s ease-in-out;
}
.signin-signup{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	display: flex;
	align-items: center;
	justify-content: space-around;
	z-index: 5;
}
form{
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	width: 40%;
	min-width: 238px;
	padding: 0 10px;
}
form.sign-in-form{
	opacity: 1;
	transition: 0.5s ease-in-out;
	transition-delay: 1s;
}

form.sign-up-form{
	opacity: 0;
	transition: 0.5s ease-in-out;
	transition-delay: 1s;
}
.title{
	font-size: 35px;
	color: #E67E22;
	margin-bottom: 10px;
}
.input-field{
	width: 100%;
	height: 50px;
	background: #f0f0f0;
	margin: 10px 0;
	border: 2px solid #FAD7A0;
	border-radius: 50px;
	display: flex;
	align-items: center;
}
.input-field i{
	flex: 1;
	text-align: center;
	color: #000;
	font-size: 18px;
}
.input-field input{
	flex: 5;
	background: none;
	border: none;
	outline: none;
	width: 100%;
	font-size: 18px;
	font-weight: 600;
	color: #000;

}
.btn{
	width: 150px;
	height: 50px;
	border: none;
	border-radius: 50px;
	background: #E67E22;
	color: #fff;
	font-weight: 600;
	margin: 10px 0;
	text-transform: uppercase;
	cursor: pointer;
}
.btn:hover{
	background:  rgb(255, 200, 100);
}
.social-text{
	margin: 10px 0;
	font-size: 18px;
}
.social-media {
	display: flex;
	justify-content: center;
}
.social-icon{
	height: 45px;
	width: 45px;
	display: flex;
	align-items: center;
	justify-content: center;
	color: #444;
	border: 1px solid #444;
	border-radius: 50px;
	margin: 0 5px;

}
a{
	text-decoration: none;
}
.social-icon:hover{
	color: #FFA500;
	border-color: #FFA500;
}
.panels-container{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	display: flex;
	align-items: center;
	justify-content: space-around;
}
.panel{
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: space-around;
	width: 35%;
	min-width: 238px;
	padding: 0 10px;
	text-align: center;
	z-index: 6;
}
.left-panel{
	pointer-events: none;
}
.content{
	color:#fff;

}
.panel h3{
	font-size: 24px;
	font-weight: 600;
}
.panel p{
	font-size: 15px;
	padding: 10px 0;
}
.image{
width: 100%;
transition: 1.1s ease-in-out;
transition-delay: 0.4s;
bottom: 0;

}
.left-panel .image,
.left-panel .content{
	transform: translateX(-200%);
}

.right-panel .image,
.right-panel .content{
	transform: translateX(0);
}
.account-text{
	display: none;
}

/*animation*/
.container.sign-up-mode::before{
	transform: translateX(0);
}
.container.sign-up-mode .right-panel .image,
.container.sign-up-mode .right-panel .content {
	transform: translateX(200%);
}
.container.sign-up-mode .left-panel .image,
.container.sign-up-mode .left-panel .content {
	transform: translateX(0);
}
.container.sign-up-mode form.sign-in-form{
	opacity: 0;
}
.container.sign-up-mode form.sign-up-form{
	opacity: 1;
}
.container.sign-up-mode .right-panel{
	pointer-events: none;
}
.container.sign-up-mode .left-panel{
	pointer-events: all;
}

/*responsive*/
@media (max-width:779px){
	.container {
		width: 100vw;
		height: 100vh;
	}
}

@media (max-width:635px){
	.container::before{
		display: none;
	}
	form{
		width: 80%;
	}
	form.sign-up-form{
		display: none;
	}
	.container.sign-up-mode2 form.sign-up-form{
	display: flex;
	opacity: none;
}

.container.sign-up-mode2 form.sign-in-form{
	display: none;
}

	.panels-container{
		display: none;
	}

	.account-text{
	display: initial;
	margin-top: 30px;
}


}

@media (max-width:320px){
	form{
		width: 90%;
	}
}

@keyframes slideUp {
    0% {
    transform: translateY(40%);
  }
  100% {
    transform: translateY(-100%);
  }
}

.contenti {
  animation: slideUp 90s linear infinite;
}



	</style>



</head>
<body>

	<div class="container">
		<div class="signin-signup">
 <?php
  if (isset($_POST['login'])) {
  	$adress=$_POST['email'];
  	$pass=$_POST['pass'];
  	$data->login($adress,$pass); }
   ?>

			<form method="POST" class="sign-in-form">
				<!-- debut login -->
				<h2 class="title">Login </h2>
      <?php if (!empty($data->errorMessage)) { ?>

         <div style="width:450px; color:red;" > <ion-icon name="alert-circle-outline"></ion-icon><?php echo $data->errorMessage; ?> </div>

        <?php      }  ?>
				<div class="input-field">
					<i class="fas fa-user"></i>
					
					<input type="text" placeholder="email" name="email">
				</div>
				<div class="input-field">
					<i class="fas fa-lock"></i>
					<input type="password" placeholder="Password" name="pass">
				</div> 
				<!-- le boutton login -->
				<input type="submit" value="Login" class="btn" name="login"> 
				
				
				
			</form>

			<form  class="sign-up-form">
				<h2 class="title">Sign Up </h2>
				<div class="input-field">
					<i class="fas fa-user"></i>
					<input type="text" placeholder="Username">
				</div>

				<div class="input-field">
					<i class="fas fa-envelope"></i>
					<input type="text" placeholder="Email">
				</div>

				<div class="input-field">
					<i class="fas fa-lock"></i>
					<input type="password" placeholder="Password">
				</div> 
				<input type="submit" value="Sign up" class="btn">
				<p class="social-text">OR Sign in social platform</p>
				<div class="social-media">
					<a href="#" class="social-icon">
						<i class="fab fa-facebook"></i>
					</a>
					<a href="" class="social-icon">
						<i class="fab fa-twitter"></i>
					</a>
					<a href="" class="social-icon">
						<i class="fab fa-google"></i>
					</a>
					<a href="" class="social-icon">
						<i class="fab fa-linkedin-in"></i>
					</a>
					
				</div>
				<p class="account-text"> Avez-vous déjà un compte ? <a href="#" id="sign-in-btn2">Sign up</p>
			</form>
		
		</div>
		<div class="panels-container">
			<div class="panel left-panel">
				<div class="content">
					<h3>Avez-vous déjà un compte ?</h3>
					<p>Bienvenue de retour ! Veuillez vous connecter pour gérer vos véhicules et réservations.</p>
					<button class="btn" id="sign-in-btn">Login</button>
				</div>
				<img src="" alt="" class="image">
			</div>

			<div class="panel right-panel">
			  <div class="contenti">
			    <img src="image/sign.png" alt="" class="image animation slide-image">
			    <img src="image/1.jpg" alt="" class="image animation slide-image">
			    <img src="image/2.jfif" alt="" class="image animation slide-image">
			    <img src="image/3.webp" alt="" class="image animation slide-image">
			    <img src="image/sign.png" alt="" class="image animation slide-image">
			    <img src="image/1.jpg" alt="" class="image animation slide-image">
			    <img src="image/2.jfif" alt="" class="image animation slide-image">
			    <img src="image/3.webp" alt="" class="image animation slide-image">
			    <img src="image/sign.png" alt="" class="image animation slide-image">
			    <img src="image/1.jpg" alt="" class="image animation slide-image">
			    <img src="image/2.jfif" alt="" class="image animation slide-image">
			    <img src="image/3.webp" alt="" class="image animation slide-image">
			    <img src="image/sign.png" alt="" class="image animation slide-image">
			    <img src="image/1.jpg" alt="" class="image animation slide-image">
			    <img src="image/2.jfif" alt="" class="image animation slide-image">
			    <img src="image/3.webp" alt="" class="image animation slide-image">
			    <img src="image/sign.png" alt="" class="image animation slide-image">
			    <img src="image/1.jpg" alt="" class="image animation slide-image">
			    <img src="image/2.jfif" alt="" class="image animation slide-image">
			    <img src="image/3.webp" alt="" class="image animation slide-image">
			    <img src="image/sign.png" alt="" class="image animation slide-image">
			    <img src="image/1.jpg" alt="" class="image animation slide-image">
			    <img src="image/2.jfif" alt="" class="image animation slide-image">
			    <img src="image/3.webp" alt="" class="image animation slide-image">
			  </div>
			</div>

			</div>
			
		</div>
	</div>
	<script src="login.js"></script>


<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>

