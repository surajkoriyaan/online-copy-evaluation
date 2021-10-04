<?php 
session_start();
  if(isset($_POST["copyview"]))
  {
	$_SESSION['tabres']=$_POST["tabres"];
	$_SESSION['tabname']=$_POST["tabname"];
	$_SESSION['sn']=$_POST["sn"];
	 $_SESSION['scode']=$_POST["scode"];
	 $_SESSION['center_code']=$_POST["center_code"];
	 $_SESSION['rollno']=$_POST["rollno"];
	 $_SESSION['name1']=$_POST["name1"];
	 $_SESSION['subject']=$_POST["subject"];
	 $_SESSION['class']=$_POST["class"];
	 $_SESSION['date']=$_POST["date"];
	 $_SESSION['std_id']=$_POST["std_id"];
	 $tabres=$_SESSION['tabres'];
	 $tab=$_SESSION['tabname'];
	 $roll=$_SESSION['rollno'];
	// $tabres=$_SESSION['scode']. $_SESSION['subject'].$_SESSION['class'].
  }


?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Copy correction section</title>
 <style type="text/css">
      #container {
	position: absolute;
	left: -195px;
	top: -69px;
	width: 903px;
	height: 929px;
		    }
      #imageView { border: 0px solid #000; }
    </style>

<meta charset="utf-8">
<link rel="stylesheet" href="file:///I|/Evaluation System/Evaluator/css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="file:///I|/Evaluation System/Evaluator/css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="style.css" type="text/css" media="all">


<style type="text/css">



.top
{
	display:block;
	position: absolute;
	height: 35px;
	top: 15px;
	left: 29px;
	right: 45px;
	width: 1229px;
	padding-top:1%;
	padding-left: 2%;
	padding-right: 2%;
	background-color: #FF9;
	alignment-adjust: central;
	
	border-top-left-radius: 100px;
	border-top-right-radius:100px;
	border: 3px solid  #C00 ;
}

.lt
{
	display: block;
	position: absolute;
	top: 76px;
	left: 29px;
	right: 1066px;
	width: 237px;
	background-color: #333;
	text-justify: auto;
	alignment-adjust: middle;
	line-height: 25px;
	border: 5px  ridge #FF9900;
}


.rt
{
	
	position: absolute;
	top: 5px;
	left: 10px;
	right: 55px;
	width: 551px;
	background-color: #333;
	text-justify: auto;
	alignment-adjust: middle;
	line-height: 25px;
	border: 5px  ridge #FF9900;
}

.mid
{
	display: block;
	position:fixed;
	height: 646px;
	top: 5px;
	left: 580px;
	right: 275px;
	width: 755px;
	background-color: #D2D2D2;
	alignment-adjust: central;
	border: 3px  ridge #003;
	overflow: scroll;
	color: #006;
}
.pg_info
{
	display: block;
	position: absolute;
	height: 37px;
	top: 29px;
	left: 173px;
	right: 275px;
	width: 746px;
	padding-top: 4px;
	padding-left: 1%;
	padding-right: 1%;
	background-color: #FFFFCA;
	box-shadow: #FFF 0px 0px 3px 3px;
	alignment-adjust: central;
	border: 3px  ridge #003;
	font-size: 21px;
}


.put {
	float:none;
	width:45px;
	height:18px;
	padding:5px 0px;
	border:2px solid #CF0;
	border-top-left-radius:9px;
	border-bottom-left-radius:9px;
	border-bottom-right-radius:9px;
	border-top-right-radius:9px;
	background:#333;
	padding:1px 0px;
	margin-top:1px;
	margin-bottom:2px;
	text-align:center;
	box-shadow:#333 0px 0px 3px 3px;
	font:15px Arial, Helvetica, sans-serif;
	color:#CF0;
}

.put1 {
	float:none;
	width:145px;
	height:16px;
	padding:5px 0px;
	border:2px solid #CF0;
	border-top-left-radius:9px;
	border-bottom-left-radius:9px;
	border-bottom-right-radius:9px;
	border-top-right-radius:9px;
	background:#333;
	padding:1px 1px;
	margin-top:1px;
	margin-bottom:2px;
	text-align:center;
	box-shadow:#333 0px 0px 3px 3px;
	font:12px Arial, Helvetica, sans-serif;
	color:#CF0;
}


