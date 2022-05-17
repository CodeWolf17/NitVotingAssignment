<?php

//connect to database   
$hostname="localhost";
$dbusername="root";
$dbpassword="";
$dbname="votingsimplified";

$db=mysqli_connect($hostname,$dbusername,$dbpassword,$dbname) or die("Could not connect to database");

?>