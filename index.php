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
				<h2>Data Siswa RPL</h2>
			</div>
			<div class="card-body">
				<br>
				<a class="btn btn-primary btn-sm" href="tambah.php">Tambah Data</a>
				<br><br>
				<table class="table table-striped table-hover table-bordered">
					<thead>
						<tr>
							<td>#</td>
							<td>Nama</td>
							<td>Alamat</td>
							<td>No Hp</td>
							<td>Aksi</td>
						</tr>
					</thead>
					<tbody>
						<?php 
							$result = $conn->query("select * from tbl_siswa");
							foreach ($result as $row) {
						?>
						<tr>
							<td><?= $row['id'] ?></td>
							<td><?= $row['nama'] ?></td>
							<td><?= $row['alamat'] ?></td>
							<td><?= $row['nohp'] ?></td>
							<td>
								<a class="btn btn-danger btn-sm" href="hapus.php?id=<?= $row['id'] ?>">Hapus</a>
								|
								<a href="">edit</a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>	
			</div>
		</div>
	</div>
	
</body>
</html>