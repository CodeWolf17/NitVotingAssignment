<?php

include ('dbconnect.php');

//initializing variables

   $errors= array();


//store users provided registration information

$firstname=$_POST['firstname'];

$middlename=$_POST['middlename'] ; 

$surname=$_POST['surname'];

$gender=$_POST['gender'];

$age=$_POST['age'];

$maritalstatus=$_POST['maritalstatus'];

$region=$_POST['region'];

$nationality=$_POST['nationality'];


if($age<18)
{
   echo '<script>
   alert ("NOT ELIGIBLE TO VOTE! ");
   window.location.href="index.php";
   </script>';
}

else {
//form validation

if(empty($firstname)){array_push($errors,"firstname is required");}
if(empty($surname)){array_push($errors,"surname is required");}
if(empty($gender)){array_push($errors,"gender is required");}
if(empty($age)){array_push($errors,"age is required");}
if(empty($maritalstatus)){array_push($errors,"maritalstatus is required");}
if(empty($region)){array_push($errors,"region is required");}
if(empty($nationality)){array_push($errors,"nationality is required");}


if ($_POST['password_1']==$_POST['password_2'])
{
$password=md5 ($_POST['password_1']); //This will encrypt the password

//signup the new voter if theres no error

$query="insert into voters (firstname,middlename,surname,gender,age,maritalstatus,region,nationality,password) 
values ('$firstname','$middlename','$surname','$gender','$age','$maritalstatus','$region','$nationality','$password')";
//connect and send query to database
$result= mysqli_query($db,$query);

$s= "SELECT * FROM voters WHERE firstname = '$firstname' && middlename = '$middlename' &&  surname = '$surname'  && age = '$age' &&  region = '$region' && nationality = '$nationality' &&   password = '$password' && status = 'unvoted' ";	
$sresult = mysqli_query($db,$s);

$srecord=mysqli_fetch_array($sresult);

  session_start();
  $_SESSION['userID'] = $srecord['userID'];

  $uid=$srecord['userID'];

  echo '<script>
  alert ("SUCCESS! Your Voter\'s ID Is: ' .$uid.'");
  window.location.href="index.php";
  </script>';


}
else
{
	echo '<script>
   alert ("Passwords do not match");
   window.location.href="Signup.php";
   </script>';
}

}



?>

