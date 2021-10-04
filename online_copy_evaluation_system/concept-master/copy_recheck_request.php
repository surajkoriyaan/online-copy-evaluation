<?php 
include('included/headerr.php');

?>
<script src="bootstrap-4.2.1-dist/jquery.js">
                                </script>


<div class="card">
  <div class="card-header">
    Subject paper request:-
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  confirmation
</button>


  </div>
  <div class="card-body">
    
    
    
    
    
    <table class="table table-bordered" id="abc">
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
      <th scope="col">Checked</th>
      <th scope="col">Application</th>
      
      
    </tr>
  </thead>
  <tbody>
    <?php 
  
	  error_reporting(0);
	 $con=mysqli_connect("localhost","root","","online_copy_evaluation");
      //$tab=$scode.$subj.$clas.$month.$year.$ccode;
      $sql1="select sn,center_code,scode,roll_no,name,class,subject,date,std_id,approval,tech_conf from re_check_copy  order by sn desc";
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
         <td><?php echo $row['tech_conf']?></td>
         <td><button type="button" class="btn btn-success" ><a href="../school_user/applications/pdf.php?sid=<?php echo $row['sn'];?>" target="new" style="color:#FFF">view</a></button></td>
             
                                        
         
         
    
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
        <h5 class="modal-title" id="exampleModalLabel">Send Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="copy_recheck_request.php">
  <div class="form-group">
    <label>Enter Center Code</label>
    <input type="text" class="form-control" id="cchcode" name="cchcode" aria-describedby="emailHelp" required>
    
    
  </div>
  <div class="form-group">
    <label>Enter School Code</label>
    <input type="text" class="form-control" id="schcode" name="schcode" aria-describedby="emailHelp" required>
    
    
  </div>
  <div class="form-group">
    <label>Enter Student Id</label>
    <input type="text" class="form-control" id="std_id" name="std_id" aria-describedby="emailHelp" required>
    
    
  </div>
  <div class="form-group">
    <label>Re-check confirmation</label>
    <select id="confirm" name="confirm" class="form-control">
      <option>select</option>
      <option>approved</option>
      <option>not approved</option>
      <option>declined</option>
    </select>
    
  </div>
  <div class="modal-footer">
        
        
        
      </div>
      
      
  
  
  
  

  
  
  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="f7">send</button>
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
<!-- Button trigger modal -->



      
    </div>
  </div>
</div>




<script>
          
   
		     function run() 
		    {
                
				schcode=$("#schcode").val();
				schdate=$("#schdate").val();
				schmessage=$("#schmessage").val();
				
				$.ajax({
					type:'POST',
					url:'feedback_action.php',
					
					data:{schcode:schcode,schdate:schdate,schmessage:schmessage},
                    success: function(data)
          {
            $("#abc").html(data);
          }
        });
          document.getElementById("schcode").value="";
		  document.getElementById("schdate").value="";
		  document.getElementById("schmessage").value="";
            }
			
			
			function run1() 
		    {
                
				sscode=$("#sscode").val();
				cccode=$("#cccode").val();
				classs=$("#classs").val();
				subjected=$("#subjj").val();
				monthh=$("#monthh").val();
				yearr=$("#yearr").val();
				$.ajax({
					type:'POST',
					url:'show_student_result.php',
					
					data:{sscode:sscode,cccode:cccode,classs:classs,subjected:subjected,monthh:monthh,yearr:yearr},
                    success: function(data)

          {
            $("#abc").html(data);
          }
        });
      
            }
			
			
			

   function fun()
			{
				sscode=$("#schcode").val();
				$.ajax({
					type:'POST',
					url:'show_sch_table.php',
					
					data:{sscode:sscode},
                    success: function(data)
                   {
                   $("#abc").html(data);
                   }
				});
				document.getElementById("schcode").value="";
				
			}
			
			
			function fun1()
			{
				sscode=$("#schcode2").val();
				$.ajax({
					type:'POST',
					url:'show_sch_result_tab.php',
					
					data:{sscode:sscode},
                    success: function(data)
                   {
                   $("#abc").html(data);
                   }
				});
				document.getElementById("schcode2").value="";
				
			}
		</script>
        
        
        
         


<?php 
include('included/footerr.php');
include('included/scriptt.php');
?>
<?php 
    
	
    $con=mysqli_connect("localhost","root","","online_copy_evaluation");
	if(isset($_POST["f7"]))
	{
		$ccode=$_POST["cchcode"];
		$scode=$_POST["schcode"];
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
				 window.open('copy_recheck_request.php','_self');
            </script>
            <?php
		}
		else
		{
			$updat="UPDATE re_check_copy SET approval='$confirm' where std_id='$std_id'";
			if(mysqli_query($con,$updat)==TRUE)
			{
				echo "<script>
                 alert('confirmation send!!...');
				 window.open('copy_recheck_request.php','_self');
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