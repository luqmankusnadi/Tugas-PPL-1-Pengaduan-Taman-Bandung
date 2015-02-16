<!DOCTYPE html>

<html>


<head>
	<title>Pengaduan Taman Bandung</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="dist/css/fileinput.min.css" rel="stylesheet">
	
	<style>
	  .carousel-inner > .item > img,
	  .carousel-inner > .item > a > img {
		  width: 100%;
		  margin: auto;
	  }
	  .item{
		height: 400px;
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
				<li class="active"><a href="index.php">Beranda</a></li>
				<li><a href="admin.php">Admin</a></li>
				<li><a href="FormAduan.php">Lapor</a></li>
				<li><a href="about.php">Tentang</a></li>
			  </ul>
			</div>
		  </div>
		</nav>
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
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
		  <div class="item active">
			<img src="img/img_1.jpg" alt="First-slide">
			<div class="container">
				<div class="carousel-caption">
					<h1>Tohsaka Rin</h1>
					<p>Fate Stay Night Unlimited Blade Works</p>
				</div>
			</div>
		  </div>

		  <div class="item">
			<img src="img/img_2.jpg" alt="Second-slide">
			<div class="container">
				<div class="carousel-caption">
					<h1>Tohsaka Rin</h1>
					<p>Fate Stay Night Unlimited Blade Works</p>
				</div>
			</div>
		  </div>
		
		  <div class="item">
			<img src="img/img_3.jpg" alt="Third-slide">
			<div class="container">
				<div class="carousel-caption">
					<h1>Arthuria</h1>
					<p>Fate Stay Night Unlimited Blade Works</p>
				</div>
			</div>
		  </div>

		  <div class="item">
			<img src="img/img_4.jpg" alt="Fourth-slide">
			<div class="container">
				<div class="carousel-caption">
					<h1>Tohsaka Rin & Emiya Shirou</h1>
					<p>Fate Stay Night Unlimited Blade Works</p>
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
	
	<!-- selesai image slider -->
	
	<!-- jumbotron + form pengaduan -->
	
	<div class="jumbotron">
		<div class="container">
			<div class="col-sm-6">
			<h1>Jombloers!</h1>
				<p>hai para jomblo, gimana kabar kalian? sehat? jangan lupa makan, jangan main game terus haha. Noh udah gw kasih gambar-gambar
				cantik Tohsaka Rin buat penyemangat hidup lu wkwkwk</p>
			</div>
			<div class="col-sm-6">
				<form role="form" method="post" action="insertpost.php">
					<div class="form-group">
						<label for="selected_taman">Pilih Taman :</label>
						<?php
						$daftar_taman = getDaftarTaman();
						?>
						<select class="form-control" id="selected_taman" name="selected_taman">
							<?php for($x=1; $x<count($daftar_taman); $x++) { ?>
							<option value="<?php $daftar_taman[$x]; ?>"><?php echo $daftar_taman[$x]; ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label for="selected_aduan">Pilih Jenis Aduan :</label>
						<?php
						$jns_pengaduan = getJenisPengaduan();
						?>
						<select class="form-control" id="selected_aduan" name="selected_aduan">
							<?php for($x=1; $x<count($jns_pengaduan); $x++) { ?>
							<option value="<?php $jns_pengaduan[$x]; ?>"><?php echo $jns_pengaduan[$x]; ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label for="foto">Foto :</label>
						
						<input id="input-24" type="file" multiple="true">

					</div>
					<div class="form-group">
						<label for="komentar">Komentar:</label>
						<textarea class="form-control" rows="5" name="komentar" id="komentar" placeholder="Masukan komentar" required data-validation-required-message="Masukan Komentar!"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Lapor!</button>
				</form>
			</div>
		</div>
	</div>
	

	<!-- selesai jumbotron + form pengaduan -->
	
	<!-- include javascript kaya biasa lah ya :v -->
	<script src="dist/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
	
	<script src="dist/js/fileinput.min.js"></script>
	
	<?php
		function getJenisPengaduan() {
			$arr_jenis_pengaduan[]=NULL;
			$con=mysqli_connect("localhost","root","","pengaduan_taman");
			if (mysqli_connect_errno()) {
			  echo "Error saat mengakses tabel pengaduan_taman : " . mysqli_connect_error();
			}
			$result = mysqli_query($con,"SELECT * FROM jenis_pengaduan");
			if($result->num_rows <= 1) {
			  echo "Error Tabel Jenis_Pengaduan Kosong" . mysqli_connect_error();
			}
			while($row = mysqli_fetch_array($result)) {
				$temp=$row['nama_kategori'];
				$arr_jenis_pengaduan[] = $temp;
			}
			return $arr_jenis_pengaduan;
		}
	?>
	
	<?php
		function getDaftarTaman() {
			$arr_daftar_taman[]=NULL;
			$con=mysqli_connect("localhost","root","","pengaduan_taman");
			if (mysqli_connect_errno()) {
			  echo "Error saat mengakses tabel taman : " . mysqli_connect_error();
			}
			$result = mysqli_query($con,"SELECT * FROM taman");
			if($result->num_rows <= 1) {
			  echo "Error Tabel Taman Kosong" . mysqli_connect_error();
			}
			while($row = mysqli_fetch_array($result)) {
				$temp=$row['nama'];
				$arr_daftar_taman[] = $temp;
			}
			return $arr_daftar_taman;
		}
	?>
	
	<script>
	function tes(){
		var jenis_pengaduan = document.getElementById("selected_aduan");
		var komentar = document.getElementById("komentar");
		alert('isi jenis pengaduan: ' + jenis_pengaduan + ' komentar: ' + komentar);
		return false;
	}
	</script>

	<script>
	$("#input-24").fileinput({
    overwriteInitial: false,
    maxFileSize: 100,
	});
	</script>
</body>

</html>