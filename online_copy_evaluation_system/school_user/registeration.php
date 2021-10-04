<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Registration</title>

  <!-- Custom fonts for this template-->
  
   
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5  ">
          <img src="mihai-dogaru-D8uHCjU1YHA-unsplash.jpg" style="height:100%; width:103%">
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                <hr>
              </div>
              <form class="user" method="post" action="registeration.php">
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="sname" placeholder="Full Name of the School/Collages" required>
                  </div></div>
                  <div class="form-group row">
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="cname" placeholder="Enter City Name" required>
                  </div>
                  <div class="col-sm-6">
                    <select class="form-control form-control" style="border-top-left-radius:25px; border-bottom-left-radius:25px; border-bottom-right-radius:25px; border-top-right-radius:25px; height:50px" name="state" required>
                    <option>Choose State</option>
                    <option>Jharkhand</option>
                    <option>Bihar</option>
                    <option>Odisha</option>
                    <option>West Bengal</option>
                    <option>Uttar Pradesh</option>
                    </select>
                  </div>
                  
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <select class="form-control form-control" style="border-top-left-radius:25px; border-bottom-left-radius:25px; border-bottom-right-radius:25px; border-top-right-radius:25px; height:50px" name="board" required>
                    
                    <option>Choose Board</option>
                    <option>JAC</option>
                    <option>CBSE</option>
                    <option>UGC</option>
                    <option>EGNU</option>
                    <option>IIC</option>
                    <option>ICG</option>
                    </select>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="code" placeholder="Enter School/Collage Code" required>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="pname" placeholder="Enter School/Collage Addministration Name" required>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="email" class="form-control form-control-user" name="email" placeholder="Email" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" name="password" placeholder="Password" required>
                  </div>
                </div>
                
                <hr>
                <input type="submit" class="btn btn-primary btn-user btn-block" name="sub" value="regiater">
                 
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="user_login.php">Already have an account? Login!</a>
              </div>
              <div class="text-center">
                <a class="small" href="../home_ocv/index.php">Go to home</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
<?php 
    $con=mysqli_connect("localhost","root","","online_copy_evaluation");
	
	
	if(isset($_POST["sub"]))
	{
		$sname=$_POST["sname"];
		$ci=$_POST["cname"];
		$st=$_POST["state"];
		$bo=$_POST["board"];
		$code=$_POST["code"];
		$pname=$_POST["pname"];
		$emaill=$_POST["email"];
		$passs=$_POST["password"];
		$sq="select * from school_reg where email='$emaill' or password='$passs'";
		$qq=mysqli_query($con,$sq);
		$qu=mysqli_num_rows($qq);
		if($qu>=1)
		{
			echo "<script>alert('email and password are already exists..........!!!!');
			</script>";
		}
		else
		{  
			$run="insert into school_reg(scode,school_name,city,state,board,principlename,email,password) values('$code','$sname','$ci','$st','$bo','$pname','$emaill','$passs')";
			if(mysqli_query($con,$run)==true)
			{
				echo"<script>alert('Your Account is created ..............!!');
			</script>";
			}
			else
			{
				echo"<script>alert('error ..............!!');
			</script>";
			}
		
	}
	}
?>