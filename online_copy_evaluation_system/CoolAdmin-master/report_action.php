
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
  
      $sscode=$_POST["sscode"];
	  $dt=$_POST["dt"];
	  $messages=$_POST["message"];
	  $subjected=$_POST["subjected"];
	  $tech_id=$_POST["tech_id"];
	  if(!$dt=="" && !$messages=="")
	  {
		$run="insert into report_tech(tech_id,subject,date,report) values('$tech_id','$subjected','$dt','$messages')";
	  $query=mysqli_query($con,$run);
	  if($query==TRUE)
	  {
		  echo "<script>alert('Report send.......');</script>";
	  }
	  else
	  {
		   echo "<script>alert('Report not send!!!!!.......');</script>";
	  }  
	  }
	  
	  
	  else
	  {
		  echo "<script>alert('please insert all fields.......');</script>";
	  }
	  
	  
	 
         
    
    ?>
   <?php
  
	 
	 ?>
     
	 
	 <div class="card-body" id="abc">
                                   
										<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> S.N</th>
            <th>Send To</th>
            <th>Date/Time</th>
            <th>Report</th>
            
          </tr>
        </thead>
        <tbody>
     
           <?php 
  
  
  
	  
   $sql1="select sn,date,report from report_tech where  tech_id='$tech_id' and subject='$sub_tech'  order by sn desc";
$result1=mysqli_query($con,$sql1);
  $count=0;

while($row=mysqli_fetch_array($result1))
{
	?>
  <tr><td> <?php echo $count=$count+'1' ?></td>
  <td><?php echo "admin";?></td>
  <td><?php echo $row['date']?></td>
  <td><?php echo $row['report']?></td>
  
  </tr>
<?php
}

?>
        
        </tbody>
      </table>
      

    </div>
  
  
  
 
 </div>
  
  