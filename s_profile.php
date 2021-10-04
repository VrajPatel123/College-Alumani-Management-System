<?php
session_start();
if (($_SESSION['sname'] == '') || (!isset($_SESSION['sname'])))
 {
    header('location:student_login.php');
}
else
{


require_once('connection.php');
$sname=$_SESSION['sname'];
          
      $r=mysqli_fetch_array(mysqli_query($cn,"select * from student_profile where s_name='$sname'"));
}

?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from codeboxr.net/themedemo/unialumni/html/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2020 11:37:29 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>uniAlumni</title>

    <meta name="description" content="simple description for your site"/>
<meta name="keywords" content="keyword1, keyword2"/>
<meta name="author" content="Jobz"/>

<!-- twitter card starts from here, if you don't need remove this section -->
<meta name="twitter:card" content="summary"/>
<meta name="twitter:site" content="@yourtwitterusername"/>
<meta name="twitter:creator" content="@yourtwitterusername"/>
<meta name="twitter:url" content="http://twitter.com/"/>
<meta name="twitter:title" content="Your home page title, max 140 char"/> <!-- maximum 140 char -->
<meta name="twitter:description" content="Your site description, maximum 140 char "/> <!-- maximum 140 char -->
<meta name="twitter:image"
      content="assets/img/twittercardimg/twittercard-144-144.png"/>  <!-- when you post this page url in twitter , this image will be shown -->
<!-- twitter card ends here -->

<!-- facebook open graph starts from here, if you don't need then delete open graph related  -->
<meta property="og:title" content="Your home page title"/>
<meta property="og:url" content="http://your domain here.com"/>
<meta property="og:locale" content="en_US"/>
<meta property="og:site_name" content="Your site name here"/>
<!--meta property="fb:admins" content="" /-->  <!-- use this if you have  -->
<meta property="og:type" content="website"/> <!-- 'article' for single page  -->
<meta property="og:image"
      content="assets/img/opengraph/fbphoto-476-476.png"/> <!-- when you post this page url in facebook , this image will be shown -->
<!-- facebook open graph ends here -->

<!-- desktop bookmark -->
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="assets/img/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<!-- icons & favicons -->
<link rel="shortcut icon" type="image/x-icon"  href="assets/img/favicon/favicon.ico"/>  <!-- this icon shows in browser toolbar -->
<link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico"/> <!-- this icon shows in browser toolbar -->
<link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="assets/img/favicon/manifest.json">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />

<!-- Fallback For IE 9 [ Media Query and html5 Shim] -->
<!--[if lt IE 9]>
<script src="assets/vendor/css3-mediaqueries-js/css3-mediaqueries.js"></script>
<![endif]-->

<!-- GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet" />

<!-- BOOTSTRAP CSS -->
<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/vendor/navbar/bootstrap-4-navbar.css" />

<!--Animate css -->
<link rel="stylesheet" href="assets/vendor/animate/animate.css" media="all" />

<!-- FONT AWESOME CSS -->
<link rel="stylesheet" href="assets/vendor/fontawesome/css/font-awesome.min.css" />

<!--owl carousel css -->
<link rel="stylesheet" href="assets/vendor/owl-carousel/owl.carousel.css" media="all" />

<!--Magnific Popup css -->
<link rel="stylesheet" href="assets/vendor/magnific/magnific-popup.css" media="all" />

<!--Nice Select css -->
<link rel="stylesheet" href="assets/vendor/nice-select/nice-select.css" media="all" />

<!--Offcanvas css -->
<link rel="stylesheet" href="assets/vendor/js-offcanvas/css/js-offcanvas.css" media="all" />

<!-- MODERNIZER  -->
<script src="assets/vendor/modernizr/modernizr-custom.js"></script>

<!-- Main Master Style  CSS  -->
<link id="cbx-style" data-layout="1" rel="stylesheet" href="assets/css/style-default.min.css" media="all" />

