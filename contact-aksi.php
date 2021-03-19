<?php
include('includes/config.php');
error_reporting(0);

$nama       =$_POST['nama'];
$hp         =$_POST['hp'];
$email      =$_POST['email'];
$pesan      =$_POST['pesan'];

$sql 	= "INSERT INTO feedback ( nama, hp, email, pesan)
			VALUES ( '$nama' ,'$hp', '$email' ,'$pesan')";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil kirim pesan.'); 
			document.location = 'contact.php'; 
		</script>";
}else {
			echo "No Error : ".mysqli_errno($koneksidb);
			echo "<br/>";
			echo "Pesan Error : ".mysqli_error($koneksidb);

	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'contact.php'; 
		</script>";
}

?>