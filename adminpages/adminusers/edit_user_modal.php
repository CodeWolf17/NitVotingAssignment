<?php
	if(!$bool){
?>
<div class="modal fade" id="edit_user<?php  echo $user_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">         
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>Edit Candidate</center>
						</div>    
					</div>
				</h4>
			</div>
										
										
            <div class="modal-body">										
				<form action="update_user.php?userID=<?php echo $user_id; ?>" method = "post" >	
					<input type="hidden" name="userID" value="<?php echo $row['userID'] ?>">
																				

<div class="form-group">
<label for="firstname"> Firstname: </label>
<input type="text" class="form-control" placeholder="Firstname" name="firstname" value = "<?php echo $row ['firstname']?>" >
</div>

 <div class="form-group">
<label for="middlename"> Middlename: </label>
<input type="text" class="form-control" placeholder="Middlename" name="middlename" value = "<?php echo $row ['middlename']?>"  >
</div>

 <div class="form-group">
<label for="surname"> Surname: </label>
<input type="text" class="form-control" placeholder="Surname" name="surname" value = "<?php echo $row ['surname']?>" >
</div>

<div class="form-group">
<label for="gender"> Gender: </label>
<select name ="gender"  class="form-control">
<option><?php echo $row ['gender']?></option>
<option value="male">Male</option>
<option value="female">Female</option>
</select>
</div>

 <div class="form-group">
<label for="age"> Age: </label>
<input type="integer" class="form-control" placeholder="Age" name="age" value = "<?php echo $row ['age']?>" >
</div>

<div class="form-group">
<label for="maritalstatus"> Marital Status: </label>
<select name ="maritalstatus"  class="form-control">
<option><?php echo $row ['maritalstatus']?></option>
<option value="single">Single</option>
<option value="married">Married</option>
<option value="divorced">Divorced</option>
<option value="deadpartner">DeadPartner</option>
</select>
</div>

 <div class="form-group">
<label for="region"> Region:</label>
<input type="text" class="form-control" placeholder="Region" name="region" value = "<?php echo $row ['region']?>" >
</div>

 <div class="form-group">
<label for="nationality"> Nationality: </label>
<input type="text" class="form-control" placeholder="Nationality" name="nationality" value = "<?php echo $row ['nationality']?>" >
</div>

 <div class="form-group">
<label for="password"> Password: </label>
<input type="password" class="form-control" placeholder="Password" name="password" value = "<?php echo $row ['password']?>" >
</div>

<div class="form-group">
<label for="usertype"> UserType: </label>
<select name ="usertype"  class="form-control">
<option><?php echo $row ['usertype']?></option>
<option value="registrar">registrar</option>
<option value="judge">judge</option>
</select>
</div>
											
					<button name = "change" type="submit" class="btn btn-primary">Save Data</button>
				</form>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
				
		</div>					
	</div>
</div>
<?php
	}
?>
<!-- /.modal-content -->
                                
