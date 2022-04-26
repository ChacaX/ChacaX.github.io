<?php 

require("func.php");

$data = file_get_contents("data.json");
$data = json_decode($data);

if( isset($_POST["submit"]) ) {

	echo "
    	<script>
    	     alert('Scroll Kebawah Untuk Melihat Pendapat Dari Orang Lain Juga')
    	</script>
    	";
}

if( isset($_POST["konfirm"]) ) {

    if( $_POST["nick"] == "mitsuha" && $_POST["kode"] == "2468" ) {

    	echo "
    	<script>
    	     alert('Selamat Data Yang Kamu Masukan Benar!')
    	</script>
    	";

        header("Location: administrator.php");
        exit;

    } else {

    	echo "
    	<script>
    	     alert('Data Yang Kamu Masukan Salah!')
    	</script>
    	";

    } 
}

?>

<!DOCTYPE html>
<html>

<meta charset="UTF-8">
<meta name="viewport" content="width-device-width, initial-scale=1.0">

<head>
	<title> BERANDA </title>

	<style>

	@import url('https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital@1&display=swap');

	@media(max-width: 768px) {

	}


	html {
			background: url('IMG-20220405-WA0024.jpg')no-repeat center fixed;
		    -webkit-background-size:cover;
		    -moz-background-size:cover;
		    -o-background-size:cover;
		    background-size:cover;
		}

		.box {
			width: 470px;
			margin: auto;
			color: gray;
			border-radius: 20px;
			background-color: white;
			font-family: 'Archivo Narrow', sans-serif;
			font-size: 10px;
		    padding: 15px;
			box-shadow: 0 0 1px black;
        }

        .proggres {
			width: 470px;
			margin: auto;
			font-family: 'Archivo Narrow', sans-serif;
			font-size: 10px;
			padding: 15px;
		}

        .wadah {
        	width: 200px;
        	height: 11px;
        	margin: auto;
        	border-radius: 50px;
        	background-color: lightgray;
        }

        .html {
        	width: 140px;
        	border-radius: 50px;
        	background-color: #4076ff;
        	height: 12px;
        }

        .css {
        	width: 120px;
        	border-radius: 50px;
        	background-color: #4076ff;
        	height: 12px;
        }

        .php {
        	width: 80px;
        	border-radius: 50px;
        	background-color: #4076ff;
        	height: 12px;
        }

        .nodejs {
        	width: 150px;
        	border-radius: 50px;
        	background-color: #4076ff;
        	height: 12px;
        }

        .mini-but {
			width: 170px;
			margin: auto;
			border-radius: 50px;
			background-color: #d72f51;
			font-family: 'Archivo Narrow', sans-serif;
			font-size: 10px;
			padding: 15px;
			box-shadow: 0 0 2px black;
			text-align: center;
        }

        .mini-but-tr {
			width: 170px;
			margin: auto;
			border-radius: 50px;
			font-family: 'Archivo Narrow', sans-serif;
			font-size: 10px;
			padding: 15px;
			box-shadow: 0 0 5px black;
			text-align: center;
        }

        .but-400 {
			width: 400px;
			margin: auto;
			border-radius: 5px;
			background-color: #d72f51;
			font-family: 'Archivo Narrow', sans-serif;
			font-size: 10px;
			padding: 15px;
			box-shadow: 0 0 2px black;
			text-align: center;
			color: white;
        }

        .flex {
			display: flex;
		}

		.projek {
			width: 470px;
			height: 270px;
			margin: auto;
			color: gray;
			border-radius: 10px;
			background-color: white;
			font-family: 'Archivo Narrow', sans-serif;
			font-size: 10px;
		}

		.but-pro {
			width: 90px;
			height: 8px;
			border-radius: 50px;
			background-color: blue;
			font-family: 'Archivo Narrow', sans-serif;
			font-size: 10px;
			padding: 15px;
			color: white;
			float: left;
			text-align: center;
		}

		.about {
			width: 470px;
			height: 270px;
			margin: auto;
			color: gray;
			border-radius: 10px;
			background-color: white;
			font-family: 'Archivo Narrow', sans-serif;
			font-size: 10px;
		}

		.support {
			width: 470px;
			margin: auto;
			color: white;
			border-radius: 10px;
			background-color: #323334;
			font-family: 'Archivo Narrow', sans-serif;
			font-size: 10px;
		}

		.circle1 {
			width: 10px;
			height: 10px;
			border-radius: 50px;
			padding: 5px;
			background-color: yellow;
			position: relative;
			left: 15px;
		}

		.circle2 {
			width: 10px;
			height: 10px;
			border-radius: 50px;
			padding: 5px;
			background-color: aqua;
			position: relative;
			left: 25px;

		}

		.circle3 {
			width: 10px;
			height: 10px;
			border-radius: 50px;
			padding: 5px;
			background-color: red;
			position: relative;
			left: 35px;
		}

		.support h1:hover {
			animation: hone 1s ease 1 normal;
		}

		@keyframes hone {
			50% {
			color: white;
			text-shadow: 0 0 40px white,
			             0 0 80px white,
			             0 0 120px white,
			             0 0 80px white,
			             0 0 40px white;
			}
		}

		th {
			background-color: orange;
			color: white;
		}

		td {
			background-color: #efffff;
			color: orange;
		}

		table {
			box-shadow: 2px 10px 10px lightgray;
			font-size: 15px;
			width: 470px;
		}

		.form-control {
			width: 400px;
			height: 25px;
			outline: none;
			padding: 10px;
			border: 1.5px solid;
			border-radius: 5px;
		}

		button {
			border: 1.5px solid;
			border-radius: 5px;
			font-size: 15px;
		}

		.but-decor {
			width: 422px;
			height: 47px;
			margin: auto;
			background-color: orange;
			color: white;
			border: 1.5px solid;
			border-radius: 5px;
		}



	</style>
