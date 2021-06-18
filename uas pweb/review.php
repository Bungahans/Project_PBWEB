<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Berbagi Wisata</title>
	<link rel="stylesheet" href="review.css">
</head>
<script>
    function welcome(){
        document.getElementById("welcome").style.display= "block";
    }
    function openForm() {
        document.getElementById("login-popup").style.display = "block";
    }
    function closeForm() {
        document.getElementById("login-popup").style.display = "none";
        document.getElementById("nav-signin").style.display = "none";
        welcome();
    }
</script>
<body>
    <nav class="navigasi" navbar-fixed-stop>
		<div class="navigasi-wrap">
			<div class="navigasi-logo">
				<img src="file gambar/logoo.png" alt="Berbagi-Wisata" id="image-navigasi">
			</div>
			<div class="navigasi-tulisan">
				<a href="index.php" >HOME</a>
				<a href="review.php" class="nav aktif">REVIEW</a>
				<a href="index.php#about" class="">ABOUT</a>
				<a href="index.php#contact" class="">CONTACT</a>
				<a nohref  onclick="openForm()" id="nav-signin">SIGN IN</a>
				<a nohref id="welcome">Welcome Wildan!</a>
			</div>
		</div>
    </nav>

	<div class="pop-up-form" id="login-popup">
        <form class="box-popup">
            <div class="header">
                <h4>LOGIN</h4>
                <p>Berbagi-Wisata</p>
            </div>
            <div class="login-area">
                <input type="text" class="username" placeholder="Username">
                <input type="password" class="password" placeholder="Password">
                <input type="submit" value="Login" class="submit" onclick="closeForm()">
                <a href="#">Forget your password </a>
            </div>
        </form>
    </div>

	<div class="subscription">
		<div class="wrap-subscription">
			<a>Bagi pengalamanmu disini!</a>
			<div class="wrap-text-subscription">
				<input type="text" placeholder="Pengalamanku..." id="subscription-type">
				<input type="submit" value="Subscription" id="subscription-submit">
			</div>
		</div>
	</div>


	<div class="highlight">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/0IXPuQsd1wI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>

	<div class="artikel">
		<!-- <div class="wrap-artikel-sebaris"> -->
			<div class="artikel-satuan">
				<img src="gambar/1.jpg" class="gambar-satuan">
				<div class="tulisan-satuan">
					<p>Tempat Menginap Yang Sangat Nyaman</p>
					<a href="artikelSatuan.html">read more...</a>
				</div>
			</div>
			<div class="artikel-satuan">
				<img src="gambar/2.jpg" class="gambar-satuan">
				<div class="tulisan-satuan">
					<p>Akses Jalan Yang Sedikit Ekstrim</p>
					<a href="artikelSatuan.html">read more...</a>
				</div>
			</div>
			<div class="artikel-satuan">
				<img src="gambar/3.jpg" class="gambar-satuan">
				<div class="tulisan-satuan">
					<p>Semua Perjalanan Akan DIbayar Dengan Keindaahan Alamnya</p>
					<a href="artikelSatuan.html">read more...</a>
				</div>
			</div>	
    </div>
</body>
</html>