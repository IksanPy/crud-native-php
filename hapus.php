<?php 
	include 'koneksi.php';

	$id = $_GET['id'];
	$result = $conn->query("delete from tbl_siswa where id=$id");
?>
<script>window.location.href="index.php"</script>