
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:0; background-color:cadetblue;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="" style = "color:white;">Simplified Voting System &nbsp <i class = "fa fa-envelope fa-large" > </i></a>

            </div>


            <ul class="nav navbar-top-links navbar-right">

               <?php require '../dbconnect.php';
				$q= "SELECT * FROM admins WHERE userID = '$session_id' " ;	
                $qresult = mysqli_query($db,$q);
                $record=mysqli_fetch_array($qresult);

			 ?>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style = "color: white">
					<i class="fa fa-cog fa-spin fa-fw"></i>Welcome <?php echo $record['usertype'].": ".$record['firstname']." ".$record['surname'];?>

                    </a>


                </li>

            </ul>
		
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li>
                        <a href="../candidate/candidate.php"><i class="fa fa-menu fa-fw"></i>Dashboard </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Candidate List<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                 
                                <li>
                                    <a href="../candidate/candidate.php"><i class = "fa fa-user fa-fw"></i> View Candidates</a>
                                </li>

                            </ul>
                            
                        </li>
						<li>
                            <a href="#"><i class="fa fa-users"></i> Voters List<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../voters/voters.php"><i class = "fa fa-user fa-fw"></i> View Voters</a>
                                </li>
                               
                            </ul>
                            
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Admin Users<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            
                            <li>
                                    <a href="../adminusers/user.php"> <i class = "fa fa-users" ></i> View Users</a>
                                </li>
                             
                            </ul>
                            
                        </li>

                        <li>
                            <a href="results.php"><i class="fa fa-download fa-fw"></i> Vote Results</a>
                        </li>

                        <li>
                            <a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Log Out</a>

                            
                        </li>

                    </ul>
                </div>
               
            </div>
           
        </nav>
