<?php
//error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
if(!mysql_connect("localhost","srmroboc_jayshil","y@jayshil1"))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("srmroboc_recruitment2018"))
{
	die('oops database selection problem ! --> '.mysql_error());
}

?>