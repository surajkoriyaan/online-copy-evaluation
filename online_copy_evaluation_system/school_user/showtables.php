
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
<tr><th>S.N</th><th>Table Name</th></tr></thead>
<tfoot>
<tr><th>S.N</th><th>Table Name</th></tr></tfoot>
<?php 
  session_start();
  if(!$_SESSION['scode'])
	{
		header('location:user_login.php');
	}
 
  $scode=$_SESSION['scode'];
  
  error_reporting(0);
  $con=mysqli_connect("localhost","root","","online_copy_evaluation");
   $sql="show tables like '$scode%'";
$result=mysqli_query($con,$sql);
  $count=0;

while($row=mysqli_fetch_array($result))
{
	?>
  <tbody><tr><td> <?php echo $count=$count+'1' ?></td><td><?php echo $row[0]?></td></tr></tbody>
<?php
}

  ?>
  </table>
  



