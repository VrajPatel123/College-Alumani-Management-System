<?php
session_start();
require_once('connection.php');
if(isset($_POST['b1']))
{
  $email=$_POST['txtemail'];
  $pwd=$_POST['txtpwd'];

$r=mysqli_fetch_array(mysqli_query($cn,"select count(*),fullname,adminimg from admin_login
where email='$email' and pwd='$pwd'"));

if($r[0]==1)
{
  $_SESSION['admin_name']=$r['fullname'];
  $_SESSION['admin_photo']=$r['adminimg'];
  header('location:dashboard.php');
}

}


?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Login Form</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini" background="dist\img\photo4.jpg">
<!--<div class="wrapper">-->
  <!-- Navbar -->
  
      <!-- Notifications Dropdown Menu -->
   
  
  <!--<div class="content-wrapper">-->
    <!-- Content Header (Page header) -->
    
            <p style="text-align: center; ">
              <img src="dist\img\avatar5.png" style="border-radius: 50%">
            </p>
            <h1 align="center">Admin</h1> 
          
      

    <!-- Main content -->
    
        
          <!-- left column -->
          <center>
          <div class="col-md-5">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Login</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" enctype="multipart/form-data" name="login" onsubmit="return validation()">
                <div class="card-body">
                  <div class="form-group" style="text-align: left">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="text" class="form-control" id="txtemail" name="txtemail" placeholder="Enter email" autocomplete="off">
                    <span id="email" class="text-danger font-weight-bold"> </span>
                  </div>
                  <div class="form-group"style="text-align: left">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="txtpwd" name="txtpwd" placeholder="Password" autocomplete="off" >
                    <span id="password" class="text-danger font-weight-bold"> </span>
                  </div>
                  <div class="form-check"style="text-align: left">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="b1" id="b1">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
             </center> 
            <!-- Form Element sizes -->
          
            <!-- /.card -->

          
          <!--/.col (left) -->
          <!-- right column -->
           <!-- /.card -->
            <!-- general form elements disabled -->
          
          <!--/.col (right) -->
        
        <!-- /.row -->
      
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
<script type="text/javascript">
  function validation()
  {
    var email = document.getElementById('txtemail').value;
    var pass = document.getElementById('txtpwd').value;

    if(email == "")
    {
      document.getElementById('email').innerHTML =" ** Please fill the email field";
      return false;
    }
    if(email.indexOf('@') <= 0 )
    {
      document.getElementById('email').innerHTML =" ** @ Invalid Position";
      return false;
    }

    if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.'))
    {
      document.getElementById('email').innerHTML =" ** . Invalid Position";
      return false;
    }

    if(pass == "")
    {
      document.getElementById('password').innerHTML =" ** Please fill the password field";
      return false;
    }
    if((pass.length <= 5) || (pass.length > 20)) 
    {
      document.getElementById('password').innerHTML =" ** Passwords lenght must be between  5 and 20";
      return false; 
    }
      
  }
</script>

</body>
</html>
