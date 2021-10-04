<?php 
include('included/headerr.php');

?>
<div class="card">
  <div class="card-header">
    Create Teacher Id:-
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Registration
</button>
  </div>
  <div class="card-body">
    
    
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">SUBJECT</th>
      <th scope="col">MOBILE NUMBER</th>
      <th scope="col">EMAIL</th>
      <th scope="col">IMAGE</th>
    </tr>
  </thead>
  <tbody>
    <?php 
  
  
  
  
  error_reporting(0);
  $con=mysqli_connect("localhost","root","","online_copy_evaluation");
   $sql="select sn,id_num,subject,name,mobile,email,images from teachers_reg";
$result=mysqli_query($con,$sql);
  $count=0;

while($row=mysqli_fetch_array($result))
{
	?>
  <tr><td> <?php echo $count=$count+'1' ?></td>
  
  <td><?php echo $row['id_num']?></td><td><?php echo $row['name']?></td>
  <td><?php echo $row['subject']?></td><td><?php echo $row['mobile']?></td>
  <td><?php echo $row['email']?></td>
  <td><img src="<?php echo "tech_image/".$row['images'];?>" height="60" width="75" class="img-thumbnail"></td>
         
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
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="techer_reg_action.php" enctype="multipart/form-data">
  <div class="form-group">
    <label> Full Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="f1" aria-describedby="emailHelp" required>
    
  </div>
  <div class="form-group">
    <label for="exampleInputsubject">Subject</label>
    <select class="form-control" name="f2">
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
    <label for="exampleInputPassword1">Mobile Number</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="f3" maxlength="10" required>
  </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="f4" aria-describedby="emailHelp">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="f5" id="exampleInputPassword1" required>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlFile1">Image</label>
    <input type="file" class="form-control-file" name="f6" id="exampleFormControlFile1" required>
  </div>

  
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1" >Check me out</label>
  </div>
  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="f7">Submit</button>
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