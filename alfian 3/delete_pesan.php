<?php

$koneksi = mysql_connect("localhost", "root", "");
mysql_select_db("dbtokokue");
$ID=$_GET["id"];
$sql="DELETE from `tbl_contact` where `id`='$ID'";

$exe=mysql_query($sql);

if($exe) {echo "<script> alert('Data Pesan $ID berhasil dihapus!');document.location.href='data_pesan.php'; </script>";}

else {echo "<script> alert('Data Pesan $ID gagal dihapus!');document.location.href='data_pesan.php'; </script>";}



?>