<?php
$host = "localhost";
$user = "Yedindindbuser";
$pass = "1234";
$db_name = "Yedindindb";
$con = new mysqli($host, $user, $pass, $db_name);
function formatDate($date){
	return date('g:i a', strtotime($date));
}
?>
