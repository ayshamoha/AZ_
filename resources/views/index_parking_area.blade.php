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
    <div class="container-fluid">
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Of Parking Area</div>
        <div class="card-body">
          <div class="table-responsive">
             <table align='center' cellspacing=2 cellpadding=5 class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border=1>
              <thead>
                <tr>
                  <th>Id</th>
                  <th>name</th>
                  <!--<th>admin_id</th>-->
                  <!--<th>owner_id</th>-->
                  <th>long</th>
                  <th>lat</th>
                  <th>slots_no</th>
                  <th>Created At</th>
                  <th>Updated At</th> 
                  <th>Options</th>        
                </tr>
              </thead>
              @foreach($parking_areas as $parking_area)              
                <tr id="row1">            
                  
                  <td id="Id_row1">{{$parking_area->id}}</td>
                  <td id="name">{{$parking_area->name}}</td>
                  <td id="longitude">{{$parking_area->longitude}}</td>
                  <td id="latitude">{{$parking_area->latitude}}</td>
                  <td id="slots_number">{{$parking_area->slots_number}}</td>                    
                  <td id="Created_row1">{{$parking_area->created_at}}</td>
                  <td id="Updated_row1">{{$parking_area->updated_at}}</td>
                  <td>
                  <!--  
                  <input type="button" class="btn btn-success fa fa-floppy-o" id="edit_button1" value="Edit" class="edit btn-success fa fa-floppy-o" onclick="edit_row('1')">
                  -->
                  <a name="edit" id="edit" href="{{route('ParkingArea.edit',['id'=>$parking_area->id])}}" class="btn btn-success fa" class="edit btn-success fa">Edit</a>

                  <hr>

                  {!! Form::open(['route' => ['ParkingArea.destroy', $parking_area->id] , 'method'=>'DELETE']) !!}  
                    {{ Form::submit('Delete',['class'=>'btn btn-primary btn-block'])}}                         
                  {!! Form::close() !!}       


                  <!--
                  <input type="button" class="btn btn-danger fa fa-floppy-o" id="save_button1" value="Save" class="save" onclick="save_row('1')">
                  -->
                  <!-- put method-->

                  <!--
                  <a name="A" id="A" href="" class="btn btn-danger fa" class="add">Add New Cards</a>
                  -->


                  <!--
                  <input type="button" class="btn btn-primary fa fa-floppy-o" value="Delete" class="delete" onclick="delete_row('1')">
                  -->
                  <!--
                  <a name="A" id="A" href="" class="btn btn-warning fa" class="add">Add New Cards</a>
                  -->



                  </td>
                </tr>
              @endforeach
              <tfoot>
                <div class="container-fluid">
                  
                  <td><a name="A" id="A" href="{{route('ParkingArea.create')}}" class="btn btn-warning fa" class="add">Add New Parking area</a></td>
                  

                  
                </div>


                
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->

    <!--start footer -->
     @include('footer')
    <!--end footer -->  

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../js/functions.cards.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../js/sb-admin-datatables.min.js"></script>
  
</body>

</html>