</head>
<body>

    <!--[if lt IE 7]>
    <p class="browsehappy">We are Extreamly sorry, But the browser you are using is probably from when civilization started.
        Which is way behind to view this site properly. Please update to a modern browser, At least a real browser. </p>
    <![endif]-->

    <!--== Header Area Start ==-->
<header id="header-area">
    <div class="preheader-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-7 col-7">
                    <div class="preheader-left">
                        <a href="mailto:riteshporiya124@gmail.com"><strong>Email:</strong> riteshporiya124@gmail.com</a>
                        <a href="tel:+91-8160691814"><strong>Need help?:</strong> +91-8160691814</a>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-5 col-5 text-right">
                    <div class="preheader-right">
                        <a title="Login" class="btn-auth btn-auth-rev" href="student_login.php">Login</a>
                        <a title="Register" class="btn-auth btn-auth" href="student_registration.php">Signup</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom-area" id="fixheader">
        <div class="container">
            <div class="row">
                <div class="col-lg-13">
                    <nav class="main-menu navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/img/logo.png" alt="Logo" />
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menucontent" aria-controls="menucontent" aria-expanded="false">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="menucontent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" data-toggle="dropdown" role="button">About</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="staff_detail.php">Staff Details</a></li>
                                       <li class="nav-item"><a class="nav-link" href="student_detail.php">Student Details</a></li>
                                    </ul>
                                </li>
                                
                                 <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" data-toggle="dropdown" role="button">News</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="news.php">News</a></li>
                                       <li class="nav-item"><a class="nav-link" href="event.php">Event</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="oppurtunity.php">Oppurtunity</a></li>
                                <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" data-toggle="dropdown" role="button">Biodata</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="normal_biodata.php">Normal Biodata</a></li>
                                       <li class="nav-item"><a class="nav-link" href="cv_biodata.php">CV Biodata</a></li>
                                       <li class="nav-item"><a class="nav-link" href="resume_biodata.php">Resume Biodata</a></li>
                                    </ul>
                                </li>
                                
                                
                                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!--== Header Area End ==-->

    <!--== Page Title Area Start ==-->
    <section id="page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="page-title-content">
                        <h1 class="h2">Membership Form</h1>
                        <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need</p>
                        <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let's See</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->
    <div style="padding-left: 450px;">
        <a href="chat/" class="btn btn-brand smooth-scroll">Chat with your batchmates</a>
    </div>
    <!--== Register Page Content Start ==-->
    <section id="page-content-wrap">
        <div class="register-page-wrapper section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="register-page-inner">
                            <div class="register-form-wrap">
                                <a href="#" style="padding-left: 300px;" data-toggle="modal" data-target="#modal-primary"onclick="views(<?php echo $data[0]; ?>)">Edit</a>
								<form name="f1" method="POST" enctype="multipart/form-data">
									<div class="row" style="padding-left: 125px;">
                                        <img id="img" name="img" src="../project_admin/image/studentprofile/" alt="student" style="width: 100px;height: 100px;-webkit-border-radius: 50px;border-radius: 50px;" />
                                    </div><br>
                                    <div class="row">
                                        <div class="col-4 col-sm-4" style="padding-left: 125px;">
											<div class="form-group">
												<label></label>
                                            </div>
                                        </div>
									</div>
									<div class="row">
                                        <div class="col-4 col-sm-12" style="padding-left: 120px;">
											<div class="form-group">
												<label>Batch Of </label>
                                            </div>
                                        </div>
									</div>
									<div class="row">
                                        <div class="col-4 col-sm-12" style="padding-left: 120px;">
											<div class="form-group">
												<a href="">Invite Your Friend</a>
                                            </div>
                                        </div>
									</div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="register-page-inner">
                            <div class="register-form-wrap">
								<table>
									<tr>
										<td style="padding-left: 50px;"><h5>Contact Information</h5></td>
										<td style="padding-left: 35px;"><a href="#" data-toggle="modal" data-target="#modal-primary-contact"onclick="views(<?php echo $data[0]; ?>)">Edit</a></td>
									</tr>
								</table>
								<form name="f2" method="POST" enctype="multipart/form-data">
									<div class="row" style="padding-left: 25px;">
										<div class="form-group">
                                            <label>Email:-</label>
                                            <label></label>
										</div>
									</div>
									<div class="row" style="padding-left: 25px;">
										<div class="form-group">
											<label>Mobile:-</label>
                                            <label></label>
                                        </div>
									</div>
								</form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="register-page-inner">
                            <div class="register-form-wrap">
								<table>
									<tr>
										<td style="padding-left: 50px;"><h5>Expertise</h5></td>
										<td style="padding-left: 130px;"><a href="#" data-toggle="modal" data-target="#modal-primary-expertise"onclick="views(<?php echo $data[0]; ?>)">Edit</a></td>
									</tr>
								</table>
								<form name="f3" method="POST" enctype="multipart/form-data">
									<div class="row" style="padding-left: 25px;">
										<div class="form-group">
                                            <label>Skills:-</label>
										</div>
									</div>
								</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row">
                     <div class="col-lg-4">
                        <div class="register-page-inner">
                            <div class="register-form-wrap">
								<table>
									<tr>
										<td style="padding-left: 50px;"><h5>Basic Information</h5></td>
										<td style="padding-left: 35px;"><a href="#" data-toggle="modal" data-target="#modal-primary-basicinfo"onclick="views(<?php echo $data[0]; ?>)">Edit</a></td>
									</tr>
								</table>
								<form name="f4" method="POST" enctype="multipart/form-data">
									<div class="row" style="padding-left: 25px;">
										<div class="form-group">
                                            <label>Current Place:-</label>
                                             <label></label>
										</div>
									</div>
									<div class="row" style="padding-left: 25px;">
										<div class="form-group">
											<label>Birthday:-</label>
                                            <label></label>
                                        </div>
									</div>
									<div class="row" style="padding-left: 25px;">
										<div class="form-group">
                                            <label>Address:-</label>
                                            <label></label>										
                                        </div>
									</div>
									<div class="row" style="padding-left: 25px;">
										<div class="form-group">
											<label>Gender:-</label>
                                            <label></label>
                                        </div>
									</div>
									<div class="row" style="padding-left: 25px;">
										<div class="form-group">
											<label>Maritial Status:-</label>
                                            <label></label>
                                        </div>
									</div>
								</form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="register-page-inner">
                            <div class="register-form-wrap">
								<table>
									<tr>
										<td style="padding-left: 50px;"><h5>Work Experience</h5></td>
										<td style="padding-left: 35px;"><a href="#"data-toggle="modal" data-target="#modal-primary-work"onclick="views(<?php echo $data[0]; ?>)">Edit</a></td>
									</tr>
								</table>
								<form name="f5" method="POST" enctype="multipart/form-data">
									<div class="row" style="padding-left: 25px;">
										<div class="form-group">
                                            <label>Current Job Status:-</label>
                                            <label></label>
										</div>
									</div>
									<div class="row" style="padding-left: 25px;">
                                        <div class="form-group">
                                            <label>Job Company Name:-</label>
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="row" style="padding-left: 25px;">
                                        <div class="form-group">
                                            <label>Position Name:-</label>
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="row" style="padding-left: 25px;">
                                        <div class="form-group">
                                            <label>Number of Years:-</label>
                                            <label></label>
                                        </div>
                                    </div>
                                    <div class="row" style="padding-left: 25px;">
                                        <div class="form-group">
                                            <label>City:-</label>
                                            <label></label>
                                        </div>
                                    </div>
								</form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="register-page-inner">
                            <div class="register-form-wrap">
								<table>
									<tr>
										<td style="padding-left: 50px;"><h5>Summery</h5></td>
										<td style="padding-left: 130px;"><a href="#"data-toggle="modal" data-target="#modal-primary-summery"onclick="views(<?php echo $data[0]; ?>)">Edit</a></td>
									</tr>
								</table>
								<form name="f6" method="POST" enctype="multipart/form-data">
									<div class="row" style="padding-left: 25px;">
										<div class="form-group">
                                            <label>Skills:-</label>
                                            <label></label>
										</div>
									</div>
								</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!--== Register Page Content End ==-->
