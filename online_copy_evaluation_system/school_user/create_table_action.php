<?php
  session_start();
  if(!$_SESSION['scode'])
	{
		header('location:user_login.php');
	}

  $scode=$_SESSION['scode'];
  include('db.php');

//  $con=mysqli_connect("localhost","root","","online_copy_evaluation");
  $clas=$_POST["clas"];
  $subj=$_POST["subj"];
  $month=$_POST["month"];
  $year=$_POST["year"];
  $centercode=$_POST["centercode"];

  if($scode=="" || $subj=="" || $clas=="" || $month=="" || $year=="" || $centercode=="")
  {
	 echo "<script>alert('please insert all field.....!!!!')</script>";
  }
  else
  {
  $tab=$scode.$subj.$clas.$month.$year.$centercode;
  }
  //echo $tab."<br>";
  if($result= mysqli_query($con,("show tables like '".$tab."'")))
	 {
		 if($result->num_rows==1)
		 {
			 echo "<script>alert('table alreay exist......!!!!')</script>";
		 }

	 else
	 {
		 //$add='dataimgs/';
		 //$fulladd=$add.$tab;
		 mkdir("dataimgs/$tab",0777,true);
		 $sql="create table $tab(sn int NOT NULL AUTO_INCREMENT,scode varchar(255),center_code varchar(255),roll varchar(255),name varchar(255),subject varchar(255),class varchar(255),date varchar(255),copy longblob,std_id varchar(255),PRIMARY KEY(sn))";
if(mysqli_query($con,$sql))
{
  echo "<script>alert('your table created succesfully......!!!!')</script>";
}
else
{
  echo "<script>alert('something error.....!!!!')</script>";
}
	 }
	 }
?>
