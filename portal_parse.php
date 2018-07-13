	<html>
	<head>
	<title>Form</title>
	</head>

	<body>

	<?php
	include('./sql/config.php');

	$pass1=$_POST["password"];
	$email=$_POST["email"];

	
	
	
	
	
	$result = mysql_query('SELECT * FROM `users` WHERE 1=1');
	if (!$result) {
    die('Server Error: ' . mysql_error());
	}
	mysql_free_result($result);
	$query = sprintf("SELECT RegNo, password, Email, Name FROM `users` 
    WHERE Email='%s' AND password='%s'",
    mysql_real_escape_string($email),
    mysql_real_escape_string($pass1));
	// Perform Query
	$result = mysql_query($query);

	// Check result
	// This shows the actual query sent to MySQL, and the error. Useful for debugging.
	if (!$result) {
		$message  = 'Invalid query: ' . mysql_error() . "\n";
		$message .= 'Whole query: ' . $query;
		die("Login Failed , Incorrect Email or pass");
	}
	
	while ($row = mysql_fetch_assoc($result)) {
    echo $row['firstname'];
    echo $row['lastname'];
    echo $row['address'];
    echo $row['age'];
	}

//	while ($row = mysql_fetch_assoc($result)) {
//    if ($row['RegNo'] == $reg;
//	die('Register No already registered ' . mysql_error());
//	}		
//	@$query1="INSERT INTO `users` (`RegNo`, `password`, `Name`, `Department`, `Domain`, `Email`, `q1`) VALUES ('$reg', '$pass1', '$name', '$dept', '$domain', '$email', '$q1');";
//	$result1 = mysql_query($query1);
//	if (!$result1) {
 //   die('Error Occured: ' . mysql_error());
//	die('Sorry some error occured please try again , if problem persists please contact +91 8447750105 ');
//	}
//	header("Location: http://localhost/rr/successful_enroll.html");
//	die();
	echo "<h1>Hello " . $email . "</h1>";
	echo "<h1>Hello " . $pass1 . "</h1>";
//	echo "<h1>Hello " . $domain . "</h1>";
//	echo "<h1>Hello " . $q1 . "</h1>";
	


	?>

	</body>
	</html>
	