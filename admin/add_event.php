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
  if(isset($_POST['b1']))
  {
    $e_date=$_POST['txtedate'];
    $photo=$_FILES['txtephoto'] ['name'];
    $tempname=$_FILES['txtephoto']['tmp_name'];
    move_uploaded_file($tempname, "image/eventimg/$photo");

    $org_name=$_POST['txtorgname'];
    $org_photo=$_FILES['txtorgphoto']['name'];
    $tmpname=$_FILES['txtorgphoto']['tmp_name'];
    move_uploaded_file($tmpname, "image/orgimg/$org_photo");

    $description=$_POST['txtedescription'];
    $u_e_date=$_POST['txtuedate'];
    $e_name=$_POST['txtename'];
    $fees=$_POST['txtfees'];
    $address=$_POST['txtaddress'];

    $estime01=$_POST['txtestime01'];
    $estime02=$_POST['txtestime02'];
    $estime03=$_POST['txtestime03'];
    $estime04=$_POST['txtestime04'];
    $estime05=$_POST['txtestime05'];

    $esheading01=$_POST['txtesheading01'];
    $esheading02=$_POST['txtesheading02'];
    $esheading03=$_POST['txtesheading03'];
    $esheading04=$_POST['txtesheading04'];
    $esheading05=$_POST['txtesheading05'];

    $esdescription01=$_POST['txtesdescription01'];
    $esdescription02=$_POST['txtesdescription02'];
    $esdescription03=$_POST['txtesdescription03'];
    $esdescription04=$_POST['txtesdescription04'];
    $esdescription05=$_POST['txtesdescription05'];

    $sql=mysqli_query($cn,"INSERT INTO `event`(`event_date`, `photo`, `organizer_name`, `organizer_photo`, `description`, `upload_event_date`, `event_name`, `fees`, `address`,`estime01`,`estime02`,`estime03`,`estime04`,`estime05`,`esheading01`,`esheading02`,`esheading03`,`esheading04`,`esheading05`,`esdescription01`,`esdescription02`,`esdescription03`,`esdescription04`,`esdescription05`) VALUES ('$e_date','$photo','$org_name','$org_photo','$description','$u_e_date','$e_name','$fees','$address','$estime01','$estime02','$estime03','$estime04','$estime05','$esheading01','$esheading02','$esheading03','$esheading04','$esheading05','$esdescription01','$esdescription02','$esdescription03','$esdescription04','$esdescription05')");
    echo '<script language="javascript">';
    echo 'alert("record insert successfully sent")';  //not showing an alert box.
    echo '</script>'; 
  }
}
  
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AlumniStar </title>
  <!---ckeditor--->
  <script src="ckeditor/ckeditor.js"></script>
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
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2"style="text-align: right;">
          <div class="col-sm-7">
            <h1>Event Detail</h1>
          </div>
          <div class="col-sm-5">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Event Detail</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    
          <!-- left column -->
          <center>
          <div class="col-md-11">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title" >Add Event</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" name="add_event" enctype="multipart/form-data" onsubmit="return validation()">
                <div class="card-body">

                  <div class="form-group"style="text-align: left">
                    <label for="">Event Date</label>
                    <input type="date" class="form-control" id="txtedate" name="txtedate" placeholder="Enter Event Date">
                    <span id="edate" class="text-danger font-weight-bold"> </span>
                  </div>

                   <div class="form-group"style="text-align: left">
                    <label for="exampleInputFile">Photo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="txtephoto" name="txtephoto" onchange="f1()">
                        <label class="custom-file-label" for="exampleInputFile" id="l1">Choose file</label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group"style="text-align: left">
                    <label for="exampleInputEmail1">Organizer Name</label>
                    <input type="text" class="form-control" id="txtorgname"name="txtorgname" placeholder="Enter Organizer Name" autocomplete="off">
                    <span id="orgname" class="text-danger font-weight-bold"> </span>
                  </div>
                
                   <div class="form-group"style="text-align: left">
                    <label for="exampleInputFile">Organizer Photo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="txtorgphoto" name="txtorgphoto" onchange="f1()">
                        <label class="custom-file-label" for="exampleInputFile" id="l2">Choose file</label>
                      </div>
                    </div>
                  </div>

                   <div class="form-group"style="text-align: left">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea type="textbox" class="form-control" id="txtedescription"name="txtedescription" placeholder="Enter Description in detail">1
                    </textarea>
                     <script type="text/javascript">
                          CKEDITOR.replace('txtedescription');
                      </script>
                    <span id="edescription" class="text-danger font-weight-bold"> </span>
                  </div>

                  <div class="form-group"style="text-align: left">
                    <label for="">Upload Event Date</label>
                    <input type="date" class="form-control" id="txtuedate" name="txtuedate" placeholder="Enter Upload Event Date">
                    <span id="uedate" class="text-danger font-weight-bold"> </span>
                  </div>

                  <div class="form-group"style="text-align: left">
                    <label for="exampleInputEmail1">Event Name</label>
                    <input type="text" class="form-control" id="txtename"name="txtename" placeholder="Enter Event Name" autocomplete="off">
                    <span id="ename" class="text-danger font-weight-bold"> </span>
                  </div>

                  <div class="form-group"style="text-align: left">
                    <label for="exampleInputEmail1">Event Fees</label>
                    <input type="text" class="form-control" id="txtfees"name="txtfees" placeholder="Enter Event Fees" autocomplete="off">
                    <span id="fees" class="text-danger font-weight-bold"> </span>
                  </div>

                  <div class="form-group"style="text-align: left">
                    <label for="exampleInputEmail1">Address</label>
                    <textarea type="textbox" class="form-control" id="txtaddress"name="txtaddress" placeholder="Enter Event Venue"></textarea>
                    <span id="address" class="text-danger font-weight-bold"> </span>
                  </div>
                  <div class="row">
                  <div class="form-group col-md-4"style="text-align: left">
                    <label for="exampleInputEmail1">Event Schedule Time 01</label>
                    <input  type="text" class="form-control" id="txtestime01"name="txtestime01" placeholder="Enter Event Schedule Time" />
                  </div>
                  <div class="form-group col-md-4"style="text-align: left">
                    <label for="exampleInputEmail1">Event Schedule Heading 01</label>
                    <input  type="text" class="form-control" id="txtesheading01"name="txtesheading01" placeholder="Enter Event Schedule Heading" />
                    <!--<span id="address" class="text-danger font-weight-bold"> </span>-->
                  </div>
                  <div class="form-group col-md-4"style="text-align: left">
                    <label for="exampleInputEmail1">Event Schedule Description 01</label>
                    <textarea type="textbox" class="form-control" id="txtesdescription01"name="txtesdescription01" placeholder="Enter Event Schedule Description"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-4"style="text-align: left">
                    <label for="exampleInputEmail1">Event Schedule Time 02</label>
                    <input  type="text" class="form-control" id="txtestime02"name="txtestime02" placeholder="Enter Event Schedule Time" />
                  </div>
                  <div class="form-group col-md-4"style="text-align: left">
                    <label for="exampleInputEmail1">Event Schedule Heading 02</label>
                    <input  type="text" class="form-control" id="txtesheading02"name="txtesheading02" placeholder="Enter Event Schedule Heading" />
                    <!--<span id="address" class="text-danger font-weight-bold"> </span>-->
                  </div>
                  <div class="form-group col-md-4"style="text-align: left">
                    <label for="exampleInputEmail1">Event Schedule Description 02</label>
                    <textarea type="textbox" class="form-control" id="txtesdescription02"name="txtesdescription02" placeholder="Enter Event Schedule Description"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-4"style="text-align: left">
                    <label for="exampleInputEmail1">Event Schedule Time 03</label>
                    <input  type="text" class="form-control" id="txtestime03"name="txtestime03" placeholder="Enter Event Schedule Time" />
                  </div>
                  <div class="form-group col-md-4"style="text-align: left">
                    <label for="exampleInputEmail1">Event Schedule Heading 03</label>
                    <input  type="text" class="form-control" id="txtesheading03"name="txtesheading03" placeholder="Enter Event Schedule Heading" />
                    <!--<span id="address" class="text-danger font-weight-bold"> </span>-->
                  </div>
                  <div class="form-group col-md-4"style="text-align: left">
                    <label for="exampleInputEmail1">Event Schedule Description 03</label>
                    <textarea type="textbox" class="form-control" id="txtesdescription03"name="txtesdescription03" placeholder="Enter Event Schedule Description"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-4"style="text-align: left">
                    <label for="exampleInputEmail1">Event Schedule Time 04</label>
                    <input  type="text" class="form-control" id="txtestime04"name="txtestime04" placeholder="Enter Event Schedule Time" />
                  </div>
                  <div class="form-group col-md-4"style="text-align: left">
                    <label for="exampleInputEmail1">Event Schedule Heading 04</label>
                    <input  type="text" class="form-control" id="txtesheading04"name="txtesheading04" placeholder="Enter Event Schedule Heading" />
                    <!--<span id="address" class="text-danger font-weight-bold"> </span>-->
                  </div>
                  <div class="form-group col-md-4"style="text-align: left">
                    <label for="exampleInputEmail1">Event Schedule Description 04</label>
                    <textarea type="textbox" class="form-control" id="txtesdescription04"name="txtesdescription04" placeholder="Enter Event Schedule Description"></textarea>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-4"style="text-align: left">
                    <label for="exampleInputEmail1">Event Schedule Time 05</label>
                    <input  type="text" class="form-control" id="txtestime05"name="txtestime05" placeholder="Enter Event Schedule Time" />
                  </div>
                  <div class="form-group col-md-4"style="text-align: left">
                    <label for="exampleInputEmail1">Event Schedule Heading 05</label>
                    <input  type="text" class="form-control" id="txtesheading05"name="txtesheading05" placeholder="Enter Event Schedule Heading" />
                    <!--<span id="address" class="text-danger font-weight-bold"> </span>-->
                  </div>
                  <div class="form-group col-md-4"style="text-align: left">
                    <label for="exampleInputEmail1">Event Schedule Description 05</label>
                    <textarea type="textbox" class="form-control" id="txtesdescription05"name="txtesdescription05" placeholder="Enter Event Schedule Description"></textarea>
                  </div>
                </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" id="b1" name="b1">Submit</button>
                </div>
              </form>
            </div>
          </div>
          </center>
            <!-- /.card -->

            
            
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
    
    document.getElementById("l1").innerHTML=document.getElementById("txtephoto").value;
    document.getElementById("l2").innerHTML=document.getElementById("txtorgphoto").value;
  }
