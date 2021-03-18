<?php
session_start();
include('../includes/config.php');
error_reporting(0);
?>

<center>
	<font size="6">Tambah Artikel</font>
</center>
<hr>
<?php
if (isset($_POST['submit'])) {

	$target_dir = "assets/images/artikel/";
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
	$tanggal			= $_POST['tanggal'];
	$judul	    	= $_POST['judul'];
	$deskripsi   	= $_POST['deskripsi'];
	$gambar		= $_FILES["gambar"]["name"]; // ini cara mengambil nama filenya gais untuk dimasukan ke db gais

	$cek = mysqli_query($koneksidb, "SELECT * FROM artikel WHERE id='$id'") or die(mysqli_error($koneksidb));

	if (mysqli_num_rows($cek) == 0) {
		$sql = mysqli_query($koneksidb, "INSERT INTO artikel(id, tanggal, judul, deskripsi, gambar) 
		VALUES('$id', '$tanggal' ,'$judul', '$deskripsi' , '$gambar')") or die(mysqli_error($koneksidb));

		if ($sql) {
			echo '<script>alert("Berhasil menambahkan data."); document.location="dashboard.php?page=tampilartikel";</script>';
		} else {
			echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
		}
	} else {
		echo '<div class="alert alert-warning">Gagal, id sudah terdaftar.</div>';
	}
}
?>

<form action="dashboard.php?page=tambahartikel" method="post" enctype="multipart/form-data">


	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal</label>
		<div class="col-md-6 col-sm-6">
			<input type="date" name="tanggal" class="form-control" required>
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
		<label class="col-form-label col-md-3 col-sm-3 label-align">Gambar</label>
		<div class="col-md-6 col-sm-6">
			<input type="file" name="fotosampul" class="form-control" required>
		</div>
	</div>

	<div class="item form-group">
		<div class="col-md-6 col-sm-6 offset-md-3">
			<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
		</div>
</form>
</div>