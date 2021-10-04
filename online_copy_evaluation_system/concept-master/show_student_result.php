
  

    <div class="table-responsive" > 
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
            <tr>
            <th> S.N</th>
            <th>School code</th>
            <th>Center Code</th>
            <th>Subject</th>
            <th>Class</th>
            <th>Marks</th>
            <th>Student Id</th>
            
            
          </tr>
  </thead>
   <tbody>

<?php 
  
  error_reporting(0);
  
  $con=mysqli_connect("localhost","root","","online_copy_evaluation");
  
      $sscode=$_POST["sscode"];
	  $cccode=$_POST["cccode"];
	  $classs=$_POST["classs"];
	 $subject=$_POST["subjected"];
	  $monthh=$_POST["monthh"];
	  $yearr=$_POST["yearr"];
	  //echo $scode.$subj.$class.$month.$year.$ccode;
	  
	 if($sscode=="" || $cccode=="" || $classs=="" || $subjected="" || $monthh=="" || $yearr=="")
  {
	  //echo $tab=$sscode.$subjected.$classs.$monthh.$yearr.$cccode;
	 echo "<script>alert('please insert all field.....!!!!')</script>"; 
  }
  else
  {
 $tab="result".$sscode.$subject.$classs.$monthh.$yearr.$cccode;
  }
 
   if($result= mysqli_query($con,("show tables like '".$tab."'")))
	 {
		 if($result->num_rows==1)
		 {
			 
			 error_reporting(0);
	 
      $tab="result".$sscode.$subject.$classs.$monthh.$yearr.$cccode;
      $sql1="select*from $tab";
	  $result1=mysqli_query($con,$sql1);
  

     while($row=mysqli_fetch_array($result1))
   {
	?>
    <tr><td> <?php echo $row['sn']?></td>
        <td><?php echo $row['scode']?></td>
        <td><?php echo $row['center_code']?></td>
        <td hidden=""><?php echo $row['roll']?></td>
        <td hidden=""><?php echo $row['name']?></td>
        <td><?php echo $row['subject']?></td>
        <td><?php echo $row['class']?></td>
         <td><?php echo $row['marks']?></td>
         <td><?php echo $row['std_id']?></td>
         
    
    </tr>
   <?php
  }

 		 
		 }
	 
	 else
	 {
		
		 
        echo "<script>alert('Related subject Data are Not Found.....!!!!')</script>";
	 }
	 }
  
  ?>
  
 
  </tbody>
  </table>
  </div>
  
  