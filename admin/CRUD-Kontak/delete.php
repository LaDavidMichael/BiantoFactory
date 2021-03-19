<?php
session_start();
include('../includes/config.php');
error_reporting(0);

//jika benar mendapatkan GET id dari URL
if(isset($_GET['id'])){
	//membuat variabel $id yang menyimpan nilai dari $_GET['id']
	$id = $_GET['id'];

	//melakukan query ke database, dengan cara SELECT data yang memiliki id yang sama dengan variabel $id
	$cek = mysqli_query($koneksidb, "SELECT * FROM contact WHERE id='$id'") or die(mysqli_error($koneksidb));

	// ini untuk "fetch" data dari db gais
	// jadi bisa diambil pake arah panah (->)
	$data = mysqli_fetch_object($cek);

	//jika query menghasilkan nilai > 0 maka eksekusi script di bawah
	if(mysqli_num_rows($cek) > 0){
		//query ke database DELETE untuk menghapus data dengan kondisi id=$id
		$del = mysqli_query($koneksidb, "DELETE FROM contact WHERE id='$id'") or die(mysqli_error($koneksidb));
		if($del){
			echo '<script>alert("Berhasil menghapus data."); document.location="../dashboard.php?page=tampilkontak";</script>';
		}else{
			echo '<script>alert("Gagal menghapus data."); document.location="dashboard.php?page=tampilkontak";</script>';
		}
	}else{
		echo '<script>alert("ID tidak ditemukan di database."); document.location="dashboard.php?page=tampilkontak";</script>';
	}
}else{
	echo '<script>alert("ID tidak ditemukan di database."); document.location="dashboard.php?page=tampilkontak";</script>';
}