<!------------------------------------------------------------------------------------------------------------>
<!------------main profile start----->
<div class="modal fade" id="modal-primary">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Primary Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form name="modalf1" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Profile Photo</label>
                                <div class="form-group"style="text-align: left">
                                    <div class="input-group">
                                      <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="txtphoto" name="txtphoto"  onchange="f1()" />
                                            <label class="custom-file-label" for="exampleInputFile" id="l1" >Choose file</label>
                                            <input type="hidden" name="h1" id="h1" >
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>FullName</label>
                                <input type="text" name="txtfullname" id="txtfullname">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Batch</label>
                                <input type="text" name="txtbatch" id="txtbatch">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-outline-light" id="b1" name="b1" onclick="return postConfirm()">Submit</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
<!------------main profile end----->

<!--------contact info start----->
<div class="modal fade" id="modal-primary-contact">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Primary Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form name="modalf2" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Email:-</label>
                                <input type="text" name="txtemail" id="txtemail">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Mobile No.:-</label>
                                <input type="text" name="txtmobile" id="txtmobile">
                            </div>
                        </div>
                    </div>
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

<!--------contact info end-->

<!--------expertise start----->
<div class="modal fade" id="modal-primary-expertise">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Primary Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form name="modalf3" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Skill:-</label>
                                <textarea type="textbox" class="form-control" id="txtskill"name="txtskill">
                                </textarea>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-outline-light" id="b3" name="b3" onclick="return postConfirm()">Submit</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

