<?php
	require_once '../../dbconnect.php';
	if (isset ($_POST ['change'])){
		$user_id = $_GET['userID'];
		$firstname =$_POST['firstname'];
		$middlename=$_POST['middlename'];
		$surname=$_POST['surname'];
		$gender=$_POST['gender'];
		$age=$_POST['age'];
		$maritalstatus=$_POST['maritalstatus'];
		$region =$_POST['region'];
		$nationality=$_POST['nationality'];
		$password=md5($_POST['password']);
		$usertype=$_POST['usertype'];
	


		$db->query("UPDATE admins SET  firstname = '$firstname', middlename = '$middlename' , surname = '$surname', gender = '$gender', age = '$age', maritalstatus = '$maritalstatus' , region = '$region' , nationality = '$nationality', password = '$password',  usertype = '$usertype' WHERE userID = '$user_id'")or die(mysql_error());
		
		header("location: user.php");
	}
?>