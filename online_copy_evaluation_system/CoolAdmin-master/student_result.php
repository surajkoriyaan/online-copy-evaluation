
<?php 
  session_start();
  error_reporting(0);
  if(!$_SESSION['id_num'])
	{
		header('location:login.php');
	}
  $id=$_SESSION['id_num'];
  $sub_tech=$_SESSION['subject_tech'];
  
  
  $con=mysqli_connect("localhost","root","","online_copy_evaluation");
  
      $sscode=$_POST["sscode"];
	  $cccode=$_POST["cccode"];
	  $classs=$_POST["classs"];
	  $subjected=$_POST["subjected"];
	  $monthh=$_POST["monthh"];
	  $yearr=$_POST["yearr"];
	  //echo $scode.$subj.$class.$month.$year.$ccode;
	  
	 if($sscode=="" || $cccode=="" || $classs=="" || $monthh=="" || $yearr=="")
  {
	 echo "<script>alert('please insert all field.....!!!!')</script>"; 
  }
  else
  {
  $tab_check=$sscode.$subjected.$classs.$monthh.$yearr.$cccode;
  $tab="result".$sscode.$subjected.$classs.$monthh.$yearr.$cccode;
  }
 
   if($result= mysqli_query($con,("show tables like '".$tab."'")))
	 {
		 if($result->num_rows==1)
		 {
			 echo "<script>alert('table alreay exist......!!!!')</script>";
			 
			/* error_reporting(0);
	 
      $tab=$sscode.$subjected.$classs.$monthh.$yearr.$cccode;
      $sql1="select*from $tab";
	  $result1=mysqli_query($con,$sql1);
  

     while($row=mysqli_fetch_array($result1))
   {
	?>
    <tr><td> <?php echo $row['sn']?></td>
        <td><?php echo $row['scode']?></td>
        <td><?php echo $row['center_code']?></td>
        <td hidden=""><?php echo $row['roll']?></td>
        <td hidden=""><?php echo $row['name']?></td>
        <td><?php echo $row['subject']?></td>
        <td><?php echo $row['class']?></td>
         <td hidden=""><?php echo $row['date']?></td>
         <td><?php echo $row['std_id']?></td>
         <td> 
         <form action="../school_user/view_copy.php" method="post">
         <input type="hidden" value="<?php echo $tab ?>" name="tabname">
         <input type="hidden" value="<?php echo $row['scode'];?>" name="scode">
         <input type="hidden" value="<?php echo $row['center_code'];?>" name="center_code">
         <input type="hidden" value="<?php echo $row['roll']; ?>" name="rollno">
         <input type="hidden" value="<?php echo $row['name'];?>" name="name1">
         <input type="hidden" value="<?php echo $row['subject']; ?>" name="subject">
         <input type="hidden" value="<?php echo $row['class'];?>" name="class">
         <input type="hidden" value="<?php echo $row['date'];?>" name="date">
         <input type="hidden" value="<?php echo $row['std_id'];?>" name="std_id">
         <input type="submit" class="btn btn-success" name="copyview" value="Upload">
         
         </form>
         
         </td>
         
    
    </tr>
   <?php
  }*/

 		 
		 }
	 
	 else
	 {
		 if($result2= mysqli_query($con,("show tables like '".$tab_check."'")))
	     {
		 if($result2->num_rows==1)
		 {
		// mkdir("dataimgs/$tab",0777,true);
		 $sql="create table $tab(sn int NOT NULL AUTO_INCREMENT,scode varchar(255),center_code varchar(255),roll varchar(255),name varchar(255),subject varchar(255),class varchar(255),date varchar(255),marks varchar(20),std_id varchar(255),res_doc int,PRIMARY KEY(sn))";
if(mysqli_query($con,$sql))
{
  echo "<script>alert('your table created succesfully......!!!!')</script>";
}
else
{
  echo "<script>alert('something error.....!!!!')</script>";
}
		 }
		 else
		 {
			echo "<script>alert('data is not match......!!!!')</script>"; 
		 }
		 }
       
	   
	   
	   
	   
	   
	 }
	 }
	 
	 
	 ?>
     
	 
	 <div class="card-body" id="abc">
                                   
										<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> S.N</th>
            <th>Table Name</th>
            
          </tr>
        </thead>
        <tbody>
     
           <?php 
  
  if($sscode=="" || $cccode=="" || $classs=="" || $monthh=="" || $yearr=="")
  {
	/* echo "<script>alert('please insert all field.....!!!!')</script>";*/ 
  }
  else
  {
	  $tab1="result".$sscode.$subjected.$classs.$monthh.$yearr.$cccode;
      $res="result";
 // $con=mysqli_connect("localhost","root","","online_copy_evaluation");
   $sql1="show tables like '$res%$subjected%'";
$result1=mysqli_query($con,$sql1);
  $count=0;

while($row=mysqli_fetch_array($result1))
{
	?>
  <tr><td> <?php echo $count=$count+'1' ?></td><td><?php echo $row[0]?></td></tr>
<?php
}}

?>
        
        </tbody>
      </table>
      

    </div>
  
  
  
 
 </div>
  
  