<!--------expertise end-->

<!--------basic info start----->
<div class="modal fade" id="modal-primary-basicinfo">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Primary Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form name="modalf4" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Current Place:-</label>
                                <input type="text" name="txtcurrentplace" id="txtcurrentplace">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Birthday:-</label>
                                <input type="date" name="txtbirthday" id="txtbirthday">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Address:-</label>
                                <textarea type="textbox" class="form-control" id="txtaddress"name="txtaddress">
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Gender:-</label>
                                <input type="text" name="txtgender" id="txtgender">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Maritial Status:-</label>
                                <input type="text" name="txtmaritial" id="txtmaritial">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-outline-light" id="b4" name="b4" onclick="return postConfirm()">Submit</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

<!--------basic info end-->

<!--------work experience start----->
<div class="modal fade" id="modal-primary-work">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Primary Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form name="modalf5" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Current Job Status:-</label>
                                <input type="text" name="txtcurrentjob" id="txtcurrentjob">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Job Company Name:-</label>
                                <input type="text" name="txtjobcompany" id="txtjobcompany">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Position Name:-</label>
                                <input type="text" name="txtposition" id="txtposition">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Number of years:-</label>
                                <input type="text" name="txtyear" id="txtyear">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>City:-</label>
                                <input type="text" name="txtcity" id="txtcity">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-outline-light" id="b5" name="b5" onclick="return postConfirm()">Submit</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

<!--------work experience end-->

<!--------summery start----->
<div class="modal fade" id="modal-primary-summery">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Primary Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form name="modalf6" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Summery:-</label>
                                <textarea type="textbox" class="form-control" id="txtsummery"name="txtsummery">
                                </textarea>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-outline-light" id="b6" name="b6" onclick="return postConfirm()">Submit</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

<!--------summery end-->





<!------------------------------------------------------------------------------------------------------------->

    <!--== Footer Area Start ==-->
