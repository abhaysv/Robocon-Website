<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$data = 'users';

echo("hello world");

mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($data) or die(mysql_error());


?>