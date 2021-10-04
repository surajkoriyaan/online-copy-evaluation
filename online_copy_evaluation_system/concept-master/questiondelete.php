<?php 
     $con=mysqli_connect("localhost","root","","online_copy_evaluation");
	 $sid=$_GET["sid"];
	 $sql="DELETE FROM question_paper WHERE sn='$sid'";
	 if(mysqli_query($con,$sql)==TRUE)
	 {
		 echo "<script>alert('delete........');</script>";
		 header('location:question_paper_upload.php');
	 }
	 else
	 {
		echo "<script>alert('error........');</script>"; 
	 }

?>