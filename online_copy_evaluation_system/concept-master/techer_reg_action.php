<?php 
 if(isset($_POST["f7"]))
 {
	 $con=mysqli_connect("localhost","root","","online_copy_evaluation");
	 $name=$_POST["f1"];
	 $subject=$_POST["f2"];
	 $mobile=$_POST["f3"];
	 $email=$_POST["f4"];
	 $pass=$_POST["f5"];
	 $idd=md5("f4");
	// $image=$_FILE["f6"];
	$file=$_FILES["f6"]["name"];
	$temfile=$_FILES["f6"]["tmp_name"];
	move_uploaded_file($temfile,"tech_image/$file");
	
	$squery="insert into teachers_reg(id_num,subject,name,mobile,email,password,images) values('$idd','$subject','$name','$mobile','$email','$pass','$file')";
	  $query=mysqli_query($con,$squery);
			 if($query==TRUE)
			 {
				echo "<script>alert('data inserted succeessfully.....!!!!')</script>";
				header('location:techer_reg.php'); 
			 }
			 else
			 {
				 echo "<script>alert('Errror............!!!!')</script>";
				 header('location:techer_reg.php'); 
				 
			 }  
 }

?>