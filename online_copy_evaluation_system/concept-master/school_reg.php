<?php 
include('included/headerr.php');

?>
<script src="bootstrap-4.2.1-dist/jquery.js"></script>


<div class="card">
  <div class="card-header">
    Check Status:-
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Check
</button>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
  Check student record
</button>
  </div>
  <div class="card-body">
    
    
    
    
    
    <table class="table table-bordered" id="abc">
  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">SCH CODE</th>
      <th scope="col">NAME OF INTITUTE </th>
      <th scope="col">CITY</th>
      <th scope="col">STATE</th>
      <th scope="col">BOARD</th>
      <th scope="col">PR NAME</th>
      <th scope="col">EMAIL</th>
    </tr>
  </thead>
  <tbody>
    <?php 
  
  
  
  
  error_reporting(0);
  $con=mysqli_connect("localhost","root","","online_copy_evaluation");
   $sql="select scode,school_name,city,state,board,principlename,email from school_reg";
$result=mysqli_query($con,$sql);
  $count=0;

while($row=mysqli_fetch_array($result))
{
	?>
  <tr><td> <?php echo $count=$count+'1' ?></td>
  
  <td><?php echo $row['scode']?></td><td><?php echo $row['school_name']?></td>
  <td><?php echo $row['city']?></td><td><?php echo $row['state']?></td>
  <td><?php echo $row['board']?></td>
  <td><?php echo $row['principlename']?></td>
  <td><?php echo $row['email']?></td>
  
  
         
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
        <h5 class="modal-title" id="exampleModalLabel">Check Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
  <div class="form-group">
    <label>Enter Sch Code</label>
    <input type="text" class="form-control" id="schcode" name="schcode" aria-describedby="emailHelp" required>
    <label class="form-check-label" for="exampleCheck1" >please enter sch code to show the related tables</label>
    
  </div>
  <div class="modal-footer">
        
        <button type="submit" class="btn btn-primary" name="f7" onClick="fun()">Submit</button>
        </form>
      </div>
      
      <form method="post">
  <div class="form-group">
    <label>Enter Sch Code</label>
    <input type="text" class="form-control" id="schcode2" name="schcode2" aria-describedby="emailHelp" required>
    <label class="form-check-label" for="exampleCheck1" >please enter sch code to show the related result tables</label>
    
  </div>
  <div class="modal-footer">
        
        <button type="button" class="btn btn-primary" onClick="fun1()">Submit</button>
        </form>
      </div>
  
  
  
  

  
  
  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
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


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">check student status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
       <form method="POST" >

        <div class="modal-body">
           <div class="row">
    
    
            <div class="col form-group">
    <label>Enter School code</label>
      <input type="text" class="form-control"  placeholder="School code" name="scode" id="sscode" required/>
    </div>
          <div class="col">
          <label>Enter center code</label>
      <input type="text" class="form-control"  placeholder="Center code" name="ccode" id="cccode" required/>
          </div>
           </div> 
           <div class="row">
    <div class="col">
    <label>Enter class</label>
      <select class="form-control" name="class" id="classs">
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
    
    
      <div class="col">
    <label>Enter Subject</label>
      <select class="form-control" name="subj" id="subjj">
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
    
  </div>
            
             <div class="row">
    
    <div class="col">
    <label>Month</label>
      <select class="form-control" name="month" id="monthh">
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
      <select class="form-control" name="year" id="yearr">
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
            <button type="button"  class="btn btn-primary" onClick="run()">detail</button>
            <button type="button"  class="btn btn-primary" onclick="run1()">result</button>
        </div>
      </form>
       
       
       
      </div>
      
    </div>
  </div>
</div>




<script>
          
   
		     function run() 
		    {
                
				sscode=$("#sscode").val();
				cccode=$("#cccode").val();
				classs=$("#classs").val();
				subjected=$("#subjj").val();
				monthh=$("#monthh").val();
				yearr=$("#yearr").val();
				$.ajax({
					type:'POST',
					url:'show_student_detail.php',
					
					data:{sscode:sscode,cccode:cccode,classs:classs,subjected:subjected,monthh:monthh,yearr:yearr},
                    success: function(data)
          {
            $("#abc").html(data);
          }
        });
      
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