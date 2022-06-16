
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/styyles.css">
<body>
 <?php if(null!($_GET['error']== true)){
    echo  "Username Already Taken!";
    } ?>
	<h3 class="logo"><span>ElectroMate</span></h3>
<h2>sign up</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="reg.php" method="POST">
			<h1>Create Account</h1>
			<span>or use your email for registration</span>
			<input name= "name" type="text" Required="Required" placeholder="Name" />
			<input name = "email" type="email" Required="Required" placeholder="Email" />
			<input name = "password" type="password" Required = "Required" placeholder="Password" />
       
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="signin.php" method = "POST">
			<h1>Sign in</h1>
			<span>or use your account</span>
			<input  name = "name"placeholder="Name" />
			<input type="password" Required="required" name= "password"placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
</body>
<script src="java.s/singjs.js"></script>
</head>
</html>