<?php include ('head.php');?>

<!DOCTYPE html>
<html>                           

 <head>
 <title>
 SIGNUP
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
    <center><h3 class="panel-title"> SIGNUP HERE </h3></center>
</div>
<div class="panel-body">

<form action="server.php" method="post" role="form" enctype = "multipart/form-data">
<fieldset>

 <div class="form-group">
<label for="firstname"> Firstname: </label>
<input type="text" class="form-control" placeholder="Firstname" name="firstname" required>
</div>

 <div class="form-group">
<label for="middlename"> Middlename: </label>
<input type="text" class="form-control" placeholder="Middlename" name="middlename">
</div>

 <div class="form-group">
<label for="surname"> Surname: </label>
<input type="text" class="form-control" placeholder="Surname" name="surname" required>
</div>

<div class="form-group">
<label for="gender"> Gender: </label>
<select name ="gender"  class="form-control">
<option value="male">Male</option>
<option value="female">Female</option>
</select>
</div>

 <div class="form-group">
<label for="age"> Age: </label>
<input type="integer" class="form-control" placeholder="Age" name="age" required>
</div>

<div class="form-group">
<label for="maritalstatus"> Marital Status: </label>
<select name ="maritalstatus"  class="form-control">
<option value="single">Single</option>
<option value="married">Married</option>
<option value="divorced">Divorced</option>
<option value="deadpartner">DeadPartner</option>
</select>
</div>

 <div class="form-group">
<label for="region"> Region:</label>
<input type="text" class="form-control" placeholder="Region" name="region" required>
</div>

 <div class="form-group">
<label for="nationality"> Nationality: </label>
<input type="text" class="form-control" placeholder="Nationality" name="nationality">
</div>

 <div class="form-group">
<label for="password_1"> Password: </label>
<input type="password" class="form-control" placeholder="Password" name="password_1" required>
</div>

 <div class="form-group">
<label for="password_2"> Confirm Password: </label>
<input type="password" class="form-control" placeholder="Confirm Password" name="password_2" required>
</div>

<button type="submit" class="btn btn-lg btn-success btn-block " >Submit</button>

<p>Already a user <a href="index.php"> <b> LOG IN </b> </a> </p>


</fieldset>
</form>
</div>
</div>
</div>
</div>
</div>



</div>


<?php include ('script.php');?>

</body>






</html>