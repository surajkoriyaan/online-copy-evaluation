
  <div class="card-body">

    <div class="table-responsive" > 
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
            <tr>
            <th> S.N</th>
            <th>Send To</th>
            <th>Date</th>
            <th>Message</th>
            
            
            
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
  
  
	  $scode=$_POST["scode"];
	  $date=$_POST["date"];
	  $message=$_POST["message"];
	  
  //echo $scode.$subj.$class.$month.$year.$ccode;
	  
	 if(!$date=="" && !$message=="")
  {
	  $run="insert into school_notice(scode,date,notice) values('$scode','$date','$message')";
	  if(mysqli_query($con,$run)==TRUE)
	  {
		  echo "<script>alert('send notice......');</script>";
	  }
	  else
	  {
		    echo "<script>alert('error!!!......');</script>";
	  }
  }
  else
  {
	  echo "<script>alert('please insert all field.....!!!!')</script>"; 
  }
 
   
			 ?>
             <tbody>
<?php 
  
	  
	 
      $c=1;
      $sql1="select sn,date,notice from school_notice where scode='$scode' ORDER BY sn DESC";
	  $result1=mysqli_query($con,$sql1);
  

     while($row=mysqli_fetch_array($result1))
   {
	   $count=$c++;
	?>
    <tr><td> <?php echo $count?></td>
        <td><?php echo "admin";?></td><td><?php echo $row['date']?></td>
        <td><?php echo $row['notice']?></td>
         
    
    </tr>
   <?php
  }

   ?>
  
  </tbody>
             
             
         
  
  
  
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
  