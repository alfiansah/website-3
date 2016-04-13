<html>	
<head background-images:"logo.jpg">
<title>Jasmine Cakery - Contact</title>
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
error_reporting(0);
	$ID=$_POST["id"];
	$nma=$_POST["nama"];
	$tlp=$_POST["telphone"];
	$mail=$_POST["email"];
	$almat=$_POST["alamat"];
	$psn=$_POST["pesan"];
	
	
if(isset($_POST["Simpan"])? $_POST['Simpan'] : "")
	{
		if(empty($_POST['id']) || empty($_POST['nama']) || empty($_POST['telphone']) || empty($_POST['email']) ||empty($_POST['alamat']) || empty($_POST['pesan']))
		{
			echo "<script>alert('Data Tidak Boleh KOSONG');</script>";
		}
 
else {	
	$sql="INSERT INTO `tbl_contact` (
`id`,`nama`,`telphone`,`email`,`alamat`,`pesan`)VALUES('$ID','$nma','$tlp','$mail','$almat','$psn')";

$exe=mysql_query($sql);

if($exe){echo "<script>alert('Data pesan $nma BERHASIL disimpan!'); </script>";}

else {echo"<script>alert('Data pesan $nma GAGAL disimpan!'); </script>";}
}
}
?>




</head>

<body>

<?php //========================MENU=============================================
?>     

<table border="0" width="100%" style="background-color:white;">
	<tr>	<td valign="bottom" style="font-size:25px; background: linear-gradient(to right, rgba(214,214,214,0), rgba(255,255,255,0))"><img src="images/logo2.png" width="18%" height="60%" align="left"><img src="images/logo3.png" width="81%" height="85%" align="right"></td>	
	</tr>
	</table>
		
		<table  align="right" height="50px" width="20px" style= "color:black; font-size:25px; font-family:arial;">
		
		<tr><td><a href="login.php" title="login"><img src="images/login.png" width="80" height="55" border="0" title="login"></a></td><tr>
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


<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" name="form1"
id="form1">
<h2 style=" font-size:30px; color: white" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact</h2>

<table border="0" style= "color:white;" align="center" class="form" width="100%" >
	
	<tr class="form_row" ><td><td></td></td>
		<td>ID</td>
		<td>:</td>
		<td><input name="id" type="text" id="id" size="18" class="main_input"></td>
	</tr>
  
	<tr class="form_row"><td><td></td></td>
		<td>Name</td> 
		<td>:</td>
      <td><input name="nama" type="text" id="nama" size="18" class="main_input"></td>
	</tr> 
	
	<tr class="form_row" ><td><td></td></td>
		<td>Telphone</td>
		<td>:</td>
		<td><input name="telphone" type="text" id="telphone" size="18" class="main_input"></td>
	</tr>
	
	<tr class="form_row" ><td><td></td></td>
		<td>Email</td>
		<td>:</td>
		<td><input name="email" type="email" id="email" size="18" class="main_input"></td>
	</tr>
	
	<tr class="form_row"><td><td></td></td>
		<td>Alamat</td>
		<td>:</td>
		<td><textarea name="alamat" id="alamat" class="main_textarea" size="25"></textarea></td>
	</tr >
	
	<tr class="form_row"><td><td></td></td>
		<td>Pesan</td>
		<td>:</td>
		<td><textarea name="pesan" id="pesan" class="main_textarea" size="25"></textarea></td>
	</tr>

<tr align="left">
<td>&nbsp;</td>
<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
<td>&nbsp;&nbsp;<input name="Simpan" type="submit" id="Simpan" value="Simpan">

</td>

  </tr>
</table>

</form>


<br><br><br><br><br><br><br><br>

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