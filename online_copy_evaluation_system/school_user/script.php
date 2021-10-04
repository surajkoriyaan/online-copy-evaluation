<?php 
include('includes/header.php');

?>
<form  method="POST">

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
            
            
            
    
    
  <div class="row">
    
  </div><div class="row">
    
  </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="copyupload" class="btn btn-primary" onclick="fun()">Save</button>
        </div>
      </form>


<br><br>
<div class="card-body"  id="tab1">

    <div class="table-responsive" >

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> S.N</th>
            <th>Center code</th>
            <th>roll no</th>
            <th>name</th>
            <th>Subject</th>
            <th>class</th>
            <th>date</th>
            <th>Copy</th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody  >
     
          <tr >
            <td> 1 </td>
            <td>00</td>
            <td>sample</td>
            <td>10</td>
            <td> abcd </td>
            <td>2/04/20</td>
            <td> jru8084</td>
            
            <td>
                <form action="" method="post">
                    <input type="hidden" name="edit_id" value="">
                    <button  type="submit" name="edit_btn" class="btn btn-success">Upload</button>
                </form>
            </td>
            <td>
                <form action="" method="post">
                  <input type="hidden" name="delete_id" value="">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
          </tr>
        
        </tbody>
      </table>

    </div>
  </div>
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
					url:'exaple.php',
					
					data:{ccode:ccode,rollno:rollno,username:username,clas:clas,subj:subj,day:day,month:month,year:year},
                    success: function(data)
                   {
                   $("#tab1").html(data);
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
include('includes/footer.php');

?>