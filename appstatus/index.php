<?php
session_start();
include_once 'dbconnect1.php';

if(isset($_SESSION['user'])!="")
{
	header("Location: home1.php");
}

if(isset($_POST['btn-login']))
{
	$igname = mysql_real_escape_string($_POST['name']);
	$igpass = mysql_real_escape_string($_POST['pass']);
	
	$igname = trim($igname);
	$igpass = trim($igpass);
	
	$res=mysql_query("SELECT FullName, Password, RegistrationNo FROM enroll WHERE RegistrationNo='$igname'");
	$row=mysql_fetch_array($res);
	if($res === FALSE) { 
    die(mysql_error()); // TODO: better error handling
	}
	
	$count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
	
	if($count == 1 && $row['Password']==$igpass)
	{
		$_SESSION['user'] = $row['RegistrationNo'];
		header("Location: home1.php");
	}
	else
	{
		?>
        <script>alert('Igname / Password Seems Wrong ! Or Your Access is Denied');</script>
        <?php
	}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Application Status</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="shortcut icon" href="favicon.ico">
</head>
<body>
<center>
<div>
	<center><img src="logo.png" height="200" width="200"/></center>
	<h2><b><font color="#4E9258" face="courier">To check your application</font></b></h2>
	<br>
	<h1><b><font color="#306754" face="courier">Status</font></b></h1>
	<br>
	<h2><b><font color="#254117" face="courier">|Please Login|</font></b></h2>
</div>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="name" placeholder="Your Registration Number" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">Log In</button></td>
</tr>
<tr>
<td>Forgot Password ? Call/Whatsapp 8447750105</td>
</tr>
</table>
</form>
</div>
</center>
<footer>
<center>
<br><br><br>----------------------------------------------------------------------------------------------------------------------------------<br>
<h2><font color="#2C3539" face="courier">&copy; 2017 SRM Team Robocon </font> | <font color="#2C3539" face="Lucida Grande">Developed by <a href="http://srmrobocon.com/developer/" style="color: #4C787E ""><b>Abhay SV</b></a></font></h2>
</center><br>
</footer>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/597c13985dfc8255d623f7f7/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>
</html>