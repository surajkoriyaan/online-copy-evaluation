<div class="table-responsive" > 
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
            <tr>
            <th> S.N</th>
            <th>TEACHER ID</th>
            <th>SUBJECT</th>
            <th>DATE/TIME</th>
            <th>NOTICE</th>
           
            
            
          </tr>
  </thead>
   <tbody>

<?php 
  
  error_reporting(0);
  
  $con=mysqli_connect("localhost","root","","online_copy_evaluation");
  
      $sscode=$_POST["sscode"];
	  $sql1="select*from $sscode";
	  $result1=mysqli_query($con,$sql1);
  

     while($row=mysqli_fetch_array($result1))
   {
	?>
    <tr><td> <?php echo $row['sn']?></td>
        <td><?php echo $row['tech_id']?></td>
        <td><?php echo $row['subject']?></td>
        <td><?php echo $row['date']?></td>
        
         <td><?php echo $row['notice']?></td>
         
    
    </tr>
   <?php
  }

 		
  
  ?>
  
 
  </tbody>
  </table>
  </div>
  
  