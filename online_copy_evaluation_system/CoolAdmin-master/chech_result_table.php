
<?php 
  session_start();
  error_reporting(0);
  if(!$_SESSION['id_num'])
	{
		header('location:login.php');
	}
  $id=$_SESSION['id_num'];
  $sub_tech=$_SESSION['subject_tech'];
  
  
  $con=mysqli_connect("localhost","root","","online_copy_evaluation");
  
      
	  $subjected=$_POST["subjected"];
	  //echo $scode.$subj.$class.$month.$year.$ccode;
	  
	 
 ?>
	 
	 <div class="card-body" id="abc">
                                   
										<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> S.N</th>
            <th>Table Name</th>
            
          </tr>
        </thead>
        <tbody>
     
           <?php 
  
  
      $res="result";
 // $con=mysqli_connect("localhost","root","","online_copy_evaluation");
   $sql1="show tables like '$res%$sub_tech%'";
$result1=mysqli_query($con,$sql1);
  $count=0;

while($row=mysqli_fetch_array($result1))
{
	?>
  <tr><td> <?php echo $count=$count+'1' ?></td><td><?php echo $row[0]?></td>
  
  </tr>
<?php
}

?>
        
        </tbody>
      </table>
      

    </div>
  
  
  
 
 </div>
  
  