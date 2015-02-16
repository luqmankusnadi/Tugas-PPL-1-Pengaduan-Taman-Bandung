<?php
	$con=mysqli_connect("localhost","root","","pengaduan_taman");
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$result = mysqli_query($con,"UPDATE pengaduan SET status=$_POST[selected_status] WHERE id=$_POST[id_taman]");
	
	mysqli_close($con);
	header("Location: validasi.php", true, 303);
	die();
?>
