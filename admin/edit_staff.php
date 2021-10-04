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
  $sql=mysqli_query($cn,"SELECT * FROM `staff_detail`");
  $r="";
  
if(isset($_POST['b2']))
{
  $id=$_POST['txtid'];
  $name=$_POST['txtname'];
  $sname=$_POST['txtsname'];
  $gen=$_POST['r1'];
  $dob=$_POST['txtdob'];
  $email=$_POST['txtemail'];
  
  $mobile=$_POST['txtmobile'];
  
  if($_FILES['txtphoto']['name']=='')
  {
    $photo=$_POST['h1'];
  }
  else
  {
      $photo=$_FILES['txtphoto']['name'];  
      $tempname=$_FILES['txtphoto']['tmp_name'];
      move_uploaded_file($tempname, "image/staffimg/$photo");
  
  }
  $post=$_POST['txtpost'];
  $phd=$_POST['r2'];
  $master=$_POST['txtmaster'];
  $becholr=$_POST['txtbachelor'];
  if($_POST['txtother'] == '')
  {
    $other='';
  }
  else
  {

    $other=$_POST['txtother'];
  }
 

  $sql1=  mysqli_query($cn,"UPDATE `staff_detail` SET `name`='$name',`sname`='$sname',`gender`='$gen',`dob`='$dob',`email`='$email',`mobile`=$mobile,`photo`='$photo',`phd`='$phd',`master_degree`='$master',`bachelor_degree`='$becholr',`other_degree`='$other',`post`='$post'  where staff_id=$id");
    header('location:edit_staff.php');
}
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AlumniStar</title>
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
<body class="hold-transition sidebar-mini ">
<div class="wrapper" id="myForm"> 

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav--item">
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
                      &nbsp;<a href="admin_profile.php" class="btn btn-default btn-flat" style="text-align: left;" >Profile</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
            <!-- /.card -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Staff Detail</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Update All Staff Detail</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-2">
              <form name="f1" method="POST" enctype="multipart/form-data">
              <table id="example1" class="table table-bordered table-hover table-head-fixed">
                <thead>
                
                <tr>
                  <th>Action</th>
                  <th>Name</th>
                  <th>Sname</th>
                  <th>Gender</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Photo</th>
                  <th>POST</th>
                  <th>PHD</th>
                  <th>Master Degree</th>
                  <th>Bachelor Degree</th>
                  <th>Other Degree</th>
                  
                </tr>
                </thead>
                <tbody>

                  <?php
                    while($data=mysqli_fetch_array($sql))
                    {
                  ?>
                <tr>
                  <td>
                    <a class="btn btn-app" data-toggle="modal" data-target="#modal-primary" type="button" name="b1" value="" onclick="views(<?php echo $data[0]; ?>)">
                      <i class="fas fa-edit" ></i> Edit
                    </a>
                  </td>

                  <td><?php echo $data['name']; ?></td>
                  <td><?php echo $data['sname']; ?></td>
                  <td><?php echo $data['gender']; ?></td>
                  <td><?php echo $data['email']; ?></td>
                  <td><?php echo $data['mobile']; ?></td>
                  <td><img src="image/staffimg/<?php echo $data['photo'];?>" style="max-height: 150px;max-width: 120px;" ></td>
                  <td><?php echo $data['post']; ?></td>
                  <td><?php echo $data['phd']; ?></td>
                  <td><?php echo $data['master_degree']; ?></td>
                  <td><?php echo $data['bachelor_degree']; ?></td>
                  <td><?php echo $data['other_degree']; ?></td>  
                </tr>
                <?php 
                  }
                ?>
                </tbody>
              
              </table>
              </form>
            </div>
            <!-- /.card-body -->
          </div>
  </div>
</div>
</section>
</div>
<!--------------------------------------------------------------------------------------------------------->

