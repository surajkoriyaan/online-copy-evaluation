<?php 
    session_start();
	if(!$_SESSION['id'])
	{
		header('location:login.php');
	}
	
	
    $con=mysqli_connect("localhost","root","","online_copy_evaluation");
	if(isset($_POST["f3"]))
	{
		$a=$_POST["f1"];
		$b=$_POST["f2"];
		
		$sql="select*from admin_profile where email='$a' and password='$b'";
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
				$_SESSION['id']=$row[0];
				$_SESSION['name']=$row[1];
				$_SESSION['mob_no']=$row[2];
				$_SESSION['email']=$row[3];
				
				
				
				
			}
			header('location:admin_home.php');
			/*?>
            <script>
                 alert('username and paswword are not match !!...');
				 //window.open('index.html','_self');
            </script>
            <?php*/
		} 
		
	}
?>