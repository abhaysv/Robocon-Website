<?php
session_start();
include_once 'dbconnect1.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$regno = $_SESSION['user'];
$res=mysql_query("SELECT * FROM enroll WHERE RegistrationNo='$regno'");

$userRow=mysql_fetch_array($res);
if($res === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ACP - <?php echo $userRow['FullName']; ?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="shortcut icon" href="favicon.ico">
</head>
<body>
<div id="header">
	<div id="left">
    <label>SRM Team Robocon Recruitment 2K19 Status</label>
    </div>
    <div id="right">
    	<div id="content">
		Welcome	<?php echo $userRow['FullName']; ?>&nbsp;<a href="logout1.php?logout">Log Out</a>
        </div>
    </div>
</div>
<div>
	<center>
	<img src="logo.png" height="200" width="200"/>
	<br><br>
	   	<div id="content">
		<h2><b><font color="#4E9258" size="6" face="courier">Welcome</font></b>
		<b><font size="6" color="#306754" face="courier"> <?php echo $userRow['FullName']; ?>&nbsp;</font></b></h2>
		<br>
		<h2><b><font color="#254117" face="courier">|Application Status|</font></b></h2>
		
        </div>
	
<div id="login-form">
<form>
<table align="center" width="55%" border="0">
<tr>
<td>	   	<div id="content">
		<h3><font face="courier">Application Status:&nbsp;</font></h3>
        </div>
</td>
<td>	   	<div id="content">
		<h3 style="color:green"><font face="courier"><?php echo $userRow['Status']; ?>&nbsp;</font></h3>
        </div>
</td>
</tr>
<tr>
<td>	   	<div id="content">
		<h3><font face="courier">Application Number:&nbsp;</font></h3>
        </div>
</td>
<td>	   	<div id="content">
		<h3 style="color:blue"><font face="courier"><?php echo $userRow['RegistrationNo']; ?>&nbsp;</font></h3>
        </div>
</td>
</tr>
<tr>
<td>	   	<div id="content">
		<h3><font face="courier">Venue:&nbsp;</font></h3>
        </div>
</td>
<td>	   	<div id="content">
		<h3 style="color:blue"><font face="courier"><?php echo $userRow['Action']; ?>&nbsp;</font></h3>
        </div>
</td>
</tr>
<tr>
<td><h3 style="color:red"><font face="courier">Any queries ? &nbsp;</font></h3></td><td><h3 style="color:red"><font face="courier">Contact +91 9990450628 , 8447750105</font></h3></td>
</tr>
<tr>
<td><h3 style="color:red"><font face="courier">Missed your exam ? &nbsp;</font></h3></td><td><h3 style="color:green"><font face="courier">Open Slot 2:00 PM TP - 501</font></h3></td>
</tr>
</table>
</form>
</div>
</center>
<!--
/*<?php/*
require 'dbconnect1.php';
$hname=$_POST["hname"];
$hreason=$_POST["hreason"];

@$query1="SELECT * FROM `playerdata` WHERE FullName='$hname'";
@$is_query_run=mysql_query($query1);

$query_execute=mysql_fetch_assoc($is_query_run);

		if($hname===@$query_execute['FullName'])
		{
			echo "Player exits";
		}
		else
		{
			echo "FullName is invalid";
		}
*/
?>*/
-->

<footer>
<center>
<br><br><br>----------------------------------------------------------------------------------------------------------------------------------<br>
<h2><font color="#2C3539" face="courier">&copy; 2018 SRM Team Robocon </font> | <font color="#2C3539" face="Lucida Grande">Developed by <a href="http://srmrobocon.com/developer/" style="color: #4C787E ""><b>Abhay SV</b></a></font></h2>
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