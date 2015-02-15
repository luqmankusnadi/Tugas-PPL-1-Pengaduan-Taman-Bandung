<?php
require_once "connect.php";

$table = "post";

$sql = "UPDATE $table SET
Judul = '$_POST[Judul]',
Tanggal = '$_POST[Tanggal]',
Konten = '$_POST[Konten]' WHERE ID =". $_POST['id'];

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
	
$url = "index.php";

function redirect($url,$statusCode = 303)
{
	header ('Location:.../ ' . $url, true,$statusCode);
	die();
}
redirect($url);
?>