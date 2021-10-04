<?php
include('db.php');

?>
  <div class="card-body">

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
   <tbody>

<?php
  session_start();
  error_reporting(0);
  if(!$_SESSION['scode'])
	{
		header('location:user_login.php');
	}
  $id=$_SESSION['id'];
  $scode=$_SESSION['scode'];

  //$con=mysqli_connect("localhost","root","","online_copy_evaluation");

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
  }

   if($result= mysqli_query($con,("show tables like '".$tab."'")))
	 {
		 if($result->num_rows==1)
		 {



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
         <td>
         <form action="copy_upload_home.php" method="post">
         <input type="hidden" value="<?php echo $tab ?>" name="tabname">
         <input type="hidden" value="<?php echo $row['center_code'];?>" name="center_code">
         <input type="hidden" value="<?php echo $row['roll']; ?>" name="rollno">
         <input type="hidden" value="<?php echo $row['name'];?>" name="name">
         <input type="hidden" value="<?php echo $row['subject']; ?>" name="subject">
         <input type="hidden" value="<?php echo $row['class'];?>" name="class">
         <input type="hidden" value="<?php echo $row['date'];?>" name="date">
         <input type="submit" class="btn btn-success" name="copy_up" value="Upload">

         </form>

         </td>
         <td>
         <form action="delete_student_record.php" method="post">
         <input type="hidden" value="<?php echo $tab ?>" name="tabname">
         <input type="hidden" value="<?php echo $row['sn'];?>" name="center_sn">
         <input type="hidden" value="<?php echo $row['roll'];?>" name="center_roll">

        <input type="submit" class="btn btn-danger" name="copy_del" value="Delete">

         </form>

         <!-- Button trigger modal
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
  Delete
</button>-->

<!-- Modal
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Do you want to delete the records?</h4>



      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>
         -->






         </td>

    </tr>
   <?php
  }


		 }

	 else
	 {


        echo "<script>alert('please create table related subject.....!!!!')</script>";
	 }
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