</head>
<body>
 
    <div class="box">
		<div class="flex">
			<img style="left: 10%; position: relative; box-shadow: 0 2px 6px #d72f51; padding: 5px; width: 100px; height: 100px; border-radius: 50%;" src="IMG-20220401-WA0002.jpg">
			<h1 style="font-size: 25px; margin: auto;">On Day <?= date("l"); ?></h1>
		</div>
		<br>
		<br>
		<div class="flex">
			<div class="mini-but">
				<a style="color: white; text-decoration: none" href="http://instagram.com/mas.purnomo12">Admin</a>
			</div>
			<div class="mini-but-tr">
				<a style="text-decoration: none" href="http://instagram.com/mas.purnomo12">Sosmed</a>
			</div>
		</div>
		<br>
		<br>
		<div class="but-400">
			<a style="color: white; text-decoration: none" href="http://wa.me/6285731261728">Layanan Service</a>
		</div>
		<br>
		<br>
		<br>
		<form action="" method="post">
			<center><h1 style="font-style: oblique; padding: 5px; color: red; font-size: 15px;">yuk beri ulasan kepada saya agar kedepan menjadi pribadi yang lebih baik, form ini bersifat gratis kamu tak perlu khawatir untuk membayar</h1></center>
			<br>
			<center><input type="text" name="pendapat" placeholder="Masukan Pendapatmu Disini" class="form-control" required></center>
			<br>
			<center><input type="text" name="username" placeholder="Masukan Nama Kamu" class="form-control" required></center>
			<br>
			<center><button class="but-decor" type="submit" name="submit">Kirim</button></center>
			<a href="#pendapatnya"><h1 style="position: relative; left: 5%; text-align: left; font-style: oblique; padding: 1px; font-size: 13px;">Tekan Untuk Scroll Kebawah</h1></a>
		</form>
		<br>
		<br>
		<br>
		<h1 style="font-style: oblique; padding: 5px; color: red; font-size: 15px;">syarat & ketentuan</h1>
		<h1 style="text-align: left; font-style: oblique; padding: 1px; font-size: 10px;">- aktivitas anda tidak akan kami sebar maupun kami salah gunakan.</h1>
		<h1 style="text-align: left; font-style: oblique; padding: 1px; font-size: 10px;">- mengalami bug atau menemukan bagian yang eror silahkan hubungi layanan.</h1>
		<h1 style="text-align: left; font-style: oblique; padding: 1px; font-size: 10px;">- pengguna dilarang merusak sistem atau databse kami.</h1>
		<h1 style="text-align: left; font-style: oblique; padding: 1px; font-size: 10px;">- gunakan website ini dengan bijaksana dan baik.</h1>
		<br>
		<br>
		<h1 style="text-align: right; font-style: oblique; padding: 5px; color: red; font-size: 15px;">develoment</h1>
		<h1 style="text-align: right; font-style: oblique; padding: 3px; font-size: 10px;">- website ini dibuat dengan tujuan mendalami dan melatih skill pemograman yang dimana akan berguna dimasa masa era digital seperti sekarang ini. so buat kalian para mastah dimohon untuk tidak men-ddos situs ini, mari kita bangun negri kita yang tercinta ini menuju ke dalam negri yang maju dan makmur. salam dari aine team</h1>
		<br>
		<br>
		<h1 style="font-style: oblique; padding: 5px; color: red; font-size: 15px;">support</h1>
		<h1 style="text-align: left; font-style: oblique; padding: 1px; font-size: 10px;">- ingin support kami? caranya mudah kalian tinggal kunjungi sosial media admin dan follow serta subscribe akun sosial media admin. donasi saweria sedang dalam tahap pembuatan,
		satu akun yang kalian kunjungi akan sangat berarti bagi saya.</h1>
		<br>
		<br>
		<div class="projek">
			<img style="filter: drop-shadow(10px 12px 10px gray); float: left; width: 300px; height: 300px;" src="20220403_123143.png">
			<h1 style="font-style: oblique; padding: 5px; color: red; font-size: 15px;">find my projek</h1>
			<br>
		    <h1 style="font-style: oblique; padding: 1px; font-size: 10px;">Hi sedang membuat beberapa project yang akan membangun tingkat skill pemograman saya</h1>
			<br>
		    <h1 style="font-style: oblique; padding: 1px; font-size: 10px;">Temukan project yang sedang saya kerjakan hanya cukup dengan klik gambar disamping atau klick tombol yang sudah saya sediakan dibawah ini</h1>
		    <br>
		    <a style="color: white; text-decoration: none" href="http://github.com/chacax"><div class="but-pro">Find My Projek</div></a>
		</div>
		<br>
		<br>
		<div class="about">
			<img style="filter: drop-shadow(10px 12px 10px gray); float: right; width: 300px; height: 300px;" src="20220403_144929.png">
			<h1 style="font-style: oblique; padding: 5px; color: red; font-size: 15px;">info tentang aku</h1>
			<br>
		    <h1 style="font-style: oblique; padding: 1px; font-size: 10px;">hi nama saya chacha saya berusia 15 tahun, saya lahir pada tanggal 10 april 2007 dan saya berkelahiran di magelang, alamat rumah saya berada di kota istimewa yogyakarta kebih tepatnya di kabupaten sleman kecamatan gamping desa guyangan.</h1>
		    <h1 style="font-style: oblique; padding: 1px; font-size: 10px;">saya hobi bermain bulu tangkis dan di dalam dunia teknologi saya gemar membangun sebuah progam yang dapat dimanfaatkan oleh puluhan hingga ribuan pengguna handphone diluar sana.</h1>
		</div>
		<br>
		<br>
		<div class="support">
			<br>
			<br>
			<div class="flex">
				<div class="circle1"><br></div>
				<div class="circle2"><br></div>
				<div class="circle3"><br></div>	
			</div>
			<div class="flex">
				<div class="div-grup">
				    <center><h1 style="font-style: oblique; padding: 15px; color: red; font-size: 15px;">pembimbing</h1>
				    <p style="font-style: oblique; color: gray; font-size: 14px;">sandhika</p>
				    <p style="font-style: oblique; color: gray; font-size: 14px;">fadil</p>
				    <p style="font-style: oblique; color: gray; font-size: 14px;">wafi</p>
				    <p style="font-style: oblique; color: gray; font-size: 14px;">yuda</p>
				    <p style="font-style: oblique; color: gray; font-size: 14px;">ridwan</p></center>
			    </div>
			    <div class="div-grup">
				<center><h1 style="font-style: oblique; padding: 15px; color: red; font-size: 15px;">support</h1>
			    	<p style="font-style: oblique; color: gray; font-size: 14px;">zaky</p>
			     	<p style="font-style: oblique; color: gray; font-size: 14px;">zahra</p>
			    	<p style="font-style: oblique; color: gray; font-size: 14px;">dimas</p>
			    	<p style="font-style: oblique; color: gray; font-size: 14px;">bilal</p>
				    <p style="font-style: oblique; color: gray; font-size: 14px;">suparto</p></center>
			    </div>
			    <div class="div-grup">
				<center><h1 style="font-style: oblique; padding: 15px; color: red; font-size: 15px;">friends</h1>
					<p style="font-style: oblique; color: gray; font-size: 14px;">arka</p>
					<p style="font-style: oblique; color: gray; font-size: 14px;">raihan</p>
			    	<p style="font-style: oblique; color: gray; font-size: 14px;">putra</p>
			     	<p style="font-style: oblique; color: gray; font-size: 14px;">ulung</p>
			    	<p style="font-style: oblique; color: gray; font-size: 14px;">lintang</p>
			    	<p style="font-style: oblique; color: gray; font-size: 14px;">maya</p></center>
			    </div>
			    <div class="div-grup">
				<center><h1 style="font-style: oblique; padding: 15px; color: red; font-size: 15px;">project</h1>
			    	<p style="font-style: oblique; color: gray; font-size: 14px;">bot whatsapp</p>
			     	<p style="font-style: oblique; color: gray; font-size: 14px;">css & html</p>
			     	<p style="font-style: oblique; color: gray; font-size: 14px;">website</p>
			     	<p style="font-style: oblique; color: gray; font-size: 14px;">learn</p>
			    	<p style="font-style: oblique; color: gray; font-size: 14px;">learn php</p></center>
			    </div>
			    <div class="div-grup">
				<center><h1 style="font-style: oblique; padding: 15px; color: red; font-size: 15px;">jenjang</h1>
			    	<p style="font-style: oblique; color: gray; font-size: 14px;">tk</p>
			     	<p style="font-style: oblique; color: gray; font-size: 14px;">sd</p>
			    	<p style="font-style: oblique; color: gray; font-size: 14px;">smp</p></center>
			    </div>
			     <div class="div-grup">
				<center><h1 style="font-style: oblique; padding: 15px; color: red; font-size: 15px;">hobi</h1>
			    	<p style="font-style: oblique; color: gray; font-size: 14px;">ngoding</p>
			    </div>
		    </div>
		</div>
		<br>
		<br>
		<br>
		<div class="proggres">
			<div class="flex">
				<div class="page1">
					<div class="flex">
					     <h1 style="margin: auto; font-style: oblique; padding: 5px; color: red; font-size: 10px;">skill html</h1>
					     <h1 style="margin: auto; font-style: oblique; padding: 5px; color: darkred; font-size: 10px;">70%</h1>
				    </div>
				    <div class="wadah"><div class="html"></div></div>
				    <br>
				    <div class="flex">
				    	<h1 style="margin: auto; font-style: oblique; padding: 5px; color: red; font-size: 10px;">skill css</h1>
					    <h1 style="margin: auto; font-style: oblique; padding: 5px; color: darkred; font-size: 10px;">60%</h1>
				    </div>
				    <div class="wadah"><div class="css"></div></div>
				    <br>
				    <div class="flex">
				    	<h1 style="margin: auto; font-style: oblique; padding: 5px; color: red; font-size: 10px;">skill php</h1>
				        <h1 style="margin: auto; font-style: oblique; padding: 5px; color: darkred; font-size: 10px;">40%</h1>
				    </div>
				    <div class="wadah"><div class="php"></div></div>
				    <br>
				</div>			
				<div class="page2">
					<div class="flex">
				    	<h1 style="margin: auto; font-style: oblique; padding: 5px; color: red; font-size: 10px;">skill nodejs</h1>
				        <h1 style="margin: auto; font-style: oblique; padding: 5px; color: darkred; font-size: 10px;">75%</h1>
				    </div>
				    <div class="wadah"><div class="nodejs"></div></div>
					<h1 style="position: relative; right: -16px; font-style: oblique; padding: 17px; font-size: 10px;">static disamping menunjukan tingkat kemampuan saya dalam memahami bahasa pemogramman yang sudah saya pelajari hingga saat ini dan akan diperbarui dari hari hari kedepan.</h1>
				</div>
			</div>
		</div>
		<br>
	    <br>
		<iframe width="470" height="265" src="https://www.youtube.com/embed/OrmhldejwlY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<br>
		<br>
		<br>
		<section class="section-sm" id="pendapatnya">
		<center><table border="0" cellpadding="20" cellspacing="0">
        	<tr>
	        	<th>Bagaimana Pendapat Mereka Tentang Saya?</th>
        	</tr>
	        <tr>
	        	<td><?php foreach ($data as $d) {
	echo "# ".$d->name.", ".$d->hari."<br>"."message: ".$d->pdt."<br>"."______________________________________________________________"."<br>"."<br>"; } ?></td>
	        </tr>
        </table></center>
        <br>
        <br>
        <br>
        <form action="" method="post">
        	<center><h1 style="font-style: oblique; padding: 5px; color: red; font-size: 15px;">masuk sebagai admin</h1></center>
			<br>
			<center><input type="text" name="nick" placeholder="Masukan Nickmu Disini" class="form-control"></center>
			<br>
			<center><input type="password" name="kode" placeholder="Masukan Kode Kamu" class="form-control"></center>
			<br>
			<center><button class="but-decor" type="konfirm" name="konfirm">Konfirmasi</button></center>
        </form>
        <br>
        <br>
    </div>

</body>
</html>