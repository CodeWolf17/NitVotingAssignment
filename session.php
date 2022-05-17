<?php
require 'dbconnect.php';
session_start();

if(!isset($_SESSION['userID']))
{

$_SESSION['msg']="You must login first to vote";
header("location:index.php");
}

else 
{
$session_id=$_SESSION['userID'];


}


?>