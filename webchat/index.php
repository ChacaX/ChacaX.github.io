<?php 

require("func.php");

$data = file_get_contents("data.json");
$data = json_decode($data);

?>

<!DOCTYPE html>
<html>

<meta charset="UTF-8">
<meta name="viewport" content="width-device-width, initial-scale=1.0">

<head>
	<title> Ngobrol Bareng Yuk! </title>

	<style>

		@import url('https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital@1&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital@1&family=Poppins:wght@900&display=swap');

		@media(max-width: 768px) {
			
	    }

		body {
			background: url('IMG-20220401-WA0002.jpg')no-repeat center fixed;
		    -webkit-background-size:cover;
		    -moz-background-size:cover;
		    -o-background-size:cover;
		    background-size:cover;
			padding: 0;
			margin: 0;
		    font-family: 'Archivo Narrow', sans-serif;
		}

	    header {
		    width: 100%;
		    height: 120px;
			background-color: lightgreen;
			text-align: center;
			color: white;
			font-size: 30px;
			text-shadow: 0 3px 0 lightgray;
			font-family: 'Poppins', sans-serif;
			box-shadow: 0px 5px 0px black;
		}

		.cr h1 {
		font-size: 15px;
		color: white;
		position: absolute;
		bottom: 85%;
			left: 610px;
		}

		footer {
			position: absolute;
			height: 60px;
			width: 100%;
			margin: auto;
			bottom: 0;
			right: 0;
			left: 0;
		}

		input {
			height: 0;
			width: 80%;
			padding: 25px;
			font-size: 15px;
			outline: none;
			border: 0;
			background: transparent;
			border-color: 3px solid green;
			transition: 0,7s;
			box-shadow: 0 0.7px 2.9px black;
			border-radius: 20px;
		}

	    button {
			width: 10%;
			height: 1%;
			padding: 20px;
			border-radius: 50px;
			background-color: red;
			color: white;
			outline: none;
			border: 1.5px solid;
		}

		.ruang-pesan {
			height: 380px;
			width: 100%;
			overflow-y: scroll;
			overflow-x: hidden;
			padding: 30px;
		}

		.user {
			background: lightgreen;
			padding: 15px;
			width: fit-content;
			border-radius: 10px;
			color: white;
		}

	</style>

</head>
<body>

	<header>CHATINGAN BARENG YUK!</header>
	<div class="cr"><h1>Dibuat dengan hati oleh Caca</h1></div>
	<div class="ruang-pesan">
	    <?php foreach ($data as $d) {
	     echo "<br>".'<div class="user">'.$d->pesan."<br>"."<br>"."- ".$d->hari.'</div>'."<br>"; } ?>
	</div>
	<footer>
		<form action="" method="post">
			<center>
				<input type="text" name="pesan" placeholder="Ketikan pesan anda">
				<button type="submit" name="submit">Send</button>
			</center>	
		</form>
	</footer>

</body>
</html>