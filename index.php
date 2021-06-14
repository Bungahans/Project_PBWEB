<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

    table, th, td {
    border: 1px solid black;
    }

    a {
    text-decoration: none;
    color: black;
    }

    </style>
    <title>UAS PWEB</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<nav class="navigasi" navbar-fixed-stop>
		<div class="navigasi-wrap">
			<div class="navigasi-logo">
				<img src="repo page/file gambar/logoo.png" alt="Berbagi-Wisata" id="image-navigasi">
			</div>
			<div class="navigasi-tulisan">
				<a href="../index.php" class="nav-aktif">HOME</a>
				<a href="repo page/review.html" class="">REVIEW</a>
				<a href="index.php#about" class="">ABOUT</a>
                <a href="index.php#contact" class="">CONTACT</a>
                <a href="index.php#signin" class="">SIGN IN</a>
				<a nohref id="welcome">Welcome Wildan!</a>
			</div>
		</div>
    </nav>

	<div class="pop-up-form" id="login-popup">
        <form class="box-popup" onsubmit="return false;">
            <div class="header">
                <h4>LOGIN</h4>
                <p>Indahnya Alam, Indahnya Berbagi</p>
            </div>
            <div class="login-area">
                <input type="text" class="username" id="username" placeholder="Username">
                <input type="password" class="password" id="password" placeholder="Password">
                <input type="submit" value="Login" class="submit" onclick="openModal()" >
                <a href="#">Forget your password </a>
            </div>
        </form>
    </div>

    <div id="background-modal">
        <div id="box-modal">
            <div class="close">
                <p id="logo-x" onclick="closeForm(); welcome(); closeModal(); ">&times;</p>
                <div id="usernameValue">
                    <h3 >Wellcome back!</h3>
                </div> 
            </div>
        </div>
    </div>

    <div class="background">
        <h2>BERWISATA SAMBIL MEMPERBAIKI EKONOMI WARGA</h2>
        <div class="box">
            <input list="penginapan" placeholder="tentukan tempat menginap anda " name="penginapan">
            <datalist id="penginapan">
                <option value='villa'>Villa untuk 5-10 orang</option>
                <option value='tenda'>Tenda untuk 1-4 orang</option>
            </datalist>
            <div class="button">
                <button type="submit">Pilih</button>
            </div>
        </div>  
        <div class="follow">
            <a href="instagram.com" ><img src="repo page/file gambar/logo-instagram.png" alt="" id="follow"></a>
			<a href="instagram.com" ><img src="repo page/file gambar/logo-google.png" alt="" id="follow"></a>
			<a href="instagram.com" ><img src="repo page/file gambar/logo-facebook.png" alt="" id="follow"></a>
        </div>
    </div>
       
    <section id="about">
        <div class="about-us">
            <div class="bg">
                <div class="tulisan">
                    <h1>ABOUT</h1>
                    <p>Disini kami ingin menjadikan objek wisata di daerah kami semakin terkenal dengan keramahan warga dan penyedia jasa, setiap orang luar daerah sini diwajibkan memakai jasa antar yang telah disediakan dikarenakan kondisi jalan yang kurang memadai dan juga demi keselamatin pengunjung</p>
                </div>    
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="kontak">
            <div class="bg">
                <h1>CONTACT</h1>
                <div class="daftar-kontak">
                    <div class="isi">
                        <img src="repo page/file gambar/maps.png">
                        <p>Jalan Melati No 2 Desa Santren Kecamatan Burengan Kota Banyuwangi</p>
                    </div>
                    <div class="isi">
                        <img src="repo page/file gambar/telephone.png">
                        <p>081334676787</p>
                    </div>
                    <div class="isi">
                        <img src="repo page/file gambar/mail.png">
                        <p>berbagiwisata@gmail.com</p>
                    </div>
                    <div class="isi">
                        <img src="repo page/file gambar/facebook.png">
                        <p>berbagi-wisata</p>
                    </div>
                    <div class="isi">
                        <img src="repo page/file gambar/ig.png">
                        <p>berbagi-wisata</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="bottom">
		<div class="bottom-baris-satu">
			<div class="bottom-login">
				<p>LOGIN</p>
				<label for="username">Username or Email <Address></Address></label>
				<input type="text" id="username">
				<label for="password"> Password</label>
				<input type="password" id="password">
				<div>
					<input type="checkbox" name="remember-me" id="remember-me">
					<label for="remember-me">Remember Me</label>
				</div>
                <input type="submit" value="Login" id="submit-login-bottom">				 
			</div>
		</div>		
	</div>
</body>
</html>