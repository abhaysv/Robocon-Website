	<html>
	<head>
	<title>Form</title>
	</head>

	<body>

	<?php
	include('/appstatus/dbconnect1.php');
	$name=$_POST["fullName"];
	$phone=$_POST["Mobile"];
	$email=$_POST["email"];
    $pass1=$_POST["password"];
	$dept=$_POST["department"];
	$reg=$_POST["reg"];
	$domain=$_POST["domain"];
	$q1=$_POST["q1"];
	$q2=$_POST["q2"];
	$q3=$_POST["q3"];


	
	
	// switch ($_POST["favoritecolor"]) {
	// case "r":
	// 	$domain = 1;
	// 	break;
	// case "g";
	// 	$domain= 2;
	// 	break;
	// case "b":
	// 	$domain = 3;
	// 	break;
	// default:
	// 	$domain = 4;
	// 	break;
	// }	
	
	
	$result = mysql_query('SELECT * FROM `users` WHERE 1=1');
	if (!$result) {
    die('Server Error: ' . mysql_error());
	}
	// SQL INJECTION HERE!!
	$result2 = mysql_query("SELECT * FROM `users` WHERE RegNo='$reg'");
	if (!$result2) {
    die('Register No Already registered: ' . mysql_error());
	}
//	while ($row = mysql_fetch_assoc($result)) {
//    if ($row['RegNo'] == $reg;
//	die('Register No already registered ' . mysql_error());
//	}		
	@$query1="INSERT INTO `users` (`RegNo`, `password`, `Name`, `Department`, `Domain`, `Email`, `Mobile`) VALUES ('$reg', '$pass1', '$name', '$dept', '$domain', '$email', '$phone');";
	$result1 = mysql_query($query1);
	if (!$result1) {
    die('Error Occured: ' . mysql_error());
//	die('Sorry some error occured please try again , if problem persists please contact +91 8780428306 ');
	}
	header("Location: http://localhost/rr/successful_enroll.html");
	die();
//	echo "<h1>Hello " . $query1 . "</h1>";
//	echo "<h1>Hello " . $reg . "</h1>";
//	echo "<h1>Hello " . $domain . "</h1>";
//	echo "<h1>Hello " . $q1 . "</h1>";
	


	?>

	</body>
	</html>
	