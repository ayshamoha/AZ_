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
  <script>
    
  </script>
</head>

<body class="bg-dark" style=" background-color:transparent !important;">
  <div class="container">
    <div class="card card-register mx-auto mt-5" style="top: 3.5rem!important;">
      <div class="card-header" style=" color: #5BA8FF; text-align: center; font-size: 30px;">Register an Account</div>
      <div class="card-body">
        <form  action="/SMSregister" method="post">
          <input type="hidden" name="_token" value="{{ csrf_token()}}">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="firstname">First name</label>
                <input class="form-control" type="text" placeholder="First Name" name="firstname" id = "txt" onkeyup = "Validate(this)" required /> 
                @if($errors->has('firstname')) <p>{{$errors->first('firstname')}}</p> @endif
              </div>
              <div class="col-md-6">
                <label for="lastname">Last name</label>
                 <input class="form-control" type="text" placeholder="Last Name" name="lastname" id = "txt" onkeyup = "Validate(this)" required />
                 @if($errors->has('lastname')) <p>{{$errors->first('lastname')}}</p> @endif
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" placeholder="Email" class="form-control" id="userEmail" placeholder="EMail">
                 @if($errors->has('email')) <p>{{$errors->first('email')}}</p> @endif
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="password">Password</label>
                <input required name="password" placeholder="Password" type="password" class="form-control inputpass" minlength="4" maxlength="16" 
                 id="pass1" />
                  @if($errors->has('password')) <p>{{$errors->first('password')}}</p> @endif
              </div>
              <div class="col-md-6">
                <label for="passwordcon">Confirm password</label>
                <input required name="passwordcon" type="password" class="form-control inputpass" minlength="4" 
                maxlength="16" placeholder="Enter again to validate"  id="pass2" onkeyup="checkPass(); return false;" />
                  @if($errors->has('passwoedcon')) <p>{{$errors->first('passwordcon')}}</p> @endif
              </div>
            </div>
          </div>
          <input type="submit"  name="register" value="Register" href="" class="btn btn-primary btn-block" 
          style="background-color: #5BA8FF; border-color: #5BA8FF;">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Login Page</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="js/validation-forms.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
