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
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">


   <!--start header -->
   @include('header')
   
  <!--end header --> 

  <!--start header -->
   @include('navbar')
  <!--end header -->  

  <div class="content-wrapper">
    <div class="container-fluid" style="margin-top:60px;margin-bottom: 13px;">
      
    <!-- Example DataTables Card-->
      <form method="POST" action="{{route('Owner.store')}}" role="form" class="form-control">
        {{csrf_field()}}
        <div class="form-group">
          <label name="email">Insert email : </label>
          <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form_group">
          <label name="name">Insert owner name : </label>
          <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form_group">
          <label name="phone_number">Insert phone number : </label>
          <input type="phone" name="phone_number" id="phone_number" class="form-control">
        </div>

        <div class="form_group">
            <label style="font-size: 14px;">
                <span>Choose Images for your Garage Please : <span class="grag">( MUST NOT ENTER MORE 4 IMAGES )</span></span>
            </label>
            <ul>
                <li>
                    Allowed only files with extension (jpg, png, gif)
                </li>
                <li>
                    Maximum number of allowed files 4 with 300 KB for each
                </li>
                <li>
                    you can select files from different folders
                </li>
            </ul>
            <!--To give the control a modern look, I have applied a stylesheet in the parent span.-->
            <span class="btn btn-success fileinput-button">
                <span>Choose Images</span>
                <input type="file" name="files[]" id="files" multiple accept="image/jpeg, image/png, image/gif,"><br />
            </span>
            <output id="Filelist"></output>
            
        <button value="submit" name="submit" class="subm">Submit</button> 
        </div>
      </form>
      
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->

    <!--start footer -->
     @include('footer')
    <!--end footer -->  

    <!-- Bootstrap core JavaScript-->
    <script "../vendor/jquery/jquery-1.10.2.js"></script>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../js/functions.cards.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/image.js"></script>
    <script src="../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../js/sb-admin-datatables.min.js"></script>
  
</body>

</html>
