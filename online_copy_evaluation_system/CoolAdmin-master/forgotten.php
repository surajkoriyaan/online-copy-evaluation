<?php 
   $con=mysqli_connect('localhost','root','','online_copy_evaluation');
   if(isset($_POST["submit"]))
{
	$email=$_POST["email"];
	$sql2="insert into tech_pass_forgotten(email) values('$email')";
		if(mysqli_query($con,$sql2)==true)
		{
			echo "<script>alert('check your email.');</script>";
			echo'<a href="forget-pass.html">go back</a>';
		}
		
		//header('location:forget-pass.html');
}
?>