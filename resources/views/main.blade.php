<!DOCTYPE html>
<html lang="en" style="background-image: url(parking.png) !important;">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>PARKINO ADMIN SYSTEM</title>
  <!-- Bootstrap core CSS-->
  <link href="css/style.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/hover.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top" style=" background-color: transparent !important;">
  <!-- start navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"id="mainNav">
    <a class="User" href="#"style="color: #5ba8ff;">
      <i class="fa fa-fw fa-user"></i>   Aysha Mohamed <i class="fa fa-fw fa-caret-down"></i> </a>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item" style="background-color: #5ba8ff; padding-top: 3px; padding-bottom: 3px;
         padding-left: 5px; padding-right: 5px; font-size: 15px; border-radius: 5px;">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out" style="color: #fff;"></i> Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <!--start content-->
  <section>
   <div class="text-center sub">
    <div class="row">
      <img src="logo1.png" style="margin:30px 165px;">
        <a href="{{route('Card.index')}}" class="col-lg-5 sub-a" style="">
          <i class="fa fa-fw fa-id-card"></i> Cards Page</a>
        <a href="{{route('Owner.index')}}" class="col-lg-5 sub-b" style="">
        <i class="fa fa-fw fa-user"></i> Owner Page</a>
        <a href="{{route('ParkingArea.index')}}" class="col-lg-5 sub-c" style="">
        <i class="fa fa-fw fa-map"></i> Garage Area Page</a>
        <a href="users.php" class="col-lg-5 sub-d" style="">
          <i class="fa fa-fw fa-users"></i> Users Page</a>
    </div>  
   </div>   
  </section> 
  <!--end content-->

   <!-- start footer-->
     @include('footer')
    <!--end footer--> 

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.js"></script>
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  
</body>

</html>
