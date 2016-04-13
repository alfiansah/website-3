<html>
<head>
<title>Data Pesan</title>
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

<h1 align="center" style="color: white">Data Pesan - Kesan Dari Pelanggan</h1>
<table style="color: black; background-color:white; box-shadow: 0px 0px 25px #888888;" width="100%" border="3" cellspacing="2"
cellpadding="2">
  <tr bgcolor="#336699">
    <td align="center" width="3%">No</td>
    <td align="center" width="5%">ID</td>
    <td align="center" width="15%">Name</td>
    <td align="center" width="7%">Telphone</td>
	<td align="center" width="10%">Email</td>
	<td align="center" width="22%">Address</td>
	<td align="center" width="23%">Message</td>
    <td align="center" width="15%">Menu</td>
  </tr>
  
<?php
$koneksi = mysql_connect("localhost","root","");
mysql_select_db("dbtokokue");

$sql="select * from `tbl_contact`";

$exe=mysql_query($sql);
$jumlah=mysql_num_rows($exe);
$no=0;

while($data=mysql_fetch_array($exe)){
	
	$ID=$data["id"];
	$nma=$data["nama"];
	$tlp=$data["telphone"];
	$mail=$data["email"];
	$almat=$data["alamat"];
	$psn=$data["pesan"];
	$no++;
	
	echo"<tr align=center>
			<td>$no</td>
			<td>$ID</td>
			<td>$nma</td>
			<td>$tlp</td>
			<td>$mail</td>
			<td>$almat</td>
			<td>$psn</td>
			<td><a href='edit_pesan_proses.php?id=$ID'>Update </a>|
			<a href='delete_pesan.php?id=$ID'> Delete</a></td>
		</tr>";
		
}
?>
</table>
  
  
  </body>
</html> 