<?php
include('session.php');

session_destroy();
unset($_SESSION['userID']);

header('Location:index.php');

?>
