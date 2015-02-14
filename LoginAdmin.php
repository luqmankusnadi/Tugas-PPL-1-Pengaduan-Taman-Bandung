<!DOCTYPE html>
<head>
      <title>Login</title>
</head>
<body>
	<table width="300" border="5" align="center" cellpadding="4" cellspacing="1" bgcolor="#CCCCCC">
	<tr>
		<form name="FormLogin" method="post" action="#">
		<td>
			<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
			<tr>
				<h2 align=>Login Petugas</h2>
			</tr>
			<tr>
				<td width="78">Username</td>
				<td width="6">:</td>
				<td width="294"><input name="username" type="text" class="inputtext" id="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="password" type="password" class="inputtext" id="password"></td>
			</tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Login"></td>
			</table>
			<input type="checkbox" name="remember" value="true"/>Remember me
		</td>
		</form>
	</tr>
	</table>
	
<?php
function Login() {
	$username = $_POST['username'];
	$password = $_POST['password'];
	// Create connection
	$con=mysqli_connect("localhost","root","","pengaduan_taman");

	// Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
    $query = "Select * from petugas_taman WHERE username='$username' and password='$password'";
	$result = mysqli_query($con,$query);
	if($result->num_rows != 1) {
		echo "Username atau Password anda Salah";
		return false;
	} else {
		echo "Anda Berhasil Login";
	}
	mysqli_close($con);
}
if(isset($_POST['submit']))
{
	Login();
}
?>
</body>
</html>