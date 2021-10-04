<?php 
    $con=mysqli_connect("localhost","root","","online_copy_evaluation");
	if(isset($_POST["sub"]))
	{
		$a=$_POST["f1"];
		$b=$_POST["f2"];
		$c=$_POST["f3"];
        $d=$_POST["f4"];
        $e=$_POST["f5"];
		$g=$_POST["f6"];
		$h=$_POST["f7"];
		$i=$_POST["f8"];
		echo $a;
		//$l=$_POST["f11"];
		//$m=$_POST["f12"];
		//$n=$_POST["f13"];
		//$o=$_POST["f14"];
        //$f=$_FILES["t6"]["name"];
		//$tn=$_FILES["t6"]["tmp_name"];
		
		//move_uploaded_file($tn,"../dataimg/$f");
		
		
		//$dd=$_FILES["t8"]["name"];
		//$ddc=$_FILES["t8"]["tmp_name"];
		
		//move_uploaded_file($ddc,"../document/$dd");
		
		$sql="INSERT INTO  argora_ps(name, fname, email, mob_num, adhar_num, dob, address) VALUES ('$a','$b',$c','$d','$e','$g','$h')";
		mysqli_query($con,$sql);
		/*$run=
		if($run==true)
		{
			?>
            <script>
                alert('data inserted successfully....');
            </script>
            <?php
		}
      else
	  {
		  echo "data not inserted";
	  }
      */  

	}
?>