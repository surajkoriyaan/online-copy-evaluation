<?php
  session_start();
  error_reporting(0);
  include('db.php');
  if(!$_SESSION['scode'])
	{
		header('location:user_login.php');
	}
  $id=$_SESSION['id'];
  $scode=$_SESSION['scode'];

  //$con=mysqli_connect("localhost","root","","online_copy_evaluation");
  if(isset($_POST["copy_up"]))
  {
	  $_SESSION['tabname']=$_POST["tabname"];
	  $_SESSION['center_code']=$_POST["center_code"];
	  $_SESSION['rollno']=$_POST["rollno"];
	  $_SESSION['name']=$_POST["name"];
	  $_SESSION['subject']=$_POST["subject"];
	  $_SESSION['class']=$_POST["class"];
	  $_SESSION['date']=$_POST["date"];

	  //echo $_SESSION['tabname'];
	  //echo $_SESSION['rollno'];
  }


?>
<!DOCTYPE html>
<html>
 <head>
  <title>Ajax Image Insert Update Delete in Mysql Database using PHP</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 </head>
 <body>

     <div class="container">
     <div class="row">
     <div class="col-md-12" style="background-color:#CCC; height:90px">
       <h3 align="center">Scan Copy Upload</h3>
         <button class="btn  btn-success" style="float:right"><a href="check_uploaded_copy.php" style=" color:#FFF">BACK</a></button>
     </div>
     <div class="col-md-12" style="height:50px">

     <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="float:right; margin-top:6px">
  Add
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Copy</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method="post" action="copy_upload_home.php" enctype="multipart/form-data">
         <input type="text" value="<?php echo $_SESSION['tabname']?>" name="tabname" id="tabname"  hidden="">
         <input type="text" value="<?php echo $_SESSION['center_code']?>"  name="center_code" id="center_code" hidden="">
         <input type="text" value="<?php echo $_SESSION['rollno']?>"  name="rollno" id="rollno" hidden="">
         <input type="text" value="<?php echo $_SESSION['name']?>"  name="name" id="name" hidden="">
         <input type="text" value="<?php echo $_SESSION['subject']?>" name="subject" id="subject" hidden="" >
         <input type="text" value="<?php echo $_SESSION['class']?>" name="class" id="class" hidden="" >
         <input type="text" value="<?php echo $_SESSION['date']?>"  name="date" id="date" hidden="">
         <input type="file" name="file1" id="file1">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="subf" id="subf">Upload</button>
        </form>
      </div>
    </div>
  </div>
</div>
     </div>
     </div>
     <div class="row">
     <div class="col-md-12">
       <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Roll No</th>
      <th scope="col">Image</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

      <?php

	    $tab=$_SESSION['tabname'];
		$rollno=$_SESSION['rollno'];
      $sql1="select sn,roll,copy from $tab where roll='$rollno'";
	  $result1=mysqli_query($con,$sql1);


     while($row=mysqli_fetch_array($result1))
   {
	?>
    <tr><td> <?php echo $row['sn']?></td>
        <td><?php echo $row['roll']?></td>
        <td><img src="dataimgs/<?php echo "$tab/$rollno/".$row['copy'];?>" height="60" width="75" class="img-thumbnail"></td>
         <td>
          <form method="post" action="copy_update.php">
           <input type="text" value="<?php echo $row['sn']?>" hidden="" name="sn">
           <input type="text" value="<?php echo $row['roll']?>" hidden="" name="roll">
           <input type="text" value="<?php echo $tab?>" hidden="" name="tabname">
<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal22" name="update">
  update
</button>
</form>



</td>
         <td>
         <!-- Button trigger modal -->
<form method="post" action="copy_delete.php">
           <input type="text" value="<?php echo $row['sn']?>" hidden="" name="sn">
           <input type="text" value="<?php echo $row['roll']?>" hidden="" name="roll">
           <input type="text" value="<?php echo $tab?>" hidden="" name="tabname">
<button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal22" name="update">
  Delete
</button>
</form>
         </td></tr>



   <?php
  }

	  ?>

  </tbody>
</table></div></div>
     </div>
     <div class="row">
     <div class="col-md-12">

<!-- for update -->


     </div>
     </div>

     <!-- for delete -->
     <div class="row">
     <div class="col-md-12">


<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" value="<?php echo $row['sn']?>">Save changes</button>
      </div>
    </div>
  </div>
</div>
     </div>
     </div>
     </body>
  </html>
  <?php
  include("includes/footer.php");
  ?>
  <?php

  if(isset($_POST["subf"]))
  {
	  $tabname=$_POST["tabname"];
	  $center_code=$_POST["center_code"];
	  $rollno=$_POST["rollno"];
	  $name=$_POST["name"];
	  $subject=$_POST["subject"];
	  $class=$_POST["class"];
	  $date=$_POST["date"];
	  if(!is_dir("dataimgs/$tabname/$rollno"))
	  {
	  mkdir("dataimgs/$tabname/$rollno",0777,true);
	  }
	  else
	  {
		    $stud_id=$center_code.$rollno.$name.$subject.$class;
			 $stud_id_md=md5($stud_id);
		  $file=$_FILES["file1"]["name"];
	      $temfile=$_FILES["file1"]["tmp_name"];
	      move_uploaded_file($temfile,"dataimgs/$tab/$rollno/$file");
		  $squery="insert into $tabname(scode,center_code,roll,name,subject,class,date,copy,std_id) values('$scode','$center_code','$rollno','$name','$subject','$class','$date','$file','$stud_id_md')";
	  $query=mysqli_query($con,$squery);
			 if($query==TRUE)
			 {
				echo "<script>alert('data inserted succeessfully.....!!!!')</script>";

			 }
			 else
			 {
				 echo "<script>alert('Errror............!!!!')</script>";

			 }
  }}

  ?>
