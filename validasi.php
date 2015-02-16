<?php
	$con=mysqli_connect("localhost","root","","pengaduan_taman");
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$username = mysqli_real_escape_string($con, $_POST['inputUsername']);
	$password = mysqli_real_escape_string($con, $_POST['inputPassword']);
	$result = mysqli_query($con,"SELECT * FROM petugas WHERE username='$username' AND password='$password'");
	$num_rows = mysqli_num_rows($result);
	if($num_rows < 1)
	{
		header("Location: admin.php");
		die();
	}
	else
	{
		$idPetugas =  mysqli_fetch_array($result)['id'];
	}
	mysqli_close($con);
?>

<!DOCTYPE html>

<html>

<head>
	<title>Pengaduan Taman Bandung</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="dist/css/fileinput.min.css" rel="stylesheet">
	<link href="dist/css/bootstrap-table.min.css" rel="stylesheet" />
	
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
	<br><br><br>
    <div class="container">
		<div class="table-responsive">
            <table class="table table-striped" data-toggle="table"
       data-search="true"
       data-show-refresh="true"
       data-show-toggle="true"
       data-show-columns="true">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Taman</th>
                  <th>Jenis</th>
                  <th>Keterangan</th>
                </tr>
				</thead>
				<tbody>
				<?php
					$con=mysqli_connect("localhost","root","","pengaduan_taman");
					if (mysqli_connect_errno()) {
						echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}
				
					$result = mysqli_query($con,"SELECT * FROM pengaduan NATURAL JOIN penanggung_jawab WHERE id_petugas='$idPetugas'");
					$num = 0;
					while($row = mysqli_fetch_array($result)) {
						$namaTaman = mysqli_fetch_array(mysqli_query($con,"SELECT nama FROM taman WHERE id='$row[id_taman]'"))['nama'];
						echo "<tr>";
						echo "<td>".++$num."</td>";
						echo "<td>".$namaTaman."</td>";
						echo "<td>".$row['jenis_pengaduan']."</td>";
						echo "<td>".$row['komentar']."</td>";
						echo "</tr>";
					}
					mysqli_close($con);
				?>
              </tbody>
            </table>
          </div>
    </div>
	<!-- include javascript kaya biasa lah ya :v -->
	<script src="dist/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
	
	<script src="dist/js/fileinput.min.js"></script>
	<script src="dist/js/bootstrap-table.min.js"></script>


</body>

</html> 