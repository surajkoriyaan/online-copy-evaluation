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
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Send Re-check Subject Paper
        <br>
        Note:- Month and year should me same when your subject paper uploaded.
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form  method="POST" enctype="multipart/form-data" action="copy_re_check.php">

        <div class="modal-body">


        <div class="row">
    <div class="col form-group">
    <label>Enter Center Code</label>
      <input type="number" class="form-control" placeholder="Center Code"  name="ccode" id="ccode" required="required">
    </div>
    <div class="col form-group">
    <label>Enter Roll number</label>
      <input type="number" class="form-control" placeholder="roll number" name="rollno" id="rollno" required="required">
    </div>


  </div>
  <div class="form-group">
                <label>Student Name </label>
                <input type="text" name="username"  id="username" class="form-control" placeholder="Enter fullname" required="required">
            </div>


            <div class="row">
    <div class="col form-group">
    <label>Enter class</label>
      <select class="form-control" name="class" id="class">
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
  </div>

             <div class="row">
    <div class="col form-group">
    <label>Days</label>
      <select class="form-control" name="day" id="day">
      <option>Enter Day</option>
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
      <option>11</option>
      <option>12</option>
      <option>13</option>
      <option>14</option>
      <option>15</option>
      <option>16</option>
      <option>17</option>
      <option>18</option>
      <option>19</option>
      <option>20</option>
      <option>21</option>
      <option>22</option>
      <option>23</option>
      <option>24</option>
      <option>25</option>
      <option>26</option>
      <option>27</option>
      <option>28</option>
      <option>29</option>
      <option>30</option>
       <option>31</option>
      </select>
    </div>
    <div class="col">
    <label>Month</label>
      <select class="form-control" name="month" id="month">
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
      <select class="form-control" name="year" id="year">
      <option>Choose the year</option>
      <option>2021</option>
      <option>2020</option>
      <option>2019</option>

      </select>
    </div>
  </div>

    <div class="form-group">
                <label>Attach Application</label>
                <input type="file" name="application"  id="application" class="form-control"  required="required">
            </div>



  <div class="row">

  </div><div class="row">

  </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="copyupload" class="btn btn-primary" >send</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Send request for re-check subject paper
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              send request
            </button>
    </h6>
    <h2 id="hidd" hidden="">hidden</h2>
  </div>

  <div class="card-body" id="abc">

    <div class="table-responsive" >

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <tr>
            <th> S.N</th>
            <th>Center code</th>
            <th>roll no</th>
            <th>name</th>
            <th>class</th>
            <th>Subject</th>

            <th>date</th>
            <th>Approvals</th>
            <th>checked</th>
            <th>application</th>

          </tr>
        </thead>
        <tbody>

          <?php

	  error_reporting(0);
    include('db.php');
	// $con=mysqli_connect("localhost","root","","online_copy_evaluation");
      //$tab=$scode.$subj.$clas.$month.$year.$ccode;
      $sql1="select sn,center_code,roll_no,name,class,subject,date,approval,tech_conf from re_check_copy where scode='$scode' order by sn desc";
	  $result1=mysqli_query($con,$sql1);

$c=1;
     while($row=mysqli_fetch_array($result1))
   {
	?>
    <tr><td> <?php echo $count+=$c;?></td><td><?php echo $row['center_code']?></td>
        <td><?php echo $row['roll_no']?></td><td><?php echo $row['name']?></td>
        <td><?php echo $row['class']?></td><td><?php echo $row['subject']?></td>
         <td><?php echo $row['date']?></td>
         <td><?php echo $row['approval']?></td>
         <td><?php echo $row['tech_conf']?></td>
         <td><button type="button" class="btn btn-success" ><a href="applications/pdf.php?sid=<?php echo $row['sn'];?>" target="new" style="color:#FFF">view</a></button></td>

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
				application=$("#application").val();


				$.ajax({
					type:'POST',
					url:'re_check_action.php',

					data:{ccode:ccode,rollno:rollno,username:username,clas:clas,subj:subj,day:day,month:month,year:year,application:application},
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
  <?php

  $scode=$_SESSION['scode'];
  include('db.php');
  //$con=mysqli_connect("localhost","root","","online_copy_evaluation");
  if(isset($_POST["copyupload"]))
  {


	  $ccode=$_POST["ccode"];
	  $rollno=$_POST["rollno"];
	  $usename=$_POST["username"];
	  $clas=$_POST["class"];
	  $subj=$_POST["subj"];
	  $day=$_POST["day"];
	  $month=$_POST["month"];
	  $year=$_POST["year"];
	  $application=$_FILES["application"]["name"];
	  //echo $scode.$subj.$class.$month.$year.$ccode;


	 if($ccode=="" || $rollno=="" || $usename=="" || $clas=="" || $subj=="" || $day=="" || $month=="" || $year=="" || $application=="")
  {
	 echo "<script>alert('please insert all field.....!!!!')</script>";
  }
  else
  {
			 $dat=$day.$month.$year;
			 $stud_id=$scode.$rollno.$usename.$subj.$clas;
			 $stud_id_md=md5($stud_id);

			  $ff=$_FILES["application"]["name"];
	  $tn=$_FILES["application"]["tmp_name"];
	  move_uploaded_file($tn,"applications/$ff");
				//mkdir("dataimgs/$tab/$rollno",0777,true);
				$sql="insert into  re_check_copy(center_code,scode,roll_no,name,class,subject,date,std_id,application) values('$ccode','$scode',$rollno,'$usename',$clas,'$subj','$dat','$stud_id_md','$ff')";
			 $query=mysqli_query($con,$sql);
			 if($query==TRUE)
			 {
				echo "<script>alert('Request send.....!!!!')</script>";

			 }
			 else
			 {
				 echo "<script>alert('Errror............!!!!')</script>";

			 }
			  }
  }

  ?>
