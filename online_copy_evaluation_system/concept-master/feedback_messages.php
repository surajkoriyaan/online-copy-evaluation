<?php 
include('included/headerr.php');

?>
<script src="bootstrap-4.2.1-dist/jquery.js">
                                </script>


<div class="card">
  <div class="card-header">
    Feedbacks:-
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Reply Feedback
</button>


  </div>
  <div class="card-body">
    
    
    
    
    
    <table class="table table-bordered" id="abc">
  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">SCH CODE</th>
      <th scope="col">RATING </th>
      <th scope="col">DATE</th>
      <th scope="col">MESSAGES</th>
      
    </tr>
  </thead>
  <tbody>
    <?php 
  
  
  
  
  error_reporting(0);
  $con=mysqli_connect("localhost","root","","online_copy_evaluation");
   $sql="select sn,scode,rating,date,message from feedback";
$result=mysqli_query($con,$sql);
  $count=0;

while($row=mysqli_fetch_array($result))
{
	?>
  <tr><td> <?php echo $count=$count+'1' ?></td>
  
  <td><?php echo $row['scode']?></td><td><?php echo $row['rating']?></td>
  <td><?php echo $row['date']?></td><td><?php echo $row['message']?></td>
  
  
  
         
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
        <h5 class="modal-title" id="exampleModalLabel">Reply Feedback</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
  <div class="form-group">
    <label>Enter Sch Code</label>
    <input type="text" class="form-control" id="schcode" name="schcode" aria-describedby="emailHelp" required>
    
    
  </div>
  <div class="form-group">
    <label>Enter Date/Time</label>
    <input type="datetime-local" class="form-control" id="schdate" name="schdate" aria-describedby="emailHelp" required>
    
    
  </div>
  <div class="form-group">
    <label>Write Comments</label>
    <textarea class="form-control" id="schmessage"></textarea>
    
  </div>
  <div class="modal-footer">
        
        
        
      </div>
      
      
  
  
  
  

  
  
  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" name="f7" onClick="run()">Submit</button>
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