<?php
  session_start();
  include('db.php');
  if(!$_SESSION['scode'])
	{
		header('location:user_login.php');
	}
  //$id=$_SESSION['id'];
  $scode=$_SESSION['scode'];
  $tab=$_SESSION['tabname'];
  $centerd=$_SESSION['center_code'];
  $rollno=$_SESSION['rollno'];
  $name=$_SESSION['name'];
  $subj=$_SESSION['subject'];
  $clas=$_SESSION['class'];
  $dat=$_SESSION['date'];

//action.php
if(isset($_POST["action"]))
{
// $connect = mysqli_connect("localhost", "root", "", "online_copy_evaluation");
 if($_POST["action"] == "fetch")
 {
  $query = "SELECT * FROM $tab where roll='$rollno' ORDER BY sn DESC";
  $result = mysqli_query($connect, $query);
  $output = '
   <table class="table table-bordered table-striped">
    <tr>
     <th width="10%">ID</th>

	 <th width="70%">Roll No</th>
	 <th width="70%">Image</th>
     <th width="10%">Change</th>
     <th width="10%">Remove</th>
    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '

    <tr>
     <td>'.$row["sn"].'</td>
	 <td>'.$row["roll"].'</td>

     <td>
      <img src="data:image/jpeg;base64,'.base64_encode($row['copy'] ).'" height="60" width="75" class="img-thumbnail" />
     </td>
     <td><button type="button" name="update" class="btn btn-warning bt-xs update" id="'.$row["sn"].'">Change</button></td>
     <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="'.$row["sn"].'">Remove</button></td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }

 if($_POST["action"] == "insert")
 {


  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $query = "INSERT INTO $tab(scode,center_code,roll,name,subject,class,date,copy) VALUES ('$scode','$centerd','$rollno','$name','$subj','$clas','$dat','$file')";
  if(mysqli_query($connect, $query))
  {

	/*$add='dataimgs/';
   $fulladd=$add."$tab/".$rollno;
   $rol='rollno'.$rollno;
   if(!is_dir("$fulladd"))
   {

   }
   else
   {*/
   $ff=$_FILES["image"]["name"];
	  $tn=$_FILES["image"]["tmp_name"];
	  move_uploaded_file($tn,'dataimgs');

      echo 'Image Inserted into Database';


  }
 }
 if($_POST["action"] == "update")
 {

  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $query = "UPDATE $tab SET copy = '$file' WHERE sn = '".$_POST["image_id"]."'";
  if(mysqli_query($connect, $query))
  {
	   $ff=$_FILES["image"]["name"];
	  $tn=$_FILES["image"]["tmp_name"];
	  move_uploaded_file($tn,"dataimgs");
   echo 'Image Updated into Database';
  }
 }
 if($_POST["action"] == "delete")
 {
  $query = "DELETE FROM $tab WHERE sn = '".$_POST["image_id"]."'";
  if(mysqli_query($connect, $query))
  {
   echo 'Image Deleted from Database';
  }
 }
}
?>
