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


	$id			= $_POST['id'];
	$alamat		= $_POST['alamat'];
	$tlpn		= $_POST['tlpn'];
	$email		= $_POST['email'];

	$cek = mysqli_query($koneksidb, "SELECT * FROM contact WHERE id='$id'") or die(mysqli_error($koneksidb));

	if (mysqli_num_rows($cek) == 0) {
		$sql = mysqli_query($koneksidb, "INSERT INTO contact (id, alamat, tlpn, email) VALUES('$id', '$alamat', '$tlpn', '$email')") or die(mysqli_error($koneksidb));

		if ($sql) {
			echo '<script>alert("Berhasil menambahkan data."); document.location="dashboard.php?page=tampilkontak";</script>';
		} else {
			echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
		}
	} else {
		echo '<div class="alert alert-warning">Gagal, id sudah terdaftar.</div>';
	}
}
?>

<form action="dashboard.php?page=tambahkontak" method="post" enctype="multipart/form-data">

	<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">No.Tlpn</label>
			<div class="col-md-6 col-sm-6">
				<input type="text" name="tlpn" class="form-control" required>
			</div>
		</div>

		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
			<div class="col-md-6 col-sm-6">
				<input type="email" name="email" class="form-control" required>
			</div>
		</div>

		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
			<div class="col-md-6 col-sm-6">
				<!-- <input type="text" name="alamat" class="form-control" value=" " required> -->
				<textarea name="alamat" class="form-control" required>  </textarea>
			</div>
		</div>

	<div class="item form-group">
		<div class="col-md-6 col-sm-6 offset-md-3">
			<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			<a href="dashboard.php?page=tampilkontak" class="btn btn-outline-secondary">Kembali</a>
		</div>
</form>
</div>