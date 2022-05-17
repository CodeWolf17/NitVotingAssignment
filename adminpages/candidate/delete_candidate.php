<?php
    require_once '../../dbconnect.php';
	$candidate_id=$_GET['candidate_id'];
	$db->query("delete from candidate where candidate_id='$candidate_id'") or die(mysql_error());
	header('location:candidate.php');
?>