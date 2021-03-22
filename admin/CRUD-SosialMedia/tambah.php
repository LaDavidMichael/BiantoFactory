<?php
session_start();
include('../includes/config.php');
error_reporting(0);
?>

<center>
	<font size="6">Tambah Sosial Media</font>
</center>
<hr>
<?php
if (isset($_POST['submit'])) {

	$id			= $_POST['id'];
	$instagram	= $_POST['instagram'];
	$facebook   = $_POST['facebook'];
	$twitter 	= $_POST['twitter'];
	$linkedin 	= $_POST['linkedin'];
	$youtube 	= $_POST['youtube'];

	$cek = mysqli_query($koneksidb, "SELECT * FROM sosialmedia WHERE id='$id'") or die(mysqli_error($koneksidb));

	if (mysqli_num_rows($cek) == 0) {
		$sql = mysqli_query($koneksidb, "INSERT INTO sosialmedia(id, instagram, facebook, twitter, linkedin, youtube) VALUES('$id', '$instagram', '$facebook', '$twitter', '$linkedin', '$youtube')") 
		or die(mysqli_error($koneksidb));

		if ($sql) {
			echo '<script>alert("Berhasil menambahkan data."); document.location="dashboard.php?page=tampilsosialmedia";</script>';
		} else {
			echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
		}
	} else {
		echo '<div class="alert alert-warning">Gagal, id sudah terdaftar.</div>';
	}
}
?>

<form action="dashboard.php?page=tambahsosialmedia" method="post" enctype="multipart/form-data">

	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Instagram</label>
		<div class="col-md-6 col-sm-6">
			<input type="url" name="instagram" class="form-control">
		</div>
	</div>

	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Facebook</label>
		<div class="col-md-6 col-sm-6">
			<input type="url" name="facebook" class="form-control">
		</div>
	</div>
	
	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Twitter</label>
		<div class="col-md-6 col-sm-6">
			<input type="url" name="twitter" class="form-control">
		</div>
	</div>

	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Linkedin</label>
		<div class="col-md-6 col-sm-6">
			<input type="url" name="linkedin" class="form-control">
		</div>
	</div>

	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">YouTube</label>
		<div class="col-md-6 col-sm-6">
			<input type="url" name="youtube" class="form-control">
		</div>
	</div>

	<div class="item form-group">
		<div class="col-md-6 col-sm-6 offset-md-3">
			<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			<a href="dashboard.php?page=tampilsosialmedia" class="btn btn-outline-secondary">Kembali</a>
		</div>
</form>
</div>