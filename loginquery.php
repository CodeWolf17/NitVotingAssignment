<?php include ('dbconnect.php');


	if(isset($_POST['login_user'])){
                $userID=$_POST['userID'];
                $password=md5($_POST['password']);
           
                $q= "SELECT * FROM voters WHERE userID = '$userID' && password = '$password' && status = 'unvoted' " ;	
                $qresult = mysqli_query($db,$q);
                $record=mysqli_fetch_array($qresult);
        
                if ($record > 0){
                
                    session_start();
                    $_SESSION['userID'] = $record['userID'];
                 
                    header("location:vote.php");
        /*
                    if($record['status'] == 'voted'){
                        echo '<script>
                        alert ("YOU CAN VOTE ONLY ONCE!");
                        window.location.href="index.php";
                        </script>';
                        echo " <br><center><font color= 'red' size='3'>You Can Only Vote Once</center></font>";
          */  
                    }
                
                    elseif(isset($_POST['login_user'])){
                        $userID=$_POST['userID'];
                        $password=md5($_POST['password']);
                   
                        $q= "SELECT * FROM admins WHERE userID = '$userID' && password = '$password' ";	
                        $qresult = mysqli_query($db,$q);
                        $record=mysqli_fetch_array($qresult);
                
                   
                        if ($record > 0){
                        
                           
                            if($record['usertype']=='registrar')
                            {
                            session_start();
                            $_SESSION['userID'] = $record['userID'];
                         
                            header("location:adminpages/eregistrar.php");
                            }
                
                            elseif($record['usertype']=='judge')
                            {
                            session_start();
                            $_SESSION['userID'] = $record['userID'];
                         
                            header("location:adminpages/judge.php");
                            }
      
                            }
                          

           else{
                echo '<script>
                alert ("LOGIN ERROR! WRONG CREDENTIALS OR ALREADY VOTED ");
                window.location.href="index.php";
                </script>';
                echo " <br><center><font color= 'red' size='3'>LOGIN ERROR!</center></font>";
            }
        
        }
            
    }
         


	



    
?>