<div class="modal fade" id="modal-primary">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Primary Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <form role="form" method="post" name="edit_staff" enctype="multipart/form-data" id="myCoolForm">
                <div class="card-body">
                  <div class="form-group"style="text-align: left">
                     
                      
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="txtname" name="txtname" placeholder="Enter Name" value="" />
                  </div>
                  <div class="form-group"style="text-align: left">
                    <label for="exampleInputEmail1">SurName</label>
                    <input type="text" class="form-control" id="txtsname" name="txtsname" placeholder="Enter SurName">
                  </div>
                  
                  <div class="form-group"style="text-align: left">
                        <label for="exampleInputPassword1">Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="form-check-input" type="radio" name="r1" id="male" value="male" checked="checked">
                        <label class="form-check-label">Male</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="form-check-input" type="radio" name="r1" id="female" value="female">
                        <label class="form-check-label">Female</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </div>
                    <div class="form-group"style="text-align: left">
                    <label for="">Date Of Birth</label>
                    <input type="date" class="form-control" id="txtdob" name="txtdob" placeholder="Date Of Birth">
                  </div>

                  <div class="form-group"style="text-align: left">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="txtemail" name="txtemail" placeholder="Enter email">
                  </div>

                  <div class="form-group"style="text-align: left">
                    <label for="exampleInputEmail1">Mobile</label>
                    <input type="text" class="form-control" id="txtmobile"name="txtmobile" placeholder="Enter MobileNumber">
                  </div>

                  <div class="form-group"style="text-align: left">
                    <label for="exampleInputFile">Photo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="txtphoto" name="txtphoto"  onchange="f1()" />
                        <label class="custom-file-label" for="exampleInputFile" id="l1" >Choose file</label>
                        <input type="hidden" name="h1" id="h1" >

                      </div>
                    </div>
                  </div>  
                  <div class="form-group"style="text-align: left;">
                    <label for="exampleInputEmail1">POST</label>
                    <select id="txtpost" name="txtpost" class="form-control">
                           <option value="">Select</option>
                          <option value="principal">Principal</option>
                          <option value="hod">H.O.D</option> 
                          <option value="assistant professer">Assistant Professer</option>
                          <option value="teaching assistant">Teaching Assistant</option>
                          <option value="lab assistant">Lab Assistant</option>
                          <option value="">Clerk</option>                     
                    </select>
                    
                  </div>
                  <div class="form-group"style="text-align: left">
                        <label for="exampleInputPassword1">Phd</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="form-check-input" type="radio" name="r2" id="yes" value="yes" checked="checked">
                        <label class="form-check-label" >Yes</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="form-check-input" type="radio" name="r2" id="no" value="no">
                        <label class="form-check-label">No</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </div>
                  <div class="form-group"style="text-align: left">
                    <label for="exampleInputEmail1">Master Degree</label>
                    <input type="text" class="form-control" id="txtmaster"name="txtmaster" placeholder="Enter Master Degree">
                  </div>
                  <div class="form-group"style="text-align: left">
                    <label for="exampleInputEmail1">Bachelor Degree</label>
                    <input type="text" class="form-control" id="txtbachelor"name="txtbachelor" placeholder="Enter Bachelor Degree">
                  </div>
                  <div class="form-group"style="text-align: left">
                    <label for="exampleInputEmail1">Other Degree</label>
                    <input type="text" class="form-control" id="txtother"name="txtother" placeholder="Enter Other Degree">
                    <input type="hidden" name="txtid" id="txtid" />
                  </div>
                  
                  
                </div>
                <!-- /.card-body -->

               

              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-outline-light" id="b2" name="b2" onclick="return postConfirm()">Submit</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->



<!----------------------------------------------------------------------------------------------------------->  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/../plugins/moment/moment.min.js"></script>
<script src="/../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/?.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script type="text/javascript">
  function f1()
  {
    
    document.getElementById("l1").innerHTML=document.getElementById("txtphoto").value;
  }
</script>

<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->

<!-- pace-progress -->
<script src="plugins/pace-progress/pace.min.js"></script>
<script>
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
</script>
<script type="text/javascript">
                      function postConfirm() {
                         if (confirm('Are You Sure Want to Update a Record ? ')) {
                             location.submit();
                         } else {
                           
                            document.getElementById("myModal").style.visibility = "hidden";
                           location.reload();
                            return false;
                         }
                      }


                
</script>
<script type="text/javascript">

  function views(sid)
  {
    
   $.ajax({
     url: 'fetch.php',
     type: 'POST',
     data: {id:sid,pname:"edit_staff"},
     success:function(data){
      var d = jQuery.parseJSON(data);
     document.getElementById('txtother').value=d.other_degree;
  document.getElementById('txtbachelor').value=d.bachelor_degree;
  document.getElementById('txtmaster').value=d.master_degree;
  document.getElementById('txtmobile').value=d.mobile;
  document.getElementById('txtpost').value=d.post;
  document.getElementById('txtdob').value=d.dob;
  document.getElementById('txtemail').value=d.email;
  document.getElementById('txtsname').value=d.sname;
  document.getElementById('txtname').value=d.name;
  document.getElementById("txtid").value=d.staff_id;
  //document.getElementById("r2").value=d.phd;
  //document.getElementById("r1").value=d.gender;
  document.getElementById("h1").value=d.photo;
  if(d.phd=='yes'){
         $('#yes').attr('checked',true);
      }else{
         $('#no').attr('checked',true);
      }
  if(d.gender=='male'){
         $('#male').attr('checked',true);
      }else{
         $('#female').attr('checked',true);
      }
     }
   })
   
    
    
  }
</script>
</body>
</html>
