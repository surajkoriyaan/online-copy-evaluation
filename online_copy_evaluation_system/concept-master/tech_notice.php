<?php 
include('included/headerr.php');

?>
<script src="bootstrap-4.2.1-dist/jquery.js">
                                </script>


<div class="card">
  <div class="card-header">
    Teacher Notice:-
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Send Notice
</button>
<button type="button" class="btn btn-primary" onClick="fun()">
 Check Send Notice
</button>


  </div>
  <div class="card-body">
    
    
    
    
    
    <table class="table table-bordered" id="abc">
  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">TEACHER ID</th>
     <th scope="col">SUBJECT</th>
      <th scope="col">DATE</th>
      <th scope="col">NOTICE</th>
      
    </tr>
  </thead>
  <tbody>
    <?php 
  
  
  
  
  error_reporting(0);
  $con=mysqli_connect("localhost","root","","online_copy_evaluation");
   $sql="select sn,tech_id,subject,date,report from report_tech";
$result=mysqli_query($con,$sql);
  $count=0;

while($row=mysqli_fetch_array($result))
{
	?>
  <tr><td> <?php echo $count=$count+'1' ?></td>
  
  <td><?php echo $row['tech_id']?></td>
  <td><?php echo $row['subject']?></td>
  <td><?php echo $row['date']?></td><td><?php echo $row['report']?></td>
  
  
  
         
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
        <h5 class="modal-title" id="exampleModalLabel">Send Notice</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
  <div class="form-group">
    <label>Enter Teacher Id</label>
    <input type="text" class="form-control" id="schcode" name="schcode" aria-describedby="emailHelp" required> 
    
  </div>
  <div class="form-group">
  <label>Enter Subject</label>
      <select class="form-control" name="subj" id="subj">
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
    <label>Enter Date/Time</label>
    <input type="datetime-local" class="form-control" id="schdate" name="schdate" aria-describedby="emailHelp" required>
    
    
  </div>
  <div class="form-group">
    <label>Write Notice</label>
    <textarea class="form-control" id="schmessage"></textarea>
    
  </div>
  <div class="modal-footer">
        
        
        
      </div>
      
      
  
  
  
  

  
  
  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" name="f7" onClick="run()">Send</button>
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
				subj=$("#subj").val();
				schdate=$("#schdate").val();
				schmessage=$("#schmessage").val();
				
				$.ajax({
					type:'POST',
					url:'tech_notice_action.php',
					
					data:{schcode:schcode,subj:subj,schdate:schdate,schmessage:schmessage},
                    success: function(data)
          {
            $("#abc").html(data);
          }
        });
          document.getElementById("schcode").value="";
		  document.getElementById("schdate").value="";
		  document.getElementById("schmessage").value="";
            }
			
			
			

   function fun()
			{
				sscode="admin_tech_notice";
				$.ajax({
					type:'POST',
					url:'check_admin_tech_notice.php',
					
					data:{sscode:sscode},
                    success: function(data)
                   {
                   $("#abc").html(data);
                   }
				});
				document.getElementById("schcode").value="";
				
			}
			
			
			
		</script>
        
        
        
         


<?php 
include('included/footerr.php');
include('included/scriptt.php');
?>