<?php
include('db.php');

?>
  <div class="card-body">

    <div class="table-responsive" >
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
            <tr>
            <th> S.N</th>

            <th>Rating</th>
            <th>Date</th>
            <th>Comments</th>



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

//  $con=mysqli_connect("localhost","root","","online_copy_evaluation");


	  $scode=$_POST["scode"];

	  $date=$_POST["date"];
	  $subj=$_POST["subj"];
	  $message=$_POST["message"];

  //echo $scode.$subj.$class.$month.$year.$ccode;

	 if(!$date=="" && !$subj=="" && !$message=="")
  {
	  $run="insert into feedback(scode,rating,date,message) values('$scode','$subj','$date','$message')";
	  if(mysqli_query($con,$run)==TRUE)
	  {
		  echo "<script>alert('send message......');</script>";
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
      $sql1="select rating,date,message from feedback where scode='$scode' ORDER BY sn DESC";
	  $result1=mysqli_query($con,$sql1);


     while($row=mysqli_fetch_array($result1))
   {
	   $count=$c++;
	?>
    <tr><td> <?php echo $count?></td>
        <td><?php echo $row['rating']?></td>
        <td><?php echo $row['date'];?></td><td><?php echo $row['message']?></td>


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
