<?php
$koneksi = mysql_connect("localhost","root","");
mysql_select_db("dbtokokue");
error_reporting(0);
	$np=$_POST["no_pemesanan"];
	$nm=$_POST["nama"];
	$telp=$_POST["telphone"];
	$el=$_POST["email"];
	$kelamin=$_POST["jk"];
	$kue=$_POST["jenis_kue"];
	$jmlh=$_POST["jumlah"];
	$almt=$_POST["alamat"];
	$kp=$_POST["kode_pos"];
	
$sql="UPDATE `tbl_pemesanan` set `nama`='$nm',`telphone`='$telp', `email`='$el', `jk`='$kelamin', `jenis_kue`='$kue', `jumlah`='$jmlh', `alamat`='$almt', `kode_pos`='$kp' where `no_pemesanan`='$np'";

$exe=mysql_query($sql);

if($exe) {echo "<script> alert('Data Pemesanan $nm berhasil diubah!');document.location.href='data_pemesan.php'; </script>";}

else {echo "<script> alert('Data Pemesanan $nm gagal diubah!');document.location.href='edit_pemesanan_proses.php'; </script>";}

?>