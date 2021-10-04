<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Student Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label>Student Name </label>
                <input type="text" name="username" class="form-control" placeholder="Enter fullname">
            </div>
            <div class="row">
    <div class=" form-group col">
    <label>Enter Roll number</label>
      <input type="text" class="form-control" placeholder="roll number" maxlength="3">
    </div>
    <div class="col">
    <label>Enter Date/Time</label>
      <input type="datetime-local" class="form-control" placeholder="date and time">
    </div>
  </div>
  
  
            
            
            <div class="row">
    <div class="col form-group">
    <label>Enter class</label>
      <select class="form-control">
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
      <select class="form-control">
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
    <div class=" form-group col">
    <label>Upload Copy </label>
      <label>Notice:- Copy size should be minimum 2mb to maximum 4mb.</label>
    </div>
    
  </div>
            <div class="row ">
    <div class=" form-group col">
    <label>Copy Page1</label>
      <input type="file" class="form-control" placeholder="page1">
    </div>
    <div class="col">
    <label>Copy Page2</label>
      <input type="file" class="form-control">
    </div>
  </div><div class="row">
    <div class=" form-group col">
    <label>Copy Page3</label>
      <input type="file" class="form-control">
    </div>
    <div class="col">
    <label>Copy Page4</label>
      <input type="file" class="form-control">
    </div>
  </div>
  <div class="row">
    <div class=" form-group col">
    <label>Copy Page5</label>
      <input type="file" class="form-control" placeholder="page1">
    </div>
    <div class="col">
    <label>Copy Page6</label>
      <input type="file" class="form-control">
    </div>
  </div><div class="row">
    <div class=" form-group col">
    <label>Copy Page7</label>
      <input type="file" class="form-control">
    </div>
    <div class="col">
    <label>Copy Page8</label>
      <input type="file" class="form-control">
    </div>
  </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Upload Student Copy 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Student Details 
            </button>
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> S.N</th>
            <th>Roll No</th>
            <th>Name </th>
            <th>Class</th>
            <th>Subject</th>
            <th>EDIT </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
     
          <tr>
            <td> 1 </td>
            <td>00</td>
            <td>sample</td>
            <td>10</td>
            <td> abcd </td>
            
            <td>
                <form action="" method="post">
                    <input type="hidden" name="edit_id" value="">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
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
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>