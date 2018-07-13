<?php
$to = 'srmtechrobocon@gmail.com';
$subject = 'You subject';
$headers = 'From: Contact Request <abhaysv@srmrobocon.com>' . "\r\n" . 'Content-type: text/html; charset=utf-8';
$message = '
<html>
	<head>
		<title>Automated contact request from website</title>
	</head>
	<body>
		<h3>Email: <span style="font-weight: normal;">' . $_POST['email'] . '</span></h3>
	</body>
</html>';

if (!empty($_POST['email'])) {
	if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	    mail($to, $subject, $message, $headers) or die('<span style="color: red;">Error sending Mail</span>');
	    echo '<span class="send-true" style="color: #00dd63;">Your email was sent!</span>';
	}
} else {
	echo '<span style="color: red;">Please specify your e-mail!</span>';
}
?>