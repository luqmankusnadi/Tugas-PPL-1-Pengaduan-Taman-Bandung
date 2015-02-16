

<!DOCTYPE html>
<head>
	<title>Pengaduan Taman Bandung</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="dist/css/fileinput.min.css" rel="stylesheet">
	<style>
	{ 
	margin: 0; padding: 0; 
	}

	body { 
			background: url('img/BodyBackground.PNG') no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
	}

	.div {
		border: 3px solid #0c1127;
		padding: 0px 20px 15px 20px; 
		margin : auto;
		border-radius: 30px;
		width : 400px;
		margin-left: auto;
		margin-right: auto;
		background-color:#E6E6FA;
	}
	</style>
</head>

<body>
<!-- selesai navigasi bar halaman -->

<!-- jumbotron + form pengaduan -->

<div>
	<div class="container">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<form class="div" method="post" enctype="multipart/form-data" action="./database_operation/insertpost.php">
				<div class="form-group">
					<h3 align="center" style="font-size:200%"><b>FORM KELUHAN TAMAN</b></h3>
				</div>
				<p style="font-size:120%"><span style="color:red"><b>*</b></span> : Optional</p>
				<div class="form-group">
					<label for="selected_taman">Pilih Taman :</label>
					<?php
					$daftar_taman = getDaftarTaman();
					?>
					<select class="form-control" id="pilihan_taman" name="pilihan_taman">
						<?php for($x=1; $x<count($daftar_taman); $x++) { ?>
						<option value="<?php echo $x; ?>"><?php echo $daftar_taman[$x]; ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="selected_aduan">Pilih Jenis Aduan :</label>
					<?php
					$jns_pengaduan = getJenisPengaduan();
					?>
					<select class="form-control" id="pilihan_aduan" name="pilihan_aduan">
						<?php for($y=1; $y<count($jns_pengaduan); $y++) { ?>
						<option value="<?php echo $y; ?>"><?php echo $jns_pengaduan[$y]; ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="foto"><span style="color:red"><b>*</b></span>Foto : </label>
					
					<input id="input-24" name="foto-taman" type="file">

				</div>
				<div class="form-group">
					<label for="komentar"><span style="color:red"><b>*</b></span>Komentar : </label>
					<textarea class="form-control" rows="5" name="komentar" id="komentar" placeholder="Masukan komentar"></textarea>
				</div>
				<table width="530">
					<tr>
						<td>
							<button type="submit" name="lapor_btn" class="btn btn-info" onclick="return confirm('Apa anda yakin data sudah benar?');">Laporkan</button>
						</td>
						<td>
							<button type="submit" name="back_btn" class="btn btn-info">Kembali</button>
						</td>
					</tr>
				</table>
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
		if(isset($_POST['back_btn'])) {
			header ('Location: index.php');
		}
		
		if(isset($_POST['back_btn'])) {
			header ('Location: index.php');
		}
		
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
	$("#input-24").fileinput(
	{
    overwriteInitial: false
	});
	</script>
</body>

</html>