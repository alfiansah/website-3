<html>	
<head background-images:"logo.jpg">
<title>Jasmine Cakery - Pemesanan</title>
 <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

	<style>
	body {
	background: url(images/asdw.jpg) repeat-y center; ;
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
	
<?php
$koneksi = mysql_connect("localhost","root", "");
mysql_select_db ("dbtokokue");
?>

<?php
error_reporting(0);
$ID=$_GET["id"];
$sql="select * from `tbl_contact` where `id`='$ID'";
$exe=mysql_query($sql);
$data=mysql_fetch_array($exe);
	
	$ID=$data["id"];
	$nma=$data["nama"];
	$tlp=$data["telphone"];
	$mail=$data["email"];
	$almat=$data["alamat"];
	$psn=$data["pesan"];
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
	</ul></div><br> <br><br>
	
<?php //=====================================================================
?>    


<form action="edit_pesan.php" method="post" name="form1"
id="form1">
<h2 style=" font-size:30px; color: white" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact</h2>

<table border="0" style= "color:white;" align="center" class="form" width="100%" >
	
	<tr class="form_row" ><td><td></td></td>
		<td>ID</td>
		<td>:</td>
		<td><input name="id" type="text" id="id" size="18" class="main_input" value="<?php echo $data['id']; ?>"  /></td>
	</tr>
  
	<tr class="form_row"><td><td></td></td>
		<td>Name</td> 
		<td>:</td>
      <td><input name="nama" type="text" id="nama" size="18" class="main_input" value="<?php echo $data['nama']; ?>" /></td>
	</tr> 
	
	<tr class="form_row" ><td><td></td></td>
		<td>Telphone</td>
		<td>:</td>
		<td><input name="telphone" type="text" id="telphone" size="18" class="main_input" value="<?php echo $data['telphone']; ?>" /></td>
	</tr>
	
	<tr class="form_row" ><td><td></td></td>
		<td>Email</td>
		<td>:</td>
		<td><input name="email" type="email" id="email" size="18" class="main_input" value="<?php echo $data['email']; ?>" /></td>
	</tr>
	
	<tr class="form_row"><td><td></td></td>
		<td>Alamat</td>
		<td>:</td>
		<td><textarea name="alamat" id="alamat" class="main_textarea" size="25"><?php echo $data['alamat']; ?> </textarea></td>
	</tr >
	
	<tr class="form_row"><td><td></td></td>
		<td>Pesan</td>
		<td>:</td>
		<td><textarea name="pesan" id="pesan" class="main_textarea" size="25"><?php echo $data['pesan']; ?></textarea></td>
	</tr>
<tr align="left">
<td>&nbsp;</td>

  </tr>
<tr align="left">
<td>&nbsp;</td>
<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
<td>&nbsp;&nbsp;<input name="Simpan" type="submit" id="Simpan" value="Simpan">
&nbsp;&nbsp;<a href="data_pesan.php" style="background-color:white" title="">Cancel</a>
  </tr>
</table>

</form>

<br><br><br>

<?php //=====================================================================
?>

   
 
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