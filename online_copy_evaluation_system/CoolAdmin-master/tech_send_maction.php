
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
  
      
	  
    ?>
   <?php
  
	 
	 ?>
     
	 
	 <div class="card-body" id="abc">
                                   
										<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> S.N</th>
            <th>School Code</th>
            <th>Messages</th>
            <th>Date/Time</th>
          </tr>
        </thead>
        <tbody>
     
           <?php 
  
  
  
	  
   $sql1="select scode,message,date from tech_messages where subject='$sub_tech' order by sn desc";
$result1=mysqli_query($con,$sql1);
  $count=0;

while($row=mysqli_fetch_array($result1))
{
	?>
  <tr><td> <?php echo $count=$count+'1' ?></td>
  <td><?php echo $row[0]?></td>
  <td><?php echo $row[1]?></td>
  <td><?php echo $row[2]?></td>
  </tr>
<?php
}

?>
        
        </tbody>
      </table>
      

    </div>
  
  
  
 
 </div>
  
  