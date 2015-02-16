<?php
	session_start();
	if(isset($_SESSION["id_petugas"]))
	{
		header("Location: validasi.php");
		die();
	};
?>

<!DOCTYPE html>
<?php
session_start();

?>
<html>

<head>
	<title>Pengaduan Taman Bandung</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="dist/css/fileinput.min.css" rel="stylesheet">
	<link href="dist/css/signin.css" rel="stylesheet">
	
</head> 

<body>

<!-- template navigasi bar halaman -->
	
	  <div class="container">
		<nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="#">Pengaduan Taman Bandung</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
			  <ul class="nav navbar-nav">
				<li><a href="index.php">Beranda</a></li>
				<li class="active"><a href="admin.php">Admin</a></li>
				<li><a href="about.php">Tentang</a></li>
			  </ul>
			</div>
		  </div>
		</nav>
	  </div>
	  
	<!-- selesai navigasi bar halaman -->
	 
    <div class="container" style="padding: 100px 470px;">
		<div class="form-group">
			<h2 class="form-signin-heading" align="center" style="font-size : 220%"><b>Login Admin</b></h2>
		</div>
      <form class="form-signin" method="post" action="validasi.php"
	  style="border: 3px solid #2fe526;border-radius: 10px;"id="form-signinAdmin">
		
		<div class="form-group">
			<label for="inputEmail" class="sr-only">Username</label>
			<input type="username" id="inputUsername" name="inputUsername" class="form-control" placeholder="Username" style="padding:10px;" required autofocus>
        </div>
		
		<div class="form-group">
			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" style="padding:10px;" required>
        </div>
		
		<div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-primary btn-block" type="submit" style="background-color:#2fe526"><b>Masuk</b></button>
      </form>

    </div>
	
	<!-- include javascript kaya biasa lah ya :v -->
	<script src="dist/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
	
	<script src="dist/js/fileinput.min.js"></script>

</body>

</html> 