<?php
	require_once '../../dbconnect.php';
	$user_id=$_GET['userID'];
	$db->query("DELETE FROM admins WHERE userID='$user_id'") or die(mysql_error());
	header('location:user.php');
?>