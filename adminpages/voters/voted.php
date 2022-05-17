
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
                    <h3 class="page-header">Voted Page</h3>
					
                </div>
				
				<?php 
					$count = $db->query("SELECT COUNT(*) as total FROM `voters`")->fetch_array();
					$count1 =  $db->query("SELECT COUNT(*) as total FROM `voters` WHERE `status` = 'Voted'")->fetch_array();
					$count2 = $db->query("SELECT COUNT(*) as total FROM `voters` WHERE `status` = 'Unvoted'")->fetch_array();
				?>
				<a href="voters.php" class = "btn btn-primary btn-outline">ALL Voters (<?php echo $count['total']?>)</a>
				<a href="voted.php" class = "btn btn-success btn-outline"> Voted(<?php echo $count1['total']?>)</a>
				<a href="unvoted.php" class = "btn btn-danger btn-outline">Unvoted(<?php echo $count2['total']?>) </a>
				 
				<br/>
                <!-- /.col-lg-12 -->
				
				
				<hr/>
				
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="modal-title" id="myModalLabel">         
												<div class="panel panel-primary">
													<div class="panel-heading"><i class = "fa fa-users"></i>
														Voters List
													</div>      
												</div>
											</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <br/>
					<button type="button" onclick="window.print();" style = "margin-right:14px;" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i> Print</button>	
<br>
					<br/>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                         
                                            <th>Name</th>
                                            <th>ID_Number</th>
                                      
                                            <th>Status</th>
                                           
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
									
                                      
										<?php 
										require '../../dbconnect.php';
										$query = $db->query("SELECT * FROM voters where status = 'Voted'");
										while($row = $query->fetch_array()){
											$voters_id=$row ['userID'];
										?>
										 <tr class="odd gradeX">
											<td><?php echo $row ['firstname']." ".$row['surname'];?></td>
                                            <td><?php echo $row ['userID'];?></td>
                                            
                                            <td><?php echo $row ['status'];?></td>
                                        </tr>
                                       <?php
											} 
									   ?>
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

