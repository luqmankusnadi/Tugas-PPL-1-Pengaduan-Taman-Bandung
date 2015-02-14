<!DOCTYPE html>

<head>
	<title>Login Petugas</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<table width="300" border="5" align="center" cellpadding="4" cellspacing="1" bgcolor="#CCCCCC">
	<tr>
		<form name="FormLogin" method="post" action="VerifikasiAkun.php">
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
</body>
</html>