<html>
<head>
<title>Data pemesanan</title>
<style>
	body {
	background: url(images/Photo-Background-94.jpg) repeat-y center; ;
	background-color: white;
	font-family:arial;
	margin:0;
	padding: 0;
	}
	
	/* untuk mengedit header yg di atas*/
	#header ul {
	margin: 0;
	background-color:white; 
	box-shadow: 0px 0px 25px #888888;
	max-width: 100%; 
	height: 30px;
	padding: 20px;
	}
	
	/* untuk mengatur list */
	#header ul li {
	display: inline;
	margin: 0;
	padding-right: 10px; 
	}
	
	/* untuk mengatur tulisan untuk link */
	#header ul li a {
	font-size: 15pt;
	text-decoration: none;
	color: blue;
	padding-right: 10px;
	border-right: 1px white solid;
	}

	/* untuk membesarkan tulisan ketika kursor mengenai tulisannya */
	#header ul li a:hover {
	font-size: 18pt;
	border-bottom: 2px black solid;
	background-color:#b52025;color:#fff;
	margin: 5px;
	}
	
	</style>


</head>

<body>
<?php //========================MENU=============================================
?>     

<table border="0" width="100%" style="background-color:white;">
	<tr>	<td valign="bottom" style="font-size:25px; background: linear-gradient(to right, rgba(214,214,214,0), rgba(255,255,255,0))"><img src="images/logo2.png" width="18%" height="60%" align="left"><img src="images/logo3.png" width="81%" height="85%" align="right"></td>	
	</tr>
	</table>
		
		
<div id="header" name="top" align="center" style="background-color: black">
	<ul>
	<li><a href="index.php">Home</a></li>
    <li><a href="cookies.php">Cookies</a></li>
    <li><a href="contact.php">Contact</a></li>
	<li><a href="pemesanan.php"><img src="images/pemesanan.png" width="50" height="40" border="0" title="pemesanan"></a></li>
	</ul></div><br> <br><br>
	
<?php //=====================================================================
?>    
<div align="right">
<a href="admin.php" align="right"><img src="images/back.png" width="100" height="80" border="0" title="Kembali"></a>
</div>
<form name="form1" method="post" action="">
<h1 align="center" style="color: white">Data Pemesanan Kue Kering</h1>

<table  style="color: black; background-color:white; box-shadow: 0px 0px 25px #888888;" width="100%" border="3" cellspacing="2"
cellpadding="2">

  <tr bgcolor="#336699">
	<td align="center" width="3%">No</td>
    <td align="center" width="5%">No Pemesanan</td>
    <td align="center" width="auto">Nama</td>
    <td align="center" width="auto">Telphone</td>
	<td align="center" width="auto">Email</td>
	<td align="center" width="auto">Jenis Kelamin</td>
	<td align="center" width="auto">Jenis Kue</td>
	<td align="center" width="auto">Jumlah</td>
	<td align="center" width="auto">Alamat</td>
	<td align="center" width="auto">Kode Pos</td>
	<td align="center" width="auto">Menu</td>
	</tr>
<?php
$koneksi = mysql_connect("localhost","root","");
mysql_select_db("dbtokokue");

$sql="select * from `tbl_pemesanan`";

$exe=mysql_query($sql);
$jumlah=mysql_num_rows($exe);
$no=0;

while($data=mysql_fetch_array($exe)){
	
	$np=$data["no_pemesanan"];
	$nm=$data["nama"];
	$telp=$data["telphone"];
	$el=$data["email"];
	$kelamin=$data["jk"];
	$kue=$data["jenis_kue"];
	$jmlh=$data["jumlah"];
	$almt=$data["alamat"];
	$kp=$data["kode_pos"];
	$no++;
	
	echo"<tr align=center>
			<td>$no</td>
			<td>$np</td>
			<td>$nm</td>
			<td>$telp</td>
			<td>$el</td>
			<td>$kelamin</td>
			<td>$kue</td>
			<td>$jmlh</td>
			<td>$almt</td>
			<td>$kp</td>
			<td><a href='edit_pemesanan_proses.php?no_pemesanan=$np'>Update </a>|
			<a href='delete_pemesanan.php?no_pemesanan=$np'> Delete</a></td>
		</tr>";
		
}
?>
</table>

				


</form>


</body>
</html> 