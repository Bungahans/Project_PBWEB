<!DOCTYPE html>
<html>
<head>
	<title>Berbagi-Wisata Sign Up</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <?php 
	if(isset($_GET['notif'])){
		if($_GET['notif'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['notif'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman";
		}
	}
	?>
	<div class="overlay">
		<form action="proses_login.php" method="post" class="form">
			<div class="header">
				<h4>LOGIN</h4>
				<p>Berbagi-Wisata, Selamat Datang</p>
			</div>
			<div class="login-area">
				<input type="text" class="username" placeholder="Username">
				<input type="password" class="password" placeholder="Password">
				<input type="submit" value="Login" class="submit" name="masuk">
				<a href="#">Forget your password </a>
			</div>
		</form>
	</div>
			<div class="background-modal">
				<div class="box">
					<div class="close">
						<p id="logo-x">&times;</p>
						<h2 id="usernameValue">Wellcome back!</h2>
						<h2 id="usernameValue-F">Invalid Password, Try Again</h2>
						
					</div>
				</div>
			</div>
		
	
</body>
<script src="signup.js"></script>

</html>