<footer id="footer-area">
    <!-- Footer Widget Start -->
    <div class="footer-widget section-padding">
        <div class="container">
            <div class="row">
                <!-- Single Widget Start -->
                <div class="col-lg-4 col-sm-6">
                    <div class="single-widget-wrap">
                        <div class="widgei-body">
                            <div class="footer-about">
                                <img src="assets/img/footer-logo.png" alt="Logo" class="img-fluid" />
                                <p>We are legend Lorem ipsum dolor sitmet, nsecte ipisicing eit, sed do eiusmod tempor incidunt ut  et do maga aliqua enim ad minim.</p>
                                <a href="#">Phone: +8745 44 5444</a> <a href="#">Fax: +88474 156 362</a> <br> <a href="#">Email: demoemail@demo.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Widget End -->

                <!-- Single Widget Start -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-widget-wrap">
                        <h4 class="widget-title">Get In Touch</h4>
                        <div class="widgei-body">
                            <p>We are legend Lorem ipsum dolor sitmet, nsecte ipisicing eit, sed</p>
                            <div class="newsletter-form">
                                <form id="cbx-subscribe-form" role="search">
                                    <input type="email" placeholder="Enter Your Email"  id="subscribe" required>
                                    <button type="submit"><i class="fa fa-send"></i></button>
                                </form>
                            </div>
                            <div class="footer-social-icons">
                                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-vimeo"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Widget End -->

                <!-- Single Widget Start -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-widget-wrap">
                        <h4 class="widget-title">Usefull Link</h4>
                        <div class="widgei-body">
                            <ul class="double-list footer-list clearfix">
                                <li><a href="#">Pricing Plan</a></li>
                                <li><a href="#">Categories</a></li>
                                <li><a href="#">Populer Deal</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Pricing Plan</a></li>
                                <li><a href="#">Categories</a></li>
                                <li><a href="#">Populer Deal</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget End -->

                <!-- Single Widget Start -->
                <div class="col-lg-2 col-sm-6">
                    <div class="single-widget-wrap">
                        <h4 class="widget-title">University</h4>
                        <div class="widgei-body">
                            <ul class="footer-list clearfix">
                                <li><a href="#">Pricing Plan</a></li>
                                <li><a href="#">Categories</a></li>
                                <li><a href="#">Populer Deal</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget End -->
            </div>
        </div>
    </div>
    <!-- Footer Widget End -->

    <!-- Footer Bottom Start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer-bottom-text">
                        <p>© 2018 Codeboxr, All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->
</footer>
<!--== Footer Area End ==-->

<!--== Scroll Top ==-->
<a href="#" class="scroll-top">
    <i class="fa fa-angle-up"></i>
</a>
<!--== Scroll Top ==-->

    <!-- SITE SCRIPT  -->

<!-- Jquery JS  -->
<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>

<!-- POPPER JS -->
<script src="assets/vendor/bootstrap/js/popper.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/navbar/bootstrap-4-navbar.js"></script>

<!--owl-->
<script src="assets/vendor/owl-carousel/owl.carousel.min.js"></script>

<!--Waypoint-->
<script src="assets/vendor/waypoint/waypoints.min.js"></script>

<!--CounterUp-->
<script src="assets/vendor/counterup/jquery.counterup.min.js"></script>

<!--isotope-->
<script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>

<!--magnific-->
<script src="assets/vendor/magnific/jquery.magnific-popup.min.js"></script>

<!--Smooth Scroll-->
<script src="assets/vendor/smooth-scroll/jquery.smooth-scroll.min.js"></script>

<!--Jquery Easing-->
<script src="assets/vendor/jquery-easing/jquery.easing.1.3.min.js"></script>

<!--Nice Select -->
<script src="assets/vendor/nice-select/jquery.nice-select.js"></script>

<!--Jquery Valadation -->
<script src="assets/vendor/validation/jquery.validate.min.js"></script>
<script src="assets/vendor/validation/additional-methods.min.js"></script>

<!--off-canvas js -->
<script src="assets/vendor/js-offcanvas/js/js-offcanvas.pkgd.min.js"></script>

<!-- Countdown -->
<script src="assets/vendor/jquery.countdown/jquery.countdown.min.js"></script>

<!-- custom js: main custom theme js file  -->
<script src="assets/js/theme.min.js"></script>

<!-- custom js: custom js file is added for easy custom js code  -->
<script src="assets/js/custom.js"></script>

<!-- custom js: custom scripts for theme style switcher for demo purpose  -->
<script id="switcherhandle" src="assets/switcher/switcher.js"></script>


</body>

<!-- Mirrored from codeboxr.net/themedemo/unialumni/html/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2020 11:37:29 GMT -->
</html>
