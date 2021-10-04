
  

    <div class="table-responsive" > 
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
            <tr>
            <th>Announcement Id</th>
            
            <th>Date/time</th>
            <th>Announcement</th>
           
            
            
          </tr>
  </thead>
   <tbody>

<?php 
  
  error_reporting(0);
  
  $con=mysqli_connect("localhost","root","","online_copy_evaluation");
  
      //$sscode=$_POST["schcode"];
	  $cccode=$_POST["schdate"];
	  $classs=$_POST["schmessage"];
	
	  //echo $scode.$subj.$class.$month.$year.$ccode;
	  
	 if($cccode=="" || $classs=="")
  {
	  //echo $tab=$sscode.$subjected.$classs.$monthh.$yearr.$cccode;
	 echo "<script>alert('please insert all field.....!!!!')</script>"; 
  }
  else
  {
    $run="insert into announce_teach(sender,date,announce) values('admin','$cccode','$classs')";
	if(mysqli_query($con,$run)==TRUE)
	{
		echo "<script>alert('announcement send.....!!!!')</script>"; 
	}
	else
	{
		echo "<script>alert('announcement not send.....!!!!')</script>";
	}
  }
 
   
      $sql1="select*from announce_teach order by announce_id desc";
	  $result1=mysqli_query($con,$sql1);
  

     while($row=mysqli_fetch_array($result1))
   {
	?>
    <tr><td> <?php echo $row['announce_id']?></td>
        <td><?php echo $row['date']?></td>
         <td><?php echo $row['announce']?></td>
         
    
    </tr>
   <?php
  }

 		
  
  ?>
  
 
  </tbody>
  </table>
  </div>
  
  