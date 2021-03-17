<?php
session_start();
include('../includes/config.php');
error_reporting(0);
?>

<center>
	<font size="6">Tambah Data</font>
</center>
<hr>
<?php
if (isset($_POST['submit'])) {

	$target_dir = "assets/images/";
	$target_file = $target_dir . basename($_FILES["gambar"]["name"]);

	/**
	 * ini untuk upload filenya gais
	 */
	$upload = move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);

	/**
	 * jika file nya gagal di upload gas, maka dia berhenti gais
	 * dengan perintah die() itu gais
	 */
	if (!$upload) {
		print_r([$upload, $_FILES["gambar"]["error"]]);

		die();
	}

	$id			= $_POST['id'];
	$fotoproduk = $_FILES["gambar"]["name"]; // ini cara mengambil nama filenya gais untuk dimasukan ke db gais
	$judul		= $_POST['judul'];
	$deskripsi	= $_POST['deskripsi'];

	$cek = mysqli_query($koneksidb, "SELECT * FROM produk WHERE id='$id'") or die(mysqli_error($koneksidb));

	if (mysqli_num_rows($cek) == 0) {
		$sql = mysqli_query($koneksidb, "INSERT INTO produk(id, fotoproduk, judul, deskripsi) VALUES('$id', '$fotoproduk', '$judul', '$deskripsi')") or die(mysqli_error($koneksidb));

		if ($sql) {
			echo '<script>alert("Berhasil menambahkan data."); document.location="dashboard.php?page=tampilproduk";</script>';
		} else {
			echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
		}
	} else {
		echo '<div class="alert alert-warning">Gagal, id sudah terdaftar.</div>';
	}
}
?>

<form action="dashboard.php?page=tambahproduk" method="post" enctype="multipart/form-data">
    <div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Foto Produk</label>
		<div class="col-md-6 col-sm-6">
			<input type="file" name="gambar" class="form-control" required>
		</div>
	</div>
	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Judul</label>
		<div class="col-md-6 col-sm-6">
			<input type="text" name="judul" class="form-control" required>
		</div>
	</div>
	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Deskripsi</label>
		<div class="col-md-6 col-sm-6">
			<!-- <input type="text" name="deskripsi" class="form-control" required> -->
			<textarea name="deskripsi" class="form-control"></textarea>
		</div>
	</div>
	<div class="item form-group">
		<div class="col-md-6 col-sm-6 offset-md-3">
			<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
		</div>
</form>
</div>