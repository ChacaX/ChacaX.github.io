<?php require("func.php");  ?>

<!DOCTYPE html>
<html>
<head>
	<title> ADMINISTRATOR </title>

	<style>
		
		@import url('https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital@1&display=swap');

	@media(max-width: 768px) {

	}

	    html {
			font-family:  'Archivo Narrow', sans-serif;
		}

	    th {
			background-color: orange;
			color: white;
		}

    	input {
    		outline: none;
    		width: 200px;
    		height: 30px;
    	}

    	td {
			background-color: #efffff;
		}

	</style>
</head>
<body>

<center><table border="0" cellpadding="20" cellspacing="0">
	<!--- head --->
	<tr>
		<th>Keterangan</th>
		<th>Action</th>
	</tr>
	<!--- perintah --->
	<tr>
		<td>
			<p>Menghapus seluruh data dalam json pendapat?</p>
		</td>
		<td>
			<form action="" method="post">
				<center><button type="submit" name="hapus">Enable</button></center>
			</form>
		</td>
		
</table></center>

</body>
</html>