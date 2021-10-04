<?php 
session_start();
  if(isset($_POST["sub_mark"]))
  {
	 $con=mysqli_connect("localhost","root","","online_copy_evaluation");
	 $tabname=$_POST["tabname"];
	 $scode=$_POST["scode"];
	 $center_code=$_POST["center_code"];
	 $rollno=$_POST["rollno"];
	 $name1=$_POST["name1"];
	 $subject=$_POST["subject"];
	 $class=$_POST["class"];
	 $date=$_POST["date"];
	 $std_id=$_POST["std_id"];
	 $tmarks=$_POST['tmarks'];
	 //$tab_result="result".$tabname;
	 $sql="select * from $tabname where roll='$rollno' and std_id='$std_id'";
	 $result=mysqli_query($con,$sql);
	 $check=mysqli_num_rows($result);
		if($check==1)
		{
			if($tmarks=="")
		 {
			 echo "<script>alert('marks is not submitted.....')</script>";
			 $stats="marks is not submitted.....";
		 }
		 else
		 {
		$sql1="UPDATE $tabname 
SET 
    marks = '$tmarks'
WHERE
    std_id = '$std_id';";
			if(mysqli_query($con,$sql1)==TRUE)
			{
				echo "<script>alert('marks is updated.....')</script>";
				$stats="marks is updated.....";
				
			}
			else
			{
				echo "<script>alert('error please try again!!!.....')</script>";
				$stats="error please try again!!!.....";
			}
		 }
			
			
			
			
			
		}
	 else
	 {
		echo "<script>alert('something error!!!.....')</script>"; 
		$stats="something error!!!.....";
	 }
  }


?>
<html>
      <head>
      <style>
	     body
		 {
			 background-color:#CCC;
		 }
          #top
		  {
			  position:absolute;
			  height:50%;
			  width:60%;
			  left:20%;
			  right:20%;
			  top:25%;
			  bottom:25%;
			  background-color:#FF0;
		  }
		  button
		  {
			  height:30%;
			  width:40%;
			  font-size:22px;
			  cursor:pointer;
			  
		  }
		  button:hover
		  {
			  background-color:#F0F;
		  }
		  
      </style>
      </head>
      <body>
        <div id="top">
        <h1 align="center"><?php echo $stats;?></h1>
        <center><a href="../CoolAdmin-master/see_checked_copy_result.php"><button>Go Back</button></a></center>
        </div>
      </body>
</html>