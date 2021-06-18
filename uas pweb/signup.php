<!DOCTYPE html>
<html>
<head>
	<title>Berbagi-Wisata Sign Up</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
	
	<div class="overlay">
		<form action="proses_signup.php" method="post" class="form">
			<div class="header">
				<h4>SIGNUP</h4>
				<p>Berbagi-Wisata, Selamat Datang</p>
			</div>
			<div class="login-area">
				<input type="text" class="username" name="username" placeholder="Username">
				<input type="password" class="password" name="password" placeholder="Password">
				<input type="text" class="nama" name="nama" placeholder="Nama Lengkap">
				<input type="text" class="notlp" name="notlp" placeholder="Nomor Telepon">
				<input type="text" class="email" name="email" placeholder="email">
				<input type="text" class="alamat" name="alamat" placeholder="Alamat">
				<input type="submit" value="Sign Up" class="submit" name="daftar">
				<input type="submit" value="Login" class="submit" name="masuk">
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