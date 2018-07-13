<?php
session_start();
include_once 'dbconnect1.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysql_query("SELECT * FROM playerdata WHERE playerID=".$_SESSION['user']);       //"admin"");   .$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ACP - <?php echo $userRow['playerName']; ?></title>
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
		Welcome	<?php echo $userRow['playerName']; ?>&nbsp;<a href="logout1.php?logout">Log Out</a>
        </div>
    </div>
</div>
<div>
	<center>
	<img src="logo.png" height="200" width="200"/>
	<br><br>
	<h3>Please Enter the correct & valid Player Ig-Name and Reason whom you want to BAN......(Check CASE SENSITIVITY)<br>
	</h3>
	
	<div id="login-form">
<form action="banresult.php" method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="myname" placeholder="Your InGame Name(ADMIN)" required /></td>
</tr>
<tr>
<td><input type="text" name="hname" placeholder="Player InGame Name(Offender)" required /></td>
</tr>
<tr>
<td><input type="text" name="hreason" placeholder="Valid Reason" required /></td>
</tr>
<tr>
<td><button type="submit">OK</button></td>
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

@$query1="SELECT * FROM `playerdata` WHERE playerName='$hname'";
@$is_query_run=mysql_query($query1);

$query_execute=mysql_fetch_assoc($is_query_run);

		if($hname===@$query_execute['playerName'])
		{
			echo "Player exits";
		}
		else
		{
			echo "Playername is invalid";
		}
*/
?>*/
-->

<footer>
<center>
<br><br><br>----------------------------------------------------------------------------------------------------------------------------------<br>
<h2><font color="#2C3539" face="courier">&copy; 2016 CZ Cops and Robbers</font> | <font color="#4C787E" face="Lucida Grande">Developed by <b>Striker</b> & <b>zap</b></font></h2>
</center><br>
</footer>

</body>
</html>