.inco {
	width:95px;
	height:19px;
	border:2px solid #333;
	border-top-left-radius:7px;
	border-bottom-left-radius:7px;
	border-bottom-right-radius:7px;
	border-top-right-radius:7px;
	background:#EAEAEA;
	box-shadow:#F93 0px 0px 3px 3px;
	margin-right:3px;
	text-align:center;
	font:16px Arial, Helvetica, sans-serif;
	color:#003;
	
}

.ino {
	width:115px;
	height:19px;
	border:2px solid #333;
	border-top-left-radius:7px;
	border-bottom-left-radius:7px;
	border-bottom-right-radius:7px;
	border-top-right-radius:7px;
	background:#EAEAEA;
	box-shadow:#F93 0px 0px 3px 3px;
	margin-right:3px;
	text-align:center;
	font:16px Arial, Helvetica, sans-serif;
	color:#003;
	
}

.tick {
	display:inline-block;
	background:url(file:///I|/Evaluation%20System/Evaluator/images/tick.png) no-repeat;
	font-size:20px ;
	display:inline-block;
	text-align:center;
	text-decoration:none;
	color:#006;
	text-decoration:none ;
	line-height:31px;
	border: 2px solid #FFF;
	border-bottom-right-radius:16px;
	border-bottom-left-radius:16px;
	border-top-left-radius:16px;
	border-top-right-radius:16px;
	box-shadow:#CCC 0px 0px 5px 5px;
}
.cross {
	display:inline-block;
	background:url(file:///I|/Evaluation%20System/Evaluator/images/cross.png) no-repeat;
	font-size:20px ;
	display:inline-block;
	text-align:center;
	text-decoration:none;
	color:#006;
	text-decoration:none ;
	line-height:29px;
	border: 2px solid #FFF;
	border-bottom-right-radius:16px;
	border-bottom-left-radius:16px;
	border-top-left-radius:16px;
	border-top-right-radius:16px;
	box-shadow:#CCC 0px 0px 5px 5px;
}

.coput {
	float:none;
	width:40px;
	height:22px;
	padding:2px 0px;
	border:2px solid #000;
	border-top-left-radius:9px;
	border-bottom-left-radius:9px;
	border-bottom-right-radius:9px;
	border-top-right-radius:9px;
	background:#FF9;
	padding:1px 0px;
	margin-top:1px;
	margin-bottom:2px;
	text-align:center;
	font:19px Arial, Helvetica, sans-serif;
	color:#676767;
}
table tr td
{
	color:#FFF;
}

</style>



 <script type="text/javascript">
function Calculate()
{

  var a1 = GetFieldValue( "A1" );
  var a2 = GetFieldValue( "A2" );
  var a3 = GetFieldValue( "A3" );
  var a4 = GetFieldValue( "A4" );
  var a5 = GetFieldValue( "A5" );
  var a6 = GetFieldValue( "A6" );
  var a7 = GetFieldValue( "A7" );
  var a8 = GetFieldValue( "A8" );
  var a9 = GetFieldValue( "A9" );
  var a10 = GetFieldValue( "A10" );
  var a11 = GetFieldValue( "A11" );
  var a12 = GetFieldValue( "A12" );
  var a13 = GetFieldValue( "A13" );
  var a14 = GetFieldValue( "A14" );
  var a15 = GetFieldValue( "A15" );
  var a16 = GetFieldValue( "A16" );
  var a17 = GetFieldValue( "A17" );
  var a18 = GetFieldValue( "A18" );
  var a19 = GetFieldValue( "A19" );
  var a20 = GetFieldValue( "A20" );
  var a21 = GetFieldValue( "A21" );
  var a22 = GetFieldValue( "A22" );
  var a23 = GetFieldValue( "A23" );
  var a24 = GetFieldValue( "A24" );
  var a25 = GetFieldValue( "A25" );
  var a26 = GetFieldValue( "A26" );
}
				 
</script>



<script type="text/javascript">


function Calculate()
{
  var a1 = document.getElementById('A1').value;
  var a2 = document.getElementById('A2').value; 
  var a3 = document.getElementById('A3').value; 
  var a4 = document.getElementById('A4').value; 
  var a5 = document.getElementById('A5').value; 
  var a6 = document.getElementById('A6').value; 
  var a7 = document.getElementById('A7').value; 
  var a8 = document.getElementById('A8').value; 
  var a9 = document.getElementById('A9').value; 
  var a10 = document.getElementById('A10').value; 
  var a11 = document.getElementById('A11').value; 
  var a12 = document.getElementById('A12').value; 
  var a13 = document.getElementById('A13').value; 
  var a14 = document.getElementById('A14').value;  
  var a15 = document.getElementById('A15').value; 
  var a16 = document.getElementById('A16').value; 
  var a17 = document.getElementById('A17').value; 
  var a18 = document.getElementById('A18').value; 
  var a19 = document.getElementById('A19').value; 
  var a20 = document.getElementById('A20').value; 
  var a21 = document.getElementById('A21').value; 
  var a22 = document.getElementById('A22').value; 
  var a23 = document.getElementById('A23').value; 
  var a24 = document.getElementById('A24').value; 
  var a25 = document.getElementById('A25').value; 
  var a26 = document.getElementById('A26').value; 
					    
  document.getElementById('A27').value= parseFloat(a1)+ parseFloat(a2)+parseFloat(a3)+parseFloat(a4)+  
										parseFloat(a5)+parseFloat(a6)+ parseFloat(a7)+parseFloat(a8)+
										parseFloat(a9)+ parseFloat(a10)+parseFloat(a11)+parseFloat(a12)+
										parseFloat(a13)+ parseFloat(a14)+parseFloat(a15)+ parseFloat(a16)+
										parseFloat(a17)+ parseFloat(a18)+parseFloat(a19)+parseFloat(a20)+ 
										parseFloat(a21)+parseFloat(a22)+parseFloat(a23)+parseFloat(a24)+
										parseFloat(a25)+parseFloat(a26);
  document.fm2.submit();
}
</script>
<script language = "javascript" type = "text/javascript">
	function validate()
	{
		var  A1 = document.form.fm2.A1.value;
		if(A1 == "")
		{
			alert(" Please enter  number");
			document.form.fm2.A1.focus();
			return false;
		}
			var A1Pattern = new RegExp("[0-1]{1}");
			if(A1Pattern.test(A1) == false)
			{
				alert("Number should be a number and 1 digit");
				document.form.fm2.A1.focus();
				return false;
			}
		
		return true;
		
	}
	
	</script>

</head>
<body bgcolor="#0099FF" >
<form name ="fm6" Method="post" Action="mks_update.php" id="fm2" return>
  <div class="rt" id="rt"><br><center>
 
        <center>
        <font size="+2"  color="#CCFF66">
        
        <b>Annotation</b>
        </font>
 		<hr  size="3"  color="#3399FF">
     <table width="253" height="150">
     <tr> 
		<td height="38"> 
        <font color="#FFFF99">
        <b>Serial No</b>
        </font>
        </td>
        
        <td>  
    	<input type="text" class="inco" name="sn" id="sn" value="<?php echo $_SESSION['sn'];?>" readonly>
        </td>
        </tr>
     
        <tr>
        <td width="117" height="37">
        <font color="#FFFF99">
        <b>Subject Name</b>
        </font>
        </td> 
        
        <td width="95">
      	<input type="text" class="inco" name="subject" id="sn" value="<?php echo $_SESSION['subject'];?>" readonly>
        <input type="text" class="inco" name="tabname" id="sn" value="<?php echo $_SESSION['tabname'];?>" hidden="">
        
        <input type="text" class="inco" name="center_code" id="sn" value="<?php echo $_SESSION['center_code'];?>" hidden="">
        <input type="text" class="inco" name="name1" id="sn" value="<?php echo $_SESSION['name1'];?>" hidden="">
        <input type="text" class="inco" name="rollno" id="sn" value="<?php echo $_SESSION['rollno'];?>" hidden="">
        <input type="text" class="inco" name="class" id="sn" value="<?php echo $_SESSION['class'];?>" hidden="">
        <input type="text" class="inco" name="date" id="sn" value="<?php echo $_SESSION['date'];?>" hidden="">
         
        
        </td>
        </tr>
        
		<tr> 
		<td height="38"> 
        <font color="#FFFF99">
        <b>School Code</b>
        </font>
        </td>
        
        <td>  
    	<input type="text" class="inco" name="scode" id="sc" value="<?php echo $_SESSION['scode'];?>" readonly>
        </td>
        </tr>
        
    	<tr>
    	<td height="25">
        <font color="#FFFF99">
        <b>Student Id &nbsp;</b>
        </font>
        </td>
        
        <td>  
   	    <input type="text" class="inco" name="std_id" id="rn" value="<?php echo $_SESSION['std_id'];?>" readonly>
        </td>
        </tr>
        </table>
        </center>
        
    	<hr size="3 color="#3399FF">
      
   		<font size="+1"  color="#CCFF66">
        <center>
  	   <table width="411" height="42">
   		  
   		
    	<tr> 
        <td width="19" height="29">1.</td> 
        <td width="24"><font face="Georgia, Times New Roman, Times, serif">i )</font></td>
 	    <td width="56"><input type="text" class="coput" name="A1" id="A1" onblur='Calculate();' maxlength="1"></td>

    
        <td width="59"><font face="Georgia, Times New Roman, Times, serif">ii )</font> </td>
   		<td width="115"> <input type="text" class="coput" name="A2" id="A2" onblur='Calculate();' maxlength="1"></td>
        </tr>
    
   		
        </table>
  		</center>
  
  		<hr  size="3"  color="#3399FF">
        <center>
 	    <table width="532" height="41">
        
       	<tr> 
         
        <td width="30"> &nbsp; 2.</td>  
      	<td width="50"><input type="text" class="coput" name="A3" id="A3" onblur='Calculate();' maxlength="1"></td>
       
        <td width="31"> &nbsp; 3.</td>   
        <td width="48"> <input type="text" class="coput" name="A4" id="A4" onblur='Calculate();' maxlength="1"></td>
        
        
        
        <td width="36">&nbsp; 4.</td>  
      	<td width="51"><input type="text" class="coput" name="A5" id="A5" onblur='Calculate();' maxlength="1"></td>
        
        <td width="33">&nbsp; 5.</td>
  	    <td width="46"><input type="text" class="coput" name="A6" id="A6" onblur='Calculate();' maxlength="1"></td>
       
    
   		 
        
		<td width="34">&nbsp; 6.</td>
        <td width="44"><input type="text" class="coput" name="A7" id="A7" onblur='Calculate();' maxlength="1"></td>
        
        <td width="33" height="29">&nbsp; 7.</td>  
      	<td width="44"><input type="text" class="coput" name="A8" id="A8" onblur='Calculate();' maxlength="1"></td>
        </tr>
        </table>
	</center>
        
	<hr  size="3"  color="#3399FF">
    
        <center>
 		<table width="551" height="74">
        
     <tr>
        
        <td width="24">&nbsp; 8.</td>  
      	<td width="44"><input type="text" class="coput" name="A9" id="A9" onblur='Calculate();' maxlength="1"></td>
       
        <td width="44">&nbsp; 9.</td>   
        <td width="49"> <input type="text" class="coput" name="A10" id="A10" onblur='Calculate();' maxlength="1"></td>
        
       
        
    
        <td width="44">10.</td> 
      	<td width="44"><input type="text" class="coput" name="A11" id="A11" onblur='Calculate();' maxlength="1"></td>
	
        <td width="35">11.</td> 
  	    <td width="52"><input type="text" class="coput" name="A12" id="A12" onblur='Calculate();' maxlength="1"></td>
      
        
        
       
		<td width="36">12.</td> 
        <td width="44"><input type="text" class="coput" name="A13" id="A13" maxlength="1"></td>
        
        <td width="35" height="29">13.</td>  
      	<td width="48"><input type="text" class="coput" name="A14" id="A14" onblur='Calculate();' maxlength="1"></td>
       </tr>
        
        <tr> 
       
        <td width="44" height="35">14.</td>
  	    <td width="44"><input type="text" class="coput" name="A15" id="A15" onblur='Calculate();' maxlength="1"></td>
        
		<td width="49">15.</td>
        <td width="44"><input type="text" class="coput" name="A16" id="A16" onblur='Calculate();' maxlength="1"></td>
        
        
        
        <td width="44">16.</td>  
      	<td width="44"><input type="text" class="coput" name="A17" id="A17" onblur='Calculate();' maxlength="1"></td>
       
        <td width="49">17.</td>
  	    <td width="44"><input type="text" class="coput" name="A18" id="A18" onblur='Calculate();' maxlength="1"></td>
        
        
        
		<td width="44">18.</td>
        <td width="44"><input type="text" class="coput" name="A19" id="A19" onblur='Calculate();' maxlength="1"></td>
        
        <td width="49">19.</td>  
      	<td width="44"><input type="text" class="coput" name="A20" id="A20" onblur='Calculate();' maxlength="1"></td>
        </tr>
      
        </table>
  		</center>
        
  		<hr  size="3"  color="#3399FF">
   
   		<center>
   		<table width="211" height="35">
    	 <tr> 
       
        <td width="32">20.</td>
  	    <td width="56"><input type="text" class="coput" name="A21" id="A21" onblur='Calculate();' maxlength="1"></td>
        
		<td width="29">21.</td>
        <td width="64"><input type="text" class="coput" name="A22" id="A22" onblur='Calculate();' maxlength="1"></td>
        
        <td width="6" height="29"></td>
        <td width="32">22.</td>  
      	<td width="56"><input type="text" class="coput" name="A23" id="A23" onblur='Calculate();' maxlength="1"></td>
       
        <td width="29">23.</td>
  	    <td width="64"><input type="text" class="coput" name="A24" id="A24" onblur='Calculate();' maxlength="1"></td>
        
        <td width="6" height="29"></td>
		<td width="32">24.</td>
        <td width="56"><input type="text" class="coput" name="A25" id="A25" onblur='Calculate();' maxlength="1"></td>
        
        <td width="29">25.</td>  
      	<td width="64"><input type="text" class="coput" name="A26" id="A26" onblur='Calculate();' maxlength="1"></td>
        </tr>
        </table>
  		</center>
        
 	   <hr  size="3"  color="#3399FF">
     
     <center>
     <table width="335" height="33">
     <tr>
     <td width="177"><font color="#99FF00"><b>Total Marks</b></font></td>
     <td width="146">
     <input type="text" class="inco" name="tmarks" id="A27"  onblur='Calculate();' ></td>
     </tr>
     </table>
     </center>
     
    <hr  size="3"  color="#3399FF">
  <textarea style="height:300px; width:98%" placeholder="Write any query in any question with less word"></textarea>
   <!--<input type="text" class="" name="wc1" id="wc1" readonly value="">-->
      <font color="#FFFF99">
     <!--<input type="text" class="inco" name="wc2" id="wc2" readonly value="">--></font></center> 
	  	<hr size="3 color="#3399FF"> 
    <center>
   <input type="submit" class="num" value="Submit Marks" id="b23" name="sub_mark" onClick="fun1('rt')">
   
   
   </center>
   
