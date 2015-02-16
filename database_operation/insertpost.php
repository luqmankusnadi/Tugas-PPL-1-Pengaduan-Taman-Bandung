<?php
require_once "connect.php";

$url = "index.php";
$table = "pengaduan";
$komentar = mysqli_real_escape_string($con,$_POST['komentar']);
//$foto=addslashes(file_get_contents($_FILES['foto-taman']['tmp_name']));
$jenis_pengaduan =  mysqli_real_escape_string($con,$_POST['pilihan_aduan']);
$id_taman = mysqli_real_escape_string($con,$_POST['pilihan_taman']);

/*
// Temporary file name stored on the server
$tmpName = $_FILES['foto-taman']['tmp_name'];
$fp = fopen($tmpName, 'r');
$data = fread($fp, filesize($tmpName));
$data = addslashes($data);
fclose($fp);
*/

/* $sql = 'INSERT INTO '.$table.' (`id_jenis_pengaduan`, `id_taman`, `komentar`, `foto`)
 VALUES ("'.$jenis_pengaduan.'", "'.$id_taman.'", "'.$komentar.'", '.$data.')'; */
 
$sql = 'INSERT INTO '.$table.' (`id_jenis_pengaduan`, `id_taman`, `komentar`, `foto`)
 VALUES ("'.$jenis_pengaduan.'", "'.$id_taman.'", "'.$komentar.'", '.$foto.')';
 
$result = mysqli_query($con,$sql);

if($result) {
	redirect($url);
} else {
	/*
	echo $jenis_pengaduan . "<br/>";
	echo $id_taman . "<br/>";
	echo $komentar . "<br/>";
	echo $_FILES['foto-taman']['name']. "<br/>";
	echo getimagesize($_FILES['foto-taman']['tmp_name'])[3]. "<br/>";
	echo $data . "<br/>"; */
	die('Error : Gagal menambahkan aduan ke database' . mysql_error());
}
	
function redirect($url,$statusCode = 303)
{
	header ('Location: /Tugas1_PPL/' . $url, true,$statusCode);
	die();
}
?>