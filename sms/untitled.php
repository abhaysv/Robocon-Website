<?php
include_once 'smsGateway.php';
$smsGateway= new SmsGateway('monuabhaysv@gmail.com', 'abhayrocks');
$deviceID = 52831;
$number = '+918447750105';
$message = 'Hello World!';
$result = $smsGateway->sendMessageToNumber($number, $message, $deviceID);
?>


