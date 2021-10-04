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
$id=$_SESSION['sid'];
//$user_batch=$_SESSION['joining_year'];

          
      $r=mysqli_fetch_array(mysqli_query($cn,"select * from student_profile where s_id='$id' "));

    if (isset($_POST['b2']))
    {
        //$id=$_POST['txtid'];
        $id=$_SESSION['sid'];
        $email=$_POST['txtemail'];
        $mobile=$_POST['txtmobile'];
        //$skill=$_POST['txtskill'];

        $sql1=  mysqli_query($cn,"UPDATE `student_profile` SET `email`='$email',`mobile`='$mobile' WHERE `s_id`= '$id'");
        header('location:student_profile.php');
    } 
    if (isset($_POST['b3']))
    {
         $id=$_SESSION['sid'];
        $skill=$_POST['txtskill'];

        $sql1=  mysqli_query($cn,"UPDATE `student_profile` SET `skill`='$skill' WHERE `s_id`= '$id' ");
        header('location:student_profile.php');
    } 
    if (isset($_POST['b4']))
    {
         $id=$_SESSION['sid'];
        $current_place=$_POST['txtcurrentplace'];
        $birthday=$_POST['txtbirthday'];
        $address=$_POST['txtaddress'];
        $Gender=$_POST['txtgender'];
        $maritial_status=$_POST['txtmaritial'];

        $sql1=  mysqli_query($cn,"UPDATE `student_profile` SET `gender`='gender',`dob`='$birthday',`current_place`='$current_place',`address`='$address',`maritial_status`='$maritial_status' WHERE `s_id`= '$id' ");
        header('location:student_profile.php');
    } 
    if (isset($_POST['b5']))
    {
         $id=$_SESSION['sid'];
        $current_job_status=$_POST['txtcurrentjob'];
        $job_company_name=$_POST['txtjobcompany'];
        $position_name=$_POST['txtposition'];
        $number_of_year=$_POST['txtyear'];
        $city=$_POST['txtcity'];

        $sql1=  mysqli_query($cn,"UPDATE `student_profile` SET `current_job_status`='$current_job_status',`job_company_name`='$job_company_name',`position_name`='$position_name',`no.of_year`='$number_of_year',`city`='$city' WHERE `s_id`= '$id' ");
        header('location:student_profile.php');
    } 
    if (isset($_POST['b6']))
    {
         $id=$_SESSION['sid'];
        $summery=$_POST['txtsummery'];

        $sql1=  mysqli_query($cn,"UPDATE `student_profile` SET `summery`='$summery' WHERE `s_id`= '$id' ");
        header('location:student_profile.php');
    } 
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

