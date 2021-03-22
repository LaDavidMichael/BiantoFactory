<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
	header('location:index.php');
} else {
	if (isset($_REQUEST['id'])) {
		$id = intval($_GET['id']);
		$status = 1;
		$sql = "UPDATE feedback SET status='$status' WHERE  id='$id'";
		$query = mysqli_query($koneksidb, $sql);
		$msg = "Pesan sudah dibaca.";
	}

?>


<div class="container" style="margin-top:20px">
	<center>
		<font size="6">Pesan</font>
	</center>
	<hr>
	<!-- <a href="dashboard.php?page=tambahpesan"><button class="btn btn-dark right">Tambah Data</button></a> -->
	<div class="table-responsive">
	<!-- <?php if ($error) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?> -->
		<table class="table table-striped jambo_table bulk_action">

			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Hp</th>
					<th>Email</th>
					<th>Pesan</th>
					<th>Status</th>
				</tr>
			</thead>

			<tbody>

					<?php
							$sql = "SELECT * from feedback";
							$query = mysqli_query($koneksidb, $sql);
							$no = 0;
							while ($result = mysqli_fetch_array($query)) {
							$no++;
					?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo htmlentities($result['nama']); ?></td>
						<td><?php echo htmlentities($result['hp']); ?></td>
						<td><?php echo htmlentities($result['email']); ?></td>
						<td><?php echo htmlentities($result['pesan']); ?></td>
							<?php if ($result['status'] == 1) { ?>
						<td>Sudah Dibaca</td><?php } else { ?>
						<td><a href="dashboard.php?page=tampilpesan&id=<?php echo htmlentities($result['id']); ?>" onclick="return confirm('Tandai sudah dibaca?')">Baca</a></td>
						<?php } ?>
					</tr>
						<?php 
							} 
						?>

			<tbody>

		</table>

	</div>

</div>
<?php } ?>

<script src="assetsjs/main.js"></script>