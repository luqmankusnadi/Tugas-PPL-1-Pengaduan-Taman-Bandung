<?php
include "connect.php";

$table = "pengaduan";
$komentar = mysqli_real_escape_string($con,$_POST['komentar']);
$jenis_pengaduan = mysqli_real_escape_string($con,$_POST['selected_aduan']);
$id_taman = mysqli_real_escape_string($con,$_POST['selected_taman']);
$sql = "INSERT INTO $table SET
jenis_pengaduan = '$jenis_pengaduan',
id_taman = '$id_taman',
komentar = '$komentar',
status = '-1'";
$query = mysqli_query($con,$sql);
mysqli_close($con);

$url = "index.php";
	
	function redirect($url,$statusCode = 303)
	{
		header ('Location: ' . $url, true,$statusCode);
		die();
	}
	redirect($url);
?>