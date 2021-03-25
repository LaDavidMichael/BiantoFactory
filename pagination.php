<?php
function prepare($data){
	global $koneksidb;
	$perintah=mysqli_prepare($koneksidb,$data);
	if(!$perintah) die("Gagal melakukan koneksi".mysqli_error($koneksidb));
	return $perintah;
}
function query($data){
	global $koneksidb;
	$perintah=mysqli_query($koneksidb, $data);
	if(!$perintah) die("Gagal melakukan koneksi".mysqli_error($koneksidb));
	return $perintah;
}
function execute($data){
	$perintah=mysqli_stmt_execute($data);
	return $data;
}
function stmt_close($data){
	$perintah=mysqli_stmt_close($data);
	return $data;
}

function tampil_data(){
	$sql="SELECT * FROM team";
	$result=query($sql);
	return $result;


	mysqli_stmt_close($stmt);
}

function detail_data($var_id){
	global $koneksidb;
	global $result;
	$sql="SELECT * FROM team";
	if($stmt=mysqli_prepare($koneksi, $sql)){
		mysqli_stmt_bind_param($stmt,"i",$param_id);
		$param_id = $var_id;
		if(mysqli_stmt_execute($stmt)){
			//get result bisa diganti jadi store result
			$result=mysqli_stmt_get_result($stmt);
			if(mysqli_num_rows($result)==1){
				return true; //jika ada data nilai true
			}else{
				return false; //jika data tidak ditemukan nilai false
			}
		}else{
			echo "Terjadi kesalahan";
		}
	}
	mysqli_stmt_close($stmt);
}
function detail_data_2($var_id){
	global $koneksidb;
	global $result;
	$sql="SELECT * FROM team";
	if($stmt=mysqli_prepare($koneksidb, $sql)){
		mysqli_stmt_bind_param($stmt,"i",$param_id);
		$param_id = $var_id;
		if(mysqli_stmt_execute($stmt)){
			mysqli_stmt_store_result($stmt);
			mysqli_stmt_bind_result($stmt, $id, $nim, $nama_mahasiswa, $foto_mahasiswa, $tanggal_daftar);
			mysqli_stmt_fetch($stmt);			
			
			if(mysqli_stmt_num_rows($stmt)==1){
				return true; //jika ada data nilai true
			}else{
				return false; //jika data tidak ditemukan nilai false
			}
		}else{
			echo "Terjadi kesalahan";
		}
	}
	mysqli_stmt_close($stmt);
}



}
/*function detail data img khusus dipanggil untuk menampilkan variabel foto ketika update
karena jika menggunakan fungsi detail data sebelumnya maka data akan terreplace dan tidak akan tersimpan.
Lihat dokumentasinya di :
https://www.root93.co.id/2019/08/kegagalan-fungsi-simpan-gambar-cms-rimi.html
*/
function detail_data_img($var_id){
    global $var_item, $foto;
     $sql = "SELECT id, foto FROM team WHERE id = ?";
      if($stmt = prepare($sql)){
          mysqli_stmt_bind_param($stmt, "i", $param_id);
          $param_id = $var_id;
          if(execute($stmt)){     
             
             /*
             Old Get Result
             global $row;
             $result = get_result($stmt);
             $row = fetch($result, MYSQLI_ASSOC);
              */
          mysqli_stmt_store_result($stmt);
          mysqli_stmt_bind_result($stmt, $var_item, $foto);
            mysqli_stmt_fetch($stmt);
            if(mysqli_stmt_num_rows($stmt) == 1){
              return true;
              }else{                 
              return false;
              }

            }else{
              echo "Terjadi kesalahan. Coba lagi nanti";
            }
             
          }

             mysqli_stmt_close($stmt);
}
function LimitForPagination(){
  $halaman=6;
  $page=isset($_GET['halaman']) ? (int) $_GET['halaman']:1;
  $mulai=($page>1) ? ($page*$halaman)-$halaman:0;
  $sql=query("SELECT*FROM team id desc LIMIT $mulai, $halaman");
  return $sql;

}
?>