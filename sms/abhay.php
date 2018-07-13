
<?phpinclude "smsGateway.php";

$smsGateway = new SmsGateway('monuabhaysv@gmail.com', 'abhayrocks');
$deviceID = 52831;
$number = '+918447750105';
$message = 'Hello World!';
$options = ['send_at' => strtotime('+10 minutes'), // Send the message in 10 minutes'expires_at' => strtotime('+1 hour') // Cancel the message in 1 hour if the message is notp yet sent];
//Please note options is no required and can be left out
$result = $smsGateway->sendMessageToNumber($number, $message, $deviceID, $options);?>


