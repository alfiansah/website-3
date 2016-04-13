<?php
$koneksi = mysql_connect("localhost","root","");
mysql_select_db("dbtokokue");
error_reporting(0);
	$ID=$_POST["id"];
	$nma=$_POST["nama"];
	$tlp=$_POST["telphone"];
	$mail=$_POST["email"];
	$almat=$_POST["alamat"];
	$psn=$_POST["pesan"];
	
$sql="UPDATE `tbl_contact` set `nama`='$nma',`telphone`='$tlp', `email`='$mail', `alamat`='$almat', `pesan`='$psn' where `id`='$ID'";

$exe=mysql_query($sql);

if($exe) {echo "<script> alert('Data Pesan $nma berhasil diubah!');document.location.href='data_pesan.php'; </script>";}

else {echo "<script> alert('Data Pesan $nma gagal diubah!');document.location.href='edit_pesan_proses.php'; </script>";}

?>