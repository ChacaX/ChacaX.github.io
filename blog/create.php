<?php 

include('PHPMailer/src/Exception.php');
include('PHPMailer/src/PHPMailer.php');
include('PHPMailer/src/SMTP.php');

$nama = $_POST['user'];
$sandi = $_POST['password'];
$email = $_POST['email'];

	$email_pengirim = 'feka7671@gmail.com';
	$nama_pengirim = 'admin';
	$email_penerima = $_POST['email'];
	$subjek = 'tes';
	$pesan = 'work';

	$mail = new PHPMailer(true);
	$mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->Username = $email_pengirim; 
    $mail->Password = 'xjunvnlrmijnjocj';
    $mail->Port = 465;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->SMTPDebug = 2;

    $mail->setFrom($email_pengirim, $nama_pengirim);
    $mail->addAddress($email_penerima);   
    $mail->isHTML(true);
    $mail->Subject = $subjek;
    $mail->Body = $pesan;

    $send = $mail->send();

    if($send) {
    	echo "EMAIL BERHASIL DIKIRIM";
    } else {
    	echo "EMAIL BERHASIL DIKIRIM";
    }

    echo "dta ss";
    echo "<script type='text/javascript'> document_location = 'beranda.php'; </script>"

?>