<?php 
	include 'koneksi.php';	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>

	<div class="container">
		<div class="card mt-5">
			<div class="card-header text-center">
				<h2>Tambah Data Siswa</h2>
			</div>
			<div class="card-body">
				<form method="post">
					<div class="form-group">
						<input class="form-control" type="text" name="nama" required="required" placeholder="masukkan nama..">
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="alamat" required="required" placeholder="masukkan alamat..">
					</div>
					<div class="form-group">
						<input class="form-control" type="number" name="nohp" required="required" placeholder="masukkan nomor hp>>"> 
					</div>
					<div class="form-group">
						<button class="btn btn-primary btn-sm" type="submit" name="simpan">Simpan Data</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>
<?php 
	if (isset($_POST['simpan'])) {
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$nohp = $_POST['nohp'];
		$result = $conn->query("insert into tbl_siswa values (NULL,'$nama','$alamat','$nohp')");
		
	}
?>