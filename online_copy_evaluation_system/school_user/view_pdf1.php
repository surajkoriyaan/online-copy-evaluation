<?php 
     session_start();
  if(!$_SESSION['scode'])
	{
		header('location:user_login.php');
	}
  $id=$_SESSION['id'];
  $scode=$_SESSION['scode'];
  
  
   if(isset($_POST["copy_up"]))
   {
	 $_SESSION['tabres']=$_POST["tabname"];
	
	 $_SESSION['res_doc']=$_POST["res_doc"];
	 $doc=$_SESSION['res_doc'].".pdf";
    $path="result_details/".$_SESSION['tabres']."/".$doc;


     $file=$path;
	 $filename=$path;
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