<?php

//apakah tombol udah ditekan atau belum
if( isset($_POST["submit"]) ) {

	// cek data user
    if( $_POST["user"] == "tes" && $_POST["password"] == "123" ) {

        // jika benar
        header("Location: beranda.php");
        exit;

    } else {

            // jika salah tampilkan pesan
            $error = true;

        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title> Registrasi </title>

	<style>

		html {
			background: url('image.jpg')no-repeat center fixed;
		    -webkit-background-size:cover;
		    -moz-background-size:cover;
		    -o-background-size:cover;
		    background-size:cover;
		}

		.box {
			width: 420px;
			margin: auto;
			color: gray;
			border-radius: 10px;
			background-color: white;
			font-family: arial;
			font-size: 10px;
			margin-top: 6%;
			padding: 15px;
        }


		.flex {
			display: flex;
		}

		button {
			background-color: green;
			color: white;
			border-radius: 5px;
		}

		h1:hover {
			color: salmon;
		}

	</style>
</head>
<body> 



<div class="box"> 
<img style="width: 420px; height: 150px; border-radius: 10px;" src="IMG-20220401-WA0007.jpg">
<br>
<center><h1>Registrasi</h1></center>

    <?php if( isset($error) ) : ?>
    <p style="font-size: 15px; color: red;">Username atau Password yang kamu masukan salah!</p>
    <?php endif; ?>

<form action="" method="post">
     <br>
         <label style="padding: 8px; font-size: 15px;" for="user">Masukan Username</label>
         <br>
         <br>
         <center><input style="margin: auto; padding: 5px; height: 25px; width: 388px;" type="text" name="user" id="user"></center>
         <br>
     <br>
         <label style="padding: 8px; font-size: 15px;" for="password">Masukan Password</label>
         <br>
         <br> 
         <center><input style="margin: auto; padding: 5px; height: 25px; width: 388px;" type="password" name="password" id="password"></center>
         <br>
    <br>
    <div class="flex">
    <button style="margin: auto; padding: 5px; height: 35px; width: 255px;" type="submit" name="submit">Submit</button> 
    <a href="https//wa.me/6285731261728"><h1 style="margin: auto; padding: 10px; font-size: 15px;"> Butuh bantuan?</h1></a>
</div>
<br>
</form>
<div class="flex">
	<a style="margin: auto; padding: 27px; font-family: cursive; text-decoration: none; color: gray;" href="htpps://github.com/chacax">github</a>
	<a style="margin: auto; padding: 27px; font-family: cursive; text-decoration: none; color: gray;" href="htpps://wa.me/6285731261728">whatsapp</a>
    <a style="margin: auto; padding: 27px; font-family: cursive; text-decoration: none; color: gray;" href="htpps://github.com/chacax">instagram</a>
	<a style="margin: auto; padding: 27px; font-family: cursive; text-decoration: none; color: gray;" href="htpps://github.com/chacax">youtube</a>
</div>
</div>



</body>
</html>