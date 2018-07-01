<!DOCTYPE html>
<html lang="en" style="background-image: url(garage.png)!important;background: center;">

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
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark" style=" background-color:transparent !important;">
  <div class="container">
    <div class="card card-login mx-auto mt-5"style="top: 3.5rem!important;">
      <div class="card-header" style="text-align: center; color: #5ba8ff; font-size: 30px; background:none;">Forgot your password?</div>
      <div class="card-body">
        <div class="text-center mt-4 mb-5">
          <p style="color: #a0a0a0;">Enter your email address and we will send you instructions on how to reset your password.</p>
        </div>
        <form>
          <div class="form-group">
            <input type="email" class="form-control" id="userEmail" placeholder="EMail" onkeyup = "Validate(this)" required >
          </div>
          <input type="submit" value="Reset Password" style="background-color: #5ba8ff;border-color: #5ba8ff;" class="btn btn-primary btn-block">
          
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
          <a class="d-block small" href="login.php">Login Page</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
