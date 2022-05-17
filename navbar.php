<nav class="navbar navbar-default navbar-static-top navbar-primary navbar-fixed" role="navigation" style="margin-bottom:6px;background-color:lightslategrey;color:white;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="" style = "color:white;"> Simplified Voting System &nbsp <i class = "fa fa-envelope fa-large" > </i></a>

            </div>


            <ul class="nav navbar-top-links navbar-right">

              <?php
      					require 'dbconnect.php';
      					$q= "SELECT * FROM voters WHERE userID = '$session_id' " ;	
                $qresult = mysqli_query($db,$q);
                $record=mysqli_fetch_array($qresult)
      				?>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style = "color:white;font-size:14pt;">

    					<i class="fa fa-arrow fa-fw"></i>Welcome : <?php echo $record['firstname']." ".$record['surname'];?> 

    					</a>
                    </li>

                <li>
                    <a class="dropdown-toggle"  href="logout.php" style = "color:white;font-size:14pt;"> <i class="fa fa-sign-out fa-fw"></i> Log Out</a>
                </li>
            </ul>
