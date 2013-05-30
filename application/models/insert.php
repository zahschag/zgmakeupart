<?php
$pfield = $_POST['email'];

include('db_connect.php');

function giveJSON($arr){
	die(json(json_encode($arr))
};

$db = mysql_select_db('zgmakeupart', $con) or die(mysql_error());
$sql="INSERT INTO `newsletter`(`email_address`) VALUES('$_POST[email]');"


?>