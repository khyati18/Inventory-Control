<?php

function OpenCon()
{
	$dbhost = "127.0.0.1";
	$dbuser = "root";
	$dbpass = "";							// Enter password of root user or change user&pass
	$db = "inventory";
	
	$conn = new mysqli($dbhost, $dbuser, $dbpass,$db);

	return $conn;
}

function CloseCon($conn)
{
	$conn -> close();
}

?>