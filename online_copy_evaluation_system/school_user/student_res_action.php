
  <div class="card-body">

    <div class="table-responsive" > 
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
            <tr>
            <th> S.N</th>
            <th>School Code</th>
            <th>roll no</th>
            <th>name</th>
            
            <th>Subject</th>
            <th>Class</th>
            <th>Student Marks</th>
            <th>Copy</th>
            
          </tr>
  </thead>
<?php 
  session_start();
  error_reporting(0);
  if(!$_SESSION['scode'])
	{
		header('location:user_login.php');
	}
  $id=$_SESSION['id'];
  $scode=$_SESSION['scode'];
  
  $con=mysqli_connect("localhost","root","","online_copy_evaluation");
  
	  $ccode=$_POST["ccode"];
	  $clas=$_POST["clas"];
	  $subj=$_POST["subj"];
	  $month=$_POST["month"];
	  $year=$_POST["year"];
	  //echo $scode.$subj.$class.$month.$year.$ccode;
	  
	 if($ccode=="" || $clas=="" || $subj=="" || $month=="" || $year=="")
  {
	 echo "<script>alert('please insert all field.....!!!!')</script>"; 
  }
  else
  {
  $tab=$scode.$subj.$clas.$month.$year.$ccode;
   $tab_result="result".$scode.$subj.$clas.$month.$year.$ccode;
  }
 
   if($result= mysqli_query($con,("show tables like '".$tab_result."'")))
	 {
		 if($result->num_rows==1)
		 {
			 ?>
             <tbody>
<?php 
  
	  
	 
      $tab=$scode.$subj.$clas.$month.$year.$ccode;
      $sql1="select sn,center_code,roll,name,subject,class,marks,res_doc from $tab_result";
	  $result1=mysqli_query($con,$sql1);
  

     while($row=mysqli_fetch_array($result1))
   {
	?>
    <tr><td> <?php echo $row['sn']?></td><td><?php echo $row['center_code']?></td>
        <td><?php echo $row['roll']?></td><td><?php echo $row['name']?></td>
        <td><?php echo $row['subject']?></td><td><?php echo $row['class']?></td>
         <td><?php echo $row['marks']?></td>
         <td hidden=""><?php echo $row['res_doc']?></td>
         <td> 
         <form action="view_pdf1.php" method="post">
         <input type="hidden" value="<?php echo $tab ?>" name="tabname">
         
         <input type="hidden" value="<?php echo $row['res_doc']; ?>" name="res_doc">
         
         <input type="submit" class="btn btn-success" name="copy_up" value="View">
         
         </form>
         
         </td>
         
    
    </tr>
   <?php
  }

   ?>
  
  </tbody>
             
             
             
             <?php
		 }
		 else
  {
	  echo "<script>alert('related table is not found.....!!!!')</script>";
  }
	 }
  
  ?>
  
  
  
  
  </table>
  </div></div>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
  