<!DOCTYPE html>

<html>

<head>
	<title>Pengaduan Taman Bandung</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="dist/css/fileinput.min.css" rel="stylesheet">
	
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
				<li><a href="admin.php">Admin</a></li>
				<li class="active"><a href="about.php">Tentang</a></li>
			  </ul>
			  <?php
				session_start();
				if(isset($_SESSION["id_petugas"]))
				{
					$con=mysqli_connect("localhost","root","","pengaduan_taman");
					if (mysqli_connect_errno()) {
						echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}
					$result = mysqli_query($con,"SELECT * FROM petugas_taman WHERE id='".$_SESSION["id_petugas"]."'");
					$nama_admin = mysqli_fetch_array($result)['nama'];
					echo"
						<ul class='nav navbar-nav navbar-right'>
						<li><a>".$nama_admin."</a></li>
						<li><a href='logout.php'>logout</a></li>
						</ul>
						";
				}
				?>
			</div>
		  </div>
		</nav>
	  </div>
	  <div class="jumbotron">
		  <div class="container">
			<h2>Developer</h2>
			  <div class="row">
				<div class="col-md-4">
				  <a href="https://www.facebook.com/IF092?fref=ts" class="thumbnail">
					<p>Reinaldo Michael Hasian</p>    
					<img src="img/aldo.jpg" alt="aldo" style="width:200px;height:200px">
				  </a>
				</div>
				<div class="col-md-4">
				  <a href="https://www.facebook.com/mariotejuzar?fref=ts" class="thumbnail">
					<p>Mario Tressa Juzar</p>
					<img src="img/mario.jpg" alt="mario" style="width:200px;height:200px">
				  </a>
				</div>
				<div class="col-md-4">
				  <a href="https://www.facebook.com/danang.hudaya?fref=ts" class="thumbnail">
					<p>Danang Afnan Hudaya</p>      
					<img src="img/danang.jpg" alt="danang" style="width:150px;height:200px">
				  </a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
				  <a href="https://www.facebook.com/luqmanfaizlani.kusnadi?fref=ts" class="thumbnail">
					<p>Luqman Faizlani Kusnadi</p>    
					<img src="img/luqman.jpg" alt="aldo" style="width:280px;height:180px">
				  </a>
				</div>
				<div class="col-md-6">
				  <a href="https://www.facebook.com/Ichwanharyosembodo" class="thumbnail">
					<p>Ichwan Haryo Sembodo</p>
					<img src="img/ichwan.png" alt="mario" style="width:180px;height:180px">
				  </a>
				</div>
			</div>
		  </div>
	  </div>
	  
	<!-- selesai navigasi bar halaman -->
	  
	<!-- include javascript kaya biasa lah ya :v -->
	<script src="dist/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
	
	<script src="dist/js/fileinput.min.js"></script>

</body>

</html>