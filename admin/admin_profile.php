<?php
session_start();
if (($_SESSION['admin_name'] == '') || (!isset($_SESSION['admin_name'])))
 {
    header('location:index.php');
}
else
{
  require_once('connection.php');
  $aname=$_SESSION['admin_name'];

  $data=mysqli_fetch_array(mysqli_query($cn,"SELECT * FROM `admin_login` "));
 //   $data=mysqli_fetch_array($sql);

  if (isset($_POST['b1']))
  {
    //$id=$_POST['txtid'];
    $fullname=$_POST['txtname'];
    $address=$_POST['txtaddress'];
    $city=$_POST['txtcity'];
    $state=$_POST['txtstate'];
    $email=$_POST['txtemail'];
    $mobile=$_POST['txtmobile'];
   
    if($_FILES['txtphoto']['name'] == '')
    {
      $photo=$_POST['h1'];
    }
    else
    {
      $photo=$_FILES['txtphoto']['name'];
      $tempname=$_FILES['txtphoto']['tmp_name'];
      move_uploaded_file($tempname, "image/adminimg/$photo");
    
    }

    $rows=mysqli_query($cn,"UPDATE `admin_login` SET `fullname`='$fullname',`adminimg`='$photo',`address`='$address',`city`='$city',`state`='$state',`email`='$email',`mobile`='$mobile' WHERE `admin_id`=1 ");
    

  header('location:admin_profile.php');
}
  if(isset($_POST['b2']))
  {
    $password=$_POST['txtnewpassword'];

     $rows=mysqli_query($cn,"UPDATE `admin_login` SET `pwd`='$password' WHERE `admin_id`=1 ");
  } 


}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AlumniStar </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- pace-progress -->
  <link rel="stylesheet" href="plugins/pace-progress/themes/blue/pace-theme-flat-top.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="dashboard.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
