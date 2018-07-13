<?php
$to = 'srmtechrobocon@gmail.com';
$subject = 'CONTACT REQUEST - SRMROBOCON.COM';
$headers = 'From: ABHAYSV <abhaysv@srmrobocon.com>' . "\r\n" . 'Content-type: text/html; charset=utf-8';
$message = '
<html>
	<head>
		<title>CONTACT REQUEST - SRMROBOCON.COM</title>
	</head>
	<body>
		<h3>Name: <span style="font-weight: normal;">' . $_POST['name'] . '</span></h3>
		<h3>Email Adress: <span style="font-weight: normal;">' . $_POST['email'] . '</span></h3>
		<h3>Telephone: <span style="font-weight: normal;">' . $_POST['phone'] . '</span></h3>
		<div>
			<h3 style="margin-bottom: 5px;">Comment:</h3>
			<div>' . $_POST['comment'] . '</div>
		</div>
	</body>
</html>';

if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['comment'])) {
	if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	    mail($to, $subject, $message, $headers) or die('<span style="color: red;">Error sending Mail</span>');
	    echo '<span class="send-true" style="color: #00dd63;">Your email was sent!</span>';
	}
} else {
	echo '<span style="color: red;">All fields must be filled!</span>';
}
?>