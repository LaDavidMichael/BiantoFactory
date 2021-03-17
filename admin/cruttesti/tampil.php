<?php
session_start();
include('../includes/config.php');
error_reporting(0);
?>


<div class="container" style="margin-top:20px">
	<center>
		<font size="6">Data Testimoni</font>
	</center>
	<hr>
	<a href="dashboard.php?page=tambahtesti"><button class="btn btn-dark right">Tambah Data</button></a>
	<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th>No</th>
					<th>Foto Sampul</th>
					<th>Kota</th>
					<th>Provinsi</th>
					<th>Judul</th>
					<th>Deskripsi</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				//query ke database SELECT tabel artikel urut berdasarkan id yang paling besar
				$sql = mysqli_query($koneksidb, "SELECT * FROM testi ORDER BY id DESC") or die(mysqli_error($koneksidb));
				//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				if (mysqli_num_rows($sql) > 0) {
					//membuat variabel $no untuk menyimpan nomor urut
					$no = 1;
					//melakukan perulangan while dengan dari dari query $sql
					while ($data = mysqli_fetch_assoc($sql)) {
						//menampilkan data perulangan
						echo '
						<tr>
							<td>' . $no . '</td>
							<td><img src="assets/images/'.$data['fotosampul'].'" height="120"></td>
							<td>' . $data['kota'] . '</td>
							<td>' . $data['provinsi'] . '</td>
							<td>' . $data['judul'] . '</td>
							<td>' . $data['deskripsi'] . '</td>
							<td>
								<a href="dashboard.php?page=edittesti&id=' . $data['id'] . '" class="btn btn-secondary btn-sm">Edit</a>
								<a href="cruttesti/delete.php?id='.$data['id'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
							</td>
						</tr>
						';
						$no++;
					}
					//jika query menghasilkan nilai 0
				} else {
					echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
				}
				?>
			<tbody>
		</table>
	</div>
</div>