
<?php 
include('include/headers.php');

?>
<script src="bootstrap-4.2.1-dist/jquery.js"></script>
<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<i class="mr-2 fa fa-align-justify"></i>
										<strong class="card-title" v-if="headerText">Send Report To Admin</strong>
                                        <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal">
												Send report
										</button>
                                        <button type="button" class="btn btn-secondary mb-1" onClick="fun2()">
											check send report
										</button>
                                        
                                        
									</div>
									<div class="card-body" id="abc">
                                   
										<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> S.N</th>
            <th>Send By</th>
            
            <th>Date/Time</th>
            <th>Report</th>
          </tr>
        </thead>
        <tbody>
     
           <?php 
  
  
  
  $con=mysqli_connect("localhost","root","","online_copy_evaluation");
  //$sr="";
  $c=1;
   $mess="select sn,date,notice from admin_tech_notice where subject='$sub_tech' and tech_id='$id' 	 ORDER BY sn DESC";
				$result1=mysqli_query($con,$mess);
  

     while($row=mysqli_fetch_array($result1))
   {
	   $count=$c++;
	?>
    <tr><td> <?php echo $count;?></td>
    <td><?php echo "admin";?></td>
        <td><?php echo $row['date']?></td><td><?php echo $row['notice']?></td>
        
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
			</div>
			

			<!-- modal medium -->
			<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog " role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">Send Report To the Admin:-<?php echo $sub_tech;?></h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form method="POST">

        <div class="modal-body">
           <div class="row">
    
    
            
          <div class="col">
          <label>Enter Date/Time</label>
      <input type="datetime-local" class="form-control"  placeholder="Center code" name="dt" id="dt" required/>
          </div>
           </div> 
    <div class=" form-group">
    <label>Write Messages</label>
    <textarea class="form-control" style="height:200px" name="tech_message" id="tech_message" required></textarea>
    </div>
    
    
      <input type="text" value="<?php echo $sub_tech;?>" hidden="" name="subjected" id="subjected">
      <input type="text" value="<?php echo $id;?>" hidden="" name="tech_id" id="tech_id">
    
  
            
             <div class="row">
    
    
    
  </div>
            
            <div class="row">
    
    
  </div>
            
            
            
    
  <div class="row">
    
  </div><div class="row">
    
  </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" name="subm" class="btn btn-primary" onclick="fun()">send</button>
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
				sscode=$("#sscode").val();
				dt=$("#dt").val();
				message=$("#tech_message").val();
				subjected=$("#subjected").val();
				tech_id=$("#tech_id").val();
				
				
				
				
				$.ajax({
					type:'POST',
					url:'report_action.php',
					
					data:{dt:dt,message:message,subjected:subjected,tech_id:tech_id},
                    success: function(data)
                   {
                   $("#abc").html(data);
                   }
				});
				//document.getElementById("sscode").value="";
				document.getElementById("dt").value="";
                document.getElementById("tech_message").value="";
				
                
			}
			
			
			function fun2() 
		  {
                
               subjected=$("#subjected").val();
				tech_id=$("#tech_id").val();
				
				
				$.ajax({
					type:'POST',
					url:'report_tech_action.php',
					
					data:{sunjected:subjected,tech_id:tech_id},
                    success: function(data)
          {
            $("#abc").html(data);
          }
        });
      
            };
   
   
           
			function fun3() 
		  {
                
               subjected=$("#subjected").val();
				
				
				$.ajax({
					type:'POST',
					url:'check_all_table.php',
					
					data:{sunjected:subjected},
                    success: function(data)
          {
            $("#abc").html(data);
          }
        });
      
            };
   
			
			
			</script> 








<?php 
include('include/scripts.php');
include('include/footers.php');
?>