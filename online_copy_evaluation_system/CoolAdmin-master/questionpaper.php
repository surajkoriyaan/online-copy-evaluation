<?php 
include('include/headers.php');

?>
<script src="bootstrap-4.2.1-dist/jquery.js"></script>
<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<i class="mr-2 fa fa-align-justify"></i>
										<strong class="card-title" v-if="headerText">Question Paper of subject <?php echo $sub_tech;?></strong>
                                        
									</div>
									<div class="card-body" id="abc">
                                   
										<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">Class</th>
      <th scope="col">Paper Id</th>
      <th scope="col">Subject</th>
      <th scope="col">Date</th>
      <th scope="col">Paper</th>
    </tr>
  </thead>
  <tbody>
    <?php 
  
  
  
  
  //error_reporting(0);
  $con=mysqli_connect("localhost","root","","online_copy_evaluation");
   $sql="select sn,class,paper_id,subject,date,file from question_paper where subject='$sub_tech'";
$result=mysqli_query($con,$sql);
  $count=0;

while($row=mysqli_fetch_array($result))
{
	?>
  <tr><td> <?php echo $count=$count+'1' ?></td>
  
  <td><?php echo $row['class']?></td><td><?php echo $row['paper_id']?></td>
  <td><?php echo $row['subject']?></td><td><?php echo $row['date']?></td>
  
  <td><button type="button" class="btn btn-success" ><a href="../concept-master/dataimgs/pdf.php?sid=<?php echo $row['sn'];?>" target="new" style="color:#FFF">view</a></button></td>       
  </tr>
<?php
}

?>
  </tbody>
</table>

									</div>
								</div>






							</div>
						</div>
					</div>
				</div>
			</div>
			

			



		


<?php
 
include('include/scripts.php');

include('include/footers.php');
?>