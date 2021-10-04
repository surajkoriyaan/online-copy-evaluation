<?php
    session_start();
	if(!$_SESSION['id_num'])
	{
		header('location:login.php');
	}


    $con=mysqli_connect("localhost","root","","online_copy_evaluation");
	if(isset($_POST["f3"]))
	{
		$a=$_POST["f1"];
		$b=$_POST["f2"];

		$sql="select*from teachers_reg where email='$a' and password='$b'";
		$result=mysqli_query($con,$sql);
		$check=mysqli_num_rows($result);
		if($check<1)
		{

			?>
            <script>
                 alert('username and paswword are not match !!...');
				 window.open('login.php','_self');
            </script>
            <?php
		}
		else
		{
			while($row=mysqli_fetch_array($result))
			{
				$_SESSION['id_num']=$row[1];
				$_SESSION['subject_tech']=$row[2];
				$_SESSION['tech_name']=$row[3];
				$_SESSION['tech_mobile_no']=$row[4];
				$_SESSION['tech_email']=$row[5];



			}
			header('location:tech_home.php');
			/*?>
            <script>
                 alert('username and paswword are not match !!...');
				 //window.open('index.html','_self');
            </script>
            <?php*/
		}

	}
?>
