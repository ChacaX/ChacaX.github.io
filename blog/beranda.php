

<!DOCTYPE html>
<html>

<meta charset="UTF-8">
<meta name="viewport" content="width-device-width, initial-scale=1.0">

<head>
	<title> BERANDA </title>

	<style>

	@media(max-width: 768px) {
		
		html {
			background-color: #d72f51;
		    -webkit-background-size:cover;
		    -moz-background-size:cover;
		    -o-background-size:cover;
		    background-size:cover;
		}

		.box {
			width: 100%;
			margin: auto;
			color: gray;
			border-radius: 10px;
			background-color: white;
			font-family: arial;
			font-size: 10px;
			padding: 15px;
			box-shadow: 0 0 1px black;
        }

        .about {
			width: 100%;
			height: 610px;
			color: gray;
			border-radius: 10px;
			background-color: white;
			font-family: arial;
			font-size: 14px;
			padding: 15px;
			box-shadow: 0 0 1px black;
			font-style: italic;
        }

        .box-samp {
        	width: 100%;
			width: 370px;
			height: 610px;
			color: gray;
			border-radius: 10px;
			background-color: white;
			font-family: arial;
			font-size: 14px;
			padding: 15px;
			box-shadow: 0 0 1px black;
			font-style: italic;
        }

        .mini-but {
			width: 170px;
			margin: auto;
			border-radius: 50px;
			background-color: #d72f51;
			font-family: arial;
			font-size: 10px;
			padding: 15px;
			box-shadow: 0 0 2px black;
			text-align: center;
        }

        .mini-but-tr {
			width: 170px;
			margin: auto;
			border-radius: 50px;
			font-family: arial;
			font-size: 10px;
			padding: 15px;
			box-shadow: 0 0 5px black;
			text-align: center;
        }

        .but-370 {
			width: 400px;
			margin: auto;
			border-radius: 5px;
			background-color: #d72f51;
			font-family: arial;
			font-size: 10px;
			padding: 15px;
			box-shadow: 0 0 2px black;
			text-align: center;
			color: white;
        }

        .flex-dv {
			display: flex;
		}

		.flex {
			display: none;
		}
	}


	html {
			background-color: #d72f51;
		    -webkit-background-size:cover;
		    -moz-background-size:cover;
		    -o-background-size:cover;
		    background-size:cover;
		}

		.box {
			width: 470px;
			margin: auto;
			color: gray;
			border-radius: 10px;
			background-color: white;
			font-family: arial;
			font-size: 10px;
			padding: 15px;
			box-shadow: 0 0 1px black;
        }


        .about {
			width: 370px;
			height: 610px;
			color: gray;
			border-radius: 10px;
			background-color: white;
			font-family: arial;
			font-size: 14px;
			padding: 15px;
			box-shadow: 0 0 1px black;
			position: fixed;
			font-style: italic;
        }

        .box-samp {
        	margin-left: 69%;
			width: 370px;
			height: 610px;
			color: gray;
			border-radius: 10px;
			background-color: white;
			font-family: arial;
			font-size: 14px;
			padding: 15px;
			box-shadow: 0 0 1px black;
			position: fixed;
			font-style: italic;
        }

        .mini-but {
			width: 170px;
			margin: auto;
			border-radius: 50px;
			background-color: #d72f51;
			font-family: arial;
			font-size: 10px;
			padding: 15px;
			box-shadow: 0 0 2px black;
			text-align: center;
        }

        .mini-but-tr {
			width: 170px;
			margin: auto;
			border-radius: 50px;
			font-family: arial;
			font-size: 10px;
			padding: 15px;
			box-shadow: 0 0 5px black;
			text-align: center;
        }

        .but-370 {
			width: 400px;
			margin: auto;
			border-radius: 5px;
			background-color: #d72f51;
			font-family: arial;
			font-size: 10px;
			padding: 15px;
			box-shadow: 0 0 2px black;
			text-align: center;
			color: white;
        }

        .flex {
			display: flex;
		}

		.flex-dv {
			display: flex;
		}

	</style>
</head>
<body>
 
 <div class="flex">
	<div class="box">
		<div class="flex-dv">
			<img style="left: 14%; position: relative; box-shadow: 0 2px 6px #d72f51; padding: 5px; width: 100px; height: 100px; border-radius: 50%;" src="IMG-20220401-WA0002.jpg">
			<h1 style="font-size: 25px; margin: auto;">On Day <?= date("l"); ?></h1>
		</div>
		<br>
		<br>
		<div class="flex-dv">
			<div class="mini-but">
				<a style="color: white; text-decoration: none" href="http://instagram.com/mas.purnomo12">Admin</a>
			</div>
			<div class="mini-but-tr">
				<a style="text-decoration: none" href="http://localhost/filephp/loginAdmin/">LogOut</a>
			</div>
		</div>
		<br>
		<br>
		<div class="but-370">
			<a style="color: white; text-decoration: none" href="http://wa.me/6285731261728">Layanan Service</a>
		</div>
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
    </div>

    <div class="about">
    	<img style="padding: 2px; float: left; border-radius: 100px; width: 120px; height: 120px;" src="20210520_104224.png">
    	<p>perkenalkan nama saya caca, saya sebagai pembuat website ini sekaligus admin. saya berasal dari kota yogyakarta telah berpendidikan hingga jenjang smp. saya mulai menyukai dunia pemograman disaat saya menemukan bot whatsapp dengan fitur fitur keren dari situ saya mulai tertarik dan ingin membuat bot itu sendiri dengan aplikasi seadanya, kemudian saya beralih ke bit whatsapp yang dibuat dengan cara coding dan saya sedikit demi sedikit memahami apa saja syntax yang ada didalam script bot tersebut. dan disaat itulah saya ingin mempelajari bahasa pemograman lain agar di kemudian hari saya bisa mengajarkan hal ini kepada teman teman saya.</p>
    	<p>sedikit saya akan mengenalkan diri saya secara rinci saya berkelamin laki laki, saya juga anak pertama dari 3 bersaudara alamat tinggal saya berada di kota istimewa yoyagkarta dan berada di daerah kabupaten sleman tepatnya berada di jalan godean kecamatan gamping desa guyangan, saya masih berada dibangku smp kelas 8 dan saya masih diumur 15 tahun pada tanggal kelahiran 10 april 2007 silam.</p>
    	<p>saya tidak berniat untuk mengikuti les kursus karena bagi saya semua informasi pembelajaran dapat diperoleh dari jaringan sosial media manapun bahkan saya sendiri hanya bermodal tutorial youtube dan dibantu oleh teman teman terdekat saya untuk menggali informasi lebih dalam, bagib saya guru hanya mengulas kembali informasi yang telah disampaikan di dalam modul dan mengajari kita ber-akhlak yang baik, dan saya lihat beberapa guru bersifat tegas justru membuat murid menjadi suram dan tidak semangat belajar maka dari itu guru guru jika ingin dihargai maka hargailah murid karena tingkat mencerna informasi manusia itu berbeda beda.</p>
    </div>

    <div class="box-samp">
    	
    </div>

</div>

</body>
</html>