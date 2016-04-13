<?php
session_start();
if (!empty($_SESSION['username'])) {
	header('location:admin.php');
}
?>

<html>	
<head background-images:"logo.jpg">
<title>Login</title>
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
	
</head>

<body background="Image/images7.jpg">

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
<table background="image/m2.png" align="center"  width="60%" height="30%" border="0" cellspacing="2">
<tr><td align="center"><font color="blue" size="20px" >Selamat Datang</font></td></tr>
</table>



<table align="center" background="image/images8.png" width="60%" border="0" cellspacing="1">
<tr>
	<td><font color="white" size="6"> &nbsp; &nbsp;<b> </b></font></td>
</tr>
</table>


<div>

	<form name="login" action="otentikasi.php" method="post">
<table  align="center" width="18%" border="0" cellpadding="5" border="0" bgcolor="black" cellspacing="3">
	<tr>
	<td><font color="red">
	<?php 
if (!empty($_GET['error'])) {
	if ($_GET['error'] == 1) {
		echo '<h3>Username dan Password belum diisi!</h3>';
	} else if ($_GET['error'] == 2) {
		echo '<h3>Username belum diisi!</h3>';
	} else if ($_GET['error'] == 3) {
		echo '<h3>Password belum diisi!</h3>';
	} else if ($_GET['error'] == 4) {
		echo '<h3>Username dan Password tidak terdaftar!</h3>';
	}}
	?></font>
	</td>
	</tr>
	<tr>
    	<td align="center"><font color="blue"> Username :</font><input type="text" name="username" /></td>
    </tr>
	<tr>
    	<td align="center"><font color="blue"> Password :</font><input type="password" name="password" /></td>
    </tr>
	<tr align="right">
    	<td colspan="3" align="center"><input type="submit" name="login" value="Login" /></td>
    </tr>
</table>

	
	</div>
	</form>
	
</body>
</html>