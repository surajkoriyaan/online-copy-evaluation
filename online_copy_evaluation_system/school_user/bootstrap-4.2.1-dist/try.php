<?php 
     $con=mysqli_connect("localhost","root","","try");
     $tab='city';
	 if($result= mysqli_query($con,("show tables like '".$tab."'")))
	 {
		 if($result->num_rows==1)
		 {
			 echo "tables are exist";
		 }
	 
	 else
	 {
		 echo "table not exist";
	 }
	 }
	 
	 $a='2344';
	 echo "asdw wdwedw '$a%'";
?>