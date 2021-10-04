<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">TABLE NAME</th>
      
    </tr>
  </thead>
  <tbody>
    <?php 
  
  
  
  
  error_reporting(0);
  
  
  
  
  $con=mysqli_connect("localhost","root","","online_copy_evaluation");
  //$sr="";
  $tab=$_POST["sscode"];
  if(!$tab=="")
  {
	  $res="result".$tab;
   $sql="show tables like '$res%'";
$result=mysqli_query($con,$sql);
  $count=0;

while($row=mysqli_fetch_array($result))
{
	?>
  <tr><td> <?php echo $count=$count+'1' ?></td><td><?php echo $row[0]?></td></tr>
<?php
}
  }
  else
  {
	  echo "<script>alert('please enter sch code.....');</script>";
  }
?>
  </tbody>
</table>