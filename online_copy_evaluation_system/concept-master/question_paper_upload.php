<?php 
include('included/headerr.php');

?>
<div class="card">
  <div class="card-header">
    Upload Question Paper:-
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 Upload
</button>
  </div>
  <div class="card-body">
    
    
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Sn</th>
      <th scope="col">Class</th>
      <th scope="col">Paper id</th>
      <th scope="col">Subject</th>
      <th scope="col">Date/Time</th>
      <th scope="col">View</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <tbody>
    <?php 
  
  
  
  
  error_reporting(0);
  $con=mysqli_connect("localhost","root","","online_copy_evaluation");
   $sql="select sn,class,paper_id,subject,date,file from question_paper";
$result=mysqli_query($con,$sql);
  $count=0;

while($row=mysqli_fetch_array($result))
{
	?>
  <tr><td> <?php echo $count=$count+'1' ?></td>
  
  <td><?php echo $row['class']?></td><td><?php echo $row['paper_id']?></td>
  <td><?php echo $row['subject']?></td><td><?php echo $row['date']?></td>
  
  <td><button type="button" class="btn btn-success" ><a href="dataimgs/pdf.php?sid=<?php echo $row['sn'];?>" target="new" style="color:#FFF">view</a></button></td>
  
  
  <td><button type="button" class="btn btn-danger" ><a href="questiondelete.php?sid=<?php echo $row['sn'];?>" target="new" style="color:#FFF">delete</a></button></td>
        
  </tr>
<?php
}

?>
  </tbody>
</table>
    
    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload question paper
        <br>Note:-Paper should be less or equal to 2mb.
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="question_paper_upload.php" enctype="multipart/form-data">
  <div class="form-group">
    <label>Question Paper Number</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="f1" aria-describedby="emailHelp" required>
    
  </div>
  <div class="form-group">
    <label for="exampleInputsubject">Class</label>
    <select class="form-control" name="f2">
    <option>enter class</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option>10</option>
      <option>11</option>
      <option>12</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputsubject">Subject</label>
    <select class="form-control" name="f3">
    <option>enter subject</option>
      <option>Hindi</option>
      <option>English</option>
      <option>Mathematics</option>
      <option>History</option>
      <option>Sanskrit</option>
      <option>Civics</option>
      <option>Physics</option>
      <option>Chemistry</option>
      <option>Science</option>
      <option>Biology</option>
      <option>Social Science</option>
      <option>economics</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Date/Time</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="f4" maxlength="10" readonly value="<?php 
	
	date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'd-m-Y h:i:s A', time () );
echo $currentTime;
	//echo date('m/d/Y h:i:s a', time());
	//$t=time();
	//echo date("d/m/y").",".$t.",";
	//echo(date("Y-m-d",$t));?>">
  </div>
  
  
  <div class="form-group">
    <label for="exampleFormControlFile1">Upload Question</label>
    <input type="file" class="form-control-file" name="f5" id="exampleFormControlFile1" required>
  </div>

  
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1" >Check me out</label>
  </div>
  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="f6">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>

<?php 
include('included/footerr.php');
include('included/scriptt.php');
?>
<?php 

  // $con=mysqli_connect("localhost","root","","online_copy_evaluation");
   if(isset($_POST["f6"]))
   {
	   $paper_num=$_POST["f1"];
	   $class1=$_POST["f2"];
	   $subjectt=$_POST["f3"];
	   $datee=$_POST["f4"];
	   //$sub=$_POST["f4"];
	   /*$f=$_FILES["copy"]["name"];
	   $temfile=$_FILES["copy"]["temp_name"];
	   move_uploaded_file($temfile,"dataimg/$f");*/
	   
	   $ff=$_FILES["f5"]["name"];
	  $tn=$_FILES["f5"]["tmp_name"];
	  move_uploaded_file($tn,"dataimgs/$ff");
	   $sql="insert into question_paper(class,paper_id,subject,date,file) values($class1,'$paper_num','$subjectt','$datee','$ff')";
	   if(mysqli_query($con,$sql))
	   {
		   echo "<script>alert('paper uploaded successfully....');</script>";
	   }
	   else
	   {
		   echo "<script>alert('error......!!!!!!!!');</script>"; 
	   }
   }
   ?>