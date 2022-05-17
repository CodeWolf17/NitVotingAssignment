<div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">         
												<div class="panel panel-primary">
													<div class="panel-heading">
														<center>Add User</center>
													</div>    
												</div>
											</h4>
										</div>
										
										
                                        <div class="modal-body">
										<form method = "post" enctype = "multipart/form-data">	
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
<label for="password"> Password: </label>
<input type="password" class="form-control" placeholder="Password" name="password" required>
</div>

<div class="form-group">
<label for="usertype"> UserType: </label>
<select name ="usertype"  class="form-control">
<option value="registrar">registrar</option>
<option value="judge">judge</option>
</select>
</div>
									
												 <button name = "ok" type="submit" class="btn btn-primary">Save Data</button>
							  
										 </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                           
                                        </div>
										
										</form>
										
							<?php 
										
								require_once '../../dbconnect.php';
								if (isset($_POST['ok'])){
								  
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
								
		
								$query = $db->query("SELECT * FROM admins WHERE firstname = '$firstname' && middlename = '$middlename' &&  surname = '$surname'  && age = '$age' && maritalstatus= '$maritalstatus' && region = '$region' && nationality = '$nationality' &&   password = '$password' && usertype='$usertype') or die (mysql_error()");
								$count1 = $query->num_rows;

								if ($count1  > 0){ 
							?>
										<script>
											alert("User Already Exist");
										</script>
							<?php
								}
								else{
									$db->query("INSERT INTO admins (firstname, middlename, surname, gender, age, maritalstatus, region, nationality, password, usertype) VALUES('$firstname', '$middlename', '$surname', '$gender', '$age', '$maritalstatus','$region', '$nationality', '$password','$usertype')");
									header('location:user.php');
							?>
									<script>
										alert('User Data Successfully Save');
									</script>
							<?php 
									}
								} 
							?>	
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>