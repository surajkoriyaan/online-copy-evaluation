<?php
include('db.php');
  $ad='dsf232c32342f';
 // echo md5(uniqid($ad, true));
  // echo base64_encode($ad);
   //echo tinymd5($ad,18);
   $add='dataimgs/';
   $fname='222suraj3march20202326';
   $roll='022';
   $fulladd=$add."$fname/".$roll;
   echo $fulladd;
   if(!is_dir($fulladd))
   {

   mkdir("dataimgs/$fname/$roll",0777,true);
   }
   else
   {
	   echo "file is already created.....";
   }

?>



 <!--<div class="card-body">

    <div class="table-responsive" >
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
            <tr>
            <th> S.N</th>
            <th>Center code</th>
            <th>roll no</th>
            <th>name</th>
            <th>Subject</th>
            <th>class</th>
            <th>date</th>
            <th>Copy</th>
            <th>DELETE </th>
          </tr>
  </thead>
<?php ?>
 /* session_start();
  if(!$_SESSION['scode'])
	{
		header('location:user_login.php');
	}
  $id=$_SESSION['id'];
  $scode=$_SESSION['scode'];

  $con=mysqli_connect("localhost","root","","online_copy_evaluation");

	  $ccode=$_POST["ccode"];
	  $rollno=$_POST["rollno"];
	  $usename=$_POST["username"];
	  $clas=$_POST["clas"];
	  $subj=$_POST["subj"];
	  $day=$_POST["day"];
	  $month=$_POST["month"];
	  $year=$_POST["year"];
	  //echo $scode.$subj.$class.$month.$year.$ccode;


  ?>



  <tbody>
<?php

	  error_reporting(0);

      $tab=$scode.$subj.$clas.$month.$year.$ccode;
      $sql1="select sn,center_code,roll,name,subject,class,date from $tab";
	  $result1=mysqli_query($con,$sql1);


     while($row=mysqli_fetch_array($result1))
   {
	?>
    <tr><td> <?php echo $row['sn']?></td><td><?php echo $row['center_code']?></td>
        <td><?php echo $row['roll']?></td><td><?php echo $row['name']?></td>
        <td><?php echo $row['subject']?></td><td><?php echo $row['class']?></td>
         <td><?php echo $row['date']?></td>
         <td> utyut</td>
         <td> yttyrytry</td>

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
