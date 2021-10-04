<?php
error_reporting(0);
include('db.php');
if(isset($_POST["copy_del"]))
{
	//$con=mysqli_connect("localhost","root","","online_copy_evaluation");
	$tab=$_POST["tabname"];
	$csn=$_POST["center_sn"];
	$croll=$_POST["center_roll"];
}
	?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <style>
     #top
	 {
		 position:absolute;
		 height:40%;
		 width:60%;
		 top:10%;
		 left:20%;
		 right:20%;
		 background-color:#FF0;
	 }
  </style>
</head>
<body>
  <div id="top">
  <h4 style="text-align:center; font-size:24px; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; margin-top:2%">Do you want to delete the record of roll no:-<?php echo $croll;?>?</h4>
  <p style="text-align:center">Note:-it delete's all record of this student.</p>
  <form method="post" action="delete_student_record.php">
    <input type="text" value="<?php echo $tab;?>" name="tabn" hidden="" />
    <input type="text" value="<?php echo $csn;?>" name="sn"  hidden=""/>
    <input type="text" value="<?php echo $croll;?>" name="rollno" hidden="" />
    <center><input type="submit" value="Delete" class="btn btn-danger"  name="dell"/></center>
  </form>
</div>
</body>





</html>



<?php
if(isset($_POST["dell"]))
{
	//$con=mysqli_connect("localhost","root","","online_copy_evaluation");
$tabn=$_POST["tabn"];
$sin=$_POST["sn"];
$roll_no=$_POST["rollno"];

$up="DELETE FROM $tabn
WHERE roll= $roll_no";
  $query=mysqli_query($con,$up);
			 if($query==TRUE)
			 {
				echo "<script>alert('data are Deleted successfully.....!!!!')</script>";
				header('location:check_uploaded_copy.php');

			 }
			 else
			 {
				 echo "<script>alert('Errror............!!!!')</script>";
				 //header('location:copy_upload_home.php');

			 }

}
?>
