<!DOCTYPE html>

<html>

<head>
	<title>Pengaduan Taman Bandung</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="dist/css/fileinput.min.css" rel="stylesheet">
	<style>
		tes {
			margin-left: auto;
			margin-right: auto;
			width : 600px;
		}
	</style>
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
	
	<!-- image slider make carousel -->	  
	<br><br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
		  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		  <li data-target="#myCarousel" data-slide-to="1"></li>
		  <li data-target="#myCarousel" data-slide-to="2"></li>
		  <li data-target="#myCarousel" data-slide-to="3"></li>
		  <li data-target="#myCarousel" data-slide-to="4"></li>
		  <li data-target="#myCarousel" data-slide-to="5"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
		  <div class="item active" style="margin:15px 0px 0px 0px">
			<img src="img/geje/ghajebo.png" alt="First-slide" style="width : 400px;margin-left: auto;margin-right: auto;margin-top: auto">
			<div class="container">
				<div class="carousel-caption">
					<h1>GHAJEBO</h1>
					<p>avenger</p>
				</div>
			</div>
		  </div>
		  
		  <div class="item" style="margin:15px 0px 0px 0px">
			<img src="img/geje/alvin.png" alt="First-slide" style="width : 400px;margin-left: auto;margin-right: auto;margin-top: auto">
			<div class="container">
				<div class="carousel-caption">
					<h1>300 LBS</h1>
					<p>legendary sixpack man</p>
				</div>
			</div>
		  </div>

		  <div class="item" style="margin:15px 0px 0px 0px">
			<img src="img/geje/ip-man-4.png" alt="Second-slide" style="width : 400px;margin-left: auto;margin-right: auto;margin-top: auto">
			<div class="container">
				<div class="carousel-caption">
					<h1>Ip Man 4</h1>
					<p>based on true story</p>
				</div>
			</div>
		  </div>
		
		  <div class="item" style="margin:15px 0px 0px 0px">
			<img src="img/geje/puja-biokonda.png" alt="Third-slide" style="width : 400px;margin-left: auto;margin-right: auto;margin-top: auto">
			<div class="container">
				<div class="carousel-caption">
					<h1>BioKonda</h1>
					<p>lost in amazon</p>
				</div>
			</div>
		  </div>
		  
		  <div class="item" style="margin:15px 0px 0px 0px">
			<img src="img/geje/ganja-air.png" alt="Fifth-slide" style="width : 400px;margin-left: auto;margin-right: auto;margin-top: auto">
			<div class="container">
				<div class="carousel-caption">
					<h1>Ganja Air</h1>
					<p>we make people fly</p>
				</div>
			</div>
		  </div>
		  
		  <div class="item" style="margin:15px 0px 0px 0px">
			<img src="img/geje/biodiesel.jpg" alt="Seventh-slide" style="width : 400px;margin-left: auto;margin-right: auto;margin-top: auto">
			<div class="container">
				<div class="carousel-caption">
					<h1>Biodiesel</h1>
					<p>alternative energy</p>
				</div>
			</div>
		  </div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		  <span class="sr-only">Next</span>
		</a>
    </div>
	<div>
		<br/>
		<br/>
		<br/>
		<h1 align="center" style="font-size:300%"><b> KONDA PRODUCTION </b></h1>
	</div>
	
	<!-- selesai image slider -->
	
	<!-- include javascript kaya biasa lah ya :v -->
	<script src="dist/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
	
	<script src="dist/js/fileinput.min.js"></script>

</body>

</html>