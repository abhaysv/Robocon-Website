<html>
<head>
<title>BAN Result</title>
<link rel="shortcut icon" href="favicon.ico">
</head>
<body>

<div>
	<center><img src="logo.png"/>
	
	<h1><b><font color="#306754" face="courier">Offline Banning System</font></b></h1>
	<br>
	</center>
</div>




<?php
require 'dbconnect1.php';
$myname=$_POST["myname"];
$hname=$_POST["hname"];
$hreason=$_POST["hreason"];


@$query1="SELECT * FROM `playerdata` WHERE playerName='$hname'";
@$is_query_run1=mysql_query($query1);

@$query2="SELECT * FROM `playerbans` WHERE player_banned='$hname'";
@$is_query_run2=mysql_query($query2);

$query_execute1=mysql_fetch_assoc($is_query_run1);

$query_execute2=mysql_fetch_assoc($is_query_run2);

$hip=$query_execute1['playerIP'];
//echo $hip;

		if($hname===@$query_execute1['playerName'])
		{
			if($hname===@$query_execute2['player_banned'])
			{
				
				echo "<br>";
				echo "<center>----------------------------------------------------------------------------------</center><br><br>";
				echo '<h2><center><font color="#2B547E" face="rockwell"><b>Player "'.$hname.'" is already Banned.</b></font></center><br></h2>';
				echo "<br>";
				echo "<br>";
				echo "<center>----------------------------------------------------------------------------------</center><br><br>";
				echo "<br>";
				echo "<center><em>You will be automatically redirect to Admin Control Panel in 5 seconds</em></center>";
						header('Refresh: 5;index.php');
				
			}
			
			else
			{
				echo "<br>";
				echo "<center>----------------------------------------------------------------------------------</center><br><br>";
				echo '<h2><center><font color="#2B547E" face="rockwell"><b>Player <del>'.$hname.'</del> is Banned for reason "'.$hreason.'" by <i>'.$myname.'</i>.</b></font></center><br></h2>';
				
				mysql_query("INSERT INTO playerbans (banned_by,banned_for,player_banned,player_ip) VALUES('$myname','$hreason','$hname','$hip')");
				
				echo "<br>";
				echo "<br>";
				echo "<center>----------------------------------------------------------------------------------</center><br><br>";
				echo "<br>";
				echo "<center><em>You will be automatically redirect to Ban List in 5 seconds</em></center>";
						header('Refresh: 5; http://cz-cnr.com/ucp/banlist.php');
				
				//mysql_query("INSERT INTO playerbans (banned_by,banned_for,player_banned) VALUES('Striker','sh','test2')");
				//INSERT INTO playerbans (banned_by,banned_for,player_banned) VALUES('zap','sh','test')
				//echo $query_execute1['playerIP'];
			}
			
			//echo "Player exits";
		}
		else
		{
			echo "<br>";
				echo "<center>----------------------------------------------------------------------------------</center><br><br>";
				echo '<h2><center><font color="#2B547E" face="rockwell"><b>Playername "'.$hname.'" is Invalid.</b></font></center><br></h2>';
				echo "<br>";
				echo "<br>";
				echo "<center>----------------------------------------------------------------------------------</center><br><br>";
				echo "<br>";
				echo "<center><em>You will be automatically redirect to Admin Control Panel in 5 seconds</em></center>";
						header('Refresh: 5;index.php');
			
		}

?>

<footer>
<center>
<br><br><br>----------------------------------------------------------------------------------------------------------------------------------<br>
<h2><font color="#2C3539" face="courier">&copy; 2016 CZ Cops and Robbers</font> | <font color="#4C787E" face="Lucida Grande">Developed by <b>Striker</b> & <b>zap</b></font></h2>
</center><br>
</footer>


</body>
</html>