</script>
<script type="text/javascript">
  function validation()
  {
    var edate = document.getElementById('txtedate').value;
    var orgname = document.getElementById('txtorgname').value;
    var edescription = document.getElementById('txtedescription').value;
    var uedate = document.getElementById('txtuedate').value;
    var ename = document.getElementById('txtename').value;
    var fees = document.getElementById('txtfees').value;
    var address = document.getElementById('txtaddress').value;


    if (edate == "") 
    {
      document.getElementById('edate').innerHTML = "** Please fill the Event Date";
      return false;
    }

    if (orgname == "") 
    {
      document.getElementById('orgname').innerHTML = "** Please fill the Organizer Name field";
      return false;
    }
    if((orgname.length <=2)||(orgname.length >50))
    {
      document.getElementById('orgname').innerHTML = "** Organizer Name length must be between 2 and 50";
      return false;
    }
    if(!isNaN(orgname))
    {
      document.getElementById('orgname').innerHTML = "** only character are allowed";
      return false;
    }

    if (edescription == '') 
    {
      document.getElementById('edescription').innerHTML = "** Please fill the Event Description field";
      return false;
    }

    if (uedate == "") 
    {
      document.getElementById('uedate').innerHTML = "** Please fill the Upload Event Date";
      return false;
    }

    if (ename == "") 
    {
      document.getElementById('ename').innerHTML = "** Please fill the Event Name field";
      return false;
    }
    if((ename.length <=2)||(ename.length >50))
    {
      document.getElementById('ename').innerHTML = "** Event Name length must be between 2 and 50";
      return false;
    }

    if(fees == "")
    {
      document.getElementById('fees').innerHTML =" ** Please fill the Event Fees field";
      return false;
    }
    if(isNaN(fees))
    {
      document.getElementById('fees').innerHTML =" ** User must write digits only not characters";
      return false;
    }

    if (address == '') 
    {
      document.getElementById('address').innerHTML = "** Please fill the Address field";
      return false;
    }
    if((address.length <=20)||(address.length >100))
    {
      document.getElementById('address').innerHTML = "** Address length must be between 20 and 100";
      return false;
    }
    
    

  }

</script>
</body>
</html>
