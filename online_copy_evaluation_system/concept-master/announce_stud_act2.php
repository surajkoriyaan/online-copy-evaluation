<div class="table-responsive" > 
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
            <tr>
            <th>Announcement Id</th>
            <th>Date/time</th>
            <th>Announcement</th>
           
            
            
          </tr>
  </thead>
   <tbody>
   
  <?php 
  
  error_reporting(0);
  
  $con=mysqli_connect("localhost","root","","online_copy_evaluation"); 
   
   $sscode=$_POST["sscode"];
   
      $sql1="select*from $sscode order by anounce_id desc";
	  $result1=mysqli_query($con,$sql1);
  

     while($row=mysqli_fetch_array($result1))
   {
	?>
    <tr><td> <?php echo $row['anounce_id']?></td>
        
        <td><?php echo $row['date']?></td>
        
         <td><?php echo $row['announce']?></td>
         
    
    </tr>
   <?php
  }

 		
  
  ?>
  
 
  </tbody>
  </table>
  </div>
  
  