</div> 
   </form>
<div class="mid" id="mid">
       
  <?PHP 
		$con=mysqli_connect("localhost","root","","online_copy_evaluation");
		 $sh="select * from $tabres where roll='$roll'";
	      $run=mysqli_query($con,$sh);
		while($row = mysqli_fetch_array($run))
{ 
    
echo '<div id="imagelist">';
?>
<img src="dataimgs/<?php echo "$tabres/$roll/".$row['copy'];?>" height="600" width="750" class="img-thumbnail" id="mg">
<?php
//echo '<p id="caption">'.$row['ROLL'];
//echo '<p id="caption">'.$row['SCH_ID'];
	
echo '</div>';
}
		?>	
  <div id="container">
      <canvas id="imageView" width="940" height="2500">
        
        <p>Supported browsers: <a href="http://www.opera.com">Opera</a>, <a
          href="http://www.mozilla.com">Firefox</a>, <a
          href="http://www.apple.com/safari">Safari</a>, and <a
          href="http://www.konqueror.org">Konqueror</a>.</p>
          
      </canvas>
      
    </div>    
             
</div>  

<script type="text/javascript" src="example-2.js"></script>
</font>
<script>
function fun1()
				{
					//var backup=document.body.innerHTML;
					//var divcontent=document.getElementById(paravalue).innerHTML;
					//document.body.innerHTML=divcontent;
					document.getElementById("mid").style.display="none";
					//document.getElementById("btn").style.display="none";
					document.getElementById("b23").style.display="none";
					document.getElementById("rt").style.border="none";
					document.getElementById("rt").style.left="80px";
					window.print();
					//document.body.innerHTML=backup; 
				}
</script>
</body>
</html>
