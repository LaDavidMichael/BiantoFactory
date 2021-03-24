<?php
session_start();
include('../includes/config.php');
error_reporting(0);
?>


<div class="container" style="margin-top:20px">
	<center>
		<font size="6">Ubah Data</font>
	</center>

	<hr>

	<?php
	//jika sudah mendapatkan parameter GET id dari URL
	if (isset($_GET['id'])) {
		//membuat variabel $id untuk menyimpan id dari GET id di URL
		$id = $_GET['id'];

		//query ke database SELECT tabel artikel berdasarkan id = $id
		$select = mysqli_query($koneksidb, "SELECT * FROM sosialmedia WHERE id='$id'") or die(mysqli_error($koneksidb));

		//jika hasil query = 0 maka muncul pesan error
		if (mysqli_num_rows($select) == 0) {
			echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
			exit();
			//jika hasil query > 0
		} else {
			//membuat variabel $data dan menyimpan data row dari query
			$data = mysqli_fetch_assoc($select);
		}
	}
	?>

	<?php
	//jika tombol simpan di tekan/klik
	if (isset($_POST['submit'])) {


		$id = $_POST['id'];

		//query ke database SELECT tabel artikel berdasarkan id = $id
		$query = mysqli_query($koneksidb, "SELECT * FROM sosialmedia WHERE id='$id'") or die(mysqli_error($koneksidb));

		$instagram	= $_POST['instagram'];
		$facebook	= $_POST['facebook'];
		$youtube    = $_POST['youtube'];


		$sql = mysqli_query($koneksidb, "UPDATE sosialmedia SET instagram='$instagram', facebook='$facebook', youtube='$youtube' WHERE id='$id'") or die(mysqli_error($koneksidb));

		if ($sql) {
			echo '<script>alert("Berhasil menyimpan data."); document.location="dashboard.php?page=tampilsosialmedia";</script>';
		} else {
			echo '<div class="alert alert-warning">Gagal melakukan proses.</div>';
		}
	}


	?>
	<form action="dashboard.php?page=editsosialmedia&id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $_GET['id'] ?>">
		
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Instagram</label>
			<div class="col-md-6 col-sm-6">
				<input type="url" name="instagram" class="form-control" value="<?php echo $data['instagram']; ?>" required>
			</div>
		</div>
		
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Facebook</label>
			<div class="col-md-6 col-sm-6">
				<input type="url" name="facebook" class="form-control" value="<?php echo $data['facebook']; ?>" required>
			</div>
		</div>

		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Youtube</label>
			<div class="col-md-6 col-sm-6">
				<input type="url" name="youtube" class="form-control" value="<?php echo $data['youtube']; ?>" required>
			</div>
		</div>

		<div class="item form-group">
			<div class="col-md-6 col-sm-6 offset-md-3">
				<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
				<a href="dashboard.php?page=tampilsosialmedia" class="btn btn-outline-secondary">Kembali</a>
			</div>
		</div>
	</form>
</div>