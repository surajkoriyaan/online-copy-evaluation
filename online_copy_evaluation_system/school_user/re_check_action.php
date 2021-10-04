
  <div class="card-body">

    <div class="table-responsive" > 
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
            <tr>
            <th> S.N</th>
            <th>Center code</th>
            <th>roll no</th>
            <th>name</th>
            <th>class</th>
            <th>Subject</th>
            
            <th>date</th>
            
          </tr>
  </thead>

  
  
  <tbody>
<?php 
  
	  error_reporting(0);
	 
      //$tab=$scode.$subj.$clas.$month.$year.$ccode;
      $sql1="select sn,center_code,roll_no,name,class,subject,date from re_check_copy where scode='$scode'";
	  $result1=mysqli_query($con,$sql1);
  

     while($row=mysqli_fetch_array($result1))
   {
	?>
    <tr><td> <?php echo $row['sn']?></td><td><?php echo $row['center_code']?></td>
        <td><?php echo $row['roll_no']?></td><td><?php echo $row['name']?></td>
        <td><?php echo $row['class']?></td><td><?php echo $row['subject']?></td>
         <td><?php echo $row['date']?></td>
         
    
    </tr>
   <?php
  }

   ?>
  
  </tbody>
  </table>
  </div></div>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
  