<div class="card-body" id="abc">
                                   
										<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">Center Code</th>
      <th scope="col">School Code</th>
      <th scope="col">Class</th>
      
      <th scope="col">Student Id</th>
      <th scope="col">Approvals</th>
      <th scope="col">checked</th>
      
      
    </tr>
  </thead>
  <tbody>
    <?php 
  
	  error_reporting(0);
	  $sub=$_POST["subjected"];
	 $con=mysqli_connect("localhost","root","","online_copy_evaluation");
      //$tab=$scode.$subj.$clas.$month.$year.$ccode;
      $sql1="select sn,center_code,scode,class,std_id,approval,tech_conf from re_check_copy where subject='$sub' order by sn desc";
	  $result1=mysqli_query($con,$sql1);
  
    $c=1;
     while($row=mysqli_fetch_array($result1))
   {
	?>
    <tr><td> <?php echo $count+=$c;?></td>
    <td><?php echo $ac=$row['center_code']?></td>
    
        <td><?php echo $row['scode']?></td>
        <td><?php echo $row['class']?></td>
         <td><?php echo $row['std_id']?></td>
         <td><?php echo $row['approval']?></td>
         <td><?php echo $row['tech_conf']?></td>
             
                                        
         
         
    
    </tr>
   <?php
  }

   ?>
        
    
  </tbody>
</table>

									</div>
								