<?php 
include('cek-login.php');
?>
<html>
<head background-images:"logo.jpg">
	<title>Halaman Admin</title>
    
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

	<style>
	body {
	background: url(images/bg_top_img.jpg) repeat-y center; ;
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
<?php 
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
	echo '<h3>Berhasil menambah data!</h3>';
}


?>

<?php
$koneksi = mysql_connect("localhost","root", "");
mysql_select_db ("dbtokokue");
error_reporting(0);
	$ai=$_POST["admin_id"];
	$us=$_POST["username"];
	$pa=$_POST["password"];
	
	
	
if(isset($_POST["Simpan"])? $_POST['Simpan'] : "")
	{
		if(empty($_POST['admin_id']) || empty($_POST['username']) || empty($_POST['password']))
		{
			echo "<script>alert('Data Tidak Boleh KOSONG');</script>";
		}
 
else {	
	$sql="INSERT INTO `admin` (
`admin_id`,`username`,`password`)VALUES('$ai','$us','$pa')";

$exe=mysql_query($sql);

if($exe){echo "<script>alert('Data Admin $us BERHASIL disimpan!'); </script>";}

else {echo"<script>alert('Data Admin $us GAGAL disimpan!'); </script>";}
}
}
?>

<body>

<?php //========================MENU=============================================
?>           
  
<table border="0" width="100%" style="background-color:white;">
	<tr>	<td valign="bottom" style="font-size:25px; background: linear-gradient(to right, rgba(214,214,214,0), rgba(255,255,255,0))"><img src="images/logo2.png" width="18%" height="60%" align="left"><img src="images/logo3.png" width="81%" height="85%" align="right"></td>	
	</tr>
	</table>
		
		<table  align="right" height="50px" width="20px" style= "color:black; font-size:25px; font-family:arial;">
		<tr><td></td><tr><tr><td></td><tr><tr><td></td><tr><tr><td></td><tr><tr><td></td><tr><tr><td></td><tr>
		<tr><td><a href="logout.php" style="background-color:white" title=""><img src="images/logout.png" width="80" height="55" border="0" title="logout"></a></td><tr>
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






<form name="form1" method="post" action=<?= $_SERVER['PHP_SELF'] ?> id="form1">
<br><br>
<h2 style=" font-size:30px; color: black" align="center">Sign Up</h2>


<table border="0" style="color:white;  box-shadow: 0px 0px 25px #444444;" align="center"  width="25%">
    <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
	<tr><td><td></td></td>
		<td>Admin ID</td>
		<td>:</td>
		<td><input name="admin_id" type="text" id="admin_id" size="5" ></td>
	</tr>
  
	<tr><td><td></td></td>
		<td>Username</td> 
		<td>:</td>
      <td><input name="username" type="text" id="username" size="10" ></td>
	</tr> 
	
	<tr><td><td></td></td>
		<td>password</td>
		<td>:</td>
		<td><input name="password" type="password" id="password" size="10" ></td>
	</tr>
	<br><br>
<tr align="left">
<td>&nbsp;</td>
<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td></td></tr>

<tr>
<td></td><td></td><td></td><td></td>
<td>&nbsp;&nbsp;<input name="Simpan" type="submit" id="Simpan" value="Simpan"></td>
  </tr>
  <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
</table>
</form>

<br><br><br><br><br><br><br>
<?php
 $query = mysql_query("SELECT * FROM tbl_pemesanan");
 $jumlah = mysql_num_rows($query);
?> 

<?php
 $query = mysql_query("SELECT * FROM tbl_contact");
 $jumlah2 = mysql_num_rows($query);
?> 
<table align="center"  width="auto" border="0" cellpadding="3" cellspacing="6">
<tr>
<td align="center">
<a href="data_pemesan.php"><font color="blue">Lihat Data Pemesanan Kue  </a> ( <font color="red"><b><?=$jumlah?></b></font> )</font> <img src="images/and.png" width="50" height="40" border="0" > <a href="data_pesan.php"><font color="blue">Lihat Data Pesan dari Pelanggan</a> ( <font color="red"><b><?=$jumlah2?></b></font> )</font> 
</td></tr>


<br><br><br>
</table>

<br><br>
<table height="30px" border="0" width="100%" style="background-color:white; box-shadow: 0px 0px 20px #888888;">
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