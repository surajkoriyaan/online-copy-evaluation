<?php 
include('include/headers.php');

?>
<script src="bootstrap-4.2.1-dist/jquery.js"></script>
<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<i class="mr-2 fa fa-align-justify"></i>
										<strong class="card-title" v-if="headerText">Subject Re-check request</strong><button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal">
											confirmation
										</button>
                                        <button type="button" class="btn btn-secondary mb-1"  onClick="fun()">
											check confirm paper
										</button>
                                        
									</div>
									<div class="card-body" id="abc">
                                   
										<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">Center Code</th>
      <th scope="col">School Code</th>
      <th scope="col">Class</th>
      <th scope="col">Subject</th>
      <th scope="col">Date</th>
      <th scope="col">Student Id</th>
      <th scope="col">Approvals</th>
      
      
    </tr>
  </thead>
  <tbody>
    <?php 
  
	  error_reporting(0);
	 $con=mysqli_connect("localhost","root","","online_copy_evaluation");
      //$tab=$scode.$subj.$clas.$month.$year.$ccode;
      $sql1="select sn,center_code,scode,roll_no,name,class,subject,date,std_id,approval from re_check_copy where subject='$sub_tech' order by sn desc";
	  $result1=mysqli_query($con,$sql1);
  
    $c=1;
     while($row=mysqli_fetch_array($result1))
   {
	?>
    <tr><td> <?php echo $count+=$c;?></td>
    <td><?php echo $ac=$row['center_code']?></td>
    <td hidden=""><?php echo $row['roll_no']?></td><td hidden=""><?php echo $na=$row['name']?></td>
        <td><?php echo $row['scode']?></td>
        <td><?php echo $row['class']?></td>
        <td><?php echo $row['subject']?></td>
         <td><?php echo $row['date']?></td>
         <td><?php echo $row['std_id']?></td>
         <td><?php echo $row['approval']?></td>
             
                                        
         
         
    
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
			

			<!-- modal medium -->
			<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog " role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">Send confirmation of subject:-<?php echo $sub_tech;?></h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form method="POST" action="re_check_request.php">

        <div class="modal-body">
           <div class="row">
    
    
            <div class="col form-group">
    <label>Enter center code</label>
      <input type="text" class="form-control"  placeholder="School code" name="ccode" id="ccode" required/>
    </div>
          <div class="col">
          <label>Enter school code</label>
      <input type="text" class="form-control"  placeholder="Center code" name="scode" id="scode" required/>
          </div>
           </div> 
    <div class=" form-group">
    <label>student id</label>
      <input type="text" class="form-control"  placeholder="Center code" name="std_id" id="std_id" required/>
    </div>
    
    
      <input type="text" value="<?php echo $sub_tech;?>" hidden="" name="subjected" id="subjected">
    
  
            
             <div class="row">
    
    <div class="col">
    <label>confirmation</label>
      <textarea class="form-control" name="confirm" id="confirm" placeholder="if any query write here, if no query and paper re-check have done then write checked for confirmation."></textarea>
      </select>
    </div>
    
    </div>
  </div>
            
            <div class="row">
    
    
  </div>
            
            
            
    
  <div class="row">
    
  </div><div class="row">
    
  </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="subm" class="btn btn-primary">send</button>
        </div>
      </form>

						</div>
					</div>
				</div>
			</div>
			<!-- end modal medium -->

<script>
          
   

    function fun()
			{
				
				subjected=$("#subjected").val();
				
				
				
				$.ajax({
					type:'POST',
					url:'confirmation_check.php',
					
					data:{subjected:subjected},
                    success: function(data)
                   {
                   $("#abc").html(data);
                   }
				});
				
			}
			
			
	/*		function fun() 
		  {
                
               ccode=$("#ccode").val();
				rollno=$("#rollno").val();
				username=$("#username").val();
				clas=$("#class").val();
				subj=$("#subj").val();
				day=$("#day").val();
				month=$("#month").val();
				year=$("#year").val();
				
				
				$.ajax({
					type:'POST',
					url:'exaple.php',
					
					data:{ccode:ccode,rollno:rollno,username:username,clas:clas,subj:subj,day:day,month:month,year:year},
                    success: function(data)
          {
            $("#tab1").html(data);
          }
        });
      
            };
   
		*/	
			
			</script> 
			
			

		



<?php 
include('include/scripts.php');
include('include/footers.php');
?>
<?php 
    
	
    $con=mysqli_connect("localhost","root","","online_copy_evaluation");
	if(isset($_POST["subm"]))
	{
		$ccode=$_POST["ccode"];
		$scode=$_POST["scode"];
		$std_id=$_POST["std_id"];
		$confirm=$_POST["confirm"];
		$sql="select*from  re_check_copy where center_code='$ccode' and scode='$scode' and std_id='$std_id'";
		$result=mysqli_query($con,$sql);
		$check=mysqli_num_rows($result);
		if($check<1)
		{
			
			?>
            <script>
                 alert('please insert correct information!!...');
				 window.open('re_check_request.php','_self');
            </script>
            <?php
		}
		else
		{
			$updat="UPDATE re_check_copy SET tech_conf='$confirm' where subject='$sub_tech' and std_id='$std_id'";
			if(mysqli_query($con,$updat)==TRUE)
			{
				echo "<script>
                 alert('confirmation send!!...');
				 window.open('re_check_request.php','_self');
            </script>";
			}
			else
			{
				echo "<script>alert('errror!!!.....');</script>";
			}
			/*?>
            <script>
                 alert('username and paswword are not match !!...');
				 //window.open('index.html','_self');
            </script>
            <?php*/
		} 
		
	}
?>