<?php 
$result=mysqli_query($cn,"select * from student_profile where status='nonactive' order by s_id desc");
$result1=mysqli_fetch_array(mysqli_query($cn,"select count(*) from student_profile where status='nonactive'"));
?>

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge"><?php echo $result1[0]; ?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"><?php echo $result1[0];?>&nbsp; Notifications</span>
          <?php 
          while($r=mysqli_fetch_array($result))
          {
            ?>

          <div class="dropdown-divider"></div>
          <a href="edit_student.php" class="dropdown-item">
            <i class="fas fa-envelope mr-2">&nbsp;&nbsp;&nbsp;<?php echo $r[1]; ?>&nbsp;<?php echo $r[2]; ?>&nbsp;&nbsp;&nbsp; Registred..</i> 
            
          </a>
          <?php
          }
          ?>
      </li>
      <!-- user profile -->

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <img src="image/adminimg/<?php echo $_SESSION['admin_photo'] ?>" class="brand-image img-circle elevation-3" alt="User Image" height="30" width="30">
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          
            <div class="media" style="background-color: skyblue;">
              
              <div class="media-body">
                <table align="center">
                  <tr>
                    <td></td>
                    <td><img src="image/adminimg/<?php echo $_SESSION['admin_photo'] ?>" class="img-circle elevation-2" alt="User Image"  style="height: 100px; width: 100px;" /></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>&nbsp;&nbsp;&nbsp;<?php echo $aname; ?></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>&nbsp;&nbsp;&nbsp;<small>Administrator</small></td>
                    <td></td>
                  </tr>
                </table>
              </div>
            </div>
          
          
              <div class="dropdown-divider"></div>
                <div>
                      &nbsp;<a href="admin_profile.php" class="btn btn-default btn-flat" style="text-align: left;" >Profile</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <a href="logout.php" class="btn btn-default btn-flat" style="text-align: right;">Sign Out</a>
                </div>
              </div>
          
      </li>
      <!--<li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>-->
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AlumniStar</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div>
          <img src="image/adminimg/<?php echo $_SESSION['admin_photo'] ?>" class="img-circle elevation-2" alt="User Image" />
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $aname; ?></a>&nbsp;
           <!-- Status -->
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>
                Staff
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_staff.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Staff</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="edit_staff.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Staff</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_staff.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Staff</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                Student
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!--<li class="nav-item">
                <a href="add_student.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Student</p>
                </a>
              </li>-->
              <li class="nav-item">
                <a href="edit_student.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Student</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_student.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Student</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                News
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_news.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add News</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="edit_news.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit News</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_news.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View News</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-certificate"></i>
              <p>
                Event
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_event.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Event</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="edit_event.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Event</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_event.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Event</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Placement
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_placement.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Placement</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="edit_placement.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Placement</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_placement.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Placement</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Gallary
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_gallary.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Gallary</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="edit_gallary.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Gallary</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_gallary.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Gallary</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon  fa fa-file"></i>
              <p>
                Biodata
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="view_normal_biodata.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Normal Biodata</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_cv_biodata.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View CV Biodata</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_resume_biodata.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Resume Biodata</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-mail-bulk"></i>
              <p>
                 Mail
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="bulk_mail.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bulk Mail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="send_mail.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Single Mail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_mail.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Mail</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="message.php" class="nav-link">
              <i class="nav-icon far fa-comments"></i>
              <p>
                Message
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Admin Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Admin Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<!--------------------------------------------------------------------------------------------->
	<section class="content">
		<!-- ./row -->
        <div class="row">
        	<!-- /.col -->
          <div class="col-md-3">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white"
                   style="background: url('dist/img/photo1.png') center center;">
                <h3 class="widget-user-username text-right"><?php echo $aname; ?></h3>
                <h5 class="widget-user-desc text-right">Administrative</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle" src="image/adminimg/<?php echo $_SESSION['admin_photo'] ?>" class="brand-image img-circle elevation-3" alt="User Avatar">
              </div>
              <div class="card-footer">
                
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- /.col -->

          <div class="col-12 col-sm-6 col-lg-9">
            <div class="card card-primary card-outline card-outline-tabs">
              <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Password</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
		                  <form role="form" method="post" name="profile" enctype="multipart/form-data" onsubmit="return validate()">
				                <div class="card-body">
				                  <div class="form-group"style="text-align: left">
				                    <label for="exampleInputEmail1">FullName</label>
				                    <input type="text" class="form-control" id="txtname"name="txtname" value="<?php echo $data[2]; ?>" placeholder="">
                            <span id="fullname" class="text-danger font-weight-bold"> </span>
				                  </div>

				                  <div class="form-group"style="text-align: left">
				                    <label for="exampleInputFile">Photo</label>
				                    <div class="input-group">
				                      <div class="custom-file">
				                        <input type="file" class="custom-file-input" id="txtphoto" name="txtphoto"  onchange="f1()" />
                                <input type="hidden" name="h1" id="h1" value="<?php echo $data['adminimg'] ?>" />
				                        <label class="custom-file-label" for="exampleInputFile" id="l1" >Choose file</label>
                                <span id="photo" class="text-danger font-weight-bold"> </span>
				                      </div>
				                    </div>
				                  </div>  

				                  <div class="form-group"style="text-align: left">
				                    <label for="exampleInputEmail1">Address</label>
				                    <textarea type="textbox" class="form-control" id="txtaddress" name="txtaddress" ><?php echo $data[4]; ?></textarea>
                            <span id="address" class="text-danger font-weight-bold"> </span>
				                  </div>

				                  <div class="form-group"style="text-align: left">
				                    <label for="exampleInputEmail1">City</label>
				                    <input type="text" class="form-control" id="txtcity"name="txtcity" value="<?php echo $data[5]; ?>" placeholder="">
                            <span id="city" class="text-danger font-weight-bold"> </span>
				                  </div>

				                  <div class="form-group"style="text-align: left">
				                    <label for="exampleInputEmail1">State</label>
				                    <input type="text" class="form-control" id="txtstate"name="txtstate"value="<?php echo $data[6]; ?>" placeholder="">
                            <span id="state" class="text-danger font-weight-bold"> </span>
				                  </div>

				                    

				                  <div class="form-group"style="text-align: left">
				                    <label for="exampleInputEmail1">Email</label>
				                    <input type="email" class="form-control" id="txtemail" name="txtemail"value="<?php echo $data[7] ?>" placeholder>
                            <span id="email" class="text-danger font-weight-bold"> </span>
				                  </div>
				                  

				                  <div class="form-group"style="text-align: left">
				                    <label for="exampleInputEmail1">Mobile</label>
				                    <input type="text" class="form-control" id="txtmobile"name="txtmobile"value="<?php echo $data[8] ?>" placeholder="">
                            <span id="mobile" class="text-danger font-weight-bold"> </span>
				                  </div>
				                  
				                </div>
				                <!-- /.card-body -->

		                <div class="card-footer">
		                  <button type="submit" class="btn btn-primary" id="b1" name="b1" onclick="return postConfirm()">Update</button>
		                </div>
		              </form>
                  </div>
                <!---------------------------------------------------------------------------------------->

                  <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                      <form role="form" method="post" name="password" enctype="multipart/form-data" onsubmit="return validation()">
                      		<div class="form-group"style="text-align: left">
				                <label for="exampleInputEmail1">New Password</label>
				                <input type="password" class="form-control" id="txtnewpassword" name="txtnewpassword" placeholder=" New Password">
                        <span id="newpassword" class="text-danger font-weight-bold"> </span>
				            </div>

				            <div class="form-group"style="text-align: left">
				                <label for="exampleInputEmail1">Re-Enter Password</label>
				                <input type="password" class="form-control" id="txtreenterpassword" name="txtreenterpassword" placeholder=" Re-Enter Password">
                        <span id="conpassword" class="text-danger font-weight-bold"> </span>
				            </div>
                      <input type="hidden" name="txtid" id="txtid" />
                      	<div class="card-footer">
		                  <button type="submit" class="btn btn-primary" id="b2" name="b2" onclick="return postConfirm()">Update</button>
		                </div>
                      </form>
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
        <!-- /.row -->

     </section>
