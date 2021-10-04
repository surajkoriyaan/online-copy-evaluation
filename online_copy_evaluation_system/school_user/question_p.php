<?php 
  session_start();
  if(!$_SESSION['scode'])
	{
		header('location:user_login.php');
	}
  $id=$_SESSION['id'];
  $scode=$_SESSION['scode'];
  $sname=$_SESSION['sname'];
  $city=$_SESSION['city'];
  $state=$_SESSION['state'];
  $board=$_SESSION['board'];
  $pname=$_SESSION['pname'];
  $mail=$_SESSION['mail'];
  
include('includes/header.php');
include('includes/navbar.php');

?>

    <script src="bootstrap-4.2.1-dist/jquery.js"></script>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <h4><?php echo $sname.",".$city.",".$state;?></h4>
              
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter"></span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                
                
                
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter"></span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                
                
                
                
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $pname;?></span>
                <img class="img-profile rounded-circle" src="img/school.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Question Paper 
            
    </h6>
    <h2 id="hidd" hidden="">hidden</h2>
  </div>

  <div class="card-body" id="abc">

    <div class="table-responsive" >

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> S.n</th>
            <th>Class</th>
            <th>Paper Id</th>
            <th>Subject</th>
            <th>Date/Time</th>
            <th>Paper</th>
          </tr>
        </thead>
        <tbody>
     
          <?php 
  
  
  
  
  error_reporting(0);
  $con=mysqli_connect("localhost","root","","online_copy_evaluation");
   $sql="select sn,class,paper_id,subject,date,file from question_paper";
$result=mysqli_query($con,$sql);
  $count=0;

while($row=mysqli_fetch_array($result))
{
	?>
  <tr><td> <?php echo $count=$count+'1' ?></td>
  
  <td><?php echo $row['class']?></td><td><?php echo $row['paper_id']?></td>
  <td><?php echo $row['subject']?></td><td><?php echo $row['date']?></td>
  
  <td><button type="button" class="btn btn-success" ><a href="../concept-master/dataimgs/pdf.php?sid=<?php echo $row['sn'];?>" target="new" style="color:#FFF">view</a></button></td>       
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
          <div class="d-sm-flex align-items-center justify-content-between mb-4"> 
          <div class="row row-cols-1 row-cols-md-8">
          
  
  
  
  
  </div>
          
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

   <script>
          
   

    function fun()
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
					url:'code.php',
					
					data:{ccode:ccode,rollno:rollno,username:username,clas:clas,subj:subj,day:day,month:month,year:year},
                    success: function(data)
                   {
                   $("#abc").html(data);
                   }
				});
				document.getElementById("ccode").value="";
                document.getElementById("rollno").value="";
				document.getElementById("username").value="";
                document.getElementById("class").value="";
				document.getElementById("subj").value="";
				document.getElementById("day").value="";
                document.getElementById("month").value="";
				document.getElementById("year").value="";
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

<?php 
//include('includes/scripts.php');
include('includes/footer.php');

?>
  

  

