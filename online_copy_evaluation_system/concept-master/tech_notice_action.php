
  

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
  
      $sscode=$_POST["schcode"];
	  $subj=$_POST["subj"];
	  $cccode=$_POST["schdate"];
	  $classs=$_POST["schmessage"];
	
	  //echo $scode.$subj.$class.$month.$year.$ccode;
	  
	 if($sscode=="" || $subj=="" || $cccode=="" || $classs=="")
  {
	  //echo $tab=$sscode.$subjected.$classs.$monthh.$yearr.$cccode;
	 echo "<script>alert('please insert all field.....!!!!')</script>"; 
  }
  else
  {
    $run="insert into admin_tech_notice(tech_id,subject,date,notice) values('$sscode','$subj','$cccode','$classs')";
	if(mysqli_query($con,$run)==TRUE)
	{
		echo "<script>alert('notice send.....!!!!')</script>"; 
	}
	else
	{
		echo "<script>alert('notice not send.....!!!!')</script>";
	}
  }
 
   
      $sql1="select*from admin_tech_notice";
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
  
  