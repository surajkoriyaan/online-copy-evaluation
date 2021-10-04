<?php 
include('include/headers.php');

?>
<script src="bootstrap-4.2.1-dist/jquery.js"></script>
<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<i class="mr-2 fa fa-align-justify"></i>
										<strong class="card-title" v-if="headerText">Check Uploaded Copy</strong>
                                        <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal">
											check
										</button>
									</div>
									<div class="card-body" id="abc">
                                   
										<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">School Code</th>
      <th scope="col">Center Code</th>
      <th scope="col">Student Id</th>
      <th scope="col">Subject</th>
      <th scope="col">Copy</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>12345</td>
      <td>6765</td>
      <td>abcd</td>
      <td><?php echo $sub_tech;?></td>
      <td><button class="btn btn-success">Copy</button></td>
    </tr>
    
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
							<h5 class="modal-title" id="mediumModalLabel">Check Uploaded Copy of subject:-<?php echo $sub_tech;?></h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form method="POST">

        <div class="modal-body">
           <div class="row">
    
    
            <div class="col form-group">
    <label>Enter Center code</label>
      <input type="text" class="form-control"  placeholder="Center code" name="sscode" id="sscode" required/>
    </div>
          <div class="col">
          <label>Enter School code</label>
      <input type="text" class="form-control"  placeholder="School code" name="cccode" id="cccode" required/>
          </div>
           </div> 
    <div class=" form-group">
    <label>Enter class</label>
      <select class="form-control" name="classs" id="classs">
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
      </select>
    </div>
    
    
      <input type="text" value="<?php echo $sub_tech;?>" hidden="" name="subjected" id="subjected">
    
  
            
             <div class="row">
    
    <div class="col">
    <label>Month</label>
      <select class="form-control" name="monthh" id="monthh">
      <option>Choose Month</option>
      <option>January</option>
      <option>February</option>
      <option>March</option>
      <option>April</option>
      <option>May</option>
      <option>June</option>
      <option>July</option>
      <option>August</option>
      <option>September</option>
      <option>October</option>
      <option>Navember</option>
      <option>December</option>
      </select>
    </div>
    <div class="col">
    <label>Year</label>
      <select class="form-control" name="yearr" id="yearr">
      <option>Choose the year</option>
      <option>2021</option>
      <option>2020</option>
      <option>2019</option>
      
      </select>
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
            <button type="button" name="subm" class="btn btn-primary" onclick="fun()">Check</button>
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
				cccode=$("#cccode").val();
				classs=$("#classs").val();
				subjected=$("#subjected").val();
				monthh=$("#monthh").val();
				yearr=$("#yearr").val();
				
				
				$.ajax({
					type:'POST',
					url:'copy_table.php',
					
					data:{sscode:sscode,cccode:cccode,classs:classs,subjected:subjected,monthh:monthh,yearr:yearr},
                    success: function(data)
                   {
                   $("#abc").html(data);
                   }
				});
				document.getElementById("sscode").value="";
				document.getElementById("cccode").value="";
                document.getElementById("classs").value="";
				
                document.getElementById("monthh").value="";
				document.getElementById("yearr").value="";
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