<!---------------------------------------------------------------------------------------------->







    
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script type="text/javascript">
  function f1()
  {
    
    document.getElementById("l1").innerHTML=document.getElementById("txtphoto").value;
  }
</script>




<!--<script>
  $(function () {
    $('#example1').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
    });
  });
</script>-->
<script>
  $("#checkall").click(function()
  {
    $('input:checkbox').not(this).prop('checked',this.checked);
  });

</script>


<script type="text/javascript">
                      function postConfirm() 
                      {
                        if (confirm('Are You Sure Want to Update a Record ? '))
                          {
                            myCoolForm.submit();
                          } 
                        else 
                        {
                          document.getElementById("myModal").style.visibility = "hidden";
                          location.reload();
                          return false;
                        }
                      }
</script>
<script type="text/javascript">
  function validate()
  {
    var fullname = document.getElementById('txtname').value;
    var address = document.getElementById('txtaddress').value;
    var city = document.getElementById('txtcity').value;
    var state = document.getElementById('txtstate').value;
    var email = document.getElementById('txtemail').value;
    var mobile = document.getElementById('txtmobile').value;

    if (fullname == "") 
    {
      document.getElementById('fullname').innerHTML = "** Please fill the FullName field";
      return false;
    }
    if((fullname.length <=2)||(fullname.length >50))
    {
      document.getElementById('fullname').innerHTML = "** FullName length must be between 2 and 50";
      return false;
    }
    if(!isNaN(fullname))
    {
      document.getElementById('fullname').innerHTML = "** only character are allowed";
      return false;
    }

    if (address == '') 
    {
      document.getElementById('address').innerHTML = "** Please fill the Address field";
      return false;
    }
    if((address.length <=20)||(address.length >100))
    {
      document.getElementById('address').innerHTML = "** FullName length must be between 20 and 100";
      return false;
    }

    if (city == "") 
    {
      document.getElementById('city').innerHTML = "** Please fill the City field";
      return false;
    }
    if((city.length <=3)||(city.length >50))
    {
      document.getElementById('city').innerHTML = "** City length must be between 3 and 50";
      return false;
    }
    if(!isNaN(city))
    {
      document.getElementById('city').innerHTML = "** only character are allowed";
      return false;
    }

    if (state == "") 
    {
      document.getElementById('state').innerHTML = "** Please fill the State field";
      return false;
    }
    if((state.length <=3)||(state.length >50))
    {
      document.getElementById('state').innerHTML = "** State length must be between 3 and 50";
      return false;
    }
    if(!isNaN(state))
    {
      document.getElementById('state').innerHTML = "** only character are allowed";
      return false;
    }

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

    if(mobile == "")
    {
      document.getElementById('mobile').innerHTML =" ** Please fill the Mobile Number field";
      return false;
    }
    if(isNaN(mobile))
    {
      document.getElementById('mobile').innerHTML =" ** User must write digits only not characters";
      return false;
    }
    if(mobile.length!=10)
    {
      document.getElementById('mobile').innerHTML =" ** Mobile Number must be 10 digits only";
      return false;
    }
    

  }
</script>

<script type="text/javascript">
  function validation()
  {
      var newpassword = document.getElementById('txtnewpassword').value;
      var conpassword = document.getElementById('txtreenterpassword').value;
      

      if(newpassword == "")
      {
        document.getElementById('newpassword').innerHTML =" ** Please fill the Password field";
        return false;
      }
      if((newpassword.length <= 5) || (newpassword.length > 20)) 
      {
        document.getElementById('newpassword').innerHTML =" ** Passwords lenght must be between  5 and 20";
        return false; 
      }


      if(newpassword!=conpassword)
      {
        document.getElementById('conpassword').innerHTML =" ** Password does not match the Re-Enter password";
        return false;
      }

      if(conpassword == "")
      {
        document.getElementById('conpassword').innerHTML =" ** Please fill the Re-Enter Password field";
        return false;
      }


      

  }
</script>
 

</body>
</html>
