<?php include ('head.php');?>

<!DOCTYPE html>
<html>

 <head  CHARSET="UTF-8">
 <TITLE>

LOGIN 

</title>
</head>


<body>


<div class="jumbotron" style="margin-bottom: 1px;">
<div class="row" >

<div class="col-md-2">
<center><img src="./media/nitlogo.png" style="width:60%"></center> 
</div>

<div class="col-md-8">
<center><h2>NATIONAL INSTITUTE OF TRANSPORT </h2>
<h3><p>SIMPLIFIED VOTING SYSTEM ASSIGNMENT<p></h3>
</center>
</div>

<div class="col-md-2">
<center><img src="./media/nitlogo.png" style="width:60%"></center> 
</div>

</div>
</div>

<div class="container">

<div class="row">
<div class="col-md-4 col-md-offset-4">
    
<div class="login-panel panel panel-default">

<div class="panel-heading">
    <center><h3 class="panel-title"> LOGIN HERE </h3></center>
</div>

<div class="panel-body">
<form action="loginquery.php" method="post" role="form" enctype = "multipart/form-data">
<fieldset>

 <div class="form-group">
<label for="userID"> Voter/UserID: </label>
<input type="autonumber" class="form-control" placeholder="example 0000" name="userID" required>
</div>

 <div class="form-group">
<label for="Password"> Password: </label>
<input type="Password" class="form-control" placeholder="Password" name="password" required >
</div>

<button type="submit" class="btn btn-lg btn-success btn-block " name="login_user">Log in</button>

<p>Not a user ? <a href="Signup.php"> <b> SIGN UP </b> </a> </p>


</fieldset>
</form>
<b>Notice:</b> 
<p>*Voter/UserID is provided once you sign up!</p>

</div>
</div>
</div>
</div>
</div>




<?php






?>


</div>



<?php include ('script.php');?>
</body>






</html>