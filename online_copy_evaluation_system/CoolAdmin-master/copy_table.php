
  <div class="card-body">

    <div class="table-responsive" > 
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
            <tr>
            <th> S.N</th>
            <th>Center Code</th>
            <th>School code</th>
            <th>Subject</th>
            <th>Class</th>
            <th>Student Id</th>
            <th>Copy</th>
            
          </tr>
  </thead>
   <tbody>

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
	  $cccode=$_POST["cccode"];
	  $classs=$_POST["classs"];
	  $subjected=$_POST["subjected"];
	  $monthh=$_POST["monthh"];
	  $yearr=$_POST["yearr"];
	  //echo $scode.$subj.$class.$month.$year.$ccode;
	  
	 if($sscode=="" || $cccode=="" || $classs=="" || $monthh=="" || $yearr=="")
  {
	 echo "<script>alert('please insert all field.....!!!!')</script>"; 
  }
  else
  {
  $tab=$sscode.$subjected.$classs.$monthh.$yearr.$cccode;
  }
 
   if($result= mysqli_query($con,("show tables like '".$tab."'")))
	 {
		 if($result->num_rows==1)
		 {
			 
			 error_reporting(0);
	 
      $tab=$sscode.$subjected.$classs.$monthh.$yearr.$cccode;
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
         <td hidden=""><?php echo $row['date']?></td>
         <td><?php echo $row['std_id']?></td>
         <td hidden=""><?php echo $row['res_doc']?></td>
         <td> 
         <form action="../school_user/view_copy.php" method="post">
         <input type="hidden" value="<?php echo $tab ?>" name="tabname">
         <input type="hidden" value="<?php echo $row['sn'];?>" name="sn">
         <input type="hidden" value="<?php echo $row['scode'];?>" name="scode">
         <input type="hidden" value="<?php echo $row['center_code'];?>" name="center_code">
         <input type="hidden" value="<?php echo $row['roll']; ?>" name="rollno">
         <input type="hidden" value="<?php echo $row['name'];?>" name="name1">
         <input type="hidden" value="<?php echo $row['subject']; ?>" name="subject">
         <input type="hidden" value="<?php echo $row['class'];?>" name="class">
         <input type="hidden" value="<?php echo $row['date'];?>" name="date">
         <input type="hidden" value="<?php echo $row['std_id'];?>" name="std_id">
         
         <input type="submit" class="btn btn-success" name="copyview" value="Upload">
         
         </form>
         
         </td>
         
    
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
  </div></div>
  
  