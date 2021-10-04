<?php
session_start();
if (($_SESSION['sname'] == '') || (!isset($_SESSION['sname'])))
 {
    header('location:student_login.php');
}
else
{
//session_start();
require_once('connection.php');
$id=$_SESSION['sid'];
if(isset($_POST['b1']))
{
    $name=$_POST['txtname'];
    $address=$_POST['txtaddress'];
    $mobile=$_POST['txtmobile'];
    $email=$_POST['txtemail'];
    $apply_for=$_POST['txtapply'];
    $nationality=$_POST['txtnationality'];
    $gender=$_POST['r1'];
    $dob=$_POST['txtdob'];
    $maritial=$_POST['s1'];
    $pob=$_POST['txtpob'];

    $year_ssc=$_POST['txtyear_ssc'];
        if ($year_ssc != '') 
        {
            $ssc=$_POST['txtssc']='yes';
        }
        else
        {
            $ssc=$_POST['txtssc']='no';
        }

        $subject_ssc=$_POST['txtsubject_ssc'];
        $ssc_school=$_POST['txtssc_school'];

        $year_hsc=$_POST['txtyear_hsc'];
        if ($year_hsc != '') 
        {
            $hsc=$_POST['txthsc']='yes';
        }
        else
        {
            $hsc=$_POST['txthsc']='no';
        }
        $subject_hsc=$_POST['txtsubject_hsc'];
        $hsc_school=$_POST['txthsc_school'];
        

        $year_graduate=$_POST['txtyear_graduation'];
        if ($year_graduate != '') 
        {
            $graduate=$_POST['txtgraduate']='yes';
        }
        else
        {
            $graduate=$_POST['txtgraduate']='no';
        }
        $subject_graduate=$_POST['txtsubject_graduation'];
        $graduate_school=$_POST['txtgraduation_school'];
        

        $year_pg=$_POST['txtyear_pg'];
        if ($year_pg != '') 
        {
            $pg=$_POST['txtpg']='yes';
        }
        else
        {
            $pg=$_POST['txtpg']='no';
        }
        $subject_pg=$_POST['txtsubject_pg'];
        $pg_school=$_POST['txtpg_school'];

    /*$pg=$_POST['txtpg'];
    $graguation=$_POST['txtgraduation'];
    $hsc=$_POST['txthsc'];
    $ssc=$_POST['txtssc'];*/
    $add01_year=$_POST['txtadd01_year'];
    $add01_info=$_POST['txtadd01_info'];
    $add02_year=$_POST['txtadd02_year'];
    $add02_info=$_POST['txtadd02_info'];
    $add03_year=$_POST['txtadd03_year'];
    $add03_info=$_POST['txtadd03_info'];

    $photo=$_FILES['txtphoto']['name'];
    $tempname=$_FILES['txtphoto']['tmp_name'];
    move_uploaded_file($tempname, "admin/image/cv_biodata/$photo");

//echo "INSERT INTO `bio_cv`(`s_id`,`user_image`, `name`, `address`, `mobile`, `email`, `apply_for`, `nationality`, `gender`, `marital_status`, `dob`, `place_of_birth`,`year_ssc`,`year_hsc`,`year_graduate`,`year_pg`, `pg`, `graduation`, `hsc`, `ssc`,`subject_ssc`,`subject_hsc`,`subject_graduate`,`subject_pg`,`ssc_school`,`hsc_school`,`graduate_university`,`pg_university`, `add01_year`, `add01_info`, `add02_year`, `add02_info`, `add03_year`, `add03_info`) VALUES ('$id','$photo','$name','$address','$mobile','$email','$apply_for','$nationality','$gender','$maritial','$dob','$pob','year_ssc','year_hsc','year_graduate','year_pg','$pg','$graduate','$hsc','$ssc','$subject_ssc','$subject_hsc','$subject_graduate','$subject_pg','$ssc_school','$hsc_school','$graduate_school','$pg_school','$add01_year','$add01_info','$add02_year','$add02_info','$add03_year','$add03_info')";


    $sql=mysqli_query($cn,"INSERT INTO `bio_cv`(`s_id`,`user_image`, `name`, `address`, `mobile`, `email`, `apply_for`, `nationality`, `gender`, `marital_status`, `dob`, `place_of_birth`,`year_ssc`,`year_hsc`,`year_graduate`,`year_pg`, `pg`, `graduation`, `hsc`, `ssc`,`subject_ssc`,`subject_hsc`,`subject_graduate`,`subject_pg`,`ssc_school`,`hsc_school`,`graduate_university`,`pg_university`, `add01_year`, `add01_info`, `add02_year`, `add02_info`, `add03_year`, `add03_info`) VALUES ('$id','$photo','$name','$address','$mobile','$email','$apply_for','$nationality','$gender','$maritial','$dob','$pob','$year_ssc','$year_hsc','$year_graduate','$year_pg','$pg','$graduate','$hsc','$ssc','$subject_ssc','$subject_hsc','$subject_graduate','$subject_pg','$ssc_school','$hsc_school','$graduate_school','$pg_school','$add01_year','$add01_info','$add02_year','$add02_info','$add03_year','$add03_info')");


    echo '<script language="type/javascript">';
    echo 'alert("record insert successfully sent")';  //not showing an alert box.
    echo '</script>';
    header('location:preview_cv.php');
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
                        <h1 class="h2">Curriculum Vitae Form</h1>
                        <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need</p>
                        <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let's See</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Register Page Content Start ==-->
    <section id="page-content-wrap">
        <div class="register-page-wrapper section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="register-page-inner">
                            <div class="col-lg-10 m-auto">
                                <div class="register-form-content">
                                    <div class="row">
                                        <!-- Signin Area Content Start -->
                                        <!--<div class="col-lg-4 col-md-6 text-center">
                                            <div class="display-table">
                                                <div class="display-table-cell">
                                                    <div class="signin-area-wrap">-->
                                                        <!--<h4>Already a Member?</h4>
                                                        <div class="sign-form">
                                                            <form action="https://codeboxr.net/themedemo/unialumni/html/index.html">
                                                                <input type="text" placeholder="Enter your ID">
                                                                <input type="password" placeholder="Password">
                                                                <button type="submit" class="btn btn-reg">Login</button>
                                                            </form>
                                                        </div>-->
                                                        <!--<img src="assets/img/committee/commitee-2.jpg" alt="committee"  height="400" width="300" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                                        <!-- Signin Area Content End -->

                                        <!-- Regsiter Form Area Start -->
                                        <div class="col-lg-12 col-md-12 ml-auto">
                                            <div class="register-form-wrap">
                                                <h3 align="center">Curriculum Vitae Form</h3>
                                                <div class="register-form">
                                                    <form name="f1" method="POST" id="form" enctype="multipart/form-data">
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Name & Surname</label>
                                                                    <input type="text" class="form-control" name="txtname" id="txtname"placeholder="" />
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-6">
                                                                <div class="gender form-group">
                                                                    <label class="g-name d-block">Address</label>
                                                                    <textarea type="textbox" class="form-control" id="txtaddress"name="txtaddress" placeholder=""></textarea>
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">

                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Mobile</label>
                                                                    <input type="text" class="form-control" id="txtmobile"name="txtmobile" placeholder="">
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Email</label>
                                                                    <input type="text" class="form-control" id="txtemail" name="txtemail" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">

                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Apply For</label>
                                                                    <input type="text" class="form-control" id="txtapply"name="txtapply" placeholder="">
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="">Nationality</label>
                                                                    <input type="text" class="form-control" id="txtnationality" name="txtnationality" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">

                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="">Date Of Birth</label>
                                                                    <input type="date" class="form-control" id="txtdob" name="txtdob" placeholder="">
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-4">
                                                                <div class="form-group">
                                                                        <label for="">Maritial Status</label><br>
                                                                        <select class="" name="s1" id="s1">
                                                                          <option>Married</option>
                                                                          <option>Unmarried</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class="row">

                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="">Place Of Birth</label>
                                                                    <input type="text" class="form-control" id="txtpob" name="txtpob" placeholder="">
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-6">
                                                                <div class="gender form-group">
                                                                    <label class="g-name d-block">Gender</label>
                                                                    
                                                                        <input type="radio" id="r1" name="r1" value="male" checked="checked"  />
                                                                        Male
                                                                    
                                                                    
                                                                        <input type="radio" id="r1" name="r1" value="female"  />
                                                                        Female
                                                                   
                                                                </div>
                                                            </div>
                                                            
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-12 col-sm-12">
                                                                <div class="form-group">
                                                                        <label for="">Educational Qualification</label>
                                                                        <div class="directory-table table-responsive">
                                                                            <table class="table table-bordered">
                                                                                <tr>
                                                                                    
                                                                                        <th scope="col"style="font-style: oblique;">Year Of Passing</th>
                                                                                        <th scope="col"style="font-style: oblique;">Qualification</th>
                                                                                        <th scope="col"style="font-style: oblique;">Specialisation or Subjects</th>
                                                                                        <th scope="col"style="font-style: oblique;">School/College/University/Institute</th>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>
                                                                                            <input type="text" class="form-control" id="txtyear_ssc" name="txtyear_ssc" placeholder=""> 
                                                                                         </td>
                                                                                        <td name="txtssc" id="txtssc">  
                                                                                            SSC/10th/ 
                                                                                        </td>
                                                                                        <td>
                                                                                            <input type="text" class="form-control" id="txtsubject_ssc" name="txtsubject_ssc" placeholder=""> 
                                                                                         </td>
                                                                                         <td>
                                                                                            <input type="text" class="form-control" id="txtssc_school" name="txtssc_school" placeholder=""> 
                                                                                         </td>
                                                                                    
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>
                                                                                            <input type="text" class="form-control" id="txtyear_hsc" name="txtyear_hsc" placeholder=""> 
                                                                                         </td>
                                                                                        <td name="txthsc" id="txthsc">  
                                                                                            HSC/12th/ 
                                                                                        </td>
                                                                                        <td>
                                                                                            <input type="text" class="form-control" id="txtsubject_hsc" name="txtsubject_hsc" placeholder=""> 
                                                                                         </td>
                                                                                         <td>
                                                                                            <input type="text" class="form-control" id="txthsc_school" name="txthsc_school" placeholder=""> 
                                                                                         </td>
                                                                                    
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>
                                                                                            <input type="text" class="form-control" id="txtyear_graduation" name="txtyear_graduation" placeholder=""> 
                                                                                         </td>
                                                                                        <td name="txtgraduate" id="txtgraduate">  
                                                                                            Graduation 
                                                                                        </td>
                                                                                        <td>
                                                                                            <input type="text" class="form-control" id="txtsubject_graduation" name="txtsubject_graduation" placeholder=""> 
                                                                                         </td>
                                                                                         <td>
                                                                                            <input type="text" class="form-control" id="txtgraduation_school" name="txtgraduation_school" placeholder=""> 
                                                                                         </td>
                                                                                    
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>
                                                                                            <input type="text" class="form-control" id="txtyear_pg" name="txtyear_pg" placeholder=""> 
                                                                                         </td>
                                                                                        <td name="txtpg" id="txtpg">  
                                                                                            Post Graduation 
                                                                                        </td>
                                                                                        <td>
                                                                                            <input type="text" class="form-control" id="txtsubject_pg" name="txtsubject_pg" placeholder=""> 
                                                                                         </td>
                                                                                         <td>
                                                                                            <input type="text" class="form-control" id="txtpg_school" name="txtpg_school" placeholder=""> 
                                                                                         </td>
                                                                                    
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!--<div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                        <label for="">Graduation</label>
                                                                        <input type="text" class="form-control" id="txtgraduation" name="txtgraduation" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="">HSC</label>
                                                                        <input type="text" class="form-control" id="txthsc" name="txthsc" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="">SSC</label>
                                                                        <input type="text" class="form-control" id="txtssc" name="txtssc" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class=" form-group">
                                                                    <div class="form-group">
                                                                        <label for="">Post Graguation</label>
                                                                        <input type="text" class="form-control" id="txtpg" name="txtpg" placeholder="">
                                                                    </div>
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>-->
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="">Add01_year</label>
                                                                        <input type="text" class="form-control" id="txtadd01_year" name="txtadd01_year" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="">Add01_info</label>
                                                                        <input type="text" class="form-control" id="txtadd01_info" name="txtadd01_info" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="">Add02_year</label>
                                                                        <input type="text" class="form-control" id="txtadd02_year" name="txtadd02_year" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="">Add02_info</label>
                                                                        <input type="text" class="form-control" id="txtadd02_info" name="txtadd02_info" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="">Add03_year</label>
                                                                        <input type="text" class="form-control" id="txtadd03_year" name="txtadd03_year" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="">Add03_info</label>
                                                                        <input type="text" class="form-control" id="txtadd03_info" name="txtadd03_info" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-4">
                                                                <div class="form-group file-input">
                                                                    <label ><i class="fa fa-upload"></i>Upload Your Photo</label>
                                                                    <input type="file" name="txtphoto" id="txtphoto" class="custom-file" for="customfile" />
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>         
                                                        <div class="form-group" align="center">
                                                            <input type="submit" class="btn btn-reg" value="Submit" name="b1" id="b1">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Regsiter Form Area End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Register Page Content End ==-->
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

<!-- custom js: custom scripts for theme style switcher for demo purpose  -->
<script id="switcherhandle" src="assets/switcher/switcher.js"></script>

<script type="text/javascript">
    $(document).ready(function(){

        $('#form').submit(function(e){

           // e.preventDefault();

            var name = $('#txtname').val();
            var apply_for = $('#txtapply').val();
            var Nationality = $('#txtnationality').val();
            var dob = $('#txtdob').va();
            var place_of_birth = $('#txtpob')
            var email = $('#txtemail').val();
            var address = $('#txtaddress').val();
            var mobile = $('#txtmobile').val();

            var year_ssc = $('#txtyear_ssc').val();
            var year_hsc = $('#txtyear_hsc').val();
            var year_graduate = $('#txtyear_graduation').val();
            var year_pg = $('#txtyear_pg').val();

            var subject_ssc = $('#txtsubject_ssc').val();
            var subject_hsc = $('#txtsubject_hsc').val();
            var subject_graduate = $('#txtsubject_graduation').val();
            var subject_pg = $('#txtsubject_pg').val();

            var ssc_school = $('#txtssc_school').val();
            var hsc_school = $('#txthsc_school').val();
            var graduate_school = $('#txtgraduation_school').val();
            var pg_school = $('#txtpg_school').val();

            var add01_year = $('#txtadd01_year').val();
            var add01_info = $('#txtadd01_info').val();
            var add02_year = $('#txtadd02_year').val();
            var add02_info = $('#txtadd02_info').val();
            var add03_year = $('#txtadd03_year').val();
            var add03_info = $('#txtadd03_info').val();
    
            
            var photo = $('#txtphoto').val();

            $(".error").remove();

            if(name.length == ''){
                $('#txtname').after('<span class="error text-danger font-weight-bold"> Please fill the Name field');
                return false;
            }
            if(name.length <=2 || name.length >20){
                $('#txtname').after('<span class="error text-danger font-weight-bold"> Name length must be between 2 and 20  ');
                return false;
            }

            // if(apply_for.length == ''){
            //     $('#txtapply').after('<span class="error text-danger font-weight-bold"> Please fill the Apply field');
            //     return false;
            // }

            // if(dob.length == ''){
            //     $('#txtdob').after('<span class="error text-danger font-weight-bold"> Please fill the Date Of Birth field');
            //     return false;
            // }
            // if(nationality.length == ''){
            //     $('#txtnationality').after('<span class="error text-danger font-weight-bold"> Please fill the Nationality field');
            //     return false;
            // }
            // if(place_of_birth.length == ''){
            //     $('#txtpob').after('<span class="error text-danger font-weight-bold"> Please fill the Place Of Birth field');
            //     return false;
            // }


            // if(email.length == ''){
            //     $('#txtemail').after('<span class="error text-danger font-weight-bold"> Please fill the Email field');
            //     return false;
            // }
            // if(email.indexOf('@') <= 0 )
            // {
            //   $('#txtemail').after('<span class="error text-danger font-weight-bold">@ Invalid Position');
            //   return false;
            // }
            // if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.'))
            // {
            //   $('#txtemail').after('<span class="error text-danger font-weight-bold"> . Invalid Position');
            //   return false;
            // }

            // if(address.length == ''){
            //     $('#txtaddress').after('<span class="error text-danger font-weight-bold"> Please fill the Address field');
            //     return false;
            // }

            // if(mobile.length == ''){
            //     $('#txtmobile').after('<span class="error text-danger font-weight-bold"> Please fill the Mobile Number field');
            //     return false;
            // }
            // if(mobile.length != 10){
            //     $('#txtmobile').after('<span class="error text-danger font-weight-bold">  Mobile Number must be 10 digits only');
            //     return false;
            // }
            // // if(isNan(mobile)){
            // //     $('#txtmobile').after('<span class="error text-danger font-weight-bold">  User must write digits only not characters');
            // //     return false;
            // // }


            // if(year_ssc.length == ''){
            //     $('#txtyear_ssc').after('<span class="error text-danger font-weight-bold"> Please fill the SSC Year field');
            //     return false;
            // }
            // //  if(isNan(year_ssc)){
            // //     $('#txtyear_ssc').after('<span class="error text-danger font-weight-bold">  User must write digits only not characters');
            // //     return false;
            // // }

            // if(year_hsc.length == ''){
            //     $('#txtyear_hsc').after('<span class="error text-danger font-weight-bold"> Please fill the HSC Year field');
            //     return false;
            // }
            // // if(isNan(year_hsc)){
            // //     $('#txtyear_hsc').after('<span class="error text-danger font-weight-bold">  User must write digits only not characters');
            // //     return false;
            // // }

            // if(year_graduate.length == ''){
            //     $('#txtyear_graduation').after('<span class="error text-danger font-weight-bold"> Please fill the Graduation Year field');
            //     return false;
            // }
            //  if(isNan(year_graduate)){
            //     $('#txtyear_graduation').after('<span class="error text-danger font-weight-bold">  User must write digits only not characters');
            //     return false;
            // }

            // if(year_pg.length == ''){
            //     $('#txtyear_pg').after('<span class="error text-danger font-weight-bold"> Please fill the POST Graduation Year field');
            //     return false;
            // }
            // //  if(isNan(year_pg)){
            // //     $('#txtyear_pg').after('<span class="error text-danger font-weight-bold">  User must write digits only not characters');
            // //     return false;
            // // }

            

            // if(subject_ssc.length == ''){
            //     $('#txtsubject_ssc').after('<span class="error text-danger font-weight-bold"> Please fill the Subject field');
            //     return false;
            // }
            // if(subject_hsc.length == ''){
            //     $('#txtsubject_hsc').after('<span class="error text-danger font-weight-bold"> Please fill the Subject field');
            //     return false;
            // }
            // if(subject_graduate.length == ''){
            //     $('#txtsubject_graduation').after('<span class="error text-danger font-weight-bold"> Please fill the Subject field');
            //     return false;
            // }
            // if(subject_pg.length == ''){
            //     $('#txtsubject_pg').after('<span class="error text-danger font-weight-bold"> Please fill the Subject field');
            //     return false;
            // }

            // if(ssc_school.length == ''){
            //     $('#txtssc_school').after('<span class="error text-danger font-weight-bold"> Please fill the School/University Name field');
            //     return false;
            // }
            // if(hsc_school.length == ''){
            //     $('#txthsc_school').after('<span class="error text-danger font-weight-bold"> Please fill the School/University Name field');
            //     return false;
            // }
            // if(graduate_school.length == ''){
            //     $('#txtgraduation_school').after('<span class="error text-danger font-weight-bold"> Please fill the School/University Name field');
            //     return false;
            // }
            // if(pg_school.length == ''){
            //     $('#txtpg_school').after('<span class="error text-danger font-weight-bold"> Please fill the School/University Name field');
            //     return false;
            // }

            

            // if(add01_year.length == ''){
            //     $('#txtadd01_year').after('<span class="error text-danger font-weight-bold"> Please fill the Additional Information Year field');
            //     return false;
            // }

            // if(add01_info.length == ''){
            //     $('#txtadd01_info').after('<span class="error text-danger font-weight-bold"> Please fill the Additional Information field');
            //     return false;
            // }

            // if(add02_year.length == ''){
            //     $('#txtadd02_year').after('<span class="error text-danger font-weight-bold"> Please fill the Additional Information Year field');
            //     return false;
            // }

            // if(add02_info.length == ''){
            //     $('#txtadd02_info').after('<span class="error text-danger font-weight-bold"> Please fill the Additional Information field');
            //     return false;
            // }

            // if(add03_year.length == ''){
            //     $('#txtadd03_year').after('<span class="error text-danger font-weight-bold"> Please fill the Additional Information Year field');
            //     return false;
            // }

            // if(add03_info.length == ''){
            //     $('#txtadd03_info').after('<span class="error text-danger font-weight-bold"> Please fill the Additional Information field');
            //     return false;
            // }
            
            // if(photo.length == ''){
            //     $('#txtphoto').after('<span class="error text-danger font-weight-bold"> Please Upload a Photo');
            //     return false;
            // }

        })
    })
</script>

</body>

<!-- Mirrored from codeboxr.net/themedemo/unialumni/html/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2020 11:37:29 GMT -->
</html>