<?php include_once('header.php'); ?>
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
    <div style="padding-left: 550px;">
        <a href="chat/" class="btn btn-brand smooth-scroll">Chat with your batchmates</a>
    </div>
        <br>
        <div class="footer-social-icons" style="padding-left: 550px;">
            Share on:-
            <a href="http://www.facebook.com/sharer/sharer.php?u=https://www.w3schools.com/howto/howto_css_social_media_buttons.asp" target="_blank"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;

            <a href="http://twitter.com/share?text=please visit a website&url=https://www.w3schools.com/howto/howto_css_social_media_buttons.asp" target="_blank"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;

            <a href="http://www.linkedin.com/shareArticle?mini=true&url=https://www.legendblogs.com/blog/how-to-create-social-sharing-links-for-facebook,-whatsapp-and-more/121744" target="_blank"><i class="fa fa-linkedin"></i></a>&nbsp;&nbsp;

            <a href="mailto:?subject=Login to a website&body=Check out this site https://www.w3schools.com/howto/howto_css_social_media_buttons.asp" target="_blank"><i class="fa fa-envelope"></i></a>&nbsp;&nbsp;
            
            <a href="https://api.whatsapp.com/send?text=Hi,I contacted you Through your website and this message only testing purpose." target="_blank"><i class="fa fa-whatsapp"></i></a>
        </div>

    <!--== Register Page Content Start ==-->
    <section id="page-content-wrap">
        <div class="register-page-wrapper section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="register-page-inner">
                            <div class="register-form-wrap">
								<form name="f1" method="POST" enctype="multipart/form-data">
									<div class="row" style="padding-left: 125px;">
                                        <img id="img" name="img" src="admin/image/studentimg/<?php echo $r[6];  ?>" alt="student" style="width: 100px;height: 100px;-webkit-border-radius: 50px;border-radius: 50px;" />
                                    </div><br>
                                    <div class="row">
                                        <div class="col-4 col-sm-12" style="padding-left: 100px;">
											<div class="form-group">
												<label><?php echo $r[1];?>&nbsp;<?php echo $r[2];?></label>
                                            </div>
                                        </div>
									</div>
									<div class="row">
                                        <div class="col-4 col-sm-12" style="padding-left: 120px;">
											<div class="form-group">
												<label>Batch Of <?php echo $r[7]; ?></label>
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
										<td style="padding-left: 35px;"><a href="#" data-toggle="modal" data-target="#modal-primary-contact"onclick="views(<?php echo $r[0]; ?>)">Edit</a></td>
									</tr>
								</table>
								<form name="f2" method="POST" enctype="multipart/form-data">
									<div class="row" style="padding-left: 25px;">
										<div class="form-group">
                                            <label>Email:-</label>
                                            <label><?php echo $r[5]; ?></label>
										</div>
									</div>
									<div class="row" style="padding-left: 25px;">
										<div class="form-group">
											<label>Mobile:-</label>
                                            <label><?php echo $r[4]; ?></label>
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
										<td style="padding-left: 130px;"><a href="#" data-toggle="modal" data-target="#modal-primary-expertise"onclick="views(<?php echo $r[0]; ?>)">Edit</a></td>
									</tr>
								</table>
								<form name="f3" method="POST" enctype="multipart/form-data">
									<div class="row" style="padding-left: 25px;">
										<div class="form-group">
                                            <label>Skills:-</label>
                                            <label><?php echo $r[15]; ?></label>
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
										<td style="padding-left: 35px;"><a href="#" data-toggle="modal" data-target="#modal-primary-basicinfo"onclick="views(<?php echo $r[0]; ?>)">Edit</a></td>
									</tr>
								</table>
								<form name="f4" method="POST" enctype="multipart/form-data">
									<div class="row" style="padding-left: 25px;">
										<div class="form-group">
                                            <label>Current Place:-</label>
                                             <label><?php echo $r[16]; ?></label>
										</div>
									</div>
									<div class="row" style="padding-left: 25px;">
										<div class="form-group">
											<label>Birthday:-</label>
                                            <label><?php echo $r[9]; ?></label>
                                        </div>
									</div>
									<div class="row" style="padding-left: 25px;">
										<div class="form-group">
                                            <label>Address:-</label>
                                            <label><?php echo $r[17]; ?></label>										
                                        </div>
									</div>
									<div class="row" style="padding-left: 25px;">
										<div class="form-group">
											<label>Gender:-</label>
                                            <label><?php echo $r[3]; ?></label>
                                        </div>
									</div>
									<div class="row" style="padding-left: 25px;">
										<div class="form-group">
											<label>Maritial Status:-</label>
                                            <label><?php echo $r[18]; ?></label>
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
										<td style="padding-left: 35px;"><a href="#"data-toggle="modal" data-target="#modal-primary-work"onclick="views(<?php echo $r[0]; ?>)">Edit</a></td>
									</tr>
								</table>
								<form name="f5" method="POST" enctype="multipart/form-data">
									<div class="row" style="padding-left: 25px;">
										<div class="form-group">
                                            <label>Current Job Status:-</label>
                                            <label><?php echo $r[19]; ?></label>
										</div>
									</div>
									<div class="row" style="padding-left: 25px;">
                                        <div class="form-group">
                                            <label>Job Company Name:-</label>
                                            <label><?php echo $r[20]; ?></label>
                                        </div>
                                    </div>
                                    <div class="row" style="padding-left: 25px;">
                                        <div class="form-group">
                                            <label>Position Name:-</label>
                                            <label><?php echo $r[21]; ?></label>
                                        </div>
                                    </div>
                                    <div class="row" style="padding-left: 25px;">
                                        <div class="form-group">
                                            <label>Number of Years:-</label>
                                            <label><?php echo $r[22]; ?></label>
                                        </div>
                                    </div>
                                    <div class="row" style="padding-left: 25px;">
                                        <div class="form-group">
                                            <label>City:-</label>
                                            <label><?php echo $r[23]; ?></label>
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
										<td style="padding-left: 130px;"><a href="#"data-toggle="modal" data-target="#modal-primary-summery"onclick="views(<?php echo $r[0]; ?>)">Edit</a></td>
									</tr>
								</table>
								<form name="f6" method="POST" enctype="multipart/form-data">
									<div class="row" style="padding-left: 25px;">
										<div class="form-group">
                                            <label><?php echo $r[24]; ?></label>
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

<!--------contact info start----->
<div class="modal fade" id="modal-primary-contact">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Contact Information</h4>
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
                    <input type="hidden" name="txtid" id="txtid" />
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
              <h4 class="modal-title">Expertise</h4>
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
              <h4 class="modal-title">Basic Information</h4>
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
              <h4 class="modal-title">Work Experience</h4>
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
              <h4 class="modal-title">Summery</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form name="modalf6" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12 ">
                            <div class="form-group">
                                <label></label>
                                <textarea type="textarea" class="form-control" id="txtsummery"name="txtsummery">
                                </textarea>
                                <label>Note:-Use summary to share what you do, your achievements or the opportunities you're looking for.</label>
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
<?php include_once('footer.php'); ?>
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

  function views(sid)
  {
    
   $.ajax({
     url: 'fetch.php',
     type: 'POST',
     data: {id:sid,pname:"student_profile"},
     success:function(data){
      var d = jQuery.parseJSON(data);
       document.getElementById('txtgender').value=d.gender;
        document.getElementById('txtbirthday').value=d.dob;

       document.getElementById('txtmobile').value=d.mobile;
      document.getElementById('txtemail').value=d.email;
      document.getElementById('txtskill').value=d.skill;
      document.getElementById('txtcurrentplace').value=d.current_place;
      document.getElementById('txtaddress').value=d.address;
      document.getElementById('txtmaritial').value=d.maritial_status;
      document.getElementById('txtcurrentjob').value=d.current_job_status;
      document.getElementById('txtjobcompany').value=d.job_company_name;
      document.getElementById('txtposition').value=d.position_name;
      document.getElementById('txtyear').value=d.no.of_year;
      document.getElementById('txtcity').value=d.city;
      document.getElementById('txtsummery').value=d.summery;

      document.getElementById("sid").value=d.s_id;
      
     }
   })
   
    
    
  }
</script>


</body>

<!-- Mirrored from codeboxr.net/themedemo/unialumni/html/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2020 11:37:29 GMT -->
</html>
