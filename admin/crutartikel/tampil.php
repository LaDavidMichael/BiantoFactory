<?php
session_start();
include('../includes/config.php');
error_reporting(0);
?>


<div class="container" style="margin-top:20px">
	<center>
		<font size="6">Artikel</font>
	</center>
	<hr>
	<a href="dashboard.php?page=tambahartikel"><button class="btn btn-dark right">Tambah Data</button></a>
	<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th>No</th>
					<th>Gambar</th>
					<th>Tanggal</th>
					<th>Judul</th>
					<th>Deskripsi</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				//query ke database SELECT tabel artikel urut berdasarkan id yang paling besar
				$sql = mysqli_query($koneksidb, "SELECT * FROM artikel ORDER BY id DESC") or die(mysqli_error($koneksidb));
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
							<td><img src="assets/images/artikel/'.$data['gambar'].'" height="120"></td>
							<td>' . $data['tanggal'] . '</td>
							<td>' . $data['judul'] . '</td>
							<td>' . $data['deskripsi'] . '</td>
							<td>
								<a href="dashboard.php?page=editartikel&id=' . $data['id'] . '" class="btn btn-secondary btn-sm">Ubah</a>
								<a href="crutartikel/delete.php?id='.$data['id'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Hapus</a>
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