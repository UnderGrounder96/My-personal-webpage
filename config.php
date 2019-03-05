<?php
define("HOST","mysql.cba.pl");
define("PORT",3306);
define("SOCKET","");
define("USER","platinado");
define("PASSWORD","platinadocbapl");
define("DBNAME","undergrounder96");

$db = new mysqli(HOST, USER, PASSWORD, DBNAME, PORT, SOCKET)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//echo "Connected successfully";
#$db->close();
?>