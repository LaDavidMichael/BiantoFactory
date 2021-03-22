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
		$select = mysqli_query($koneksidb, "SELECT * FROM contact WHERE id='$id'") or die(mysqli_error($koneksidb));

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
		$query = mysqli_query($koneksidb, "SELECT * FROM contact WHERE id='$id'") or die(mysqli_error($koneksidb));

		// ini untuk "fetch" data dari db gais
		// jadi bisa diambil pake arah panah (->)
		$data = mysqli_fetch_object($query);


		unlink($path); // ini proses delete file nya gais


		$alamat	= $_POST['alamat'];
		$tlpn	= $_POST['tlpn'];
		$email	= $_POST['email'];


		$sql = mysqli_query($koneksidb, "UPDATE contact SET alamat ='$alamat', tlpn='$tlpn', email='$email' WHERE id='$id'") or die(mysqli_error($koneksidb));

		if ($sql) {
			echo '<script>alert("Berhasil menyimpan data."); document.location="dashboard.php?page=tampilkontak";</script>';
		} else {
			echo '<div class="alert alert-warning">Gagal melakukan proses.</div>';
		}
	}


	?>

	<form action="dashboard.php?page=editkontak&id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $_GET['id'] ?>">


		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">No.Tlpn</label>
			<div class="col-md-6 col-sm-6">
				<input type="text" name="tlpn" class="form-control" value="<?php echo $data['tlpn']; ?>" required>
			</div>
		</div>

		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
			<div class="col-md-6 col-sm-6">
				<input type="email" name="email" class="form-control" value="<?php echo $data['email']; ?>" required>
			</div>
		</div>

		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
			<div class="col-md-6 col-sm-6">
				<!-- <input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat']; ?>" required> -->
				<textarea name="alamat" class="form-control"> <?php echo $data['alamat']; ?> </textarea>
			</div>
		</div>


		<div class="item form-group">
			<div class="col-md-6 col-sm-6 offset-md-3">
				<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
				<a href="dashboard.php?page=tampilkontak" class="btn btn-outline-secondary">Kembali</a>
			</div>
		</div>
	</form>
</div>