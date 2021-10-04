<?php
  session_start();
  if(!$_SESSION['scode'])
	{
		header('location:user_login.php');
	}
  $id=$_SESSION['id'];
  $scode=$_SESSION['scode'];
  include('db.php');
  //$con=mysqli_connect("localhost","root","","online_copy_evaluation");

	  $tab=$_SESSION['tabname'];
	  $_SESSION['center_code'];
	  $rollno=$_SESSION['rollno'];
	  $_SESSION['name'];
	  $_SESSION['subject'];
	  $_SESSION['class'];
	  $_SESSION['date'];

	 // echo $tab;
	  //echo $_SESSION['rollno'];
    error_reporting(0);
	  if(isset($_POST["update"]))
	  {
		  $snn=$_POST["sn"];
		  $roll=$_POST["roll"];

	  }


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style>
body
{
	background-color:#999;
}
    #top
	{
		position:absolute;
		height:50%;
		width:40%;
		left:30%;
		right:30%;
		top:20%;

		background-color:#FF0;
	}
</style>
</head>

<body>
      <div id="top">
      <h2 align="center" style="margin-top:80px; text-decoration:underline">Update Copy</h2>
      <form method="post" action="copy_update.php" enctype="multipart/form-data">
      <table align="center">
      <tr>
      <td><span>image id:-<?php echo $snn ?></span></td>
      <td>
      <input type="text" value="<?php echo $snn ?>"   name="id_sn" id="id_sn" hidden=""/>
      <input type="file" name="image" id="image"  required="required"/>
      </td></tr>
      <tr><td colspan="2">
      <center><input type="submit" name="submit"  class="btn btn-success"/></center>
      </td></tr></table>
      </form>
      </div>

</body>
</html>
<?php
if(isset($_POST["submit"]))
{
if(!is_dir("dataimgs/$tab/$rollno"))
	  {
	  mkdir("dataimgs/$tab/$rollno",0777,true);
	  }
	  else
	  {
		  $sn=$_POST["id_sn"];
		  $file=$_FILES["image"]["name"];
	      $temfile=$_FILES["image"]["tmp_name"];
	      move_uploaded_file($temfile,"dataimgs/$tab/$rollno/$file");
$up="UPDATE $tab
SET copy = '$file'
WHERE sn = $sn";
  $query=mysqli_query($con,$up);
			 if($query==TRUE)
			 {
				echo "<script>alert('image are inserted succeessfully.....!!!!')</script>";
				header('location:copy_upload_home.php');

			 }
			 else
			 {
				 echo "<script>alert('Errror............!!!!')</script>";
				 //header('location:copy_upload_home.php');

			 }
	  }
}
?>
