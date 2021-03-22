<?php
session_start();
include('../includes/config.php');
error_reporting(0);
?>

<center>
	<font size="6">Tambah Pesan</font>
</center>
<hr>
<?php
if (isset($_POST['submit'])) {

	$id		= $_POST['id'];
	$nama	= $_POST['nama'];
	$hp   	= $_POST['hp'];
	$email 	= $_POST['email'];
	$pesan 	= $_POST['pesan'];

	$cek = mysqli_query($koneksidb, "SELECT * FROM feedback WHERE id='$id'") or die(mysqli_error($koneksidb));

	if (mysqli_num_rows($cek) == 0) {
		$sql = mysqli_query($koneksidb, "INSERT INTO feedback (id, nama, hp, email, pesan) VALUES('$id', '$nama', '$hp', '$email', '$pesan')") 
		or die(mysqli_error($koneksidb));

		if ($sql) {
			echo '<script>alert("Berhasil menambahkan data."); document.location="dashboard.php?page=tampilpesan";</script>';
		} else {
			echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
		}
	} else {
		echo '<div class="alert alert-warning">Gagal, id sudah terdaftar.</div>';
	}
}
?>

<form action="dashboard.php?page=tambahpesan" method="post" enctype="multipart/form-data">

	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Nama</label>
		<div class="col-md-6 col-sm-6">
			<input type="text" name="nama" class="form-control" required>
		</div>
	</div>

	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Hp</label>
		<div class="col-md-6 col-sm-6">
			<input type="text" name="hp" class="form-control" required>
		</div>
	</div>

	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
		<div class="col-md-6 col-sm-6">
			<input type="email" name="email" class="form-control" required>
		</div>
	</div>

	<div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Pesan</label>
		<div class="col-md-6 col-sm-6">
			<!-- <input type="text" name="deskripsi" class="form-control" required> -->
			<textarea name="pesan" class="form-control"></textarea>
		</div>
	</div>

	<div class="item form-group">
		<div class="col-md-6 col-sm-6 offset-md-3">
			<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			<a href="dashboard.php?page=tampilpesan" class="btn btn-outline-secondary">Kembali</a>
		</div>
</form>
</div>