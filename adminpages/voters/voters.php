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
                    <h3 class="page-header">Voters List</h3>
					
                </div>
				<?php 
					$count = $db->query("SELECT COUNT(*) as total FROM `voters`")->fetch_array();
					$count1 =  $db->query("SELECT COUNT(*) as total FROM `voters` WHERE `status` = 'Voted'")->fetch_array();
					$count2 = $db->query("SELECT COUNT(*) as total FROM `voters` WHERE `status` = 'Unvoted'")->fetch_array();
					?>
				<a href="voters.php" class = "btn btn-primary btn-outline"><i class = "fa fa-paw"></i> ALL Voters (<?php echo $count['total']?>)</a>
				<a href="voted.php" class = "btn btn-success btn-outline"><i class = "fa fa-paw"></i> Voted(<?php echo $count1['total']?>)</a>
				<a href="unvoted.php" class = "btn btn-danger btn-outline"><i class = "fa fa-paw"></i> Unvoted(<?php echo $count2['total']?>) </a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				
                <br />
			
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
                                         
                                            <th>ID Number</th>
                                       
                                            <th>Name</th>                                        
                                            <th>Status</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php 
											require '../../dbconnect.php';
											
											$query = $db->query("SELECT * FROM voters ORDER BY userID DESC");
											while($row1 = $query->fetch_array()){
											$voters_id=$row1['userID'];
										?>
                                      
											<tr>
												<td><?php echo $row1 ['userID'];?></td>
										
												<td><?php echo $row1 ['firstname']." ". $row1 ['surname'];?></td>
												<td><?php echo $row1 ['status'];?></td>
														
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

