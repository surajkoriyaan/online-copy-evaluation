<?php 
include('included/headerr.php');

?>
<script src="bootstrap-4.2.1-dist/jquery.js">
                                </script>


<div class="card">
  <div class="card-header">
    Announcement For School/Collages:-
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Send
</button>
<button type="button" class="btn btn-primary" onClick="fun()">
 Check Send announcement
</button>


  </div>
  <div class="card-body">
    
    
    
    
    
    <table class="table table-bordered" id="abc">
  <thead>
    <tr>
      <th scope="col">Announce Id</th>
      <th scope="col">Email</th>
     
      <th scope="col">DATE</th>
      <th scope="col">Reply Announce</th>
      
    </tr>
  </thead>
  <tbody>
    <?php 
  
  
  
  
  error_reporting(0);
  $con=mysqli_connect("localhost","root","","online_copy_evaluation");
   $sql="select announce_id,email_id,announce,date from announce_reply_school order by sn desc";
$result=mysqli_query($con,$sql);
  $count=0;

while($row=mysqli_fetch_array($result))
{
	?>
  <tr><td> <?php echo $row['announce_id']; ?></td>
  
  <td><?php echo $row['email_id']?></td>
  <td><?php echo $row['date']?></td>
  <td><?php echo $row['announce']?></td>
  
  
  
         
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
        <h5 class="modal-title" id="exampleModalLabel">Announcement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
  
  <div class="form-group">
    <label>Enter Date/Time</label>
    <input type="datetime-local" class="form-control" id="schdate" name="schdate" aria-describedby="emailHelp" required>
    
    
  </div>
  <div class="form-group">
    <label>Write Announcement</label>
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
                
				//schcode=$("#schcode").val();
				schdate=$("#schdate").val();
				schmessage=$("#schmessage").val();
				
				$.ajax({
					type:'POST',
					url:'announce_school_act.php',
					
					data:{schdate:schdate,schmessage:schmessage},
                    success: function(data)
          {
            $("#abc").html(data);
          }
        });
          
		  document.getElementById("schdate").value="";
		  document.getElementById("schmessage").value="";
            }
			
			
			

   function fun()
			{
				sscode="announce_school";
				$.ajax({
					type:'POST',
					url:'announce_school_act2.php',
					
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