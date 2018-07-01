<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>PARKINO ADMIN SYSTEM</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
     <!--start header -->
   @include('header')
  <!--end header --> 

  <!--start header -->
   @include('navbar')
  <!--end header -->  

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tables</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
             <table align='center' cellspacing=2 cellpadding=5 class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border=1>
              <thead>
                <tr>
                  <th>Id</th>
                  <th>name</th>
                  <th>email</th>
                  <th>password </th>
                  <th>phone_no</th>
                  <th>points </th>
                  <th>remember_token</th>
                  <th>created At</th>
                  <th>updated At</th>
                  <!-- <th>Options</th>   -->  
                </tr>
              </thead>
              <!-- <tfoot>         
                <tr>
                <td><input type="text" id="new_id"></td>
                <td><input type="text" id="new_name"></td>
                <td><input type="text" id="new_email"></td>
                <td><input type="text" id="new_password"></td>
                <td><input type="text" id="new_phone_no"></td>
                <td><input type="text" id="new_points"></td>
                <td><input type="text" id="new_remember_token"></td>
                <td><input type="text" id="new_created"></td>
                <td><input type="text" id="new_updated"></td>
                <td><input type="button" class="btn btn-warning fa fa-floppy-o" class="add" onclick="add_row();" value="Add Users"></td> 
                </tr>
              </tfoot> -->
                <tr id="row1">
                  <td id="id_row1">1</td>
                  <td id="name_row1">1</td>
                  <td id="email_row1">20</td>
                  <td id="password_row1">1</td>
                  <td id="phone_no_row1">1</td>
                  <td id="points_row1">1</td>
                  <td id="remember_token_row1">1</td>
                  <td id="created_row1">20</td>
                  <td id="updated_row1">1</td>
                 <!-- <td>
                  <input type="button" class="btn btn-success fa fa-floppy-o" id="edit_button1" value="Edit" class="edit btn-success fa fa-floppy-o" onclick="edit_row('1')">
                  <input type="button" class="btn btn-danger fa fa-floppy-o" id="save_button1" value="Save" class="save" onclick="save_row('1')">
                  <input type="button" class="btn btn-primary fa fa-floppy-o" value="Delete" class="delete" onclick="delete_row('1')">
                  </td> -->
                </tr>
                <tr id="row1">
                  <td id="id_row1">1</td>
                  <td id="name_row1">1</td>
                  <td id="email_row1">20</td>
                  <td id="password_row1">1</td>
                  <td id="phone_no_row1">1</td>
                  <td id="points_row1">1</td>
                  <td id="remember_token_row1">1</td>
                  <td id="created_row1">20</td>
                  <td id="updated_row1">1</td>
                 <!-- <td>
                  <input type="button" class="btn btn-success fa fa-floppy-o" id="edit_button1" value="Edit" class="edit btn-success fa fa-floppy-o" onclick="edit_row('1')">
                  <input type="button" class="btn btn-danger fa fa-floppy-o" id="save_button1" value="Save" class="save" onclick="save_row('1')">
                  <input type="button" class="btn btn-primary fa fa-floppy-o" value="Delete" class="delete" onclick="delete_row('1')">
                  </td> -->
                </tr>
                <tr id="row1">
                  <td id="id_row1">1</td>
                  <td id="name_row1">1</td>
                  <td id="email_row1">20</td>
                  <td id="password_row1">1</td>
                  <td id="phone_no_row1">1</td>
                  <td id="points_row1">1</td>
                  <td id="remember_token_row1">1</td>
                  <td id="created_row1">20</td>
                  <td id="updated_row1">1</td>
                 <!-- <td>
                  <input type="button" class="btn btn-success fa fa-floppy-o" id="edit_button1" value="Edit" class="edit btn-success fa fa-floppy-o" onclick="edit_row('1')">
                  <input type="button" class="btn btn-danger fa fa-floppy-o" id="save_button1" value="Save" class="save" onclick="save_row('1')">
                  <input type="button" class="btn btn-primary fa fa-floppy-o" value="Delete" class="delete" onclick="delete_row('1')">
                  </td> -->
                </tr>
                <tr id="row1">
                  <td id="id_row1">1</td>
                  <td id="name_row1">1</td>
                  <td id="email_row1">20</td>
                  <td id="password_row1">1</td>
                  <td id="phone_no_row1">1</td>
                  <td id="points_row1">1</td>
                  <td id="remember_token_row1">1</td>
                  <td id="created_row1">20</td>
                  <td id="updated_row1">1</td>
                 <!-- <td>
                  <input type="button" class="btn btn-success fa fa-floppy-o" id="edit_button1" value="Edit" class="edit btn-success fa fa-floppy-o" onclick="edit_row('1')">
                  <input type="button" class="btn btn-danger fa fa-floppy-o" id="save_button1" value="Save" class="save" onclick="save_row('1')">
                  <input type="button" class="btn btn-primary fa fa-floppy-o" value="Delete" class="delete" onclick="delete_row('1')">
                  </td> -->
                </tr>
            </table>
          </div>
        </div>
        </div>
        
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->

    <!-- start footer-->
     @include('footer')
    <!--end footer-->
    
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- script src="js/fuctions.users.js"></script> -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
