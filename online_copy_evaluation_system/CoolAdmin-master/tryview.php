<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$con=mysqli_connect("localhost","root","","time_out");
		 $sh="select * from file_upload";
	      $run=mysqli_query($con,$sh);
		while($row = mysqli_fetch_array($run))
{ 
    
echo '<div id="imagelist">';
echo '<img height="650px" width="750px" src="'.$row['copy'].'">';
//echo '<p id="caption">'.$row['ROLL'];
//echo '<p id="caption">'.$row['SCH_ID'];
	
echo '</div>';
}

?>
</body>
</html>