
<?php include ('../session.php');?>
<?php include ('../head.php');?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('sidebar.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">System Admin-User List</h3>
					
                </div>
				
				<button class="btn btn-success" data-toggle="modal" data-target="#add_user">Add User</button>
				<?php include ('add_user_modal.php');?>
                <!-- /.col-lg-12 -->
			
				
				<hr/>
				
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="modal-title" id="myModalLabel">         
												<div class="panel panel-primary">
													<div class="panel-heading">
														User Data List
													</div>    
												</div>
											</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                         
                                            <th>userID</th>
                                            <th>Firstname</th>
                                            <th>Middlename</th>
                                            <th>Surname</th>
                                            <th>Gender</th>
                                            <th>Age</th>
                                            <th>MaritalStatus</th>
                                            <th>Region</th>
                                            <th>Nationality</th>
                                          
                                            <th>Usertype</th>
                                         
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
                                        <tr>
										<?php 
										require '../../dbconnect.php';
										$bool = false;
										$query = $db->query("SELECT * FROM admins ORDER BY userID DESC");
										while($row = $query->fetch_array()){
										$user_id=$row['userID'];
										?>
											
                                        


											<td><?php echo $row ['userID'];?></td>
                                            <td><?php echo $row ['firstname'];?></td>
                                            <td><?php echo $row ['middlename'];?></td>
                                            <td><?php echo $row ['surname'];?></td>
                                            <td><?php echo $row ['gender'];?></td>
                                            <td><?php echo $row ['age'];?></td>
                                            <td><?php echo $row ['maritalstatus'];?></td>
                                            <td><?php echo $row ['region'];?></td>
                                            <td><?php echo $row ['nationality'];?></td>                                       
                                           
                                            <td><?php echo $row ['usertype'];?></td>
                                            
                                            <td style="text-align:center">
											
												 <a rel="tooltip"  title="Delete" id="<?php echo $user_id ?>" href="#delete_admin<?php echo $user_id; ?>" data-target="#delete_admin" data-toggle="modal"class="btn btn-danger btn-outline"><i class="fa fa-trash-o"></i> Delete</a>	
											 <?php include ('delete_user_modal.php'); ?>
												  <a rel="tooltip"  title="Edit" id="<?php echo $row['userID'] ?>" href="#edit_user<?php echo $row['userID'] ?>"  data-toggle="modal"class="btn btn-success btn-outline"><i class="fa fa-pencil"></i> Edit</a>	
												
											</td>
											    <?php include ('edit_user_modal.php');?>
                                        </tr>
										
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
              
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



    </div>
    <!-- /#wrapper -->

    <?php include ('script.php');?>

</body>

</html>

