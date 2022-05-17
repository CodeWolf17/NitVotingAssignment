<?php
	include("dbconnect.php");
	session_start();
	session_destroy();
		$db->query("INSERT INTO `votes` VALUES('', '$_SESSION[pres_id]', '$_SESSION[userID]')") or die(mysql_error());
		$db->query("INSERT INTO `votes` VALUES('', '$_SESSION[vpinternal_id]', '$_SESSION[userID]')") or die(mysql_error());
		$db->query("INSERT INTO `votes` VALUES('', '$_SESSION[vpexternal_id]', '$_SESSION[userID]')") or die(mysql_error());
		$db->query("INSERT INTO `votes` VALUES('', '$_SESSION[secretary_id]', '$_SESSION[userID]')") or die(mysql_error());
		$db->query("INSERT INTO `votes` VALUES('', '$_SESSION[auditor_id]', '$_SESSION[userID]')") or die(mysql_error());
		$db->query("INSERT INTO `votes` VALUES('', '$_SESSION[treasurer_id]', '$_SESSION[userID]')") or die(mysql_error());
		$db->query("INSERT INTO `votes` VALUES('', '$_SESSION[pio_id]', '$_SESSION[userID]')") or die(mysql_error());
		$db->query("INSERT INTO `votes` VALUES('', '$_SESSION[busman_id]', '$_SESSION[userID]')") or die(mysql_error());
		$db->query("INSERT INTO `votes` VALUES('', '$_SESSION[sgtarm_id]', '$_SESSION[userID]')") or die(mysql_error());
		$db->query("INSERT INTO `votes` VALUES('', '$_SESSION[muse_id]', '$_SESSION[userID]')") or die(mysql_error());
		$db->query("INSERT INTO `votes` VALUES('', '$_SESSION[escort_id]', '$_SESSION[userID]')") or die(mysql_error());
		$db->query("UPDATE `voters` SET `status` = 'Voted' WHERE `userID` = '$_SESSION[userID]'") or die(mysql_error());
		header("location:index.php");
		
?> 