<html>	
<head background-images:"logo.jpg">
<title>Jasmine Cakery - Pemesanan</title>
 <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

	<style>
	body {
	background: url(images/asd.jpg) repeat-y center; ;
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

	<?php
$koneksi = mysql_connect("localhost","root", "");
mysql_select_db ("dbtokokue");
?>

<?php
error_reporting(0);
$np=$_GET["no_pemesanan"];
$sql="select * from `tbl_pemesanan` where `no_pemesanan`='$np'";
$exe=mysql_query($sql);
$data=mysql_fetch_array($exe);
	
	$np=$data["no_pemesanan"];
	$nm=$data["nama"];
	$telp=$data["telphone"];
	$el=$data["email"];
	$kelamin=$data["jk"];
	$kue=$data["jenis_kue"];
	$jmlh=$data["jumlah"];
	$almt=$data["alamat"];
	$kp=$data["kode_pos"];
?>

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
	</ul></div><br> 
	
<?php //=====================================================================
?>    

<form action="edit_pemesanan.php" method="post" name="form1" id="form1"><br><br>
<h2 style=" font-size:30px; color: white" align="center">Reservation</h2>

<table border="0" style="color:white; background-color:black; box-shadow: 0px 0px 25px #888888;" align="center" class="form" width="100%" >
	<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
	<tr class="form_row" ><td><td></td></td>
		<td>No</td>
		<td>:</td>
		<td><input name="no_pemesanan" type="text" id="no_pemesanan" size="15" class="main_input" value="<?php echo $data['no_pemesanan']; ?>" />
		</td>
	</tr>
  
	<tr class="form_row"><td><td></td></td>
		<td>Name</td> 
		<td>:</td>
      <td><input name="nama" type="text" id="nama" size="18" class="main_input" value="<?php echo $data['nama']; ?>" />
	  </td>
	</tr> 
	
	<tr class="form_row" ><td><td></td></td>
		<td>Telphone</td>
		<td>:</td>
		<td><input name="telphone" type="text" id="telphone" size="18" class="main_input" value="<?php echo $data['telphone']; ?>" />
		</td>
	</tr>
	
	<tr class="form_row" ><td><td></td></td>
		<td>Email</td>
		<td>:</td>
		<td><input name="email" type="email" id="email" size="18" class="main_input" value="<?php echo $data['email']; ?>" /></td>
	</tr>
	
	<tr><td></td><td></td>
		<td> Gender </td>
		<td>:</td>
		<td><input type="radio" name="jk" id="kelamin" value="laki - laki" /> Laki - Laki
		<input type="radio" name="jk" id="kelamin" value="perempuan" /> Perempuan
		</td>
	</tr>
	
	<tr><td></td><td></td>
		<td> types of cookies </td>
		<td>:</td>
		<td><select name="jenis_kue" id="jenis_kue" value="<?php echo $data['jenis_kue']; ?>" />
		<option value="Almond Coklat Keju">Almond Coklat Keju</option>
		<option value="Putri Rosella">Putri Rosella</option>
		<option value="Almond Green Tea">Almond Green Tea</option>
		<option value="Jaring Coklat">Jaring Coklat</option>
		
		<option value="Sagu Keju">Sagu Keju</option>
		<option value="Putri Salju">Putri Salju</option>
		<option value="Coklat Kenari">Coklat Kenari</option>
		<option value="Nastar Keju">Nastar Keju</option>
		
		<option value="Bunga Nanas">Bunga Nanas</option>
		<option value="Cappucino Mente">Cappucino Mente</option>
		<option value="Blueberry Cookies">Blueberry Cookies</option>
		<option value="Monde">Monde</option>
		
		<option value="Smartis">Smartis</option>
		<option value="Coklat Wijen">Coklat Wijen</option>
		<option value="Semprit Susu">Semprit Susu</option>
		<option value="Kastengel Keju">Kastengel Keju</option>
		</select>
		</td>
	</tr>
	
	<tr class="form_row" ><td><td></td></td>
		<td>quantity</td>
		<td>:</td>
		<td><input name="jumlah" type="text" id="jumlah" size="18" class="main_input" value="<?php echo $data['jumlah']; ?>" /></td>
	</tr>
	
	<tr class="form_row"><td><td></td></td>
		<td>Address</td>
		<td>:</td>
		<td><textarea name="alamat" id="alamat" class="main_textarea" size="25"><?php echo $data['alamat']; ?></textarea  > </td>
	</tr >
	
	<tr class="form_row"><td><td></td></td>
		<td>Zip Code</td> 
		<td>:</td>
      <td><input name="kode_pos" type="text" id="kode_pos" size="10" class="main_input" value="<?php echo $data['kode_pos']; ?>"></td>
	</tr>





<tr align="right">
<td>&nbsp;</td>
<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
<td>&nbsp;&nbsp;<input name="Simpan" type="submit" id="Simpan" value="Simpan">
&nbsp;&nbsp;<a href="data_pemesan.php" style="background-color:white" title="">Cancel</a>
</td>
  </tr>
  <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
</table>
</form>

<br><br><br>

<?php //=====================================================================
?>
 
<?php //=====================================================================
?>
<h2 style=" font-size:20px; color: white" align="center"> Tabel Barang </h2>
<?php 
$query	= mysql_query("SELECT * from tbl_harga");
			
			echo " <div align=center> 
			<table width=500px  style=color:white border=5 cellpadding=2 cellspacing=2 style=border-collapse:collapse>";
    		echo "<tr class=row_daftar_rute>";
				echo "<td align=center>Kode Barang</td>";
				echo "<td align=center>Nama Barang</td>";
				echo "<td align=center>Harga Barang</td>";
  			echo "</tr>";
			while($row = mysql_fetch_array($query)) 
			{				
				echo "<tr>";
					echo "<td>".$row['kd_barang']."</td>";
					echo "<td>".$row['nama']."</td>";
					echo "<td>".$row['harga']."</td>";
				echo "</tr>";		    
			}
			echo "</table></div>";

?>
<br>
<?php //===================================== ?> 
 

<table height="10px" border="0" width="100%" style="background-color:white; box-shadow: 0px 0px 25px #888888;">
<tr>
<td>
<div class="footer">
<div class="copyright"><a href="https://www.facebook.com/alfiansahts" target="_blank">Jasmine Cookeis</a></div>  
<div class="footer_links">
               <a href="https://www.facebook.com/" title=""><img src="images/icon-1.png" alt="Facebook" title="Facebook" border="0"></a>
               <a href="https://www.twitter.com/" title=""><img src="images/icon-2.png" alt="Twitter" title="Twitter" border="0"></a>
               <a href="https://www.youtube.com/" title=""><img src="images/icon-3.png" alt="youtube" title="YouTube" border="0"></a>
               <a href="http://instagram.com/" title=""><img src="images/icon-4.png" alt="instagram" title="Instagram" border="0"></a>
			   <a href="https://path.com/" title=""><img src="images/icon-5.png" alt="path" title="Path" border="0"></a>        
</div>
</div>
</td></tr>
</table>

</body>
</html> 		
