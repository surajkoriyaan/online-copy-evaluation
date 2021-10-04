<?php 
session_start();
  if(isset($_POST["sub_mark"]))
  {
	 $con=mysqli_connect("localhost","root","","online_copy_evaluation");
	 $res_id=$_POST["res_id"];
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
	 $tab_result="result".$tabname;
	 $sql="select * from $tab_result where roll='$rollno' and std_id='$std_id'";
	 $result=mysqli_query($con,$sql);
	 $check=mysqli_num_rows($result);
		if($check==1)
		{
			echo "<script>alert('marks is already uploaded.....')</script>";
			
		}
	 else
	 {
		 if($tmarks=="")
		 {
			 echo "<script>alert('marks is not submitted.....')</script>";
		 }
		 else
		 {
		$sql1="insert into $tab_result(scode,center_code,roll,name,subject,class,date,marks,std_id,res_doc) values('$scode','$center_code','$rollno','$name1','$subject','$class','$date','$tmarks','$std_id',$res_id)";
			if(mysqli_query($con,$sql1)==TRUE)
			{
				echo "<script>alert('marks is submitted.....')</script>";
				
			}
			else
			{
				echo "<script>alert('error please try again!!!.....')</script>";
			}
		 }
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
        <h1 align="center">Mark is Uploaded</h1>
        <center><a href="../CoolAdmin-master/check_uploaded_copy.php"><button>Go Back</button></a></center>
        </div>
      </body>
</html>