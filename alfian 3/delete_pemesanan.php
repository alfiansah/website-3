<?php

$koneksi = mysql_connect("localhost", "root", "");
mysql_select_db("dbtokokue");
$np=$_GET["no_pemesanan"];
$sql="DELETE from `tbl_pemesanan` where `no_pemesanan`='$np'";

$exe=mysql_query($sql);

if($exe) {echo "<script> alert('Data Pemesanan $np berhasil dihapus!');document.location.href='data_pemesan.php'; </script>";}

else {echo "<script> alert('Data Pemesanan $np gagal dihapus!');document.location.href='data_pemesan.php'; </script>";}



?>