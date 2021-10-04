<?php 
     $con=mysqli_connect("localhost","root","","online_copy_evaluation");
	 $sid=$_GET["sid"];
	 $sql="select * from  question_paper where sn='$sid'";
	 $run=mysqli_query($con,$sql);
	 while($data=mysqli_fetch_assoc($run))
	 {
	 $nam=$data["file"];
     $file=$nam;
	 $filename=$nam;
	 header('Content-type: application/pdf');
	 header('Content-Disposition: inline; filename="'.$filename.'"');
	 header('Content-Transfer-Encoding:binary');
	 header('Accept-Ranges:bytes');
     @readfile($file);
	 }
	 
?> 




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>
</body>
</html>