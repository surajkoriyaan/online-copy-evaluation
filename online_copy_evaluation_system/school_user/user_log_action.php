<?php 
    session_start();
	if(!$_SESSION['scode'])
	{
		header('location:user_login.php');
	}
	
	
    $con=mysqli_connect("localhost","root","","online_copy_evaluation");
	if(isset($_POST["t3"]))
	{
		$a=$_POST["t1"];
		$b=$_POST["t2"];
		
		$sql="select*from school_reg where email='$a' and password='$b'";
		$result=mysqli_query($con,$sql);
		$check=mysqli_num_rows($result);
		if($check<1)
		{
			
			?>
            <script>
                 alert('username and paswword are not match !!...');
				 window.open('user_login.php','_self');
            </script>
            <?php
		}
		else
		{
			while($row=mysqli_fetch_array($result))
			{
				$_SESSION['id']=$row[0];
				$_SESSION['scode']=$row[1];
				$_SESSION['sname']=$row[2];
				$_SESSION['city']=$row[3];
				$_SESSION['state']=$row[4];
				$_SESSION['board']=$row[5];
				$_SESSION['pname']=$row[6];
				$_SESSION['mail']=$row[7];
				
				
			}
			header('location:user_home.php');
			/*?>
            <script>
                 alert('username and paswword are not match !!...');
				 //window.open('index.html','_self');
            </script>
            <?php*/
		} 
		
	}
?>