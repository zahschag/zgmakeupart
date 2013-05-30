<?php

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "password";
$mysql_database = "zgmakeupart";

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Oops no connection to the database");
mysql_select_db($mysql_database, $bd) or die("Ohh noo something aweful happened");
?>